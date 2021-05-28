<template>
<div>
  <b-row>
    <b-col cols=1>
    </b-col>
    <b-col cols=5>
      <br>
      <RevenueReport></RevenueReport>
    </b-col>
    <b-col cols=6>
      <Trending></Trending>
    </b-col>
  </b-row>

  <b-row>
    <b-col cols=2>

    </b-col>
    <b-col cols=8>
      <EventReport></EventReport>
    </b-col>
    <b-col cols=2>

    </b-col>
  </b-row>
</div>
</template>

<script>
import EventReport from '@/components/EventReport.vue'
import Trending from '@/components/Trending.vue'
import RevenueReport from '@/components/RevenueReport.vue'

export default {
  name: 'Home',
  components: {
    EventReport,
    Trending,
    RevenueReport
  }
}
</script>

<style scoped>

</style>
