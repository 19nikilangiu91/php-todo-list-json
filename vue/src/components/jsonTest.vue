<script>
// Importo "axios".
import axios from 'axios';

// Nello svolgere l’esercizio seguite un approccio graduale. Prima assicuratevi che la comunicazione tra "front-end" e "back-end" avvenga correttamente con il passaggio di parametri.
// Creo una costante per la "Api_url".
const Api_url = "http://localhost:8888/api.php";

export default {
  name: "jsonTest",
  mounted() {

    const params = {
      params: {
        'third': 'Hello to you'
      }
    };
    axios.get(Api_url, params)
      .then(res => {
        const data = res.data;
        console.log(data);
      })
  }
}

</script>


<template>
  <div>
    <h1>Hello World</h1>
  </div>
</template>

<style scoped>

</style>
