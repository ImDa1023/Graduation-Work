<template>
  <div class="add-form">
    <div>
      <!--class="row justify-content-center" -->

      <!-- class="col-sm-6" -->
      <form v-on:submit.prevent="submit">
        <div class="form-box">
          <div class="column-1">
            <div class="form-container">
              <label for="title">曲名</label>
              <input
                type="text"
                placeholder="曲名"
                id="title"
                v-model="scorelist.title"
              />
            </div>

            <div class="form-container">
              <label for="title">作曲者</label>
              <input
                type="text"
                placeholder="作曲者"
                id="composer"
                v-model="scorelist.composer"
              />
            </div>

            <div class="form-container">
              <label for="title">編曲者</label>
              <input
                type="text"
                placeholder="編曲者"
                id="arranger"
                v-model="scorelist.arranger"
              />
            </div>

            <div class="form-container">
              <label for="title">出版社</label>
              <input
                type="text"
                placeholder="出版社"
                id="publisher"
                v-model="scorelist.publisher"
              />
            </div>

            <div class="form-container">
              <label for="title">ジャンル</label>
              <input
                type="text"
                placeholder="ジャンル"
                id="genre"
                v-model="scorelist.genre"
              />
            </div>

            <div class="form-container">
              <label for="title">アーティスト</label>
              <input
                type="text"
                placeholder="アーティスト"
                id="artist"
                v-model="scorelist.artist"
              />
            </div>

            <div class="rack-box">
              <div class="form-container">
                <label for="title">棚</label>
                <input
                  type="text"
                  placeholder="番号"
                  id="shelf"
                  v-model="scorelist.shelf"
                />
                <!-- <p>の</p> -->
              </div>

              <div class="form-container">
                <label for="title">―</label>
                <input
                  type="text"
                  placeholder="段数"
                  id="shelf-number"
                  v-model="scorelist.shelfNum"
                />
                <!-- <p>段目</p> -->
              </div>
            </div>
          </div>
          <div class="colmun-2">
            その他の中身
            <button type="submit" class="btn btn-primary">登録</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</template>

<style scoped>
.form-container {
  margin-top: 20px;
  border-bottom: solid 1px #d0d3e2;
  background: #f6f6f6;
  display: grid;
  grid-template-columns: 1fr 3fr;
}

label {
  display: inline-block;
  color: #101748;
  font-size: 13px;
  font-weight: 600;
  margin-bottom: 0;
}

input[type="text"] {
  width: 100%;
  height: 30px;
  padding-bottom: 10px;
  border: none;
  outline: none;
  text-align: right;
  background: none;
  color: #101748;
  font-weight: 600;
}

input::placeholder {
  color: #d0d3e2;
}

.rack-box {
  display: grid;
  grid-template-columns: 1fr 1fr;
}

.colmun-2 {
  margin: 20px;
}

@media screen and (min-width: 1024px) {
  .form-container {
    margin-top: 30px;
  }

  label {
    font-size: 15px;
    font-weight: 500;
    padding-bottom: 10px;
  }

  .form-box {
    display: grid;
    grid-template-columns: 1fr 1fr;
  }
}
</style>

<script>
export default {
  data: function () {
    return {
      scorelist: {},
    };
  },
  methods: {
    submit() {
      axios.post("/api/scores", this.scorelist).then((res) => {
        this.$router.push({ path: "/score" });
      });
    },
  },
};
</script>