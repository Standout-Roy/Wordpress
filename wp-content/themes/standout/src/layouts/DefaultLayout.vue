<template>
  <AppNavbar />
  <RouterView />
</template>

<script>
import AppNavbar from "@components/AppNavbar.vue";
import { RouterView } from "vue-router";
export default {
  components: {
    AppNavbar,
    RouterView,
  },
};
</script>
