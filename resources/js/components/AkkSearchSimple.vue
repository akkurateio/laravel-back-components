<template>
    <form id="searchForm" :action="action" method="POST" class="header__searchbar d-flex flex-grow-1 align-items-center">
        <slot name="csrf"></slot>
        <div class="searchbar-icon icon-box icon gray">
            <Icon name="Search"></Icon>
        </div>
        <input
                id="searchInput"
                type="text"
                name="query"
                class="form-control bg-transparent text-white radius-none border-0"
                v-model="search.keyword"
                :placeholder="search.placeholder"
                autocomplete="off" />
        <div class="searchbar-reset icon-box icon gray cursor-pointer" @click="reset()" v-if="search.keyword">
            <Icon name="Close"></Icon>
        </div>
    </form>
</template>

<script>
export default {
    name: "AkkSearchSimple",
    props: ['action', 'placeholder', 'keyword'],
    data() {
        return {
            search: {
                keyword: null,
                placeholder: 'Recherche par mot-clé...',
            }
        }
    },
    mounted() {
        this.init();
    },
    methods: {
        init() {
            if(this.keyword) {
                this.search.keyword = this.keyword;
            }
            if(this.placeholder) {
                this.search.placeholder = this.placeholder;
            }
        },
        reset() {
            this.search.keyword = null;
        }
    }
}
</script>

<style scoped>

</style>
