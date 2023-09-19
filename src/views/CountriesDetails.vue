<script setup>
import { useRoute } from "vue-router";
const route = useRoute();
const id = route.params.id;
</script>

<template>
  <h2>{{ id }}</h2>
</template>

<style scoped>

</style>