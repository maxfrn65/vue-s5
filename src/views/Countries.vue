<script setup>
import CountryCard from "@/components/CountryCard.vue";
import { onMounted, ref } from "vue";
import axios from "axios";

let data = ref('');

onMounted(async () => {
  const response = await axios.get("https://restcountries.com/v3.1/all");
  data.value = response.data;
});
</script>

<template>
  <h2>World's Countries List</h2>
    <div v-for="country in data">
      <CountryCard :countryName="country.name.common" :countryOfficialName="country.capital" :countryFlag="country.flag"/>
      <router-link :to="{name: 'countries-details', params: {id: country.name.common}}">Details</router-link>
    </div>
</template>

<style scoped>

</style>