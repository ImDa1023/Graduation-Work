<template>
  <div>
    <Return-button />
    <h2>{{ $route.name }}</h2>
    <Entry-button v-if="$route.name !== '楽譜リスト'" />
    <Search-form v-if="$route.name == '楽譜リスト'" />
    <!-- 登録ボタンどうしよう -->
  </div>
</template>
<script>
export default {
  // data() {
  //   var tamesi = $route.name;
  //   return {
  //     titleName: tamesi,
  //   };
  // },
  // props: {
  //   titleName: {
  //     type: String,
  //     setting: {
  //       title: "管理",
  //     },
  //   },
  // },
};
</script>
<style scoped>
div {
  width: 100%;
  height: 50px;
}
</style>