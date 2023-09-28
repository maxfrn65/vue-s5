<script setup>
import CountryCard from "@/components/CountryCard.vue";
import { onMounted, ref } from "vue";
import axios from "axios";
import IconButton from "@/components/IconButton.vue";

let data = ref([]);

onMounted(async () => {
  const response = await axios.get("countries.json");
  data.value = response.data;
});

console.log(data.value);

let searchInput = ref('');

function search() {
  return data.value.filter((country) => {
    const countryName = country.name.common.toLowerCase();
    const searchTerm = searchInput.value.toLowerCase();

    // Vérifier si le nom du pays contient le terme de recherche
    return countryName.includes(searchTerm);
  });
}
</script>

<template>
  <h2>World's Countries List</h2>
    <div id="search-wrapper">
      <input v-model="searchInput" type="text" class="search-bar" placeholder="Filter by Name">
    </div>
  <div id="countries-wrapper">
    <CountryCard v-for="(country) in search()" :countriesData="country" :key="country" />
  </div>
</template>

<style scoped lang="scss">
  #countries-wrapper {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
  }

  .search-bar {
    width: 25%;
    padding: 10px;
    border-radius: 5px;
    border: #9b9b9b 0.5px solid;
    margin-top: 10px;
  }
</style>