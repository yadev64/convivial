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
  },
  data () {
    return {
      total_revenue: 3573,
      weekly_revenue: 549,
      best_event: 'Sundown party',
      second_event: 'Tomorrowland',
      cards: [

        {
          title: 'Sundown Party',
          t_type: true,
          e_date: '2012-04-23',
          location: 'Mountain view, CA ',
          desc: 'A sundowner party is a social event usually from 5pm-8pm, where friends gather, sip drinks, groove to music and admire the sunset. Originally ...',
          img: 'https://images.unsplash.com/photo-1611244806964-91d204d4a2a7?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80'
        },
        {
          title: 'Tomorrowland',
          t_type: false,
          e_date: '2012-04-23',
          location: 'Mountain view, CA ',
          desc: 'A sundowner party is a social event usually from 5pm-8pm, where friends gather, sip drinks, groove to music and admire the sunset. Originally ...',
          img: 'https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80'
        },
        {
          title: 'Sundown Party',
          t_type: false,
          e_date: '2012-04-23',
          location: 'Mountain view, CA ',
          desc: 'A sundowner party is a social event usually from 5pm-8pm, where friends gather, sip drinks, groove to music and admire the sunset. Originally ...',
          img: 'https://images.unsplash.com/photo-1611244806964-91d204d4a2a7?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80'
        },
        {
          title: 'Tomorrowland',
          t_type: true,
          e_date: '2012-04-23',
          location: 'Mountain view, CA ',
          desc: 'A sundowner party is a social event usually from 5pm-8pm, where friends gather, sip drinks, groove to music and admire the sunset. Originally ...',
          img: 'https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80'
        },
        {
          title: 'Sundown Party',
          t_type: false,
          e_date: '2012-04-23',
          location: 'Mountain view, CA ',
          desc: 'A sundowner party is a social event usually from 5pm-8pm, where friends gather, sip drinks, groove to music and admire the sunset. Originally ...',
          img: 'https://images.unsplash.com/photo-1611244806964-91d204d4a2a7?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80'
        },
        {
          title: 'Tomorrowland',
          t_type: true,
          e_date: '2012-04-23',
          location: 'Mountain view, CA ',
          desc: 'A sundowner party is a social event usually from 5pm-8pm, where friends gather, sip drinks, groove to music and admire the sunset. Originally ...',
          img: 'https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80'
        }
      ]
    }
  },

  methods: {
    handleClick () {
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
    },
    selectImage () {
      this.$refs.fileInput.click()
    },
    pickFile () {
      const input = this.$refs.fileInput
      const file = input.files
      if (file && file[0]) {
        const reader = new FileReader()
        reader.onload = e => {
          this.previewImage = e.target.result
        }
        reader.readAsDataURL(file[0])
        this.$emit('input', file[0])
      }
    }
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
