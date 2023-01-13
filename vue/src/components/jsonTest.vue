<script>
// Importo "axios".
import axios from 'axios';

// 4) Nello svolgere l’esercizio seguite un approccio graduale. Prima assicuratevi che la comunicazione tra "front-end" e "back-end" avvenga correttamente con il passaggio di parametri.
// Creo una costante per la "Api_url".
const Api_url = "http://localhost:8888/";

export default {
  name: "jsonTest",
  data() {

    return {

      // Inserisco l'array "todoList".
      todoList: [],

      // Inserisco il v-model "newTodo".
      newTodo: "",

    };
  },
  methods: {
    // 6) Attraverso il "form" e un "input", diamo la possibilità all'utente di aggiungere nuovi elementi alla lista.

    formSubmit(e) {

      e.preventDefault();

      const newTodo = this.newTodo;

      const params = {
        params: {
          'text': newTodo
        }
      };

      axios.get(Api_url + "api-inserisci-todo.php", params)
        .then(() => {

          // Richiamo "newTodo" per svuotare ogni volta l'input.
          this.newTodo = "";

          this.getAllData();

        })
    },
    // 4 & 5) Nello svolgere l’esercizio seguite un approccio graduale. Prima assicuratevi che la comunicazione tra "front-end" e "back-end" avvenga correttamente con il passaggio di parametri.

    getAllData() {
      axios.get(Api_url + "api.php")
        .then(res => {
          const data = res.data;

          this.todoList = data;
        })
    }

  },
  mounted() {
    this.getAllData();
  }
}

</script>


<template>
  <div class="container">
    <h1>TO-DO-LIST</h1>
    <ul>
      <!-- 5) Creo un v-for per stamparmi gli elementi contenuti nella "todoListi" -->
      <li v-for="(todoElement, index) in todoList" :key="index">
        {{ todoElement.text }}
      </li>
    </ul>
    <!-- 6) Attraverso il "form" e un "input", diamo la possibilità all'utente di aggiungere nuovi elementi alla lista. -->
    <form @submit="formSubmit">
      <input type="text" name="newTodo" placeholder="inserisci elemento" v-model="newTodo">
      <input type="submit" value="Inserisci">
    </form>
  </div>
</template>

<style scoped>
.container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 20%;
  padding: 20px 0;
  margin: 0 auto;
}

ul {
  list-style-type: none;
  display: flex;
  flex-direction: column;
  align-self: center;
  border: 1px solid black;
  width: 100%;
}

li {
  border-bottom: 1px solid black;
}
</style>
