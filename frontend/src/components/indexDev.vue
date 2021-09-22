<template>
  <div>
    <v-card v-for="post in posts" :key="post.id">
      <v-list-item-title @click="onClickPost(post.id)">
        제목 : {{ post.title }}
      </v-list-item-title>
    </v-card>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      posts: [],
    };
  },
  mounted() {
    axios
      .get("/api/indexDev")
      .then((res) => {
        this.posts = res.data;
      })
      .catch((err) => {
        console.log(err);
        alert("실패");
      });
  },
  methods: {
    onClickPost(id) {
      this.$router.push({ path: "/show/" + id });
    },
  },
};
</script>
