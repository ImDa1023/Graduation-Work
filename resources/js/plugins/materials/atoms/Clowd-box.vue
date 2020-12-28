<template>
  <canvas width="130px" height="150px" class="canvas"></canvas>
</template>


<script>
export default {
  // props: {
  //   radius: {
  //     type: Number,
  //     default: 30,
  //   },
  // }
  watch: {
    radius() {
      this.draw(this.radius);
    },
  },

  methods: {
    //https://note.com/yusaku/n/n748e9322b2fe
    //https://oku.edu.mie-u.ac.jp/~okumura/javascript/circles.html

    draw(radius) {
      for (let i = 0; i < 2; i++) {
        let x = 50 * Math.random();
        let y = 20 * Math.random();
        let x2 = 150 * Math.random();
        let y2 = 130 * Math.random();
        let r = 10 * Math.random() + 30;
        this.ctx.beginPath();
        // this.ctx.clearRect(0, 0, 200, 200);
        this.ctx.arc(x, y, r, 0, Math.PI * 2, false);
        this.ctx.arc(x2, y2, r, 0, Math.PI * 2, false);
        this.ctx.fillStyle = "#393F66";
        this.ctx.fill();
      }
    },
  },
  mounted() {
    // mounted 以降で canvas の DOM にアクセスできる
    // CreateJS などを使うときにも、ここで canvas と紐付ける
    // console.log(this.$el)
    this.ctx = this.$el.getContext("2d");
    this.draw(this.radius);
  },
};
</script>

<style scoped>
.canvas {
  border-radius: 8px;
  background-color: #242a56;
}
</style>
