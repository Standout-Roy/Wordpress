<template>
  <div>
    <RouterLink :to="{ name: 'home' }"> Home </RouterLink>
    <RouterLink :to="{ name: 'about' }"> About </RouterLink>
  </div>
</template>

<script>
import { RouterLink } from "vue-router";
export default {
  name: "AppNavigation",
  components: {
    RouterLink,
  },
};
</script>
