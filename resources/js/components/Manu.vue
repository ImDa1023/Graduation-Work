<template>
  <footer>
    <div id="nav">
      <ul class="nav-list">
        <li class="nav-list_child">
          <router-link to="/setting">管理</router-link>
        </li>
        <li class="nav-list_child">
          <router-link to="/list">楽譜リスト</router-link>
        </li>
        <li class="nav-list_child">
          <router-link to="/notice">お知らせ</router-link>
        </li>
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

<style scoped>
.nav-list {
  list-style-type: none;
  padding: 0;
}

.nav-list_child {
  display: inline-block;
  margin-right: 15%;
}
</style>