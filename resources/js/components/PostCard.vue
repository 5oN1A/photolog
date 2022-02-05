<template>
  <div>
    <h1>Culooo</h1>
    <h2>{{ post.title }}</h2>
    <h3>{{ post.user.name }}</h3>
  </div>
</template>

<script>
export default {
  name: "PostCard",
  props: {
    post: {},
  },
};
</script>

<style>
</style>