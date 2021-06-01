<template>
  <div class="dashboard">
    <b-row>
      <b-col cols=8>
        <h2>Trending events</h2>
      </b-col>
      <b-col cols=4>
      <h3>Total revenue</h3>
      </b-col>
    </b-row>
    <b-row>
      <b-col cols=8>
          <Trending></Trending>
      </b-col>
      <b-col cols=3>
          <br>
          <RevenueReport></RevenueReport>
      </b-col>
    </b-row>
    <b-row>
      <b-col cols=12>
        <h2>Sports</h2>
      </b-col>
    </b-row>
    <b-row>
      <b-col cols=12>
        <SportsCards></SportsCards>
      </b-col>
    </b-row>
    <b-row>
      <b-col cols=12>
        <h2>Fun & Family</h2>
      </b-col>
    </b-row>
    <b-row>
      <b-col cols=12>
          <FunCards></FunCards>
</b-col>
    </b-row>

  </div>
</template>

<script>
import Trending from '@/components/Trending.vue'
import RevenueReport from '@/components/RevenueReport.vue'
import SportsCards from '@/components/SportsCards.vue'
import FunCards from '@/components/FunCards.vue'

export default {
  components: {
    Trending,
    RevenueReport,
    SportsCards,
    FunCards
  }
}
</script>

<style scoped>
.dashboard{
    padding-top: 5rem;
    padding-left: 5rem;
}

.dashboard h2{
  padding-left: 5rem;
}
</style>
