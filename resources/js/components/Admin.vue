<template>
  <v-app id="inspire">
    <v-navigation-drawer v-model="drawer" app clipped>

      <Sidebar></Sidebar>

    </v-navigation-drawer>

    <v-app-bar app clipped-left>
      <v-app-bar-nav-icon @click.stop="drawer = !drawer" />
      <v-toolbar-title>Application</v-toolbar-title>
    </v-app-bar>

    <v-content>
      <v-container class="fill-height" fluid>
        <v-row align="center" justify="center">
          <v-flex shrink>
            
          <router-view></router-view>

          </v-flex>
        </v-row>
      </v-container>
    </v-content>

    <v-footer app>
      <span>&copy; 2020</span>
    </v-footer>
  </v-app>
</template>

<script>

  import Sidebar from './_sidebar';

  export default {

    components: {Sidebar},

    data: () => ({
      drawer: null,
    }),

    // props: ["user"],

    created () {
      this.$vuetify.theme.dark = true
    },
  };
</script>
