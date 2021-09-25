<template>
  <v-container>
    <Menu />
    <create-dev-note />
  </v-container>
</template>

<script>
import CreateDevNote from "../components/DevNote/CreateDevNote.vue";

import Menu from "../components/Menu.vue";

export default {
  components: { Menu, CreateDevNote },
};
</script>
