<script setup>
import BackButton from "@/components/BackButton.vue";
</script>

<template>
  <div>
    <BackButton/>
    <img
        src="https://tmssl.akamaized.net//images/logo/header/es1.png?lm=1725974302"
        alt="Logo La Liga"
        class="liga-logo"
    />
    <table>
      <thead>
      <tr>
        <th>Loc</th>
        <th>Echipa</th>
        <th>Meciuri</th>
        <th>Victorii</th>
        <th>Egaluri</th>
        <th>Înfrângeri</th>
        <th>Goluri marcate</th>
        <th>Goluri primite</th>
        <th>Golaveraj</th>
        <th>Puncte</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>1</td>
        <td>Real Madrid</td>
        <td>22</td>
        <td>15</td>
        <td>4</td>
        <td>3</td>
        <td>50</td>
        <td>21</td>
        <td>+29</td>
        <td>49</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Atlético Madrid</td>
        <td>22</td>
        <td>14</td>
        <td>6</td>
        <td>2</td>
        <td>37</td>
        <td>14</td>
        <td>+23</td>
        <td>48</td>
      </tr>
      <tr>
        <td>3</td>
        <td>FC Barcelona</td>
        <td>22</td>
        <td>14</td>
        <td>3</td>
        <td>5</td>
        <td>60</td>
        <td>24</td>
        <td>+36</td>
        <td>45</td>
      </tr>
      <tr>
        <td>4</td>
        <td>Athletic Bilbao</td>
        <td>22</td>
        <td>11</td>
        <td>8</td>
        <td>3</td>
        <td>33</td>
        <td>20</td>
        <td>+13</td>
        <td>41</td>
      </tr>
      <tr>
        <td>5</td>
        <td>Villarreal</td>
        <td>22</td>
        <td>10</td>
        <td>7</td>
        <td>5</td>
        <td>44</td>
        <td>33</td>
        <td>+11</td>
        <td>37</td>
      </tr>
      <tr>
        <td>6</td>
        <td>Rayo Vallecano</td>
        <td>22</td>
        <td>8</td>
        <td>8</td>
        <td>6</td>
        <td>26</td>
        <td>24</td>
        <td>+2</td>
        <td>32</td>
      </tr>
      <tr>
        <td>7</td>
        <td>Girona</td>
        <td>22</td>
        <td>9</td>
        <td>4</td>
        <td>9</td>
        <td>31</td>
        <td>30</td>
        <td>+1</td>
        <td>31</td>
      </tr>
      <tr>
        <td>8</td>
        <td>Osasuna</td>
        <td>22</td>
        <td>7</td>
        <td>9</td>
        <td>6</td>
        <td>27</td>
        <td>31</td>
        <td>-4</td>
        <td>30</td>
      </tr>
      <tr>
        <td>9</td>
        <td>Mallorca</td>
        <td>22</td>
        <td>9</td>
        <td>3</td>
        <td>10</td>
        <td>19</td>
        <td>28</td>
        <td>-9</td>
        <td>30</td>
      </tr>
      <tr>
        <td>10</td>
        <td>Real Betis</td>
        <td>22</td>
        <td>7</td>
        <td>8</td>
        <td>7</td>
        <td>25</td>
        <td>28</td>
        <td>-3</td>
        <td>29</td>
      </tr>
      <tr>
        <td>11</td>
        <td>Real Sociedad</td>
        <td>22</td>
        <td>8</td>
        <td>4</td>
        <td>10</td>
        <td>18</td>
        <td>19</td>
        <td>-1</td>
        <td>28</td>
      </tr>
      <tr>
        <td>12</td>
        <td>Sevilla</td>
        <td>22</td>
        <td>7</td>
        <td>7</td>
        <td>8</td>
        <td>24</td>
        <td>30</td>
        <td>-6</td>
        <td>28</td>
      </tr>
      <tr>
        <td>13</td>
        <td>Celta Vigo</td>
        <td>22</td>
        <td>7</td>
        <td>4</td>
        <td>11</td>
        <td>31</td>
        <td>35</td>
        <td>-4</td>
        <td>25</td>
      </tr>
      <tr>
        <td>14</td>
        <td>Getafe</td>
        <td>22</td>
        <td>5</td>
        <td>9</td>
        <td>8</td>
        <td>17</td>
        <td>17</td>
        <td>0</td>
        <td>24</td>
      </tr>
      <tr>
        <td>15</td>
        <td>Las Palmas</td>
        <td>22</td>
        <td>6</td>
        <td>5</td>
        <td>11</td>
        <td>27</td>
        <td>30</td>
        <td>-3</td>
        <td>23</td>
      </tr>
      </tbody>
    </table>
  </div>
</template>

<style scoped>
.liga-logo {
  display: block;
  margin: 20px auto;
  max-width: 150px;
}


table {
  width: 100%;
  border-collapse: collapse;
  margin: 20px 0;
}

thead {
  background-color: #008CBA;
  color: #fff;
}

th, td {
  border: 1px solid #ddd;
  text-align: center;
  padding: 10px;
}

tr {
  background-color: #BCE9FB;
}

tbody td {
  color: #333;
}

th {
  font-weight: bold;
  color: black;
  text-transform: uppercase;
}
</style>