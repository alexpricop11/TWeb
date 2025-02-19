<script setup>
</script>

<template>
  <div class="appbar">
    <img
        src="https://upload.wikimedia.org/wikipedia/en/thumb/5/56/Real_Madrid_CF.svg/1200px-Real_Madrid_CF.svg.png"
        alt="Real Madrid Logo"
        width="50"
    />
    <h1>Real Madrid</h1>
    <div class="links">
      <router-link to="/fixtures">Fixtures</router-link>
      <router-link to="/league">League</router-link>
      <router-link to="/teams">Teams</router-link>
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

.appbar img {
  height: 60px;
}

.appbar h1 {
  flex: 1;
  text-align: start;
  font-size: 24px;
  margin: 10px;
  color: #ffffff;
}

.links {
  display: flex;
  gap: 50px;
  font-size: 16px;
}

.links a {
  text-decoration: none;
  color: #ffffff;
  transition: color 0.3s;
}

.links a:hover {
  color: #000000;
}
</style>