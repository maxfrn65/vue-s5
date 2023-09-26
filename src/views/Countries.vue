<script setup>
import CountryCard from "@/components/CountryCard.vue";
import { onMounted, ref } from "vue";
import axios from "axios";

let data = ref('');

onMounted(async () => {
  const response = await axios.get("countries.json");
  data.value = response.data;
});
</script>

<template>
  <h2>World's Countries List</h2>
    <div id="countries-wrapper">
      <CountryCard v-for="(country) in data" :countriesData="country"/>
    </div>
</template>

<style scoped lang="scss">
  #countries-wrapper {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
  }
</style>