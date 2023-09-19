<script setup>
  import Button from "@/components/Button.vue";
  import {computed, ref} from "vue";
  const notes_array = [{'matiere': 'Symfony','notes': [18,12,14,9]}, {'matiere': 'Intégration','notes': [20]},{'matiere': 'Réseau','notes': [19]}];
  const note1= 12;
  const note2= 15;
  const note3= 14;
  const moyenne = computed(() => {
    return (note1 + note2 + note3) / 3;
  });
  const title = "Welcome to Vuejs 3 - The Progressive JavaScript Framework";
  const p = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.";
</script>

<template>
  <h1>{{ title }}</h1>
  <p>{{ p }}</p>
  <hr>
  <br>
  <Button />
  <br>
  <ul>
    <li v-for="item in notes_array">Notes en {{ item.matiere }} :
      <span v-for="(note, index) in item.notes" :key="index" :style="{color : note < 10 ? 'red' : 'black'}">
        {{ note }} {{ index < item.notes.length - 1 ? ', ' : '' }}
      </span><br>
    </li>
    <li>
      Notes semestres : {{ note1 }}, {{ note2 }}, {{ note3 }}
      <br>
      Moyenne : {{ moyenne.toFixed(2) }}
    </li>
  </ul>
</template>

<style scoped>
  h1 {
    font-weight: bold;
  }

  .red {
    color: red;
  }
</style>
