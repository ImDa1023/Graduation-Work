<template>
  <div>
    <nav id="F_Menu">
      <div class="nav-add-button">
        <router-link to="/add-form">
          <Add-icon />
        </router-link>
      </div>
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
#F_Menu {
  width: 100%;
  /* height: 8%; */
  background-color: #f6f6f6;
  position: absolute;
  z-index: 0;
  bottom: 0;
}

.nav-add-button {
  width: 3.5em;
  height: 3.5em;
  border-radius: 50%;
  background-color: #ff6e4b;
  position: fixed;
  right: 5%;
  bottom: 9%;
}

.nav-list {
  list-style-type: none;
  border-top: solid 2px #e8e8e8;
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
  width: 37%;
  border-right: solid 1.5px #e8e8e8;
  border-left: solid 1.5px #e8e8e8;
}

a {
  display: block;
  width: 100%;
  height: 100%;
  padding: 10px 35%;
  /* font-size: 10px; */
}

@media screen and (min-width: 1024px) {
  #F_Menu {
    top: 50px;
    height: 100%;
    width: 6%;
    position: fixed;
    border-top: none;
    border-right: solid 2px #e8e8e8;
    padding: 0px;
  }

  .nav-add-button {
    left: 0.8%;
  }

  .nav-list {
    flex-direction: column;
    width: 100%;
  }

  .nav-list_child {
    width: 100%;
    height: 10%;
  }

  .nav-list_child:nth-of-type(2) {
    width: 100%;
  }

  a {
    display: block;
    padding: 30%;
    /* font-size: 10px; */
  }
}
</style>


<script>
import AddIcon from "../atoms/Add-icon.vue";
// import Setting from "./icons/I_setting.vue";
// import List from "./icons/I_list.vue";
// import Notice from "./icons/I_notice.vue";

// import SVGElement from "./Icon.vue";
export default {
  components: { AddIcon },
  // name: "F_Menu",
  // components: {
  //   Setting,
  //   List,
  //   Notice,
  // },
};
</script>
