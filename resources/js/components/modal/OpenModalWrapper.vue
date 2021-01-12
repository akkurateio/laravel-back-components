<template>
    <component :is="modalComponent" v-bind:props="props" v-bind:icon="icon"></component>
</template>
<script>
export default {
    props: ['icon', 'modalComponent', 'props'],
};
</script>
