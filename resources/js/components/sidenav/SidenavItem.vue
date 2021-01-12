<template>
    <div v-if="item.type == 'uri'">
        <a
            :href="item.href"
            class="sidenav-item d-flex align-items-center"
            data-toogle="'tooltip'"
            data-placement="right"
            :title="config.useTooltips ? item.label : ''"
        >
            <span class="icon-box icon white" v-if="config.icon">
                <Icon
                    :name="
                        item.icon
                            .split(' ')
                            .map((i) => i.charAt(0).toUpperCase() + i.slice(1))
                            .join('')
                    "
                    size="24"
                ></Icon>
            </span>
            <span
                class="mr-auto"
                :class="config.icon ? 'ml-2' : ''"
                v-if="config.label"
                >{{ item.label }}</span
            >
        </a>
    </div>
    <div v-else-if="item.type == 'panel'">
        <div
            @click="$parent.selectPanel(item.id)"
            class="sidenav-item d-flex align-items-center"
            data-toogle="tooltip"
            data-placement="right"
            :title="config.useTooltips ? item.label : ''"
        >
            <span class="icon-box icon white" v-if="config.icon">
                <Icon :name="item.icon" size="24"></Icon>
            </span>
            <span
                class="mr-auto"
                :class="config.icon ? 'ml-2' : ''"
                v-if="config.label"
                >{{ item.label }}</span
            >
        </div>
    </div>
</template>
<script>
export default {
    name: 'SidenavItem',
    props: ['itemProps', 'config'],
    data() {
        return {};
    },
    computed: {
        item() {
            return this.itemProps;
        },
        account() {
            return this.$store.state.account.entity;
        },
    },
};
</script>
