<template>
    <div>
        <b-row>
            <b-col>
                <vs-card-group>
                    <vs-card v-for="card in cards" :key="card.title" @click="handleClick">
                        <template #title>
                            <h3>{{card.title}}</h3>
                        </template>
                        <template #img>
                            <img :src="card.img" alt="">
                        </template>
                        <template #text>
                            <p>
                            {{card.location}}
                            </p>
                            <p>
                            {{card.desc}}
                            </p>
                        </template>
                        <template #interactions>
                            <vs-button v-if="card.t_type" warn icon>
                                <i class='bx bx-dollar-circle' ></i>
                            </vs-button>
                            <vs-button v-if="!card.t_type" icon>
                                <i class='bx bx-dollar-circle' ></i>
                            </vs-button>
                            <vs-button class="btn-chat" shadow primary>
                                <box-icon name='calendar' ></box-icon>
                                <span class="span">
                                    {{card.e_date}}
                                </span>
                            </vs-button>
                        </template>
                    </vs-card>
                </vs-card-group>
            </b-col>
        </b-row>
    </div>
</template>

<script>
export default {
  data () {
    return {
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
          this.$router.push({ name: 'Trending' })
        })
        .catch(err => {
          console.log(err)
        })
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
