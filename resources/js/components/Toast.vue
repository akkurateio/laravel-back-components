<template>
</template>

<script>
export default {
    name: 'toast',
    props: ['propsTitle', 'propsMessage', 'propsType', 'propsTimeout'],
    created() {
        this.$toast(this.propsTitle, this.propsMessage, { timeout: this.propsTimeout, type: this.propsType });
    }
};
</script>
