<template>
    <div></div>
    <!--    <div class="initer">-->
    <!--        <pre class="text-3xs">{{keysPressed}}</pre>-->
    <!--    </div>-->
</template>

<script>
export default {
    name: 'AkkIniter',
    props: ['userProps', 'accountProps', 'shortcutsProps'],
    created() {
        // console.log('user', this.user);
        // document.addEventListener('keydown', this.launchShortcuts);
        // document.addEventListener('keyup', (event) => {
        //     delete this.keysPressed[event.key];
        // });
    },
    data() {
        return {
            keysPressed: {},
        };
    },
    methods: {
        init() {
            this.$store.dispatch('account/init', {
                entity: this.account,
                user: this.user,
            });
        },
        launchShortcuts(event) {
            this.keysPressed[event.key] = true;
            // console.log(this.keysPressed, event.code);

            for (let [key, shortcut] of Object.entries(this.shortcuts)) {
                // console.log(key, shortcut);
                if (
                    this.keysPressed[shortcut.shortcuts.primary] &&
                    event.code == shortcut.shortcuts.keyCode
                ) {
                    // alert('Lancement du raccourci ' + shortcut.label);

                    this.$store.dispatch('modal/confirm', {
                        modalComponent: shortcut.form,
                        props: {
                            key: key,
                            context: 'createOnly',
                            title: shortcut.modalTitle,
                            mask: true,
                            accountUuid: this.$store.state.account.entity.uuid,
                        },
                    });
                }
            }

            if (
                this.keysPressed['Control'] &&
                this.keysPressed['Alt'] &&
                event.code == 'KeyQ'
            ) {
                this.$root.$emit('changeAccount');
            }
        },
    },
    computed: {
        user() {
            return JSON.parse(this.userProps);
        },
        account() {
            return JSON.parse(this.accountProps);
        },
        shortcuts() {
            return JSON.parse(this.shortcutsProps);
        },
    },
    mounted() {
        this.init();
    },
};
</script>

<style>
.initer {
    position: fixed;
    right: 0;
    bottom: 0;
    width: 320px;
    z-index: 10000;
    background-color: #fff;
    padding: 0.5rem;
}
</style>
