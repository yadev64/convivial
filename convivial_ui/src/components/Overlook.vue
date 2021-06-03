<template>
  <div>
    <b-row>
        <b-col>
        <br>
        <vs-card>
            <template #title>
            <h5>Best selling</h5>
            </template>
            <template #text>
            <p>{{cards.best_seller}}</p>
            <p class="overflow">
                Sales: ${{cards.bs_rev}}
            </p>
            </template>
        </vs-card>
        </b-col>
    </b-row>
  </div>
</template>

<script>
import axios from '../vuexios'

export default {
  data () {
    return {
      cards: []
    }
  },
  mounted () {
    axios.get('/getbestsellers')
      .then((response) => {
        this.cards = response.data
      })
      .catch(error => console.log(error.message))
  },
  name: 'Overlook'
}
</script>

<style scoped>

</style>
