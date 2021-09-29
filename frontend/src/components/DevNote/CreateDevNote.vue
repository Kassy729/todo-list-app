<template>
  <v-container>
    <div>
      <h1>DevNote작성</h1>
      <v-form ref="form" @submit.prevent="onsubmitForm">
        <v-row>
          <v-text-field placeholder="제목" v-model="title" style="width: 300px">
          </v-text-field>
        </v-row>
        <v-row>
          <v-text-field
            placeholder="내용"
            v-model="content"
            style="width: 300px"
          >
          </v-text-field>
        </v-row>
        <v-file-input
          v-model="files"
          color="deep-purple accent-4"
          counter
          label="File input"
          multiple
          placeholder="selectFile"
          prepend-icon="mdi-paperclip"
          outlined
          :show-size="1000"
        >
          <template v-slot:selection="{ index, text }">
            <v-chip
              v-if="index < 2"
              color="deep-purple accent-4"
              dark
              label
              small
            >
              {{ text }}
            </v-chip>

            <span
              v-else-if="index === 2"
              class="text-overline grey--text text--darken-3 mx-2"
            >
              +{{ files.length - 2 }} File(s)
            </span>
          </template>
        </v-file-input>
        <v-btn type="submit">작성</v-btn>
      </v-form>
      <router-link to="/index">목록보기</router-link>
    </div>
  </v-container>
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
          window.location.href = "http://localhost:8080/index";
        })
        .catch((err) => {
          console.log(err);
          alert("실패");
        });
    },
    selectFile(file) {
      this.image = file;
    },
  },
};
</script>
