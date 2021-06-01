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
import axios from 'axios'
const headers = { Authorization: axios.defaults.headers.common.Authorization }
const url = 'http://localhost:8000/api/getbestsellers'
export default {
  data () {
    return {
      cards: []
    }
  },
  mounted () {
    fetch(url, { headers })
      .then(response => response.json())
      .then(data => { this.cards = data })
      .catch(error => console.log(error.message))
  },
  name: 'Overlook'
}
</script>

<style scoped>

</style>
