<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6">
        <form v-on:submit.prevent="submit">
          <div class="form-group row">
            <label for="title" class="col-sm-3 col-form-label">曲名</label>
            <input type="text" class="col-sm-9 form-control" id="title" v-model="score.title">
          </div>
          <div class="form-group row">
            <label for="title" class="col-sm-3 col-form-label">アーティスト</label>
            <input type="text" class="col-sm-9 form-control" id="artist" v-model="score.artist">
          </div>
          <div class="form-group row">
            <label for="title" class="col-sm-3 col-form-label">作曲者</label>
            <input type="text" class="col-sm-9 form-control" id="composer" v-model="score.composer">
          </div>
          <div class="form-group row">
            <label for="title" class="col-sm-3 col-form-label">編曲者</label>
            <input type="text" class="col-sm-9 form-control" id="arranger" v-model="score.arranger">
          </div>
          <div class="form-group row">
            <label for="title" class="col-sm-3 col-form-label">出版社</label>
            <input type="text" class="col-sm-9 form-control" id="publisher" v-model="score.publisher">
          </div>
          <button type="submit" class="btn btn-primary">登録</button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    data: function() {
      return {
        score: {}
      }
    },
    methods: {
      submit() {
        axios.post('/api/scores', this.score)
        .then((res) => {
          this.$router.push({name: 'score.list'});
        });
      }
    }
  };
</script>