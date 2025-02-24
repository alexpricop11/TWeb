<template>
  <div id="app">
    <div class="app-bar">
      <AppBar/>
    </div>
    <div class="content">
      <router-view/>
    </div>
  </div>
</template>

<script>
import AppBar from "@/components/AppBar.vue";

export default {
  name: 'App',
  components: {AppBar},
}
</script>

<style scoped>
</style>

<style>
body {
  margin: 0;
  font-family: Arial, sans-serif;
  position: relative;
  overflow: hidden;
}

body::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: url("https://www.spain.info/export/sites/segtur/.content/imagenes/cabeceras-grandes/madrid/santiago-bernabeu_c-david-benito-shutterstock-s2468268069.jpg");
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  filter: blur(3px); /* Ajustează valoarea blur-ului după preferință */
  z-index: -1; /* Asigură-te că pseudo-elementul este în spatele conținutului */
}

#app {
  display: flex;
  flex-direction: column;
  height: 100vh;
  position: relative;
  z-index: 1; /* Asigură-te că conținutul este deasupra imaginii blurate */
}
</style>