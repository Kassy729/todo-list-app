<template>
  <v-container>
    <v-card class="mx-auto overflow-hidden" height="400">
      <v-app-bar color="deep-purple" dark>
        <v-app-bar-nav-icon @click="drawer = true"></v-app-bar-nav-icon>

        <v-toolbar-title>Title</v-toolbar-title>
      </v-app-bar>

      <v-navigation-drawer v-model="drawer" absolute temporary>
        <v-list nav dense>
          <v-list-item-group
            v-model="group"
            active-class="deep-purple--text text--accent-4"
          >
            <v-list-item>
              <v-list-item-icon>
                <v-icon>mdi-home</v-icon>
              </v-list-item-icon>
              <v-list-item-title>Home</v-list-item-title>
            </v-list-item>
            <v-list-item>
              <v-list-item-icon>
                <v-icon>mdi-home</v-icon>
              </v-list-item-icon>
              <v-list-item-title>DevNote작성</v-list-item-title>
            </v-list-item>
            <v-list-item>
              <v-list-item-icon>
                <v-icon>mdi-home</v-icon>
              </v-list-item-icon>
              <v-list-item-title>TodoList</v-list-item-title>
            </v-list-item>
          </v-list-item-group>
        </v-list>
      </v-navigation-drawer>
      <create-dev-note />
    </v-card>
  </v-container>
</template>

<script>
import CreateDevNote from "../components/DevNote/CreateDevNote.vue";

export default {
  components: { CreateDevNote },
  data: () => ({
    drawer: false,
    group: null,
  }),
};
</script>
