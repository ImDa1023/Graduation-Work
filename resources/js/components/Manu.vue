<template>
  <footer>
    <h1>Manu</h1>
    <div id="nav">
      <ul>
        <li><router-link to="/setting">管理</router-link></li>
        <li><router-link to="/list">楽譜リスト</router-link></li>
        <li><router-link to="/notice">お知らせ</router-link></li>
      </ul>
    </div>
  </footer>
</template>
<script>
// import SVGElement from "./Icon.vue";
export default {
  name: "manu",
};
</script>