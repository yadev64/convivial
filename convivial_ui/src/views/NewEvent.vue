<template>
  <div class="new-event">
        <form @submit.prevent="login">
            <h2>New event</h2>
            <p>Let's get started!</p>
            <div class="form-group">
              <vs-input
              primary class="form-control"
              v-model="email"
              placeholder="Email"/>
            </div>

            <div class="form-group">
              <vs-input type = password
                primary class="form-control"
                v-model="password"
                placeholder="Password"/>
            </div>
            <div class="form-group">
              <vs-input type = password
                primary class="form-control"
                v-model="password"
                placeholder="Password"/>
            </div>
            <div class="form-group">
              <vs-input type = password
                primary class="form-control"
                v-model="password"
                placeholder="Password"/>
            </div>
            <div class="form-group">
              <vs-input type = password
                primary class="form-control"
                v-model="password"
                placeholder="Password"/>
            </div>
            <div class="form-group">
              <vs-input type = password
                primary class="form-control"
                v-model="password"
                placeholder="Password"/>
            </div>
            <div class="form-group"><vs-button type="submit">Login</vs-button></div></form>
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
          this.$router.push({ name: 'Dashboard' })
        })
        .catch(err => {
          console.log(err)
        })
    }
  }
}
</script>

<style scoped>
  .new-event {
  height:1000px;
  background: rgb(233, 245, 255);
  background-size:cover;
  position:relative;
}

.new-event form {
  text-align: center;
  max-width:1000px;
  width:90%;
  background-color:#ffffff;
  padding:40px;
  border-radius:4px;
  transform:translate(-50%, -50%);
  position:absolute;
  top:50%;
  left:50%;
  color:rgb(0, 0, 0);
  box-shadow:3px 3px 4px rgba(255, 249, 249, 0.2);
}

.new-event form .form-control {
  background:none;
  border:none;
  border-radius:0;
  box-shadow:none;
  outline:none;
  color:inherit;
}

</style>
