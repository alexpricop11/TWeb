<script setup>
import {ref, onMounted} from 'vue';
import {useRouter} from 'vue-router';

const isMenuOpen = ref(false);
const isUserMenuOpen = ref(false);
const router = useRouter();

const isLoggedIn = ref(!!localStorage.getItem('token'));

const checkLoginStatus = () => {
  isLoggedIn.value = !!localStorage.getItem('token');
};

onMounted(() => {
  window.addEventListener('storage', checkLoginStatus);

  const intervalId = setInterval(checkLoginStatus, 1000);

  return () => {
    window.removeEventListener('storage', checkLoginStatus);
    clearInterval(intervalId);
  };
});

const toggleMenu = () => {
  isMenuOpen.value = !isMenuOpen.value;
};

const toggleUserMenu = () => {
  isUserMenuOpen.value = !isUserMenuOpen.value;
};

const logout = () => {
  localStorage.removeItem('token');
  isLoggedIn.value = false;
  isUserMenuOpen.value = false;
  router.push('/');
};

const goToProfile = () => {
  isUserMenuOpen.value = false;
  router.push('/profile');
};

const goToFavorites = () => {
  isUserMenuOpen.value = false;
  router.push('/favorites');
};
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

    <div class="links" :class="{ 'open': isMenuOpen }">
      <router-link to="/teams" @click="toggleMenu">Teams</router-link>
      <router-link to="/league" @click="toggleMenu">League</router-link>
      <router-link to="/fixtures" @click="toggleMenu">Fixtures</router-link>
      <router-link to="/history" @click="toggleMenu">History</router-link>
    </div>

    <div class="user-area">
      <div class="user-icon" @click="isLoggedIn ? toggleUserMenu() : router.push('/auth')">
        <i :class="isLoggedIn ? 'fas fa-user' : 'fas fa-sign-in'"></i>
      </div>
      <div v-if="isLoggedIn && isUserMenuOpen" class="user-menu">
        <div class="menu-item" @click="goToProfile">Profile</div>
        <div class="menu-item" @click="goToFavorites">Favorites</div>
        <div class="menu-item" @click="logout">Logout</div>
      </div>
    </div>

    <button class="hamburger" @click="toggleMenu">
      ☰
    </button>
  </div>
</template>

<style scoped>
.appbar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  background-color: #048be6;
  padding: 10px 20px;
  border-bottom: 1px solid #dcdcdc;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  position: relative;
}

.logo-container {
  display: flex;
  align-items: center;
  text-decoration: none;
  color: inherit;
}

.appbar img {
  height: 50px;
}

.links {
  display: flex;
  gap: 40px;
  font-size: 16px;
  align-items: center;
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
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
  font-size: 20px;
  color: #ffffff;
  cursor: pointer;
  transition: transform 0.3s ease;
}

.hamburger:hover {
  transform: scale(1.1);
}

.user-area {
  display: flex;
  align-items: center;
  position: relative;
}

.user-icon {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 35px;
  height: 35px;
  background-color: #ffffff;
  border-radius: 50%;
  color: #048be6;
  text-decoration: none;
  transition: all 0.3s ease;
  cursor: pointer;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
}

.user-icon:hover {
  background-color: #e0e0e0;
  color: #0056b3;
  transform: scale(1.1);
}

.user-icon i {
  font-size: 16px;
}

.user-menu {
  position: absolute;
  top: 40px;
  right: 0;
  background-color: #ffffff;
  border-radius: 6px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
  min-width: 110px;
  z-index: 1000;
  font-size: 14px;
}

.menu-item {
  padding: 8px 12px;
  color: #0056b3;
  cursor: pointer;
  transition: background-color 0.3s;
}

.menu-item:hover {
  background-color: #f8f9fa;
}

/* Responsive Design */
@media (max-width: 768px) {
  .appbar {
    flex-wrap: wrap;
    width: 100%;
    padding: 8px 15px;
  }

  .hamburger {
    display: block;
  }

  .links {
    display: none;
    flex-direction: column;
    align-items: center;
    width: 100%;
    position: static;
    background-color: #048be6;
    padding: 10px 0;
    z-index: 1000;
    opacity: 0;
    transform: translateY(-10px);
    transition: all 0.2s ease;
  }

  .links.open {
    display: flex;
    opacity: 1;
    transform: translateY(0);
  }

  .links a {
    font-size: 14px;
    margin: 8px 0;
    padding: 8px 15px;
    border-radius: 4px;
    background-color: rgba(255, 255, 255, 0.15);
    transition: background-color 0.2s, transform 0.2s;
  }

  .links a:hover {
    background-color: rgba(255, 255, 255, 0.3);
    transform: scale(1.03);
  }

  .user-area {
    display: flex;
  }

  .links.open ~ .user-area {
    display: flex;
    justify-content: center;
    width: 100%;
    padding: 8px 0;
    background-color: #048be6;
    position: static;
    opacity: 0;
    transform: translateY(-10px);
    transition: all 0.2s ease 0.1s;
  }

  .links.open ~ .user-area {
    opacity: 1;
    transform: translateY(0);
  }

  .user-menu {
    top: 100%;
    right: 50%;
    transform: translateX(50%);
    background-color: #ffffff;
    border-radius: 6px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
  }

  .appbar img {
    height: 35px;
  }

  .user-icon {
    width: 30px;
    height: 30px;
    margin: 5px 0;
  }

  .user-icon i {
    font-size: 14px;
  }
}

@media (max-width: 480px) {
  .links a {
    font-size: 12px;
    padding: 6px 12px;
  }

  .user-icon {
    width: 28px;
    height: 28px;
  }

  .user-icon i {
    font-size: 12px;
  }

  .user-menu {
    min-width: 90px;
  }

  .menu-item {
    padding: 6px 10px;
    font-size: 12px;
  }
}
</style>