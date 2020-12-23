<template>
  <footer>
    <nav id="F_Menu">
      <ul class="nav-list">
        <li class="nav-list_child">
          <router-link to="/setting">
            <I_setting />
          </router-link>
        </li>
        <li class="nav-list_child">
          <router-link to="/score">
            <I_list />
          </router-link>
        </li>
        <li class="nav-list_child">
          <router-link to="/notice">
            <I_notice />
          </router-link>
        </li>
      </ul>
    </nav>
  </footer>
</template>
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

<style scoped>
footer {
  width: 100%;
  height: 180px;
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
  width: 39%;
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