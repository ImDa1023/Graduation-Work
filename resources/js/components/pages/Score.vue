<template>
  <div>
    <ul>
      <li v-for="scorejenle in scorejenles" :key="scorejenle.id">
        <router-link to="/score-details"><Clowd-box /></router-link>
        <h3>{{ scorejenle.name }}</h3>
        <!-- scorejenleの配列はバックからもってくる -->
      </li>
    </ul>
    <Score-list />
  </div>
</template>
<style scoped>
router-link {
  font-size: 1rem;
}
body {
  background-color: white;
}

h1 {
  text-align: center;
}

ul {
  scroll-snap-type: x mandatory;
  white-space: nowrap;
  overflow: auto;
  width: 100%;
  height: 200px;
  padding: 0;
}

li {
  scroll-snap-align: center;
  display: inline-block;
  width: 130px;
  height: 150px;
  white-space: normal;
  background-color: gray;
  margin-right: 6%;
  border-radius: 15px;
}

li > a {
  color: white;
  font-size: 1rem;
  display: block;
}
</style>
<script>
export default {
  data: function () {
    return {
      name: "#app",
      scorelists: [],
      scorejenles: [
        { id: 1, name: "aiu" },
        { id: 2, name: "eo" },
        { id: 3, name: "kaki" },
      ],
    };
  },
  methods: {
    getScorelists() {
      axios.get("/api/scores").then((res) => {
        this.scorelists = res.data;
      });
    },
    deleteScorelist(id) {
      axios.delete("/api/scores" + id).then((res) => {
        this.getScorelists();
      });
    },
  },
  mounted() {
    this.getScorelists();
  },
};
</script>

