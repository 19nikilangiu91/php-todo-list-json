<script>
// Importo "axios".
import axios from 'axios';

// Nello svolgere l’esercizio seguite un approccio graduale. Prima assicuratevi che la comunicazione tra "front-end" e "back-end" avvenga correttamente con il passaggio di parametri.
// Creo una costante per la "Api_url".
const Api_url = "http://localhost:8888/";

export default {
  name: "jsonTest",
  data() {

    return {

      // Inserisco il v-model "newTodo".
      newTodo: "",

      // Inserisco l'array "todoList".
      todoList: []
    };
  },
  methods: {
    // Creo un metodo per il "formSubmit".
    formSubmit(e) {

      e.preventDefault();

      const params = {
        params: {
          'newTodo': this.newTodo
        }
      };

      axios.get(Api_url + "api-inserisci-todo.php", params)
        .then(() => {

          this.getAllData();

        })
    },
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
  <div>
    <h1>TO-DO-LIST</h1>
    <ul>
      <!-- Creo un v-for per stamparmi gli elementi contenuti nella "todoListi" -->
      <li v-for="(todoElement, index) in todoList" :key="index">
        {{ todoElement.text }}
      </li>
    </ul>
    <form @submit="formSubmit">
      <input type="text" name="newTodo" placeholder="inserisci elemento" v-model="newTodo">
      <input type="submit" value="Inserisci">
    </form>
  </div>
</template>

<style scoped>

</style>
