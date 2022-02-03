<template>
  <section>
    <!-- Hero -->
    <section class="_guest-home">
      <div class="_hero-image">
        <!-- Navbar -->
        <div class="_nav-bar">
          <div class="container-fluid d-flex justify-content-between align-items-center">
            <a href="/">
              <img src="/img/logo.png" alt="logo" class="_logo" />
            </a>
            <ul>
              <li><a href="/">Home</a></li>
              <li><a href="/login">Login</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

  <!-- Section Post -->
    <section>
      <div class="bg-primary text-center"><h1 class="text-white fw-bold py-4">Ultimi Post</h1></div>
      <div class="container p-2">
        <div class="row pt-5">

        <Post v-for="post in postsList" :key="post.id" :post="post"></Post>
        </div>
      </div>
    </section>

  </section>
</template>


<script>
import Post from "../components/partials/Post.vue";

export default {
  name: "App",
  components: { Post },
  data() {
    return {
      msg: "Benvenuto",
      postsList: [],
    };
  },
  mounted() {
    window.axios.get("/api/posts").then((resp) => {
      this.postsList = resp.data;
    });
  },
};
</script>

<style scoped>
</style>