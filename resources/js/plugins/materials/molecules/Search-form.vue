<template>
  <div v-cloak>
    <button id="search-icon" class="Accordion-Item" @click="toggleAccordion()">
      <Search-icon />
    </button>
    <!-- <Search-form-inner class="Accordion-Item" v-if="isOpened" /> -->

    <Search-form-inner class="Accordion-Item" :class="{ tamesi: isOpened }" />
  </div>
</template>
<script>
export default {
  data() {
    return {
      isOpened: true,
    };
  },
  methods: {
    toggleAccordion() {
      this.isOpened = !this.isOpened;
      console.log("1");
    },
  },
};
</script>
<style scoped>
.Accordion-Item {
  border-bottom: 1px solid #eee;
  letter-spacing: 0.1em;
  line-height: 1.5;
}
#search-icon {
  width: 40px;
  height: 40px;
  position: absolute;
  top: 0;
  right: 0;
  border: 0;
  /* outline: none; */
  background-color: #f6f6f6;
}
.tamesi {
  display: none;
}
</style>