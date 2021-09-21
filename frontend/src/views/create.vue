<template>
  <v-container>
    <todo-list></todo-list>
    <create-todo-list></create-todo-list>
  </v-container>
</template>

<script>
import TodoList from "../components/TodoList.vue";
import CreateTodoList from "../components/CreateTodoList.vue";

export default {
  components: { TodoList, CreateTodoList },
};
</script>
