<template>
    <div class="switch switch-module">
        <div
            class="akk-h-unit d-flex align-items-center justify-content-between"
            @click="toggleModule"
        >
            <div>
                <div class="text-3xs font-bold text-uppercase text-white-50">
                    {{ module.package }}
                </div>
                <div class="text-lg font-medium text-white">
                    {{ module.util }}
                </div>
            </div>
            <i class="icon white">
                <Icon name="ChevronDown" />
            </i>
        </div>
        <ul class="nav flex-column module-options pt-0" v-if="display">
            <!--            {{ module.options }}-->
            <li class="nav-item" v-for="option in module.options" :key="option">
                <a class="nav-link text-white" href="#" v-if="option.menu">{{
                    option.label
                }}</a>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props: ['moduleProps'],
    data() {
        return {
            display: false,
        };
    },
    methods: {
        toggleModule() {
            this.display = !this.display;
        },
    },
    computed: {
        module() {
            return JSON.parse(this.moduleProps);
        },
    },
    mounted() {},
};
</script>
