<template>
  <div>
    <v-card>
      <v-card-text>제목 : {{ note.title }}</v-card-text>
      <v-card-text>내용 : {{ note.content }}</v-card-text>
      <v-img
        v-if="note.image"
        class="white--text align-end"
        width="30%"
        height="30%"
        :src="'http://localhost:8000/storage/images/' + note.image"
      ></v-img>
    </v-card>
    <router-link to="/index">목록보기</router-link>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      note: [],
    };
  },
  mounted() {
    axios
      .get("/api/showDev/" + this.$route.params.dev_postId)
      .then((res) => {
        this.note = res.data;
        // console.log(this.notes.content);
        // console.log(this.notes.title);

        // console.log(this.$route.params.dev_postId);
      })
      .catch((err) => {
        console.log(err);
        alert("실패");
      });
  },
};
</script>
