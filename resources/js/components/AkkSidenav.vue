<template>
  <div class="h-100" :class="withLabel ? 'sidenav-extended' : ''">
    <div class="h-100 d-flex flex-column">
      <div class="sidenav__brand">
        <a :href="dashboardUrl">
          <img
              :src="theme"
              :alt="appName"
              class="img-fluid"
              width="32"
          />
        </a>
        <span v-if="withLabel" class="ml-2 text-white font-bold">
                    {{ appName }}
                </span>
      </div>
      <div class="sidenav__primary">
        <sidenav-item
            v-for="(item, index) in primaryItems"
            :key="index"
            :item-props="item"
            :config="{ icon: true, label: withLabel, useTooltips: useTooltips }"
        />
      </div>
      <div class="sidenav__secondary">
        <sidenav-item
            v-for="(item, index) in secondaryItems"
            :key="index"
            :item-props="item"
            :config="{ icon: true, label: withLabel, useTooltips: useTooltips }"
        />
      </div>
    </div>
    <sidenav-panel v-if="panel" :panel-props="panel"></sidenav-panel>
    <sidenav-overlay v-if="panel"></sidenav-overlay>
  </div>
</template>
<script>
import SidenavPanel from './sidenav/SidenavPanel.vue';
import SidenavOverlay from './sidenav/SidenavOverlay.vue';
import SidenavItem from './sidenav/SidenavItem.vue';

export default {
  components: {SidenavOverlay, SidenavPanel, SidenavItem},
  props: ['baseUrl', 'parentProps', 'preferences'],
  data() {
    return {
      panel: null,
    };
  },
  mounted() {
    // console.log(this.parentProps);
  },
  methods: {
    selectPanel(panelId) {
      console.log('ClickOnPanel', panelId);

      this.panel = this.panels[panelId];
    },
    closePanel() {
      console.log('ClosePanel');

      this.panel = null;
    },
  },
  computed: {
    primaryItems() {
      return this.parentProps.sidenav.primary;
    },
    secondaryItems() {
      return this.parentProps.sidenav.secondary;
    },
    panels() {
      return this.parentProps.panels;
    },
    appName() {
      return this.parentProps.app ?? '';
    },
    theme() {
      if (!this.parentProps.theme) {
        return '/images/brands/default/logo.svg';
      } else {
        return '/images/brands/' + this.parentProps.theme + '/logo.svg';
      }
    },
    dashboardUrl() {
      if (this.baseUrl) {
        return this.baseUrl;
      }

      return '/';
    },
    useTooltips() {
      if (!this.preferences) {
        return false;
      }

      return this.preferences.use_tool_tips;
    },
    withLabel() {
      if (!this.preferences) {
        return false;
      }

      return this.preferences.navbar_is_extended;
    },
  },
};
</script>
