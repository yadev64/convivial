<template>
<div class="center">
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
// @ is an alias to /src
// import HelloWorld from '@/components/HelloWorld.vue'

export default {
  name: 'Home',
  components: {
  }
}
</script>
