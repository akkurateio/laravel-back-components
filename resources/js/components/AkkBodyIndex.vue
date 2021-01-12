<template>
    <div
            class="view"
            :class="
            filtersList && switchFilters
                ? 'view-leftbody view-with-header-and-footer'
                : 'view-body view-with-header-and-footer'
        "
    >
        <div class="view__left" v-if="filtersList && switchFilters">
            <Filters
                    :filters-list="filtersList"
                    @resetFilters="resetFilters"
                    @submitFilters="submitFilters"
            ></Filters>
        </div>
        <div class="view__header bg-gray-100">
            <template v-if="items.length > 0 && !loading">
                <Header
                        :filters-list="filtersList"
                        :switch-filters="switchFilters"
                        :switch-view="switchView"
                        :order-by="orderBy"
                        @refresh="refresh"
                        @toggleFilter="toggleFilter"
                        @toggleView="toggleView"
                        @setOrder="setOrder"
                ></Header>
            </template>
        </div>
        <div class="view__body">
            <template v-if="!loading">
                <template v-if="items && items.length > 0">
                    <div class="list-group" :class="computedCollectionClass">
                        <div
                                class="list-group-item bg-transparent"
                                v-for="item in items"
                        >
                            <slot
                                    name="item"
                                    :item="item"
                                    :formatDate="formatDate"
                                    :humanDate="humanDate"
                            ></slot>
                        </div>
                    </div>
                </template>
                <div
                        v-else
                        class="h-100 d-flex align-items-center justify-content-center"
                >
                    <div>Aucun résultat.</div>
                </div>
            </template>
            <template v-else>
                <div
                        class="h-100 d-flex align-items-center justify-content-center"
                >
                    <div class="spinner-border" role="status">
                        <span class="sr-only">Chargement en cours...</span>
                    </div>
                </div>
            </template>
        </div>
        <div class="view__footer bg-gray-100">
            <Paginate
                    v-if="meta && !loading"
                    :links="meta.links"
                    @requestPage="requestPage($event)"
            ></Paginate>
            <div
                    v-if="meta && !loading"
                    class="indicator ml-auto mr-3 text-center border-left border-gray-200 text-2xs text-muted"
            >
                Page {{ this.meta.current_page }} / {{ this.meta.last_page }}
            </div>
            <!--            <button-->
            <!--                    type="button"-->
            <!--                    class="btn p-0 icon-box icon primary"-->
            <!--                    @click="help()"-->
            <!--            >-->
            <!--                <Icon name="Help"></Icon>-->
            <!--            </button>-->
            <a
                    :href="routes.create"
                    class="h-100 btn btn-sm radius-none akk-w-unit btn-primary d-flex align-items-center justify-content-center"
                    :class="loading ? 'ml-auto' : ''"
            >
                <Icon name="Add"></Icon>
            </a>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    import { getUuidOnUrl, objectToUrl } from '../utils/tools';
    import VueScrollTo from 'vue-scrollto';
    import dayjs from 'dayjs';
    import relativeTime from 'dayjs/plugin/relativeTime';
    import duration from 'dayjs/plugin/duration';
    import Paginate from './index/Paginate';
    import Filters from './index/Filters';
    import Header from './index/Header';

    dayjs.locale('fr');
    dayjs.extend(relativeTime);
    dayjs.extend(duration);

    export default {
        name: 'BodyIndex',
        components: {
            Paginate,
            Filters,
            Header,
        },
        props: [
            'routes',
            'includes',
            'identifier',
            'orderByDefault',
            'filtersList',
        ],
        data() {
            return {
                loading: true,
                items: [],
                meta: null,
                currentRoute: null,
                paginate: {
                    current: 1,
                    min: 1,
                    max: 1,
                },
                switchFilters: true,
                switchView: 'LIST',
                filters: null,
                orderBy: null,
            };
        },
        created() {
            this.init();
        },
        methods: {
            async init() {
                this.loading = true;

                this.currentRoute = this.routes.index;

                if (this.orderByDefault) {
                    this.orderBy = this.orderByDefault;
                } else {
                    this.orderBy = 'created_at';
                }

                await this.callApiModel();

                this.loading = false;
            },
            async refresh() {
                await this.callApiModel();
            },
            async callApiModel() {
                this.loading = true;

                let filters = {
                    'page[number]': this.paginate.current,
                    sort: this.orderBy,
                };

                if (this.includes) {
                    filters['include'] = this.includes;
                }

                if (this.filtersList) {
                    this.filtersList.forEach((field) => {
                        if (field.name != 'keyword') {
                            if (
                                this.filters &&
                                this.filters[field.name] != '' &&
                                this.filters[field.name] != null
                            ) {
                                filters[
                                'filter[' + field.name + ']'
                                    ] = this.filters[field.name];
                            }
                        } else {
                            if (this.filters && this.filters[field.name] != '') {
                                field.allowedToSearch.forEach((allowed) => {
                                    filters[
                                    'filter[' + allowed + ']'
                                        ] = this.filters[field.name];
                                });
                            }
                        }
                    });
                }

                const { data } = await axios.get(
                    `${this.currentRoute}?${objectToUrl(filters)}`
                );

                this.items = data.data.items;
                this.meta = data.meta;
                this.paginate = this.computedPaginate;

                this.loading = false;

            },
            async setOrder(orderBy) {
                this.currentRoute = this.routes.index;
                this.paginate = {
                    current: 1,
                    min: 1,
                    max: 1,
                };
                this.orderBy = orderBy;

                VueScrollTo.scrollTo('body', 200);
                await this.callApiModel();
            },
            async requestPage(newPage) {
                if (newPage == 'first') {
                    this.paginate.current = 1;
                } else if (newPage == 'last') {
                    this.paginate.current = this.paginate.max;
                } else if (newPage == 'next') {
                    this.paginate.current = this.computedNextPage;
                } else if (newPage == 'previous') {
                    this.paginate.current = this.computedPreviousPage;
                } else {
                    this.paginate.current = newPage;
                }

                VueScrollTo.scrollTo('body', 200);
                await this.callApiModel();
            },
            async submitFilters(filters) {
                this.filters = filters;
                console.log('Validation des filtres', filters);

                await this.callApiModel();
            },
            async resetFilters() {
                this.filters = null;
                console.log('Réinitialisation des filtres', this.filters);

                await this.callApiModel();
            },
            toggleFilter() {
                this.switchFilters = !this.switchFilters;
            },
            toggleView() {
                this.switchView = this.switchView == 'LIST' ? 'GRID' : 'LIST';
            },
            formatDate(datetime) {
                let date = dayjs(datetime);

                return date.format('DD/MM/YYYY');
            },
            humanDate(datetime) {
                let date = dayjs(datetime);

                return date.fromNow();
            },
        },
        computed: {
            computedPaginate() {
                return {
                    current: this.meta.current_page,
                    min: 1,
                    max: this.meta.last_page,
                };
            },
            computedPreviousPage() {
                return this.paginate.current > 1 ? this.paginate.current - 1 : 1;
            },
            computedNextPage() {
                return this.paginate.current < this.paginate.max
                    ? this.paginate.current + 1
                    : this.paginate.max;
            },
            computedCollectionClass() {
                return this.switchView == 'LIST' ? 'list-group-flush' : 'list-group-grid';
            }
        },
    };
</script>

<style scoped></style>
