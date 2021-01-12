<template>
    <div>
        <dropdown>
            <button
                class="btn btn-sm btn-outline-neutral dropdown-toggle text-left text-dark mb-2"
            >
                {{ config.period[period] }}
            </button>
            <template #items>
                <DropdownItem
                    :key="index"
                    v-for="(analytic, index) in analytics"
                >
                    <a
                        class="dropdown-item text-dark text-2xs"
                        @click="selectPeriod(index)"
                        >{{ config.period[index] }}
                    </a>
                </DropdownItem>
            </template>
        </dropdown>
        <div
            class="row align-items-center mb-4"
            v-for="(kpi, index) in analytics[period]"
            :key="index"
        >
            <div class="col-6 d-flex align-items-start">
                <div class="text-3xl font-bold">{{ kpi.figure }}</div>
                <div class="" v-if="kpi.trend == 'up'">↗</div>
                <div class="" v-else>↘</div>
            </div>
            <div class="col-6">
                <div class="text-lg">{{ config.labels[kpi.label] }}</div>
                <div class="text-2xs">{{ kpi.insight }}</div>
            </div>
            <div class="col-12">
                <trend
                    :data="kpi.data"
                    :gradient="['#999']"
                    stroke-width="2"
                    :padding="0"
                    auto-draw
                    smooth
                ></trend>
            </div>
        </div>
        <div v-if="analytics[period]">
            <a
                :href="analytics[period][0].url"
                target="_blank"
                class="btn text-xs text-primary px-0"
                >Google Analytics ↗</a
            >
        </div>
    </div>
</template>
<script>
import Trend from 'vuetrend';
import Dropdown from 'akkurate-back-components-ts/dist/akk-dropdown';
import DropdownItem from 'akkurate-back-components-ts/dist/akk-dropdown-item';
export default {
    props: ['propData'],
    components: {
        Dropdown,
        DropdownItem,
        Trend,
    },
    data() {
        return {
            period: 'month',
            config: {
                period: {
                    today: "Aujourd'hui",
                    yesterday: 'Hier',
                    week: '7 derniers jours',
                    month: '30 derniers jours',
                },
                labels: {
                    Users: 'Utilisateurs',
                    Pageviews: 'Pages vues',
                },
            },
        };
    },
    methods: {
        selectPeriod(period) {
            this.period = period;
        },
    },
    computed: {
        analytics() {
            return JSON.parse(this.propData);
        },
    },
};
</script>
<style>
.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.5s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
    opacity: 0;
}
</style>
