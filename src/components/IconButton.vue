<script setup>
  import { defineProps } from 'vue'

  defineProps({
    icon: {
      type: String,
      default: 'button'
    },
    link: {
      type: String
    }
  })
</script>

<template>
  <router-link :to="link"><i :class="icon"></i></router-link>
</template>

<style scoped>
  a {
    color: black;
    text-decoration: none;
    padding: 10px 15px;
    border-radius: 25px;
    font-weight: bold;
    transition: background-color 0.1s ease-in-out;
  }

  a:hover {
    background-color: #eeeeee;
  }
</style>