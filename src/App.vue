<script setup>
  import Button from "@/components/Button.vue";
  const title = "Welcome to Vuejs 3";
  const paragraph = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.";
</script>

<template>
  <div id="app">
    <header>
      <h1>{{ title }}</h1>
      <div id="inner-header">
        <nav>
          <router-link to="/">Home</router-link>
          <router-link to="countries">Countries</router-link>
          <router-link :to="{name: 'about'}">About</router-link>
        </nav>
        <Button />
      </div>
    </header>
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

  header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    #inner-header {
      display: flex;
      align-items: center;
      gap: 30px;
    }
  }
  nav {
    display: flex;
    gap: 20px;
  }

  #view-content {
    margin-top: 20px;
  }
</style>
