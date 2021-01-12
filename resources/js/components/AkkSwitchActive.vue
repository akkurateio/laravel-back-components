<template>
    <div>
        <div
            v-if="object"
            class="toggle"
            :class="object[variable] ? 'toggle-active' : 'toggle-unactive'"
            @click="toggleStatus"
        >
            <span class="text-3xs"></span>
        </div>
        <div v-else class="spinner-grow spinner-grow-sm" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
</template>

<script>
export default {
    props: ['packageName', 'modelName', 'itemProps', 'itemVariable'],
    data() {
        return {
            object: null,
        };
    },
    mounted() {
        this.init();
    },
    methods: {
        init() {
            this.object = this.itemProps;
        },
        async toggleStatus() {
            const newObject = { ...this.object };
            newObject[this.variable] = !newObject[this.variable];

            const { data } = await axios.patch(
                `/api/v1/accounts/${this.account.uuid}/packages/${this.packageName}/${this.modelName}/${newObject.id}`,
                newObject
            );
            this.object = data.data || data;
        },
    },
    computed: {
        item() {
            return this.itemProps;
        },
        account() {
            return this.$store.state.account.entity;
        },
        variable() {
            return this.itemVariable;
        },
    },
};
</script>
