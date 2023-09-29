<script setup>
import { ref, onMounted} from "vue";
import { useRoute } from "vue-router";
import axios from "axios";
import IconButton from "@/components/IconButton.vue";

const route = useRoute();
const country = route.params.country;

let data = ref({});

onMounted(async () => {
  try {
    const response = await axios.get(`https://restcountries.com/v3.1/name/${country}`);
    data.value = response.data[0];
  } catch (error) {
    console.error("Erreur lors de la récupération des données du pays :", error);
  }
});
</script>

<template>
  <div id="container">
    <div id="summup-container">
      <IconButton icon="fa-solid fa-arrow-left" link="/countries" />
      <img :src="data.flags?.svg" alt="">
      <div id="title-container">
        <h1>{{ data.name?.common }}</h1>
        <h2>Official Name: {{ data.name?.official }}</h2>
        <h2>Continent: {{ data.region }}</h2>
        <h2>Capital: {{ data.capital }}</h2>
      </div>
    </div>
    <hr>
    <div>

    </div>
  </div>
</template>

<style scoped lang="scss">
  #container {
    padding: 100px 200px;
    display: flex;
    flex-direction: column;
    gap: 50px;
  }

  #summup-container {
    display: flex;
    align-items: center;
    gap: 50px;
    img{
      height: 200px;
      border-radius: 10px;
    }
  }

  hr {
    width: 100%;
    border: #d7d7d7 0.5px solid;
  }
</style>