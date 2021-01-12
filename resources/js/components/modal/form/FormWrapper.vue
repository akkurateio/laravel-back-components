<template>
    <div ref="modal" class="akk-modal akk-modal-medium akk-modal-company">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h5>{{ title }}</h5>
            <a href="#" class="close" @click.stop="$emit('close', false)">
                <Icon name="Close" />
            </a>
        </div>
        <!--        <SmoothReflow>-->
        <ul class="nav nav-tabs mb-3" v-if="!createOnly">
            <li class="nav-item">
                <a
                    class="nav-link"
                    href="#"
                    @click="tab = 'existing'"
                    :class="tab === 'existing' && 'active'"
                    >{{ tabs.existing }}</a
                >
            </li>
            <li class="nav-item">
                <a
                    class="nav-link"
                    href="#"
                    @click="tab = 'new'"
                    :class="tab === 'new' && 'active'"
                    >{{ tabs.new }}</a
                >
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane" :class="tab === 'existing' && 'active'">
                <Autocomplete
                    :placeholder="placeholderAutocomplete"
                    :api="api"
                    :params="params"
                    v-model="selected"
                >
                    <template v-slot:default="{ option }">
                        <slot name="option" :option="option"></slot>
                    </template>
                </Autocomplete>
                <div class="form-group d-flex justify-content-between">
                    <button
                        @click="$emit('close', false)"
                        class="btn btn-sm btn-outline-secondary"
                    >
                        Annuler
                    </button>
                    <button
                        @click="selected && $emit('close', selected)"
                        class="btn btn-sm btn-primary"
                        type="submit"
                        :disabled="!selected"
                    >
                        Sélectionner
                    </button>
                </div>
            </div>
            <div class="tab-pane" :class="tab === 'new' && 'active'">
                <ValidationObserver v-slot="{ invalid }">
                    <form @submit.prevent="$emit('submit')">
                        <div class="mb-4">
                            <slot name="form"></slot>
                        </div>
                        <div
                            class="form-group d-flex justify-content-between mb-0"
                        >
                            <button
                                @click.stop="close"
                                class="btn btn-outline-secondary text-xs px-3 py-2"
                            >
                                Annuler
                            </button>
                            <button
                                class="btn btn-primary font-bold text-xs px-3 py-2 shadow-sm"
                                type="submit"
                                :disabled="invalid"
                            >
                                {{
                                    createOnly
                                        ? 'Enregistrer'
                                        : 'Enregistrer & sélectionner'
                                }}
                            </button>
                        </div>
                    </form>
                </ValidationObserver>
            </div>
        </div>
        <!--        </SmoothReflow>-->
    </div>
</template>
<script>
// import SmoothReflow from '../../SmoothReflow';
import Autocomplete from './Autocomplete';
import { ValidationObserver } from 'vee-validate';
export default {
    components: {
        // SmoothReflow,
        ValidationObserver,
        Autocomplete,
    },
    props: [
        'title',
        'createOnly',
        'tabs',
        'api',
        'placeholderAutocomplete',
        'params',
    ],
    data() {
        return {
            tab: this.createOnly ? 'new' : 'existing',
            selected: null,
        };
    },
    methods: {
        close() {
            this.$emit('close', false);
        },
        input(option) {
            this.selected = option;
        }
    },
};
</script>
