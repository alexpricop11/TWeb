<script setup>
</script>

<template>
  <div class="appbar">
    <div class="links-left">
      <router-link to="/teams">Teams</router-link>
      <router-link to="/league">League</router-link>
    </div>

    <router-link to="/" class="logo-container">
      <img
          src="https://upload.wikimedia.org/wikipedia/en/thumb/5/56/Real_Madrid_CF.svg/1200px-Real_Madrid_CF.svg.png"
          alt="Real Madrid Logo"
          width="50"
      />
    </router-link>

    <div class="links-right">
      <router-link to="/fixtures">Fixtures</router-link>
      <router-link to="/history">History</router-link>
    </div>
  </div>
</template>

<style scoped>
.appbar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  background-color: #048be6;
  padding: 10px 20px;
  border-bottom: 2px solid #dcdcdc;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.logo-container {
  display: flex;
  align-items: center;
  text-decoration: none;
  color: inherit;
}

.appbar img {
  height: 60px;
}


.links-left, .links-right {
  display: flex;
  gap: 50px;
  font-size: 16px;
  width: 33%;
}

.links-left {
  justify-content: flex-end;
}

.links-right {
  justify-content: flex-start;
}

.links-left a, .links-right a {
  text-decoration: none;
  color: #ffffff;
  transition: color 0.3s;
}

.links-left a:hover, .links-right a:hover {
  color: #000000;
}
</style>