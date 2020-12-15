<template>
  <div id="app">
    <main>
      <RouterView />
    </main>
    <footer>
      <app-footer v-if="$route.name !== 'title'"></app-footer>
    </footer>
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