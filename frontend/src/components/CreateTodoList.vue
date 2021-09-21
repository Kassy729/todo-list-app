<template>
  <v-form ref="form" @submit.prevent="addTodo">
    <v-text-field
      placeholder="todo"
      v-model="todo"
      style="width: 200px"
    ></v-text-field>
    <v-btn type="submit">작성</v-btn>
  </v-form>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      todo: "",
    };
  },
  methods: {
    addTodo() {
      const form = new FormData();
      form.append("todo", this.todo);
      axios
        .post("/api/store", form)
        .then((res) => {
          console.log(res.data);
          console.log("성공");
        })
        .catch((err) => {
          alert(err);
          console.log("실패");
        });
    },
  },
};
</script>
