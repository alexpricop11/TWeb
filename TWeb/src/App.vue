<template>
  <div id="app">
    <div class="content">
      <router-view/>
    </div>
  </div>
</template>

<script>

</script>

<style scoped>

</style>

<style>
body {
  margin: 0;
  font-family: Arial, sans-serif;
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  background-image: url("https://www.spain.info/export/sites/segtur/.content/imagenes/cabeceras-grandes/madrid/santiago-bernabeu_c-david-benito-shutterstock-s2468268069.jpg");
}

#app {
  display: flex;
  flex-direction: column;
  height: 100vh;
}
</style>
