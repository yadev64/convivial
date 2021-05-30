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
        <b-row>
          <b-col>
            <br>
            <vs-card>
              <template #title>
                <h3>Best selling: {{data[0].best_seller}}</h3>
              </template>
              <template #img>
                <img :src=previewImage alt="">
              </template>
              <template #text>
                <p class="overflow">
                  Trailing: {{data[1].best_seller}}
                </p>
              </template>
            </vs-card>
          </b-col>
        </b-row>
  </div>
</template>

<script>
const url = 'http://localhost:8000/api/getbestsellers'
export default {
  data () {
    return {
      cards: []
    }
  },
  mounted () {
    fetch(url)
      .then(response => response.json())
      .then(data => { this.cards = data })
      .catch(error => console.log(error.message))
  },
  name: 'Overlook'
}
</script>

<style scoped>

</style>
