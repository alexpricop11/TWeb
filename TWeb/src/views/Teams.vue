<script setup>
import {ref} from 'vue'

const players = ref([
  {
    image: 'https://img.a.transfermarkt.technology/portrait/medium/108390-1717280733.jpg?lm=1',
    number: 1,
    name: 'Thibaut Courtois',
    position: 'Goalkeeper'
  },
  {
    image: 'https://img.a.transfermarkt.technology/portrait/medium/404839-1701294131.jpg?lm=1',
    number: 13,
    name: 'Andriy Lunin',
    position: 'Goalkeeper'
  },
  {
    image: 'https://img.a.transfermarkt.technology/portrait/medium/401530-1719653438.jpg?lm=1',
    number: 3,
    name: 'Éder Militão',
    position: 'Centre-Back'
  },
  {
    image: 'https://img.a.transfermarkt.technology/portrait/medium/86202-1684484602.jpg?lm=1',
    number: 22,
    name: 'Antonio Rüdiger',
    position: 'Centre-Back'
  },
  {
    image: 'https://img.a.transfermarkt.technology/portrait/medium/59016-1684921582.jpeg?lm=1',
    number: 4,
    name: 'David Alaba',
    position: 'Centre-Back'
  },
  {
    image: 'https://img.a.transfermarkt.technology/portrait/medium/935245-1731168094.jpg?lm=1',
    number: 35,
    name: 'Raúl Asencio',
    position: 'Centre-Back'
  },
  {
    image: 'https://img.a.transfermarkt.technology/portrait/medium/251896-1684241186.jpg?lm=1',
    number: 18,
    name: 'Jesús Vallejo',
    position: 'Centre-Back'
  },
  {
    image: 'https://img.a.transfermarkt.technology/portrait/medium/291417-1701294025.jpg?lm=1',
    number: 23,
    name: 'Ferland Mendy',
    position: 'Left-Back'
  },
  {
    image: 'https://img.a.transfermarkt.technology/portrait/medium/341264-1688119965.jpg?lm=1',
    number: 20,
    name: 'Fran García',
    position: 'Left-Back'
  },
  {
    image: 'https://img.a.transfermarkt.technology/portrait/medium/138927-1721026790.jpg?lm=1',
    number: 2,
    name: 'Daniel Carvajal',
    position: 'Right-Back'
  },
  {
    image: 'https://img.a.transfermarkt.technology/portrait/medium/221316-1536655786.jpg?lm=1',
    number: 17,
    name: 'Lucas Vázquez',
    position: 'Right-Back'
  },
  {
    image: 'https://img.a.transfermarkt.technology/portrait/medium/413112-1668500754.jpg?lm=1',
    number: 14,
    name: 'Aurélien Tchouaméni',
    position: 'Defensive Midfield'
  },
  {
    image: 'https://img.a.transfermarkt.technology/portrait/medium/369081-1731018042.jpg?lm=1',
    number: 8,
    name: 'Federico Valverde',
    position: 'Central Midfield'
  },
  {
    image: 'https://img.a.transfermarkt.technology/portrait/medium/640428-1668500874.jpg?lm=1',
    number: 6,
    name: 'Eduardo Camavinga',
    position: 'Central Midfield'
  },
  {
    image: 'https://img.a.transfermarkt.technology/portrait/medium/27992-1687776160.jpg?lm=1',
    number: 10,
    name: 'Luka Modrić',
    position: 'Central Midfield'
  },
  {
    image: 'https://img.a.transfermarkt.technology/portrait/medium/319745-1723666162.jpg?lm=1',
    number: 19,
    name: 'Dani Ceballos',
    position: 'Central Midfield'
  },
  {
    image: 'https://img.a.transfermarkt.technology/portrait/medium/581678-1693987944.jpg?lm=1',
    number: 5,
    name: 'Jude Bellingham',
    position: 'Attacking Midfield'
  },
  {
    image: 'https://img.a.transfermarkt.technology/portrait/medium/371998-1664869583.jpg?lm=1',
    number: 7,
    name: 'Vinicius Junior',
    position: 'Left Winger'
  },
  {
    image: 'https://img.a.transfermarkt.technology/portrait/medium/412363-1693988167.jpg?lm=1',
    number: 11,
    name: 'Rodrygo',
    position: 'Right Winger'
  },
  {
    image: 'https://img.a.transfermarkt.technology/portrait/medium/861410-1699472585.jpg?lm=1',
    number: 15,
    name: 'Arda Güler',
    position: 'Right Winger'
  },
  {
    image: 'https://img.a.transfermarkt.technology/portrait/medium/314678-1632307989.jpg?lm=1',
    number: 21,
    name: 'Brahim Díaz',
    position: 'Right Winger'
  },
  {
    image: 'https://img.a.transfermarkt.technology/portrait/medium/342229-1682683695.jpg?lm=1',
    number: 9,
    name: 'Kylian Mbappé',
    position: 'Centre-Forward'
  },
  {
    image: 'https://img.a.transfermarkt.technology/portrait/medium/971570-1723665994.jpg?lm=1',
    number: 16,
    name: 'Endrick',
    position: 'Centre-Forward'
  },
])
</script>

<template>
  <div>
    <div class="list-teams">
      <table>
        <thead>
        <tr>
          <th>Jucător</th>
          <th>#</th>
          <th>Nume</th>
          <th>Poziție</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="player in players" :key="player.number">
          <td>
            <img :src="player.image" :alt="player.name" width="50"/>
          </td>
          <td>{{ player.number }}</td>
          <td>{{ player.name }}</td>
          <td>{{ player.position }}</td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<style scoped>
div {
  margin: 20px;
}

.list-teams table {
  width: 100%;
  border-collapse: collapse;
}

.list-teams th,
.list-teams td {
  border: 1px solid #ddd;
  padding: 10px;
  text-align: left;
}

.list-teams th {
  background-color: #f4f4f4;
  font-weight: bold;
}

.list-teams tr {
  background-color: #f9f9f9;
}

.list-teams tr:hover {
  background-color: #f1f1f1;
}

.list-teams img {
  border-radius: 50%;
  border: 2px solid #ddd;
}

@media (max-width: 768px) {
  .list-teams table {
    width: 100%;
  }

  .list-teams th, .list-teams td {
    padding: 8px;
    font-size: 14px;
  }

  .list-teams img {
    width: 40px;
  }
}

@media (max-width: 480px) {
  .list-teams table,
  .list-teams thead,
  .list-teams tbody,
  .list-teams th,
  .list-teams td,
  .list-teams tr {
    display: block;
  }

  .list-teams thead tr {
    position: absolute;
    top: -9999px;
    left: -9999px;
  }

  .list-teams tr {
    margin-bottom: 15px;
    border: 1px solid #ddd;
  }

  .list-teams td {
    border: none;
    position: relative;
    padding-left: 50%;
    text-align: left;
  }

  .list-teams td:before {
    content: attr(data-label);
    position: absolute;
    left: 10px;
    width: 45%;
    padding-right: 10px;
    font-weight: bold;
    white-space: nowrap;
  }

  .list-teams td:nth-child(1):before {
    content: "Jucător";
  }

  .list-teams td:nth-child(2):before {
    content: "#";
  }

  .list-teams td:nth-child(3):before {
    content: "Nume";
  }

  .list-teams td:nth-child(4):before {
    content: "Poziție";
  }

  .list-teams img {
    width: 30px;
  }
}
</style>