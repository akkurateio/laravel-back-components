<template>
    <form method="POST" :action="route" ref="formDelete">
        <slot name="csrf"></slot>
        <a :class="wrapperClass" href="#" @click="remove()">
            <template v-if="label">{{ label }}</template>
            <template v-else>
                <Icon name="Copy"></Icon>
            </template>
        </a>
    </form>
</template>

<script>
export default {
    name: 'DuplicateConfirm',
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
