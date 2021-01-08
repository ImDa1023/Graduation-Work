<template>
  <div class="score-list">
    <ul
      class="song-box"
      v-for="(scorelist, index) in scorelists"
      :key="scorelist.id"
      @click="toggle(index)"
    >
      <li class="song">{{ scorelist.title }}</li>
      <li class="song">{{ scorelist.composer }}</li>
      <li class="song">{{ scorelist.arranger }}</li>
      <li class="song">{{ scorelist.publisher }}</li>
      <li class="song">{{ scorelist.genre }}</li>
      <li class="song">{{ scorelist.artist }}</li>
      <li class="song">{{ scorelist.shelf }} - {{ scorelist.shelfNum }}</li>
    </ul>
    <Score-Details
      class="Accordion-Item"
      :class="{ transform: isOpened, tamesi: isClosed }"
      :song="scorelists"
      :index="index"
    >
    </Score-Details>
  </div>
</template>
<script>
var index = { number: 0 };

export default {
  data: function () {
    return {
      scorelists: [],
      isOpened: true,
      isClosed: false,
      index: index,
    };
  },
  methods: {
    getScorelists() {
      axios.get("/api/scores").then((res) => {
        this.scorelists = res.data;
      });
    },
    toggle(index) {
      this.isOpened = !this.isOpened;
      this.isClosed = !this.isClosed;
      console.log(index);
      this.index.number = index;
    },
  },
  mounted() {
    this.getScorelists();
  },
};
</script>
<style scoped>
.Accordion-Item {
  width: 100%;
  /* height: 50px; */
  background: #f6f6f6;
  transition: all 300ms 0s ease;
  position: relative;
  /* top: -200px; */
  /* z-index: -10; */
}
.transform {
  transform: translateY(280px);
  display: none;
}
.tamesi {
  transform: translateY(-300px);
}
</style>