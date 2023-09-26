<script setup>
defineProps(['countriesData'])
</script>

<template>
  <div id="country-card-container">
    <img :src="countriesData.flags.svg" :alt="countryName + ' ' + 'flag'" />
    <div id="country-info-container">
      <h3>{{ countriesData.name.common }}</h3>
      <h4>{{ countriesData.name.official }}</h4>
      <router-link class="link" :to="{name: 'countries-details', params: {id: countriesData.name.common}}">Go to Details <i class="fa-solid fa-arrow-right fa-xs"></i></router-link>
    </div>
  </div>
</template>

<style scoped lang="scss">
  #country-card-container {
    display: flex;
    align-items: center;
    gap: 20px;
    border: #9b9b9b 0.5px solid;
    padding: 15px;
    margin: 20px;
    border-radius: 10px;
    img {
      height: 75px;
      border-radius: 5px;
    }
  }
</style>