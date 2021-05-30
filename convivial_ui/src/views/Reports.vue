<template>
<div>
    <br>
    <b-row>
      <b-col cols = 1>

      </b-col>
      <b-col cols = 5>
          <h3>Overview</h3>
      </b-col>
      <b-col cols = 5>
          <h3>Trending events</h3>
      </b-col>
  </b-row>
  <b-row>
    <b-col cols=1>
    </b-col>
    <b-col cols=3>
      <br>
      <RevenueReport></RevenueReport>
    </b-col>
    <b-col cols=2>
      <br>
      <Overlook></Overlook>
    </b-col>
    <b-col cols=6>
      <Trending></Trending>
    </b-col>
  </b-row>
  <br>
  <b-row>
      <b-col cols = 1>

      </b-col>
      <b-col cols = 5>
          <h3>Event sales</h3>
      </b-col>
      <b-col cols = 5>
          <h3>Ticket sales</h3>
      </b-col>
  </b-row>

  <b-row>
    <b-col cols=1>

    </b-col>
    <b-col cols=5>
      <EventReport></EventReport>
    </b-col>
    <b-col cols=5>
        <BookingReport></BookingReport>
    </b-col>
  </b-row>
</div>
</template>

<script>
import EventReport from '@/components/EventReport.vue'
import Trending from '@/components/Trending.vue'
import RevenueReport from '@/components/RevenueReport.vue'
import BookingReport from '@/components/BookingReport.vue'
import Overlook from '@/components/Overlook.vue'

export default {
  name: 'Home',
  components: {
    EventReport,
    Trending,
    RevenueReport,
    BookingReport,
    Overlook
  }
}
</script>

<style scoped>

</style>
