<template>
  <div>
    <div class="container">
      <h1>{{ myMessage.toUpperCase() }}</h1>
      <div class="row">
        <div class="col-6">
          <template>
            <PostCard
              v-for="post in postsList"
              :key="post.id"
              :post="post"
            ></PostCard>
          </template>
        </div>
      </div>
    </div>
  </div>
</template>

        

<script>
import axios from "axios";
import PostCard from "../components/PostCard.vue";

export default {
  components: { PostCard },
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
