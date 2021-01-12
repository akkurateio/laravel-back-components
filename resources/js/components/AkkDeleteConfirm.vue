<template>
    <form method="POST" :action="route" ref="formDelete">
        <input type="hidden" name="_method" value="DELETE" />
        <slot name="csrf"></slot>
        <a :class="wrapperClass" href="#" @click="remove()">
            <template v-if="label">{{ label }}</template>
            <template v-else>
                <Icon name="Delete"></Icon>
            </template>
        </a>
    </form>
</template>

<script>
export default {
    name: 'DeleteConfirm',
    props: ['wrapperClass', 'modalComponent', 'route', 'label', 'icon', 'sentence'],
    methods: {
        async remove() {
            const response = await this.$modal.show(
                () => import(`./modal/${this.modalComponent}`),
                {
                    sentence: this.sentence,
                }
            );

            if (!response) {
                return;
            }

            // console.log('On peut supprimer');
            this.$refs.formDelete.submit();
        },
    },
};
</script>

<style scoped></style>
