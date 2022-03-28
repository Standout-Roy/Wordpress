<template>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <RouterLink :to="{ name: 'home' }" class="navbar-brand">
        Playground
      </RouterLink>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <RouterLink
              :to="{ name: 'home' }"
              active-class="active"
              class="nav-link"
            >
              Home
            </RouterLink>
          </li>
          <li class="nav-item">
            <RouterLink
              :to="{ name: 'page', params: { slug: 'about' } }"
              active-class="active"
              class="nav-link"
            >
              About
            </RouterLink>
          </li>
          <li class="nav-item">
            <RouterLink
              :to="{ name: 'archive', params: { type: 'posts' } }"
              active-class="active"
              class="nav-link"
            >
              Posts
            </RouterLink>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
import { RouterLink } from "vue-router";
export default {
  name: "AppNavbar",
  components: {
    RouterLink,
  },
};
</script>
