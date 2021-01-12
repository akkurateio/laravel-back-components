<template>
    <transition name="slide">
        <div class="sidenav__overlay" @click="$parent.closePanel()">
        </div>
    </transition>
</template>
<script>
export default {
};
</script>
<style scoped>
.slide-enter-active,
.slide-leave-active {
    transition: all 0.2s ease-in-out;
}
.slide-enter,
.slide-leave-to {
    opacity: 0;
}
</style>
