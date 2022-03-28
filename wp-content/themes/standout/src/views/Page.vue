<template>
  <header id="page">
    <h1 class="header-title">{{ page.title ? page.title.rendered : null }}</h1>
  </header>
  <main>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div
            class="content"
            v-html="page.content ? page.content.rendered : null"
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
      page: {},
    };
  },

  methods: {
    getPage() {
      axios
        .get(
          `http://localhost/wp-json/wp/v2/pages?slug=${this.$route.params.slug}`
        )
        .then((res) => {
          this.page = res.data[0];
        });
    },
  },

  created() {
    this.getPage();
  },
};
</script>

<style></style>
