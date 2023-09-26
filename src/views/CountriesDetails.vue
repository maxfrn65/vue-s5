<script setup>
import { useRoute } from "vue-router";
const route = useRoute();
const id = route.params.id;
const officialName = route.params.officialName;
</script>

<template>
  <h1>{{ id }}</h1>
  <h2>{{ officialName }}</h2>
</template>

<style scoped>

</style>