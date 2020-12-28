<template>
<div class="score-list">
      <ul v-for="scorelist in scorelists" v-bind:key="scorelist.id">
        <li>{{ scorelist.title }}</li>
        <li>{{ scorelist.artist }}</li>
        <li>{{ scorelist.composer }}</li>
        <li>{{ scorelist.arranger }}</li>
        <li>{{ scorelist.publisher }}</li>
      </ul>
</div>
</template>
<script>
export default {
  data: function () {
    return {
      scorelists: [],
    };
  },
  methods: {
    getScorelists() {
      axios.get("/api/scores").then((res) => {
        this.scorelists = res.data;
      });
    },
  },
  mounted() {
    this.getScorelists();
  },
};
</script>