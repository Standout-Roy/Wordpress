<template>
  <div class="card mb-4">
    <div class="card-body">
      <h2 class="card-title">{{ post.title.rendered }}</h2>
      <div class="card-text" v-html="post.excerpt.rendered" />
      <RouterLink
        :to="{ name: 'single', params: { slug: post.slug } }"
        class="btn btn-primary"
      >
        Go somewhere
      </RouterLink>
    </div>
  </div>
</template>

<script>
import { RouterLink } from "vue-router";
export default {
  components: {
    RouterLink,
  },
  props: {
    post: {
      type: Object,
      default() {
        return {};
      },
    },
  },
};
</script>
