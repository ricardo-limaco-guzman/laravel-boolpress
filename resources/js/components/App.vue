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
              <li><a href="/register">Registrazione</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5 text-center">
      <h3>ancora nessun contenuto</h3>
    </section>

  </section>
</template>

<script>
export default {
  name: "App",
  data() {
    return {
      msg: "Benvenuto",
    };
  },
};
</script>

