<template>
  <header id="page">
    <h1 class="header-title">
      {{ page.title ? page.title.rendered : $route.params.type }}
    </h1>
  </header>
  <main>
    <div class="container">
      <div class="row">
        <div class="col-8">
          <FrontPagePost v-for="post in posts" :key="post.id" :post="post" />
        </div>
        <div class="col-4">
          <FrontPageTags />
        </div>
      </div>
    </div>
  </main>
</template>

<script>
import FrontPagePost from "@components/FrontPagePost.vue";
import FrontPageTags from "@components/FrontPageTags.vue";
import axios from "axios";
export default {
  components: {
    FrontPagePost,
    FrontPageTags,
  },

  data() {
    return {
      posts: [],
      page: {},
    };
  },

  methods: {
    getPosts() {
      return axios
        .get("http://localhost/wp-json/wp/v2/posts")
        .then((res) => {
          this.posts = res.data;
        })
        .catch((err) => err);
    },

    getPage() {
      axios
        .get(
          `http://localhost/wp-json/wp/v2/pages?slug=${this.$route.params.type}`
        )
        .then((res) => {
          if (res.data.length) this.page = res.data[0];
        });
    },
  },

  created() {
    this.getPosts();
    this.getPage();
  },
};
</script>

<style></style>
