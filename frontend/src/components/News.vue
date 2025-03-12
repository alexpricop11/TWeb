<script setup>
import {ref, computed} from 'vue';

const newsItems = ref([
  {
    image: 'https://e0.365dm.com/25/01/2048x1152/skysports-football-champions-league_6815284.jpg?20250131094811',
    alt: 'Victorie dramatică în fața Manchester City',
    title: '⚽ Victorie dramatică în fața Manchester City',
    text: 'Real Madrid a învins Manchester City cu scorul de <strong>3-2</strong> în prima manșă...',
    link: 'https://www.theguardian.com/football/live/2025/feb/11/manchester-city-v-real-madrid-champions-league-playoff-round-first-leg-live?utm_source=chatgpt.com'
  },
  {
    image: 'https://img.asmedia.epimg.net/resizer/v2/4WRDGF4PHFC5VEM3MMH4WMQSCM.png?auth=23f352f13159b961efaed4ca2f8cc4e29d15b17b4105987f2ffb4ef65376aa20&width=360',
    alt: 'Mesaj provocator al suporterilor lui City',
    title: '🔥 Mesaj provocator al suporterilor lui City',
    text: 'Înaintea meciului cu Manchester City, suporterii englezi au afișat o pancartă provocatoare...',
    link: 'https://as.com/futbol/champions/no-era-por-vinicius-era-por-florentino-n/?utm_source=chatgpt.com'
  },
  {
    image: 'https://imagenes.elpais.com/resizer/v2/BWBF2IQLB7F66IGUFK3CR5ZUSA.jpg?auth=e57340054ed79aa5ebd83ec042b739257bd891395667e95ec19959de1bde4ff3&width=414',
    alt: 'Record de șuturi stabilit de Real Madrid',
    title: '🏆 Real Madrid stabilește un nou record de șuturi',
    text: 'Real Madrid a efectuat <strong>20</strong> de șuturi, cel mai mare număr permis vreodată...',
    link: 'https://elpais.com/deportes/futbol/2025-02-11/ningun-equipo-le-habia-disparado-mas-al-manchester-city-de-pep-guardiola.html?utm_source=chatgpt.com'
  },
  {
    image: 'https://cadenaser.com/resizer/v2/https%3A%2F%2Fsdmedia.playser.cadenaser.com%2Fplayser%2Fimage%2F20252%2F12%2F1739322173434_1739322238_asset_still.png?auth=7080d0efb2ca90ff05e95a43b458b3a6102046bdeab6bf60d0a830aca4127172&quality=70&width=736&height=414&smart=true',
    alt: 'Analiză a succesului împotriva City',
    title: '🔍 Analiză a succesului împotriva City',
    text: 'Fostul jucător Pedja Mijatović și jurnalistul Tomás Roncero au discutat importanța apărării solide...',
    link: 'https://cadenaser.com/nacional/2025/02/12/mijatovic-y-roncero-coinciden-en-la-clave-de-la-victoria-del-real-madrid-ante-el-city-asi-pueden-ganar-a-cualquiera-cadena-ser/?utm_source=chatgpt.com'
  },
  {
    image: 'https://media.dcnews.ro/image/202502/w1200/minge-de-fotbal_64683600.jpg',
    alt: 'Înfrângere în La Liga',
    title: '😢 Înfrângere în La Liga',
    text: 'Real Madrid a suferit a treia înfrângere din acest sezon în La Liga...',
    link: 'https://www.dcnews.ro/real-madrid-sufera-al-treilea-esec-al-sezo' +
        'nului-in-campionatul-spaniei_985196.html?utm_source=chatgpt.com'
  }
])

const searchQuery = ref('');

const filteredNews = computed(() => {
  return newsItems.value.filter(news =>
      news.title.toLowerCase().includes(searchQuery.value.toLowerCase()) ||
      news.text.toLowerCase().includes(searchQuery.value.toLowerCase())
  );
});
</script>

<template>
  <div>
    <div class="search-bar">
      <input
          type="text"
          v-model="searchQuery"
          placeholder="Caută știri..."
          class="search-input"
          @keyup.enter="searchQuery"
      />
    </div>
    <ul class="news-list">
      <li v-for="news in filteredNews" :key="news.title" class="news-item">
        <img :src="news.image" :alt="news.alt" class="news-image"/>
        <h2>{{ news.title }}</h2>
        <p v-html="news.text"></p>
        <a :href="news.link" target="_blank" class="news-link">Citește mai mult ➡️</a>
      </li>
    </ul>
  </div>
</template>

<style scoped>
.search-bar {
  display: flex;
  justify-content: center;
  margin-bottom: 30px;
  padding-top: 10px;
}

.search-input {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 15px;
  font-size: 1rem;
  outline: none;
  transition: border-color 0.3s ease;
  width: 50%;
}

.search-input:focus {
  border-color: #000000;
}


.news-list {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  padding: 0;
  list-style: none;
  justify-content: center;
}

.news-item {
  border: 1px solid #ccc;
  padding: 20px;
  border-radius: 15px;
  width: calc(30% - 20px);
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
  background-image: linear-gradient(to bottom right, #ffffff, #f0f0f0);
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.news-item:hover {
  transform: translateY(-8px);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
}

.news-image {
  width: 100%;
  height: auto;
  border-radius: 10px;
  margin-bottom: 15px;
}

.news-link {
  text-decoration: none;
  color: #0056b3;
  font-weight: bold;
  font-size: 0.95rem;
  margin-top: 15px;
  background-color: #e9f1ff;
  padding: 10px 15px;
  border-radius: 5px;
  transition: background-color 0.3s ease, color 0.3s ease;
}

.news-link:hover {
  color: #fff;
  background-color: #007bff;
  text-decoration: none;
}

h2 {
  font-size: 1.25rem;
  margin: 10px 0;
  color: #333;
  font-weight: bold;
}

p {
  font-size: 0.95rem;
  color: #555;
}

@media (max-width: 768px) {
  .news-item {
    width: calc(50% - 20px);
  }

  .search-input {
    width: 200px;
  }
}

@media (max-width: 480px) {
  .news-item {
    width: 100%;
  }

  .search-bar {
    flex-direction: column;
    align-items: center;
  }

  .search-input {
    width: 100%;
  }
}
</style>