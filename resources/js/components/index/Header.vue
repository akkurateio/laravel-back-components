<template>
    <div class="d-flex align-items-center justify-content-between">
        <ul class="nav nav-tabs mr-auto" id="headerIndexTabs" role="tablist">
            <li class="nav-item">
                <a
                    href="#all"
                    id="all-tab"
                    aria-controls="all"
                    aria-selected="true"
                    class="nav-link"
                    :class="orderBy == 'title' ? 'active' : ''"
                    data-toggle="tab"
                    role="tab"
                    @click="$emit('setOrder', 'title')"
                    >Toutes les entrées</a
                >
            </li>
            <li class="nav-item">
                <a
                    href="#lastupdated"
                    id="lastupdated-tab"
                    aria-controls="lastupdated"
                    aria-selected="true"
                    class="nav-link"
                    :class="orderBy == '-updated_at' ? 'active' : ''"
                    data-toggle="tab"
                    role="tab"
                    @click="$emit('setOrder', '-updated_at')"
                    >Dernières modifications</a
                >
            </li>
            <li class="nav-item">
                <a
                    href="#lastcreated"
                    id="lastcreated-tab"
                    aria-controls="lastcreated"
                    aria-selected="true"
                    class="nav-link"
                    :class="orderBy == '-created_at' ? 'active' : ''"
                    data-toggle="tab"
                    role="tab"
                    @click="$emit('setOrder', '-created_at')"
                    >Dernières créations</a
                >
            </li>
        </ul>

        <button
            type="button"
            class="btn icon-box icon rounded-0"
            v-if="filtersList"
            @click="$emit('toggleFilter')"
            :class="switchFilters ? 'primary' : 'gray'"
        >
            <Icon name="Filter"></Icon>
        </button>
        <button
            type="button"
            class="btn icon-box icon primary rounded-0"
            @click="$emit('toggleView')"
        >
            <Icon :name="switchView == 'LIST' ? 'Table' : 'Grid'"></Icon>
        </button>
        <button
            type="button"
            class="btn icon-box icon gray rounded-0"
            @click="$emit('refresh')"
        >
            <Icon name="Renew"></Icon>
        </button>
    </div>
</template>

<script>
export default {
    name: 'Header',
    props: ['filtersList', 'orderBy', 'switchFilters', 'switchView'],
    data() {
        return {
            loading: true,
        };
    },
    created() {
        this.init();
    },
    methods: {
        init() {
        },
    },
};
</script>

<style scoped></style>
