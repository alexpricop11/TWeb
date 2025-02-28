<script setup>
import {ref} from 'vue'

const historySections = ref([
  {
    title: 'Începuturile Clubului',
    image: 'https://blendup.art/wp-content/uploads/2022/05/significado_tatuagem_real_madrid_1-1024x919.jpg',
    alt: 'Fondare Real Madrid',
    width: 250,
    text: 'Real Madrid Club de Fútbol a fost fondat pe 6 martie 1902 sub numele de Madrid Football Club. În 1920, regele Alfonso al XIII-lea al Spaniei a acordat clubului titlul de "Real" (Regal), devenind astfel Real Madrid Club de Fútbol.'
  },
  {
    title: 'Perioada de Aur în Europa',
    image: 'https://sport1.md/wp-content/uploads/2023/02/real-madrid.jpg',
    alt: 'Era Galacticos',
    width: 350,
    text: 'În anii 1950, Real Madrid a dominat competițiile europene, câștigând cinci ediții consecutive ale Cupei Campionilor Europeni între 1956 și 1960.'
  },
  {
    title: 'Era "Galacticos"',
    image: 'https://fotografias.larazon.es/clipping/cmsimages02/2023/02/25/04FFBFFF-657F-4756-B001-6D4FFDB337C0/descubre-historia-real-madrid-atletico-traves-sus-escudos_69.jpg?crop=3264%2C1836%2Cx0%2Cy157&format=jpg&height=720&optimize=low&width=1280',
    alt: 'Era Galacticos',
    width: 350,
    text: 'La începutul anilor 2000, sub conducerea președintelui Florentino Pérez, Real Madrid a adoptat politica "Galacticos", aducând jucători de renume mondial precum Zinedine Zidane, Ronaldo Nazário, Luís Figo și David Beckham.'
  },
  {
    title: 'Succesul Recent în Liga Campionilor',
    image: 'https://jurnalul.ro/thumbs/amp/2024/05/09/carlo-ancelotti-real-madrid-finala-liga-campionilor-18897617.jpg',
    alt: 'Succes în Liga Campionilor',
    width: 350,
    text: 'În ultimii ani, Real Madrid a continuat să impresioneze în competițiile europene, câștigând Liga Campionilor UEFA de patru ori între 2014 și 2018.'
  },
  {
    title: 'Stadionul Santiago Bernabéu',
    image: 'https://wallpapercave.com/wp/wp10137224.jpg',
    alt: 'Stadionul Santiago Bernabéu',
    width: 350,
    text: 'Stadionul Santiago Bernabéu, inaugurat în 1947, este casa legendară a Real Madrid. Cu o capacitate de 81.044 de locuri, acesta a fost martorul multor momente istorice și este considerat unul dintre cele mai iconice stadioane din lume.'
  }
])
</script>

<template>
  <div class="history-content">
    <h1>Istoria Real Madrid</h1>
    <section v-for="section in historySections" :key="section.title">
      <h2>{{ section.title }}</h2>
      <img :src="section.image" :alt="section.alt" :width="section.width"/>
      <p>{{ section.text }}</p>
    </section>
  </div>
</template>

<style scoped>
body, html {
  margin: 0;
  padding: 0;
  width: 100%;
  overflow-x: hidden;
}

.history-content {
  font-family: 'Poppins', sans-serif;
  color: #333;
  background-color: #f0f0f5;
  padding: 40px 20px;
  border-radius: 10px;
  width: 100%;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

h1 {
  text-align: center;
  font-size: 36px;
  margin-bottom: 40px;
  color: #2c3e50;
  letter-spacing: 1px;
  font-weight: bold;
}

section {
  margin-bottom: 40px;
  padding: 20px;
  background-color: #ffffff;
  border-radius: 10px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
}

section img {
  display: block;
  max-width: 100%;
  height: auto;
  margin: 20px auto;
  border-radius: 10px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
}

section h2 {
  font-size: 28px;
  margin-bottom: 15px;
  color: #34495e;
  border-left: 4px solid #3498db;
  padding-left: 10px;
  font-weight: bold;
}

section p {
  font-size: 18px;
  margin: 15px 0;
  line-height: 1.8;
  color: #555;
}

@media (max-width: 768px) {
  h1 {
    font-size: 32px;
  }

  section h2 {
    font-size: 24px;
  }

  section p {
    font-size: 16px;
  }
}

@media (max-width: 480px) {
  h1 {
    font-size: 28px;
  }

  section h2 {
    font-size: 20px;
  }

  section p {
    font-size: 14px;
  }
}
</style>