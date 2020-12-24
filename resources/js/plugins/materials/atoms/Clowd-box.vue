<template>
  <canvas width="130px" height="150px" class="canvas"></canvas>
</template>


<script>
export default {
  props: {
    radius: {
      type: Number,
      default: 50,
    },
  },
  watch: {
    radius() {
      this.draw(this.radius);
    },
  },

  methods: {
    draw(radius) {
      this.ctx.beginPath();
      this.ctx.clearRect(0, 0, 200, 200);
      this.ctx.arc(50, 10, radius, 0, Math.PI * 2);
      this.ctx.arc(10, 100, radius, 0, Math.PI * 2);
      this.ctx.fillStyle = "#393F66";
      this.ctx.fill();
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
