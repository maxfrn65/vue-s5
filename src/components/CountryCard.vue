<script setup>
defineProps({
  country: String,
  capital: String
})
</script>

<template>
  <div>
    <h2>{{ country }}</h2>
    <h3>{{ capital }}</h3>
  </div>
</template>

<style scoped>

</style>