<template>
    <button
        type="button"
        :class="icon && 'btn icon-box icon primary'"
        @click.stop="modal"
    >
        <Icon v-if="icon" :name="icon" />
        <slot></slot>
    </button>
</template>

<script>
import OpenModalWrapper from './modal/OpenModalWrapper';

export default {
    name: 'AkkOpenModal',
    props: ['icon', 'modalComponent', 'props'],
    methods: {
        async modal() {
            console.log(this.modalComponent);

            const item = await this.$modal.show(OpenModalWrapper,
                {
                    props: this.props,
                    modalComponent: this.modalComponent,
                    icon: this.icon,
                }
            );
            if (!item) {
                return;
            }
        },
    },
};
</script>
