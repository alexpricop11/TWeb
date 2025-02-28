<script setup>
import {ref} from 'vue'

const teams = ref([
  {
    position: 1,
    name: 'Real Madrid',
    matches: 22,
    wins: 15,
    draws: 4,
    losses: 3,
    goalsScored: 50,
    goalsConceded: 21,
    goalDifference: '+29',
    points: 49
  },
  {
    position: 2,
    name: 'Atlético Madrid',
    matches: 22,
    wins: 14,
    draws: 6,
    losses: 2,
    goalsScored: 37,
    goalsConceded: 14,
    goalDifference: '+23',
    points: 48
  },
  {
    position: 3,
    name: 'FC Barcelona',
    matches: 22,
    wins: 14,
    draws: 3,
    losses: 5,
    goalsScored: 60,
    goalsConceded: 24,
    goalDifference: '+36',
    points: 45
  },
  {
    position: 4,
    name: 'Athletic Bilbao',
    matches: 22,
    wins: 11,
    draws: 8,
    losses: 3,
    goalsScored: 33,
    goalsConceded: 20,
    goalDifference: '+13',
    points: 41
  },
  {
    position: 5,
    name: 'Villarreal',
    matches: 22,
    wins: 10,
    draws: 7,
    losses: 5,
    goalsScored: 44,
    goalsConceded: 33,
    goalDifference: '+11',
    points: 37
  },
  {
    position: 6,
    name: 'Rayo Vallecano',
    matches: 22,
    wins: 8,
    draws: 8,
    losses: 6,
    goalsScored: 26,
    goalsConceded: 24,
    goalDifference: '+2',
    points: 32
  },
  {
    position: 7,
    name: 'Girona',
    matches: 22,
    wins: 9,
    draws: 4,
    losses: 9,
    goalsScored: 31,
    goalsConceded: 30,
    goalDifference: '+1',
    points: 31
  },
  {
    position: 8,
    name: 'Osasuna',
    matches: 22,
    wins: 7,
    draws: 9,
    losses: 6,
    goalsScored: 27,
    goalsConceded: 31,
    goalDifference: '-4',
    points: 30
  },
  {
    position: 9,
    name: 'Mallorca',
    matches: 22,
    wins: 9,
    draws: 3,
    losses: 10,
    goalsScored: 19,
    goalsConceded: 28,
    goalDifference: '-9',
    points: 30
  },
  {
    position: 10,
    name: 'Real Betis',
    matches: 22,
    wins: 7,
    draws: 8,
    losses: 7,
    goalsScored: 25,
    goalsConceded: 28,
    goalDifference: '-3',
    points: 29
  },
  {
    position: 11,
    name: 'Real Sociedad',
    matches: 22,
    wins: 8,
    draws: 4,
    losses: 10,
    goalsScored: 18,
    goalsConceded: 19,
    goalDifference: '-1',
    points: 28
  },
  {
    position: 12,
    name: 'Sevilla',
    matches: 22,
    wins: 7,
    draws: 7,
    losses: 8,
    goalsScored: 24,
    goalsConceded: 30,
    goalDifference: '-6',
    points: 28
  },
  {
    position: 13,
    name: 'Celta Vigo',
    matches: 22,
    wins: 7,
    draws: 4,
    losses: 11,
    goalsScored: 31,
    goalsConceded: 35,
    goalDifference: '-4',
    points: 25
  },
  {
    position: 14,
    name: 'Getafe',
    matches: 22,
    wins: 5,
    draws: 9,
    losses: 8,
    goalsScored: 17,
    goalsConceded: 17,
    goalDifference: '0',
    points: 24
  },
  {
    position: 15,
    name: 'Las Palmas',
    matches: 22,
    wins: 6,
    draws: 5,
    losses: 11,
    goalsScored: 27,
    goalsConceded: 30,
    goalDifference: '-3',
    points: 23
  },
  {
    position: 16,
    name: 'Leganés',
    matches: 22,
    wins: 5,
    draws: 8,
    losses: 9,
    goalsScored: 19,
    goalsConceded: 30,
    goalDifference: '-11',
    points: 23
  },
  {
    position: 17,
    name: 'Deportivo Alavés',
    matches: 22,
    wins: 5,
    draws: 6,
    losses: 11,
    goalsScored: 25,
    goalsConceded: 34,
    goalDifference: '-9',
    points: 21
  },
  {
    position: 18,
    name: 'Espanyol',
    matches: 22,
    wins: 6,
    draws: 5,
    losses: 11,
    goalsScored: 21,
    goalsConceded: 33,
    goalDifference: '-12',
    points: -3
  },
  {
    position: 19,
    name: 'Valencia',
    matches: 22,
    wins: 4,
    draws: 7,
    losses: 11,
    goalsScored: 22,
    goalsConceded: 37,
    goalDifference: '-15',
    points: 19
  },
  {
    position: 20,
    name: 'Real Valladolid',
    matches: 22,
    wins: 4,
    draws: 3,
    losses: 15,
    goalsScored: 15,
    goalsConceded: 47,
    goalDifference: '-32',
    points: 15
  }
])

// Variabile reactive pentru sortare
const sortKey = ref('') // Coloana după care se sortează
const sortOrder = ref(1) // 1 pentru ascendent, -1 pentru descendent

