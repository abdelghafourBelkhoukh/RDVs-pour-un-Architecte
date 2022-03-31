<template>
  <!-- <nav>
    <router-link to="/">Home</router-link> |
    <router-link to="/about">About</router-link> |
    <router-link to="/dashboard">Dashboard</router-link>
  </nav> -->
<div>
  <Header/>
  <DashBoard/>
</div>

  
</template>
<script>
import Header from './components/Header.vue'
import DashBoard from './components/DashBoard.vue'
export default {
  name: 'app',
  data(){
    return{

    }
  },
  components:{
    Header,
    DashBoard
  }
}
</script>

<style>
/* #app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

nav {
  padding: 30px;
}

nav a {
  font-weight: bold;
  color: #2c3e50;
}

nav a.router-link-exact-active {
  color: #42b983;
} */
</style>
