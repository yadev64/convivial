<template>
  <div>
    <div class="hidden" v-if="isLogged">
      <vs-sidebar class="sidebar"
        hover-expand
        reduce
        v-model="active"
        open
        >
        <template #logo>
          <!-- ...img logo -->
        </template>
        <vs-sidebar-item id="newevent" to="/newevent" v-if="isLogged" class="newevent">
          <template #icon>
            <box-icon name='plus'></box-icon>
          </template>
          New event
        </vs-sidebar-item>
        <vs-sidebar-item id="dashboard" to="/dashboard" v-if="isLogged">
          <template #icon>
            <box-icon name='home-smile'></box-icon>
          </template>
          Dashboard
        </vs-sidebar-item>
        <vs-sidebar-item id="reports" to="/reports" v-if="isLogged">
          <template #icon>
            <box-icon name='stats' ></box-icon>
          </template>
          Reports
        </vs-sidebar-item>
        <vs-sidebar-item id="about" to="/about" v-if="isLogged">
          <template #icon>
            <box-icon name='cookie' ></box-icon>
          </template>
          Test ground
        </vs-sidebar-item>
      </vs-sidebar>
    </div>

    <div id="nav" class="center examplex">
      <vs-navbar center-collapsed fixed shadow>
        <template #default>
          <h4>CONVIVIAL</h4>
          <!-- <img src="assets/conv.png" /> -->
        </template>
        <template #right>
          <vs-button flat to="/login" v-if="!isLogged">Login</vs-button>
          <vs-button @click="logout()" v-if="isLogged">Logout</vs-button>
        </template>
      </vs-navbar>
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
html, body {
  max-width: 100%;
  overflow-x: hidden;
  min-height: 95vh;
  background-image: radial-gradient(
    circle 621px at 25.3% 13.8%,
    rgba(233, 245, 255, 1) 0%,
    rgba(233, 245, 255, 1) 90%
  );
  margin-top: 50px;
  font-family: Poppins, sans-serif;
}

.image {
  mask-image: url(assets/conv.png);
  /* background: url(assets/conv.png); */
}

.sidebar{
  padding-top: 50px;
  position: fixed;
}

.center {
  display: flex;
  align-items: center;
  justify-content: center;
}

</style>
