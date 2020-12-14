<template>
  <div>
    <h1>タイトル</h1>
    <!-- <my-component></my-component> -->
    <div>
      <Mycomponent></Mycomponent>
    </div>
  </div>
</template>
<script>
import Mycomponent from "../components/Details.vue";

export default {
  components: {
    Mycomponent,
  },
};
</script>


