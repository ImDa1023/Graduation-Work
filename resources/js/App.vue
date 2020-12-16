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
import Footer from "./components/Manu.vue";
export default {
  name: "app",
  components: {
    "app-footer": Footer,
  },
};
</script>