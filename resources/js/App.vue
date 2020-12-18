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
import Footer from "./components/Menu.vue";
export default {
  name: "app",
  components: {
    "app-footer": Footer,
  },
};
</script>

<style>
body {
  background-color: #f6f6f6;
}
h2 {
  font-size: 3.5rem;
  color: #101748;
  text-align: center;
  border-bottom: solid 1px;
}
</style>