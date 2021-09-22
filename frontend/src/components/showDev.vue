<template>
  <div>
    <v-card>
      <v-card-text>제목 : {{ notes.title }}</v-card-text>
      <v-card-text>내용 : {{ notes.content }}</v-card-text>
    </v-card>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      notes: [],
    };
  },
  mounted() {
    axios
      .get("/api/showDev/" + this.$route.params.dev_postId)
      .then((res) => {
        this.notes = res.data;
        console.log(this.notes.content);
        console.log(this.notes.title);

        // console.log(this.$route.params.dev_postId);
      })
      .catch((err) => {
        console.log(err);
        alert("실패");
      });
  },
};
</script>
