<script setup>
import {ref} from 'vue'

const fixtures = ref([
  {
    logo: 'https://upload.wikimedia.org/wikipedia/en/thumb/1/13/Real_betis_logo.svg/1200px-Real_betis_logo.svg.png',
    alt: 'Real Betis logo',
    date: '1 martie 2025',
    team: 'Real Betis',
    time: '17:30',
    competition: 'La Liga'
  },
  {
    logo: 'https://upload.wikimedia.org/wikipedia/en/thumb/e/eb/Manchester_City_FC_badge.svg/1200px-Manchester_City_FC_badge.svg.png',
    alt: 'Manchester City logo',
    date: '4 martie 2025',
    team: 'Manchester City',
    time: '20:00',
    competition: 'Champions League'
  },
  {
    logo: 'https://upload.wikimedia.org/wikipedia/en/thumb/3/3b/Sevilla_FC_logo.svg/1200px-Sevilla_FC_logo.svg.png',
    alt: 'Sevilla FC logo',
    date: '9 martie 2025',
    team: 'Sevilla',
    time: '15:15',
    competition: 'La Liga'
  },
  {
    logo: 'https://upload.wikimedia.org/wikipedia/en/thumb/e/eb/Manchester_City_FC_badge.svg/1200px-Manchester_City_FC_badge.svg.png',
    alt: 'Manchester City logo',
    date: '13 martie 2025',
    team: 'Manchester City',
    time: '21:00',
    competition: 'Champions League'
  },
  {
    logo: 'https://upload.wikimedia.org/wikipedia/tr/d/db/Rayovallecano.png',
    alt: 'Rayo Vallecano logo',
    date: '16 martie 2025',
    team: 'Rayo Vallecano',
    time: '18:30',
    competition: 'La Liga'
  },
  {
    logo: 'https://upload.wikimedia.org/wikipedia/en/thumb/b/b8/Club_Deportivo_Leganés_logo.svg/1200px-Club_Deportivo_Leganés_logo.svg.png',
    alt: 'CD Leganes logo',
    date: '30 martie 2025',
    team: 'CD Leganes',
    time: '17:00',
    competition: 'La Liga'
  },
  {
    logo: 'https://upload.wikimedia.org/wikipedia/en/thumb/f/f1/Real_Sociedad_logo.svg/1200px-Real_Sociedad_logo.svg.png',
    alt: 'Real Sociedad logo',
    date: '1 aprilie 2025',
    team: 'Real Sociedad',
    time: '20:00',
    competition: 'Copa del Rey'
  },
  {
    logo: 'https://upload.wikimedia.org/wikipedia/en/thumb/c/ce/Valenciacf.svg/1200px-Valenciacf.svg.png',
    alt: 'Valencia CF logo',
    date: '6 aprilie 2025',
    team: 'Valencia',
    time: '18:30',
    competition: 'La Liga'
  },
  {
    logo: 'https://upload.wikimedia.org/wikipedia/en/thumb/f/f8/Deportivo_Alaves_logo_%282020%29.svg/1200px-Deportivo_Alaves_logo_%282020%29.svg.png',
    alt: 'Deportivo Alaves logo',
    date: '13 aprilie 2025',
    team: 'Deportivo Alaves',
    time: '15:15',
    competition: 'La Liga'
  },
  {
    logo: 'https://upload.wikimedia.org/wikipedia/en/thumb/9/98/Club_Athletic_Bilbao_logo.svg/1200px-Club_Athletic_Bilbao_logo.svg.png',
    alt: 'Athletic Bilbao logo',
    date: '20 aprilie 2025',
    team: 'Athletic Bilbao',
    time: '20:00',
    competition: 'La Liga'
  },
  {
    logo: 'https://upload.wikimedia.org/wikipedia/en/thumb/4/46/Getafe_logo.svg/1200px-Getafe_logo.svg.png',
    alt: 'Getafe CF logo',
    date: '23 aprilie 2025',
    team: 'Getafe',
    time: '18:30',
    competition: 'La Liga'
  },
  {
    logo: 'https://upload.wikimedia.org/wikipedia/en/thumb/1/12/RC_Celta_de_Vigo_logo.svg/1200px-RC_Celta_de_Vigo_logo.svg.png',
    alt: 'Celta Vigo logo',
    date: '4 mai 2025',
    team: 'Celta Vigo',
    time: '17:00',
    competition: 'La Liga'
  },
  {
    logo: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjjEff5OUSLgsahBGM46yHJ7ZY9TaXoVhrUA&s',
    alt: 'FC Barcelona logo',
    date: '11 mai 2025',
    team: 'FC Barcelona',
    time: '20:00',
    competition: 'La Liga'
  },
  {
    logo: 'https://upload.wikimedia.org/wikipedia/en/thumb/e/e0/Rcd_mallorca.svg/1200px-Rcd_mallorca.svg.png',
    alt: 'RCD Mallorca logo',
    date: '14 mai 2025',
    team: 'Mallorca',
    time: '18:30',
    competition: 'La Liga'
  },
  {
    logo: 'https://upload.wikimedia.org/wikipedia/en/thumb/3/3b/Sevilla_FC_logo.svg/1200px-Sevilla_FC_logo.svg.png',
    alt: 'Sevilla FC logo',
    date: '18 mai 2025',
    team: 'Sevilla',
    time: '17:00',
    competition: 'La Liga'
  },
  {
    logo: 'https://upload.wikimedia.org/wikipedia/en/thumb/f/f1/Real_Sociedad_logo.svg/1200px-Real_Sociedad_logo.svg.png',
    alt: 'Real Sociedad logo',
    date: '25 mai 2025',
    team: 'Real Sociedad',
    time: '20:00',
    competition: 'La Liga'
  },
])
</script>

<template>
  <div class="fixtures-container">
    <h1>Program Meciuri</h1>
    <ul>
      <li v-for="fixture in fixtures" :key="fixture.date + fixture.team">
        <img :src="fixture.logo" :alt="fixture.alt" class="team-logo"/>
        <strong>{{ fixture.date }}</strong> - <em>{{ fixture.team }}</em> - {{ fixture.competition }} -
        <span>Ora: {{ fixture.time }}</span>
      </li>
    </ul>
  </div>
</template>

<style scoped>
body, html {
  margin: 0;
  padding: 0;
  width: 100%;
  overflow-x: hidden;
}

.fixtures-container {
  width: 100%;
  box-sizing: border-box;
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
  margin: 0;
}

li {
  margin-bottom: 15px;
  font-size: 1.3rem;
  padding: 10px;
  background: rgba(0, 0, 0, 0.6);
  border-radius: 5px;
  display: flex;
  align-items: center;
  gap: 10px;
}

.team-logo {
  width: 40px;
  height: 40px;
  object-fit: contain;
}

span {
  color: #ffcc00;
}

@media (max-width: 768px) {
  h1 {
    font-size: 2rem;
  }

  li {
    font-size: 1.1rem;
    flex-direction: column;
    align-items: flex-start;
  }

  .team-logo {
    width: 30px;
    height: 30px;
  }
}

@media (max-width: 480px) {
  h1 {
    font-size: 1.8rem;
  }

  li {
    font-size: 1rem;
  }

  .team-logo {
    width: 25px;
    height: 25px;
  }
}
</style>