// Funcție de sortare
const sortTable = (key) => {
  if (sortKey.value === key) {
    // Inversează ordinea dacă e aceeași coloană
    sortOrder.value = -sortOrder.value
  } else {
    // Sortează după o nouă coloană, implicit ascendent
    sortKey.value = key
    sortOrder.value = 1
  }

  teams.value.sort((a, b) => {
    let aValue = a[key]
    let bValue = b[key]

    // Tratează cazurile speciale (goalDifference)
    if (key === 'goalDifference') {
      aValue = parseInt(aValue) || 0 // Transformă în număr, 0 dacă e invalid
      bValue = parseInt(bValue) || 0
      return sortOrder.value * (aValue - bValue)
    }

    // Sortare pentru stringuri (ex. name)
    if (typeof aValue === 'string') {
      return sortOrder.value * aValue.localeCompare(bValue)
    }

    // Sortare pentru numere (ex. matches, wins, points)
    return sortOrder.value * (aValue - bValue)
  })
}
</script>

<template>
  <div>
    <img
        src="https://tmssl.akamaized.net//images/logo/header/es1.png?lm=1725974302"
        alt="Logo La Liga"
        class="liga-logo"
    />
    <table>
      <thead>
      <tr>
        <th @click="sortTable('position')">Loc {{ sortKey === 'position' ? (sortOrder === 1 ? '↑' : '↓') : '' }}</th>
        <th @click="sortTable('name')">Echipa {{ sortKey === 'name' ? (sortOrder === 1 ? '↑' : '↓') : '' }}</th>
        <th @click="sortTable('matches')">Meciuri {{ sortKey === 'matches' ? (sortOrder === 1 ? '↑' : '↓') : '' }}</th>
        <th @click="sortTable('wins')">Victorii {{ sortKey === 'wins' ? (sortOrder === 1 ? '↑' : '↓') : '' }}</th>
        <th @click="sortTable('draws')">Egaluri {{ sortKey === 'draws' ? (sortOrder === 1 ? '↑' : '↓') : '' }}</th>
        <th @click="sortTable('losses')">Înfrângeri {{ sortKey === 'losses' ? (sortOrder === 1 ? '↑' : '↓') : '' }}</th>
        <th @click="sortTable('goalsScored')">Goluri marcate
          {{ sortKey === 'goalsScored' ? (sortOrder === 1 ? '↑' : '↓') : '' }}
        </th>
        <th @click="sortTable('goalsConceded')">Goluri primite
          {{ sortKey === 'goalsConceded' ? (sortOrder === 1 ? '↑' : '↓') : '' }}
        </th>
        <th @click="sortTable('goalDifference')">Golaveraj
          {{ sortKey === 'goalDifference' ? (sortOrder === 1 ? '↑' : '↓') : '' }}
        </th>
        <th @click="sortTable('points')">Puncte {{ sortKey === 'points' ? (sortOrder === 1 ? '↑' : '↓') : '' }}</th>
      </tr>
      </thead>
      <tbody>
      <tr v-for="team in teams" :key="team.position">
        <td>{{ team.position }}</td>
        <td>{{ team.name }}</td>
        <td>{{ team.matches }}</td>
        <td>{{ team.wins }}</td>
        <td>{{ team.draws }}</td>
        <td>{{ team.losses }}</td>
        <td>{{ team.goalsScored }}</td>
        <td>{{ team.goalsConceded }}</td>
        <td>{{ team.goalDifference }}</td>
        <td>{{ team.points }}</td>
      </tr>
      </tbody>
    </table>
  </div>
</template>

<style scoped>
.liga-logo {
  display: block;
  margin: 0 auto;
  max-width: 150px;
}

table {
  width: 100%;
  border-collapse: collapse;
  margin: 20px auto;
  text-align: center;
}

thead {
  background-color: rgba(0, 140, 186, 0);
  color: #fff;
}

th, td {
  border: 1px solid #ddd;
  text-align: center;
  padding: 10px;
}

tr {
  background-color: rgb(255, 255, 255);
}

tbody td {
  color: #000000;
}

th {
  font-weight: bold;
  color: #000000;
  text-transform: uppercase;
  cursor: pointer;
}

th:hover {
  background-color: #f5f5f5;
}

@media (max-width: 768px) {
  table {
    width: 100%;
  }

  th, td {
    padding: 8px; /* Reduce padding-ul */
    font-size: 14px; /* Reduce dimensiunea fontului */
  }

  .liga-logo {
    max-width: 120px; /* Logo mai mic pe mobil */
  }
}

@media (max-width: 480px) {
  table, thead, tbody, th, td, tr {
    display: block; /* Transformă tabelul în blocuri */
  }

  thead tr {
    position: absolute;
    top: -9999px; /* Ascunde antetul, dar păstrează accesibilitatea */
    left: -9999px;
  }

  tr {
    margin-bottom: 15px; /* Spațiu între echipe */
    border: 1px solid #ddd; /* Chenar pentru separare */
  }

  td {
    border: none;
    position: relative;
    padding-left: 50%; /* Spațiu pentru etichetă */
    text-align: left;
  }

  td:before {
    content: attr(data-label); /* Adaugă eticheta coloanei */
    position: absolute;
    left: 10px;
    width: 45%;
    padding-right: 10px;
    font-weight: bold;
    white-space: nowrap;
  }

  /* Etichete pentru fiecare coloană */
  td:nth-child(1):before {
    content: "Loc";
  }

  td:nth-child(2):before {
    content: "Echipa";
  }

  td:nth-child(3):before {
    content: "Meciuri";
  }

  td:nth-child(4):before {
    content: "Victorii";
  }

  td:nth-child(5):before {
    content: "Egaluri";
  }

  td:nth-child(6):before {
    content: "Înfrângeri";
  }

  td:nth-child(7):before {
    content: "Goluri marcate";
  }

  td:nth-child(8):before {
    content: "Goluri primite";
  }

  td:nth-child(9):before {
    content: "Golaveraj";
  }

  td:nth-child(10):before {
    content: "Puncte";
  }

  th {
    cursor: default; /* Dezactivează cursorul pe mobil, sortarea e mai puțin practică */
  }
}
</style>