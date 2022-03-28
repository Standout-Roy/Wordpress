<template>
  <div class="card post-tags" style="width: 18rem">
    <div class="card-body">
      <h2 class="card-title">Post tags</h2>
      <span v-for="tag in tags" :key="tag.id" class="badge bg-secondary">{{
        tag.name
      }}</span>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      tags: [],
    };
  },

  methods: {
    getTags() {
      axios.get("http://localhost/wp-json/wp/v2/tags").then((res) => {
        this.tags = res.data;
      });
    },
  },

  created() {
    this.getTags();
  },
};
</script>
