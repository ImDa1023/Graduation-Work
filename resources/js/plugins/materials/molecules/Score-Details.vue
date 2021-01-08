<template>
  <div class="details">
    <Use-list-button />
    <Return-button />
    <div>
      <h3>{{ song[index.number].title }}</h3>
      <ul>
        <li>{{ song[index.number].artist }}</li>
        <li>{{ song[index.number].publisher }}</li>
        <li>{{ song[index.number].composer }}</li>
        <li>{{ song[index.number].arranger }}</li>
        <li>{{ song[index.number].id }}</li>
      </ul>
    </div>
  </div>
</template>
<style scoped>
.details {
  width: 100%;
  height: 800px;
  border-radius: 8px;
  position: relative;
  z-index: 100;
  background-color: #f6f6f6;
}
</style>
<script>
export default {
  props: {
    song: {
      type: Array,
    },
    index: {
      type: Object,
    },
  },
};
</script>