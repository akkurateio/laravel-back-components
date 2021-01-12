<template>
    <transition name="slide">
        <div class="sidenav__panel">
            <div class="akk-mt-unit d-flex align-items-center">
                <div
                    class="icon-box icon white cursor-pointer"
                    @click="$parent.closePanel()"
                >
                    <Icon name="ArrowLeft" size="24" />
                </div>
                <div class="text-xl">{{ panel.label }}</div>
            </div>
            <div class="p-3 akk-pl-4" v-if="panel.items.length > 0">
                <sidenav-item
                    v-for="(item, index) in panel.items"
                    :key="index"
                    :item-props="item"
                    :config="{ icon: false, label: true }"
                />
            </div>
        </div>
    </transition>
</template>
<script>
import SidenavItem from './SidenavItem.vue';
export default {
    components: { SidenavItem },
    props: ['panelProps'],
    data() {
        return {};
    },
    computed: {
        panel() {
            return this.panelProps;
        },
        account() {
            return this.$store.state.account.entity;
        },
    },
};
</script>
<style scoped>
.slide-enter-active,
.slide-leave-active {
    transition: all 0.2s ease-in-out;
}
.slide-enter,
.slide-leave-to {
    transform: translateX(-100%);
}
</style>
