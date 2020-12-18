<template>
  <div id="app">
    <main>
      <RouterView />
    </main>

    <app-footer
      v-if="$route.name !== 'title' && $route.name !== 'first_setting'"
    ></app-footer>
  </div>
</template>
<script>
import F_Menu from "./components/F_Menu.vue";
export default {
  name: "app",
  components: {
    "app-footer": F_Menu,
  },
};
</script>

<style>
body {
  background-color: #f6f6f6;
}

h2 {
  font-size: 2.5rem;
  color: #101748;
  text-align: center;
  box-shadow: 1px -5px 20px 0px #cacacab9;
  font-family: "源ノ角ゴシック";
  font-weight: 550;
}
</style>