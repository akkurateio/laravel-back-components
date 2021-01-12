<template>
    <div class="sidebar-group" :class="wrapperClass">
        <div
                class="sidebar-group-header d-flex align-items-center"
                :class="headerWrapperClass"
        >
            <div class="icon-box" @click="toggle()">
                <slot name="icon"></slot>
            </div>
            <div class="font-bold mr-auto" @click="toggle()">{{ title }}</div>
            <slot name="actions"></slot>
        </div>
        <div
                class="sidebar-group-body"
                :class="bodyWrapperClass"
                v-if="isShown"
        >
            <slot name="container"></slot>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'SideGroup',
        props: [
            'title',
            'icons',
            'options',
            'wrapperClass',
            'headerWrapperClass',
            'bodyWrapperClass',
        ],
        data() {
            return {
                isShown: true,
            };
        },
        methods: {
            toggle() {
                this.isShown = !this.isShown;
            },
        },
    };
</script>

<style lang="scss">
    .fade-enter-active,
    .fade-leave-active {
        transition: all 0.35s;
    }

    .fade-enter,
    .fade-leave-to {
        opacity: 0;
    }
</style>
