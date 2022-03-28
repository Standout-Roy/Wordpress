<template>
  <header id="front-page">
    <div class="header-image"></div>
    <h1 class="header-title">{{ title }}</h1>
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
import axios from "axios";
import FrontPagePost from "@components/FrontPagePost.vue";
import FrontPageTags from "@components/FrontPageTags.vue";
export default {
  name: "FrontPage",
  components: {
    FrontPagePost,
    FrontPageTags,
  },

  data() {
    return {
      title: "Front page",
      content: "",
      posts: [],
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
  },

  created() {
    this.getPosts();
  },
};
</script>
