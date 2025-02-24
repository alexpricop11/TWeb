<script setup>

</script>

<template>
  <div class="fixtures-container">
    <h1>Program Meciuri</h1>
    <ul>
      <li><strong>15 februarie 2025</strong> - <em>CA Osasuna</em> - <span>Ora: 17:15</span></li>
      <li><strong>19 februarie 2025</strong> - <em>Manchester City</em> - <span>Ora: 20:00</span></li>
      <li><strong>23 februarie 2025</strong> - <em>Girona FC</em> - <span>Ora: 15:15</span></li>
      <li><strong>26 februarie 2025</strong> - <em>Real Sociedad</em> - <span>Ora: 17:00</span></li>
      <li><strong>2 martie 2025</strong> - <em>Real Betis</em> - <span>Ora: 20:30</span></li>
    </ul>
  </div>
</template>

<style scoped>
.fixtures-container {
  background-size: cover;
  background-position: center;
  padding: 20px;
  color: white;
  text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.7);
  font-family: Arial, sans-serif;
  border: 2px solid rgba(255, 255, 255, 0.5);
  border-radius: 10px;
}

h1 {
  font-size: 2.5rem;
  margin-bottom: 20px;
  text-align: center;
  color: #ffcc00;
}

ul {
  list-style-type: none;
  padding: 0;
}

li {
  margin-bottom: 15px;
  font-size: 1.3rem;
  padding: 10px;
  background: rgba(0, 0, 0, 0.6);
  border-radius: 5px;
}

span {
  color: #ffcc00;
}
</style>