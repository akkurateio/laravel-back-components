<template>
    <div
        class="autocomplete"
        @keydown.prevent.up="up"
        @keydown.prevent.down="down"
        @keydown.prevent.enter="enter"
    >
        <input
            @input="search"
            id="addStr1"
            class="form-control mb-3"
            :placeholder="placeholder"
            autocomplete="off"
            type="text"
        />
        <div
            v-if="loading"
            class="d-flex align-items-center justify-content-center"
        >
            <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <div v-else class="autocomplete-items">
            <div
                :key="index"
                v-for="(option, index) of options"
                class="option rounded d-flex align-items-center px-2 py-1"
                :class="[
                    active === index && 'active',
                    selected && selected.id === option.id && 'selected',
                ]"
                @click="select(option)"
                @mousemove="active = index"
            >
                <div
                    v-if="selected && selected.id === option.id"
                    class="icon white"
                >
                    <Icon size="16" name="RadioButtonChecked" />
                </div>
                <div v-else class="icon gray">
                    <Icon size="16" name="RadioButton" />
                </div>

                <div class="ml-2">
                    <slot :option="option"></slot>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import debounce from 'lodash/debounce';

export default {
    props: ['value', 'api', 'params', 'placeholder'],
    data() {
        return {
            active: null,
            loading: false,
            options: [],
        };
    },
    mounted() {
        this.fetchOptions();
    },
    methods: {
        async fetchOptions() {
            const { data } = await axios.get(`${this.api}`, {
                params: {
                    'page[size]': 5,
                    ...this.params,
                },
            });
            this.options = data.data.items;
        },
        search: debounce(async function (e) {
            if (e.target.value.length === 0) {
                this.options = [];
                return;
            }
            if (e.target.value.length <= 2) {
                return;
            }
            const params = {
                ...this.params,
                'filter[search]': e.target.value,
            };
            this.loading = true;
            try {
                const { data } = await axios.get(this.api, { params });
                this.options = data.data.items;
            } catch (e) {
                this.options = [];
            }
            this.loading = false;
        }, 350),
        select(option) {
            this.$emit('input', option);
        },
        up() {
            if (this.active === null) {
                this.active = this.options.length;
                return;
            }
            if (this.active - 1 < 0) {
                return;
            }
            this.active--;
        },
        down() {
            if (this.active === null) {
                this.active = 0;
                return;
            }
            if (this.active + 1 >= this.options.length) {
                return;
            }
            this.active++;
        },
        enter() {
            if (this.active === null) {
                return;
            }
            const option = this.options[this.active];
            if (!option) {
                return;
            }
            this.select(option);
        },
    },
    computed: {
        selected() {
            return this.value;
        },
    },
};
</script>
