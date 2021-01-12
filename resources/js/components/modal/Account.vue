<template>
    <div ref="modal" class="akk-modal akk-modal-full akk-modal-primary">
        <button
            @click="close(false)"
            type="button"
            class="close close-white"
            data-dismiss="modal"
        >
            <Icon name="Close" />
            <div class="close-label">Fermer</div>
        </button>
        <div class="vh-100 d-flex align-items-center">
            <div class="container">
                <div class="text-4xl font-medium mb-4">Changer de compte</div>

                <div>
                    <input
                        type="search"
                        @input="search"
                        class="form-control form-control-lg mb-4"
                        placeholder="Rechercher par mot-clé…"
                    />

                    <div v-if="this.results">
                        <div class="font-medium text-lg mb-2">
                            Résultats de votre recherche
                        </div>
                        <div class="row no-gutters">
                            <div
                                class="col-12 col-sm-6"
                                v-for="item of results"
                                :key="item.uuid"
                            >
                                <a
                                    :href="'/switch/' + item.slug"
                                    class="entity entity-account"
                                    target="_blank"
                                >
                                    <div>
                                        <div>{{ item.name }}</div>
                                        <div>{{ item.registry_number }}</div>
                                    </div>
                                    <div class="icon white">
                                        <Icon name="Chevron-right" />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div v-else>
                        <div class="font-medium text-xl mb-2">
                            Dernières consultations
                        </div>
                        <div class="row no-gutters">
                            <div
                                class="col-12 col-sm-6"
                                v-for="item of recent"
                                :key="item.uuid"
                            >
                                <a
                                    :href="'/switch/' + item.uuid"
                                    class="entity entity-account"
                                    target="_blank"
                                >
                                    <div>
                                        <div>{{ item.name }}</div>
                                        <div>{{ item.registry_number }}</div>
                                    </div>
                                    <div class="icon white">
                                        <Icon name="Chevron-right" />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import accountsService from '../../../admin/services/accounts.service';
import debounce from 'lodash/debounce';
export default {
    name: 'modalAccount',
    props: ['module', 'body'],
    data() {
        return {
            loading: false,
            keywords: '',
            results: null,
            recent: null,
        };
    },
    created() {
        this.init();

        document.addEventListener('keyup', (event) => {
            if (event.key == 'Escape') {
                this.close(null);
            }
        });
    },
    methods: {
        init() {
            this.getRescents();
        },
        getRescents() {
            const params = {
                'filter[is_active]': true,
                orderBy: 'updated_at',
                'page[size]': 20,
            };
            accountsService
                .getAccounts(params)
                .then((res) => (this.recent = res.data.data.items));
        },
        search: debounce(function (e) {
            const { value } = e.target;
            const params = {
                'filter[is_active]': true,
                orderBy: 'updated_at',
                'page[size]': 10,
                'filter[search]': value,
            };
            accountsService
                .getAccounts(params)
                .then((res) => (this.results = res.data.data.items));
        }, 350),
        close(value) {
            this.$emit('close', value);
        },
    },
    watch: {
        body() {
            this.$store.commit(
                'modal/setHeight',
                this.$refs.modal.offsetHeight
            );
        },
    },
};
</script>
