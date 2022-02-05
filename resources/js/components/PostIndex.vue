<template>
  <div>
    <div class="container">
      <h1>{{ myMessage.toUpperCase() }}</h1>
      <ul>
        <li v-for="post in postsList" :key="post.id">{{ post.title }}</li>
      </ul>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      myMessage: "PhotoLog",
      postsList: [],
    };
  },
  methods: {
    getData() {
      axios.get("/api/posts").then((resp) => {
        this.postsList = resp.data;
      });
    },
  },
  mounted() {
    this.getData();
  },
};
</script>
