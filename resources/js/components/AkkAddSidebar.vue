<template>
    <button type="button" class="btn icon-box icon primary" @click.stop="modal">
        <Icon name="Add" />
    </button>
</template>
<script>
export default {
    props: ['package', 'model', 'event', 'id', 'modalComponent'],
    methods: {
        async modal() {
            const { modalComponent, model, event, id } = this;
            const item = await this.$modal.show(modalComponent, {
                exclude: this.$store.state[model].items
                    .map((x) => x.id)
                    .join(','),
            });
            if (!item) {
                return;
            }
            await this.$store.dispatch(`${model}/addItem`, {
                item,
                event,
                id,
            });
        },
    },
};
</script>
