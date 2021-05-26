<template>
  <div class="center">
    <vs-card></vs-card>
    <form @submit.prevent="login">
      <vs-input
        primary
        v-model="email"
        placeholder="Email"/>

      <vs-input type = password
        primary
        v-model="password"
        placeholder="Password"/>
      <vs-button type="submit">Login</vs-button>
    </form>
  </div>
</template>

<script>
export default {
  data () {
    return {
      email: '',
      password: ''
    }
  },

  methods: {
    login () {
      this.$store
        .dispatch('login', {
          email: this.email,
          password: this.password
        })
        .then(() => {
          this.$router.push({ name: 'About' })
        })
        .catch(err => {
          console.log(err)
        })
    }
  }
}
</script>
