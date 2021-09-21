<template>
  <v-container>
    <v-form ref="form" @submit.prevent="onsubmitForm">
      <v-row>
        <v-text-field placeholder="todo" v-model="todos" style="width: 200px" />
      </v-row>
      <v-btn type="submit">작성</v-btn>
    </v-form>
    <index-todo-list />
  </v-container>
</template>

<script>
import axios from "axios";
import IndexTodoList from "../components/IndexTodoList.vue";

export default {
  components: { IndexTodoList },

  data() {
    return {
      todos: [],
    };
  },

  methods: {
    onsubmitForm() {
      const form = new FormData();
      form.append("content", this.content);
      axios
        .post("api/store", form)
        .then((res) => {
          console.log(res.data);
        })
        .catch((err) => {
          alert(err);
        });
    },
  },
};
</script>
