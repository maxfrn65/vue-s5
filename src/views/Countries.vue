<script setup>

</script>

<template>
  <h2>World's Countries List</h2>
  <div v-for="n in 10">
    <h3>Country {{ n }}</h3>
    <router-link :to="{name: 'countries-details', params: {id: n}}">Voir les détails</router-link>
  </div>
</template>

<style scoped>

</style>