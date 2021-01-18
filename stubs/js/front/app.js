window.axios = require('axios');

import Vue from 'vue';
import Vuex from 'vuex';

// Installation des plugins exporté dans le fichier plugins.js
import * as plugins from './plugins';
Object.entries(plugins).forEach(([_, plugin]) => {
    Vue.use(plugin);
});

// Installation des components exporté dans le fichier components.js
import * as components from './components';
Object.entries(components).forEach(([name, component]) => {
    Vue.component(name, component);
});

// Installation des components exporté dans le fichier filters.js
import * as filters from './filters';
Object.entries(filters).forEach(([name, filter]) => {
    Vue.filter(name, filter);
});

// Installation des modules store exporté dans store.js
import * as storeModules from './stores';
const modules = {};
Object.entries(storeModules).forEach(([_, module]) => {
    Object.assign(modules, module);
});
Vue.use(Vuex);
window.store = new Vuex.Store({
    modules,
});

// Création du component Icon et import des icons depuis icons.js
import * as icons from './icons';
Vue.component('Icon', {
    components: {
        ...icons,
    },
    props: {
        name: {
            type: String,
            required: true,
        },
        size: {
            type: [String, Number],
            required: false,
            default: 24,
        },
    },
    computed: {
        component() {
            return this.name + this.size;
        },
    },
    template: '<component :is="component"></component>',
});

import VueScrollTo from 'vue-scrollto';
Vue.use(VueScrollTo, {
    container: 'body',
    duration: 500,
    easing: 'ease',
    offset: 0,
    force: true,
    cancelable: false,
    onStart: false,
    onDone: false,
    onCancel: false,
    x: false,
    y: true,
});
new Vue({
    data() {
        return {
            setup: {
                header: {
                    transformPosition: 0,
                },
                backToTop: {
                    transformPosition: 0,
                },
                scrollOptions: {
                    container: 'body',
                },
            },
            scrollPosition: 0,
            backToTop: {
                show: false,
            },
        };
    },
    mounted() {
        // From testing, without a brief timeout, it won't work.
        if (location.hash) {
            setTimeout(() => this.scrollAnchor(location.hash), 1);
        }
        this.setup.header.transformPosition = window.innerHeight;
        this.setup.backToTop.transformPosition = window.innerHeight;
    },
    created: function () {
        window.addEventListener('scroll', this.scrollHandle);
    },
    destroyed: function () {
        window.removeEventListener('scroll', this.scrollHandle);
    },
    methods: {
        scrollHandle() {
            // console.log(e);
            this.scrollPosition = window.pageYOffset;
            if (this.scrollPosition > this.setup.header.transformPosition) {
                this.backToTop.show = true;
            } else {
                this.backToTop.show = false;
            }
        },
        scrollTop() {
            VueScrollTo.scrollTo('#website', 300, this.setup.scrollOptions);
        },
        scrollAnchor(hashbang) {
            VueScrollTo.scrollTo(hashbang, 300);
        },
    },
}).$mount('#website');
