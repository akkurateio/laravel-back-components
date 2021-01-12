<template>
    <div>
        <div
            class="akk-h-unit d-flex align-items-center justify-content-between"
        >
            <div class="text-lg font-bold ml-3">Filtres</div>
        </div>
        <div class="inner pt-0" v-if="!loading">
            <AkkForm>
                <template v-for="(filter, index) in filtersList">
                    <div
                        :key="index"
                        :class="filter.wrapperClass ? filter.wrapperClass : ''"
                    >
                        <AkkCheckbox
                            v-if="filter.type == 'CHECKBOX'"
                            :label="filter.label"
                            :name="filter.name"
                            :checkboxArr="filter.options"
                            v-model="filters[filter.name]"
                        ></AkkCheckbox>
                        <AkkInput
                            v-if="filter.type == 'INPUT'"
                            :label="filter.label"
                            :placeholder="filter.placeholder"
                            :name="filter.name"
                            type="text"
                            v-model="filters[filter.name]"
                        ></AkkInput>
                        <AkkSelect
                            v-if="filter.type == 'SELECT'"
                            :label="filter.label"
                            :name="filter.name"
                            :options="filter.options"
                            :cancellable="filter.cancellable"
                            v-model="filters[filter.name]"
                        ></AkkSelect>
                    </div>
                </template>
                <div
                    class="d-flex align-items-center justify-content-between mt-3"
                >
                    <button
                        type="button"
                        class="btn btn-outline-secondary text-2xs"
                        @click="reset"
                    >
                        Réinit.
                    </button>
                    <button
                        type="button"
                        class="btn btn-primary text-2xs font-bold"
                        @click="$emit('submitFilters', filters)"
                    >
                        Filtrer les entrées
                    </button>
                </div>
            </AkkForm>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Filters',
    props: ['filtersList'],
    data() {
        return {
            loading: true,
            filters: {},
        };
    },
    created() {
        this.init();
    },
    methods: {
        init() {
            this.loading = true;

            this.filtersList.forEach((field) => {
                this.filters[field.name] = field.defaultValue;
            });

            this.loading = false;
        },
        reset() {
            this.init();

            this.$emit('resetFilters', this.filters);
        },
    },
};
</script>

<style scoped></style>
