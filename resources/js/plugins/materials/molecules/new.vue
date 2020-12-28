<template>
  <section>
    <h3>{{ ジャンルの名前 }}</h3>
    <Sort-icon />
    <Moviesort-icon />
    <div
      class="score-list"
      v-for="scorelist in scorelists"
      v-bind:key="scorelist"
    >
      <List-item />
    </div>
  </section>
</template>