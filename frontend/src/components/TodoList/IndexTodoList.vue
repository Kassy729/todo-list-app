<template>
  <div>
    <v-card v-for="todo in todos" :key="todo.id">
      {{ todo.todo }}
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
      .get("/api/show")
      .then((res) => {
        this.todos = res.data;
        console.log(res.data);
      })
      .catch((err) => {
        console.log(err);
        alert("실패");
      });
  },
};
</script>
