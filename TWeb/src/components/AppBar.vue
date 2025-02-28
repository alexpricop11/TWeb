<script setup>
import {ref} from 'vue'

const isMenuOpen = ref(false)

const toggleMenu = () => {
  isMenuOpen.value = !isMenuOpen.value
}
</script>

<template>
  <div class="appbar">
    <router-link to="/" class="logo-container">
      <img
          src="https://upload.wikimedia.org/wikipedia/en/thumb/5/56/Real_Madrid_CF.svg/1200px-Real_Madrid_CF.svg.png"
          alt="Real Madrid Logo"
          width="50"
      />
    </router-link>

    <button class="hamburger" @click="toggleMenu">
      ☰
    </button>

    <div class="links" :class="{ 'open': isMenuOpen }">
      <router-link to="/teams" @click="toggleMenu">Teams</router-link>
      <router-link to="/league" @click="toggleMenu">League</router-link>
      <router-link to="/fixtures" @click="toggleMenu">Fixtures</router-link>
      <router-link to="/history" @click="toggleMenu">History</router-link>
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
  position: relative;
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

.links {
  display: flex;
  gap: 50px;
  font-size: 16px;
  justify-content: center;
  flex-grow: 1;
}

.links a {
  text-decoration: none;
  color: #ffffff;
  transition: color 0.3s;
}

.links a:hover {
  color: #000000;
}

.hamburger {
  display: none;
  background: none;
  border: none;
  font-size: 24px;
  color: #ffffff;
  cursor: pointer;
}

@media (max-width: 768px) {
  .appbar {
    flex-wrap: wrap;
    width: 100%;
    padding: 10px;
  }

  .hamburger {
    display: block;
  }

  .links {
    display: none;
    flex-direction: column;
    align-items: center;
    width: 100%;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #048be6;
    padding: 20px 0;
    z-index: 1000;
  }

  .links.open {
    display: flex;
  }

  .links a {
    font-size: 14px;
    margin: 10px 0;
  }

  .appbar img {
    height: 40px;
  }
}

@media (max-width: 480px) {
  .links a {
    font-size: 12px;
  }
}
</style>