<script setup>

import News from "@/components/News.vue";
</script>

<template>
  <div class="title">
    <h1 style="text-align: center;">Real Madrid</h1>
    <img src="https://upload.wikimedia.org/wikipedia/en/thumb/5/56/Real_Madrid_CF.svg/1200px-Real_Madrid_CF.svg.png"
         alt="" width="100"/>
    <div class="links">
      <router-link to="/fixtures">Fixtures</router-link>
      -
      <router-link to="/league">League</router-link>
      -
      <router-link to="/teams">Teams</router-link>
      -
      <router-link to="/history">History</router-link>
    </div>
    <News/>
  </div>
</template>


<style scoped>

</style>