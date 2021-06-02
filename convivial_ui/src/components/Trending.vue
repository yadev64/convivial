<template>
    <div>
        <b-row>
            <b-col>
                <vs-card-group>
                    <vs-card v-for="card in cards" :key="card.e_name">
                        <template #title>
                            <router-link class="routertext" :to="{ name: 'Event', params: { id: card.event_id } }">
                            <h3>{{card.e_name}}</h3>
                            </router-link>
                        </template>
                        <template #img>
                            <router-link :to="{ name: 'Event', params: { id: card.event_id } }">
                            <img :src="card.e_image_url" alt="">
                            </router-link>
                        </template>
                        <template #text>
                            <p>
                            {{card.e_location}}
                            </p>
                            <p class="overflow">
                            {{card.e_desc}}
                            </p>
                        </template>
                        <template #interactions>
                            <vs-button v-if="card.t_type" warn icon>
                                <i class='bx bx-dollar-circle' ></i>
                                <span class="span">
                                    {{card.total_revenue}}
                                </span>
                            </vs-button>
                            <vs-button v-if="!card.t_type" icon>
                                <i class='bx bx-dollar-circle' ></i>
                                <span class="span">
                                    {{card.total_revenue}}
                                </span>
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
import axios from 'axios'
const headers = { Authorization: axios.defaults.headers.common.Authorization }
const url = 'http://localhost:8000/api/gettrendingevents'

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
  }
}
</script>

<style scoped>
.dashboard{
    padding-top: 5rem;
    padding-left: 5rem;
}

.routertext h3{
    color: rgb(42, 81, 117);
    text-decoration: none;
}

.dashboard h2{
    padding-left: 5rem;
}

.overflow{
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    line-height: 16px;
    max-height: 32px;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
}
</style>
