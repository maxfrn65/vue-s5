<script setup>
defineProps({
  countryName: String,
  countryOfficialName: String,
  countryFlag: String,
  countryRegion: String
})

import { onMounted, ref } from "vue";
import axios from "axios";

let data = ref('');

onMounted(async () => {
  const response = await axios.get("https://restcountries.com/v3.1/all");
  data.value = response.data;
});
</script>

<template>
  <div id="country-card-container">
    <img :src="countryFlag" :alt="countryName + ' ' + 'flag'" />
    <div id="country-info-container">
      <h3>{{ countryName }}</h3>
      <h4>{{ countryOfficialName }}</h4>
      <h4>{{ countryRegion }}</h4>
      <router-link :to="{name: 'countries-details', params: {id: countryName}}">See More <i class="fa-solid fa-arrow-right fa-xs"></i></router-link>
    </div>
  </div>
</template>

<style scoped lang="scss">
  #country-card-container {
    display: flex;
    align-items: center;
    gap: 20px;
    border: #2f2f2f 0.5px solid;
    padding: 20px;
    margin: 20px;
    border-radius: 10px;
    img {
      height: 125px;
      border-radius: 5px;
    }
  }
</style>