<template>
  <div>
    <div class="header">
      <h1>List</h1>
    </div>
    <ol>
      <li><router-link to="details">ジャンル</router-link></li>
      <li><router-link to="details">ジャンル</router-link></li>
      <li><router-link to="details">ジャンル</router-link></li>
      <li><router-link to="details">ジャンル</router-link></li>
      <li><router-link to="details">ジャンル</router-link></li>
    </ol>
    <section>
      <h2>全曲リスト</h2>
    </section>
  </div>
</template>

<style>
router-link {
  font-size: 3rem;
}
body {
  background-color: white;
}
h1 {
  text-align: center;
  font-size: 3rem;
}
.header {
  border-bottom: solid 1px;
  margin-bottom: 10%;
}
ol {
  scroll-snap-type: x mandatory;
  white-space: nowrap;
  overflow: auto;
  width: 100%;
  height: 430px;
}

li {
  scroll-snap-align: center;
  display: inline-block;
  width: 355px;
  height: 100%;
  white-space: normal;
  background-color: gray;
  margin-right: 6%;
  border-radius: 15px;
}

li > a {
  color: white;
  font-size: 3rem;
  display: block;
}
</style>