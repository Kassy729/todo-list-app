<template>
  <v-container>
    <h1>Todo-List</h1>
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

export default {
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
          console.log(res);
        })
        .catch((err) => {
          alert(err);
        });
    },
  },
};
</script>
