<template>
  <section class="col-4">
    <div class="card mb-3">
      <img :src="post.thumb" class="card-img-top" alt="..." />
      <div class="card-body">
        <h5 class="card-title">{{ post.title }}</h5>
        <p class="card-text">
          <small class="text-muted">{{ post.subtitle }}</small>
        </p>
        <!-- <p class="card-text pt-3" v-html="post.text.slice(0, 200)"></p> -->
        <p class="card-text pt-2">
          <small class="text-muted">written by: {{ post.user.name }}</small>
        </p>
        <p class="card-text">
          <small class="text-muted">category: {{ post.category.name }}</small>
        </p>
      </div>
    </div>
  </section>
</template>




<script>
export default {
  name: "Post",
  props: {
    post: {
      type: Object,
      required: true,
    },
    category: {
      type: Object,
      required: true,
    },
  },
};
</script>


<style scoped>
.card-img-top {
  height: 300px;
  object-fit: cover;
}
</style>