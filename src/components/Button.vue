<script setup>
  import { defineProps } from 'vue'

  defineProps({
    text: {
      type: String,
      default: 'button'
    }
  })
</script>

<template>
  <a href="https://vuejs.org/guide/introduction.html" target="_blank">{{ text }}<i class="icon-btn fa-solid fa-arrow-up-right-from-square"></i></a>
</template>

<style scoped>
  a {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    color: white;
    text-decoration: none;
    background-color: #42b983;
    padding: 10px 15px;
    border-radius: 5px;
    font-weight: bold;
  }

  a:hover {
    background-color: #3daa7d;
  }
</style>