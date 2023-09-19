<script setup>
  import Button from "@/components/Button.vue";
  const title = "Welcome to Vuejs 3 - The Progressive JavaScript Framework";
  const paragraph = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.";
</script>

<template>
  <div id="app">
    <h1>{{ title }}</h1>
    <nav>
      <router-link to="/">Home</router-link>
      <router-link to="countries">Countries</router-link>
      <router-link :to="{name: 'about'}">About</router-link>
    </nav>
    <div id="view-content">
      <router-view />
    </div>
  </div>
</template>

<style scoped lang="scss">
  h1 {
    font-weight: bold;
  }

  .red {
    color: red;
  }

  nav {
    display: flex;
    gap: 20px;
    a {
      text-decoration: none;
      color: #42b983;
      &:hover {
        text-decoration: underline;
      }
    }
  }

  #view-content {
    margin-top: 20px;
  }
</style>
