<template>
  <RouterView />
</template>

<script>
import { RouterView } from "vue-router";
export default {
  name: "RootComponent",

  component: {
    RouterView,
  },
};
</script>
