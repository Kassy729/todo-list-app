<template>
  <v-container>
    <todo-list></todo-list>
    <v-form ref="form" @submit.prevent="onsubmitForm">
      <v-row>
        <v-text-field
          placeholder="todo"
          v-model="content"
          style="width: 200px"
        ></v-text-field>
      </v-row>
      <v-btn type="submit">작성</v-btn>
    </v-form>
  </v-container>
</template>

<script>
import axios from "axios";
import TodoList from "../components/TodoList.vue";

export default {
  components: { TodoList },
  data() {
    return {
      content: "",
      title: "",
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
