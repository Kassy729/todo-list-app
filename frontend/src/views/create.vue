<template>
  <v-container>
    <Menu />
    <div>
      <create-dev-note />
    </div>
  </v-container>
</template>

<script>
import CreateDevNote from "../components/CreateDevNote.vue";

import Menu from "../components/Menu.vue";

export default {
  components: { Menu, CreateDevNote },
};
</script>
