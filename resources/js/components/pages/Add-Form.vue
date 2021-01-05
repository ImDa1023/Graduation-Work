<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6">
        <form v-on:submit.prevent="submit">
          <div class="form-group row">
            <label for="title">曲名</label>
            <input type="text" id="title" v-model="scorelist.title">
          </div>
          <div class="form-group row">
            <label for="title">作曲者</label>
            <input type="text" id="composer" v-model="scorelist.composer">
          </div>
          <div class="form-group row">
            <label for="title">編曲者</label>
            <input type="text" id="arranger" v-model="scorelist.arranger">
          </div>
          <div class="form-group row">
            <label for="title">出版社</label>
            <input type="text" id="publisher" v-model="scorelist.publisher">
          </div>
          <div class="form-group row">
            <label for="title">ジャンル</label>
            <input type="text" id="genre" v-model="scorelist.genre">
          </div>
          <div class="form-group row">
            <label for="title">アーティスト</label>
            <input type="text" id="artist" v-model="scorelist.artist">
          </div>
          <div class="form-group row">
            <label for="title">棚</label>
            <input type="text" id="shelf" v-model="scorelist.shelf">
            <p>の</p>
          </div>
          <div class="form-group row">
            <input type="text" id="shelf-number" v-model="scorelist.shelfNum">
            <p>段目</p>
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
        scorelist: {}
      }
    },
    methods: {
      submit() {
        axios.post('/api/scores', this.scorelist)
        .then((res) => {
          this.$router.push({path: '/score'});
        });
      }
    }
  };
</script>