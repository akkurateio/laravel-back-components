<template>
    <div ref="modal" class="akk-modal akk-modal-timeout">
        <div class="d-flex align-items-center justify-content-between my-4">
            <div class="text-lg font-medium">{{ title }}</div>
        </div>
        <div style="flex:1" class="mb-3">
            <div v-if="body.trim() !== ''" v-html="body"></div>
        </div>
        <div class="d-flex align-items-center justify-content-center">
            <button @click="close(true)" type="button" class="btn btn-light">
                Me reconnecter
            </button>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        console.dir(this.$refs.modal.offsetHeight);
    },
    computed: {
        title() {
            return this.$store.state.modal.title;
        },
        body() {
            return this.$store.state.modal.body;
        },
    },
    methods: {
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
        title() {
            this.$store.commit(
                'modal/setHeight',
                this.$refs.modal.offsetHeight
            );
        },
    },
};
</script>
<style scoped>
.modal-default {
    display: flex;
    flex-direction: column;
    width: 400px;
    background: #fff;
    border-radius: 3px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
    padding: 15px;
    z-index: 101;
}
</style>
