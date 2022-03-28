<template>
  <header id="post">
    <h1 class="header-title">{{ post.title ? post.title.rendered : null }}</h1>
  </header>
  <main>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div
            class="content"
            v-html="post.content ? post.content.rendered : null"
          />
        </div>
      </div>
    </div>
  </main>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      post: {},
    };
  },

  methods: {
    getPost() {
      axios
        .get(
          `http://localhost/wp-json/wp/v2/posts?slug=${this.$route.params.slug}`
        )
        .then((res) => {
          this.post = res.data[0];
        });
    },
  },

  created() {
    this.getPost();
  },
};
</script>

<style></style>
