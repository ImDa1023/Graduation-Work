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
import Setting from "../components/icons/I_setting.vue";
import List from "../components/icons/I_list.vue";
import Notice from "../components/icons/I_notice.vue";

// import SVGElement from "./Icon.vue";
export default {
  name: "manu",
  components: {
    Setting,
    List,
    Notice,
  },
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