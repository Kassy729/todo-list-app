<template>
  <div>
    <v-card v-for="todo in todos" :key="todo.id">
      <v-list-item-content>
        {{ todo.content }}
      </v-list-item-content>
    </v-card>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      todos: [],
    };
  },
  mounted() {
    axios
      .get("api/index")
      .then((res) => {
        console.log(res.data);
        this.todos = res.data;
      })
      .catch((err) => {
        console.log(err);
        alert("실패");
      });
  },
};
</script>
