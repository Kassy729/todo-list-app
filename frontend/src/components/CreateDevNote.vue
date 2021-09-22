<template>
  <div>
    <h1>DevNote작성</h1>
    <v-card>
      <v-form ref="form" @submit.prevent="onsubmitForm">
        <v-row>
          <v-text-field placeholder="제목" v-model="title"> </v-text-field>
        </v-row>
        <v-row>
          <v-text-field placeholder="내용" v-model="content"> </v-text-field>
        </v-row>
        <v-file-input label="File input" enctype="multipart/form-data">
        </v-file-input>
        <v-btn type="submit">작성</v-btn>
      </v-form>
    </v-card>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      title: "",
      content: "",
      image: "",
    };
  },

  methods: {
    onsubmitForm() {
      const form = new FormData();
      form.append("title", this.title);
      form.append("content", this.content);
      form.append("image", this.image);
      axios
        .post("/api/devStore", form)
        .then((res) => {
          console.log(res);
        })
        .catch((err) => {
          console.log(err);
          alert("실패");
        });
    },
  },
};
</script>
