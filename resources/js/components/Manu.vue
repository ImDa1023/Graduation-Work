<template>
  <footer>
    <h1>Manu</h1>
    <div id="nav">
      <router-link to="/setting">管理</router-link>
      <router-link to="/list">楽譜リスト</router-link>
      <router-link to="/notice">お知らせ</router-link>
    </div>
  </footer>
</template>
<script>
export default {
  name: "manu",
};
</script>