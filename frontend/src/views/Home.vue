<template>
  <v-container>
    <todo-List></todo-List>
  </v-container>
</template>

<script>
import TodoList from "../components/TodoList.vue";

export default {
  name: "Todolist",

  components: {
    TodoList,
  },
};
</script>
