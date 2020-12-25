<template>
  <div id="app">
    <main>
      <RouterView />
    </main>

    <footer v-if="$route.name !== 'title' && $route.name !== 'first-setting'">
      <Footer-Menu></Footer-Menu>
    </footer>
  </div>
</template>
<style>
body {
  background-color: #f6f6f6;
}
h1 {
  font-size: 1rem;
}
h2 {
  font-size: 1rem;
  color: #101748;
  text-align: center;
  box-shadow: 1px -5px 20px 0px #cacacab9;
  font-family: "Meylio UI";
  font-weight: 550;
  letter-spacing: 0.15em;
}
a {
  font-size: 1rem;
}
</style>