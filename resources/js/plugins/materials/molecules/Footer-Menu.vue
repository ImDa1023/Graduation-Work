<template>
  <div>
    <nav id="F_Menu">
      <ul class="nav-list">
        <li class="nav-list_child">
          <router-link to="/setting">
            <Setting-icon />
          </router-link>
        </li>
        <li class="nav-list_child">
          <router-link to="/score">
            <List-icon />
          </router-link>
        </li>
        <li class="nav-list_child">
          <router-link to="/notice">
            <Notice-icon />
          </router-link>
        </li>
      </ul>
    </nav>
  </div>
</template>

<style scoped>
div {
  width: 100%;
  height: 8%;
  border-top: solid 2px #dcdcdc;
  position: absolute;
  bottom: 0;
}

.nav-list {
  list-style-type: none;
  padding: 0;
  margin: 0;
  width: 100%;
  height: 100%;
}

.nav-list_child {
  display: inline-block;
  /* margin-right: 15%; */
  width: 30%;
  height: 100%;
}

.nav-list_child:nth-of-type(2) {
  width: 38%;
  border-right: solid 1.5px #dcdcdc;
  border-left: solid 1.5px #dcdcdc;
}

a {
  display: block;
  width: 100%;
  height: 100%;
  padding: 20px 35%;
}
</style>
<script>
// import Setting from "./icons/I_setting.vue";
// import List from "./icons/I_list.vue";
// import Notice from "./icons/I_notice.vue";

// import SVGElement from "./Icon.vue";
export default {
  // name: "F_Menu",
  // components: {
  //   Setting,
  //   List,
  //   Notice,
  // },
};
</script>
