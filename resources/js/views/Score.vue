<template>
  <div>
    <div class="header">
      <h2>List</h2>
    </div>
    <ol>
      <li><router-link to="details">ジャンル</router-link></li>
      <li><router-link to="details">ジャンル</router-link></li>
      <li><router-link to="details">ジャンル</router-link></li>
      <li><router-link to="details">ジャンル</router-link></li>
      <li><router-link to="details">ジャンル</router-link></li>
    </ol>
    <section>
      <h2>全曲リスト</h2>
    </section>
    <div class="container">
      <table class="table table-hover">
        <thead class="thead-light">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Artist</th>
            <th scope="col">Composer</th>
            <th scope="col">Arranger</th>
            <th scope="col">Publisher</th>
            <th scope="col">Show</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="score in scores">
            <th scope="row">{{ score.id }}</th>
            <td>{{ score.title }}</td>
            <td>{{ scpre.artist }}</td>
            <td>{{ score.composer }}</td>
            <td>{{ score.arranger}}</td>
            <td>{{ score.publisher }}</td>
            <td>
              <button class="btn btn-primary">Show</button>
            </td>
            <td>
              <button class="btn btn-success">Edit</button>
            </td>
            <td>
              <button class="btn btn-danger">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <router-link to="add_form">form</router-link>
    <div>
      <Detail></Detail>
    </div>
  </div>
</template>
<script>
import Detail from "../components/Details.vue";


export default {
  data: function() {
    return {
      scores: []
    }
  },
  methods: {
    getScores() {
      axios.get('/api/scores')
      .then((res) => {
        this.scores = res.data;
      });
    }
  },
  mounted() {
    this.getScores();
  },
  components: {
    Detail,
  },
}
</script>

<style scoped>
router-link {
  font-size: 3rem;
}
body {
  background-color: white;
}
h1 {
  text-align: center;
  font-size: 3rem;
}
.header {
  border-bottom: solid 1px;
  margin-bottom: 10%;
}
ol {
  scroll-snap-type: x mandatory;
  white-space: nowrap;
  overflow: auto;
  width: 100%;
  height: 430px;
}

li {
  scroll-snap-align: center;
  display: inline-block;
  width: 355px;
  height: 100%;
  white-space: normal;
  background-color: gray;
  margin-right: 6%;
  border-radius: 15px;
}

li > a {
  color: white;
  font-size: 3rem;
  display: block;
}
</style>