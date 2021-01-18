import standard from 'figlet/importable-fonts/Standard.js';
import figlet from 'figlet';
import Vue from 'vue';
import Vuex from 'vuex';
import * as plugins from './plugins';
import * as components from './components';
import * as filters from './filters';
import * as storeModules from './stores';
import AkkToast from "akkurate-toast";
import AkkurateModalTs from 'akkurate-modal';
import * as icons from './icons';

window.axios = require('axios');

(async () => {

    figlet.parseFont('Standard', standard);
    figlet.text(
        process.env.MIX_APP_NAME,
        {
            font: 'Standard',
        },
        function (err, data) {
            console.log(data);
        }
    );

    // Installation des plugins exporté dans le fichier plugins.js
    await Object.entries(plugins).forEach(([_, plugin]) => {
        Vue.use(plugin);
    });

    // Installation des components exporté dans le fichier components.js
    Object.entries(components).forEach(([name, component]) => {
        Vue.component(name, component);
    });

    // Installation des components exporté dans le fichier filters.js
    Object.entries(filters).forEach(([name, filter]) => {
        Vue.filter(name, filter);
    });

    // Installation des modules store exporté dans store.js
    const modules = {};
    Object.entries(storeModules).forEach(([_, module]) => {
        Object.assign(modules, module);
    });
    Vue.use(Vuex);
    window.store = new Vuex.Store({
        modules,
    });

    Vue.use(AkkToast);

    Vue.use(AkkurateModalTs, {
        store,
    });

    // Création du component Icon et import des icons depuis icons.js
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
    new Vue({
        store,
        el: '#app',
    });

})();
