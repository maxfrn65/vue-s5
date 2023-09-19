<script setup>
defineProps({
  countryName: String,
  countryOfficialName: String,
  countryFlag: String,
})
</script>

<template>
  <div>
    <h3>{{ countryName }}</h3>
    <h4>{{ countryOfficialName }}</h4>
    <img :src="countryFlag" :alt="countryName + ' ' + 'flag'" />
  </div>
</template>

<style scoped>

</style>