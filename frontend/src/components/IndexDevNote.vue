<template>
  <div>
    <v-card></v-card>
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
      .get("/api/devIndex")
      .then((res) => {
        console.log(res.data);
        this.notes = res.data;
      })
      .catch((err) => {
        console.log(err);
        alert("실패");
      });
  },
};
</script>
