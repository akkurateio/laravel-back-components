<template>
    <div class="switch switch-account" @click="changeAccount">
        <div v-if="account">
            <div class="text-xs font-medium">{{ account.name }}</div>
            <div class="text-2xs text-white-50">
                {{ user.firstname }} {{ user.lastname }}
            </div>
        </div>
        <i class="icon white">
            <Icon name="ChevronDown" />
        </i>
    </div>
</template>

<script>
import Account from './modal/Account.vue';
export default {
    name: 'AkkSwitchAccount',
    methods: {
        async changeAccount() {
            this.$modal.show(
                () => import(`./modal/Account`)
            );
        },
    },
    computed: {
        user() {
            return this.$store.state.account.user;
        },
        account() {
            return this.$store.state.account.entity;
        },
    },
    mounted() {
        // console.log(this.$modal);
        this.$root.$on('changeAccount', () => {
            this.changeAccount();
        });
    },
};
</script>
