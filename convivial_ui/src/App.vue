<template>
  <div id="app">
    <div id="nav" class="center examplex">
      <vs-navbar center-collapsed v-model="active">
        <template #left>
          <img src="/logo2.png" alt="">
        </template>
        <vs-navbar-item to="/" id="home">
            Home
        </vs-navbar-item>
        <vs-navbar-item to="/about" v-if="isLogged" id="about">
            About
        </vs-navbar-item>
        <template #right>
          <vs-button flat to="/login" v-if="!isLogged">Login</vs-button>
          <vs-button @click="logout()" v-if="isLogged">Logout</vs-button>
        </template>
      </vs-navbar>
    </div>
    <div class="center">
    <vs-button :active="active == 0" @click="active = 0">Default</vs-button>
    <vs-button success flat :active="active == 1" @click="active = 1">Success</vs-button>
    <vs-button danger border :active="active == 2" @click="active = 2">Danger</vs-button>
    <vs-button warn gradient :active="active == 3" @click="active = 3">Warn</vs-button>
    <vs-button dark shadow :active="active == 4" @click="active = 4">Dark</vs-button>
    <vs-button color="#7d33ff" relief :active="active == 5" @click="active = 5">HEX</vs-button>
    <vs-button color="rgb(59,222,200)" gradient :active="active == 6" @click="active = 6">RGB</vs-button>
  </div>
    <router-view/>
  </div>
</template>

<script>
import { mapGetters } from 'vuex'

export default {
  computed: {
    ...mapGetters([
      'isLogged'
    ])
  },

  methods: {
    logout () {
      this.$store.dispatch('logout')
    }
  }
}
</script>

<style>
body {
  min-height: 100vh;
  background-image: radial-gradient(
    circle 621px at 25.3% 13.8%,
    rgba(255, 255, 255, 1) 0%,
    rgba(234, 236, 255, 1) 90%
  );
  margin-top: 50px;
  font-family: "Poppins", sans-serif;
}

.center {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
}

#app {
  font-family: Avenir,sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

#nav {
  padding: 30px;
  box-shadow: #42b983;
}

#nav a {
  font-weight: bold;
  color: #2c3e50;
}

#nav a.router-link-exact-active {
  color: #42b983;
}
</style>
