<template>
  <div>
    <div class="header">
      <h2>楽譜リスト</h2>
    </div>
    <ol>
      <li><router-link to="details">ジャンル</router-link></li>
      <li><router-link to="details">ジャンル</router-link></li>
      <li><router-link to="details">ジャンル</router-link></li>
      <li><router-link to="details">ジャンル</router-link></li>
      <li><router-link to="details">ジャンル</router-link></li>
    </ol>
    <router-link to="add-form">form</router-link>
    <div>
      <Detail />
    </div>
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

ol {
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
import Detail from "../../plugins/materials/molecules/Score-Details.vue";

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
    deleteScorelist(id) {
      axios.delete("/api/scores" + id).then((res) => {
        this.getScorelists();
      });
    },
  },
  mounted() {
    this.getScorelists();
  },
  components: {
    Detail,
  },
};
</script>

