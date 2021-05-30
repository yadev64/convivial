<template>
  <div class="home">
    <b-row>
      <b-col cols=12>
        <div class="new-event">
          <form class="outer-form">

            <b-row>
              <b-col>
                <div v-if="event_data.e_image_url!=null"
                class="imagePreviewWrapper"
                :style="{ 'background-image': `url(${event_data.e_image_url})` }"
                >
                </div>
              </b-col>
            </b-row>
            <b-row>
              <b-col cols=7>
                <h2>{{event_data.e_name}}</h2>
                <p>{{event_data.e_location}}</p>
                <p>{{event_data.e_date}}</p>
                <p>{{event_data.e_organizer}}</p>
                <br>
                <p>{{event_data.e_desc}}</p>
              </b-col>
              <b-col cols=5>
                <form class="purchase-form" @submit.prevent="pushData">
                  <b-row>
                    <b-col>
                      <h3>Buy tickets</h3>
                    </b-col>
                  </b-row>
                  <b-row>
                    <b-col>
                      <vs-input block
                        primary class="form-control"
                        v-model="c_name"
                        placeholder="Name"/>
                    </b-col>
                  </b-row>
                  <b-row>
                    <b-col>
                      <vs-input block
                        primary class="form-control"
                        v-model="c_email"
                        placeholder="Email"/>
                    </b-col>
                  </b-row>
                  <b-row>
                    <b-col>
                      <vs-input block
                        primary class="form-control"
                        v-model="c_phone"
                        type="number"
                        placeholder="Phone"/>
                    </b-col>
                  </b-row>
                  <b-row>
                    <b-col>
                      <vs-input block
                        primary class="form-control"
                        v-model="c_t_no"
                        type="number"
                        placeholder="Number of tickets"/>
                    </b-col>
                  </b-row>
                  <br>
                  <b-row v-if="event_data.t_type">
                    <b-col>
                      <vs-radio warn v-model="t_select_type" val='1'>
                        Silver
                      </vs-radio>
                    </b-col>
                    <b-col>
                      <vs-radio warn v-model="t_select_type" val='2'>
                        Gold
                      </vs-radio>
                    </b-col>
                    <b-col>
                      <vs-radio warn v-model="t_select_type" val='3'>
                        Platinum
                      </vs-radio>
                    </b-col>
                  </b-row>
                  <br>
                  <b-row>
                    <b-col>
                      <h4>Total cost: {{total_cost}}</h4>
                    </b-col>
                  </b-row>
                  <b-row>
                    <b-col>
                      <vs-button block type="submit" animation-type="vertical">
                        Place order
                        <template #animate >
                          Let's go!
                        </template>
                      </vs-button>
                    </b-col>
                  </b-row>
                </form>
              </b-col>
            </b-row>
          </form>
        </div>
      </b-col>
    </b-row>
  </div>
</template>

<script>
import axios from 'axios'
var url = 'http://localhost:8000/api/geteventdata/'

export default {
  props: {
    // event_id: Number
  },
  data () {
    return {
      event_id: null,
      event_data: [],
      c_name: '',
      c_email: '',
      c_phone: '',
      // e_duration: 5,
      t_select_type: '0',
      c_t_no: 1,
      n: 0,
      s: 0,
      g: 0,
      p: 0,
      total_cost: 0
    }
  },
  created () {
    this.event_id = this.$route.params.id
  },
  beforeUpdate () {
    this.calculateCost(this.event_data)
  },
  mounted () {
    console.log(url + this.event_id)
    fetch(url + this.event_id)
      .then(response => response.json())
      .then(data => { this.event_data = data })
      // .then(calculateCost(this.event_data))
      .catch(error => console.log(error.message))
    this.assignValues(this.event_data)
  },

  methods: {
    pushData () {
      const content = {
        c_name: this.c_name,
        c_email: this.c_email,
        c_phone: this.c_phone,
        event_id: this.event_id,
        t_type: parseInt(this.t_select_type),
        no_of_tickets: this.c_t_no,
        total_cost: this.total_cost
      }
      console.log(content)
      axios.post('http://localhost:8000/api/createnewticket', content)
        .then(response => { this.message = response.data.message })
        .then(() => {
          this.$router.push({ name: 'Dashboard' })
        })
        .catch(err => {
          console.log(err)
        })
    },

    assignValues (data) {
      this.n = data.n_val
      this.s = data.s_val
      this.g = data.g_val
      this.p = data.p_val
    },
    calculateCost (eData) {
      if (this.t_type === 0) {
        this.total_cost = this.c_t_no * eData.n_val
      } else {
        if (this.t_select_type === null) {
          this.total_cost = 0
        } else if (this.t_select_type === '1') {
          this.total_cost = this.c_t_no * eData.s_val
        } else if (this.t_select_type === '2') {
          this.total_cost = this.c_t_no * eData.g_val
        } else if (this.t_select_type === '3') {
          this.total_cost = this.c_t_no * eData.p_val
        }
      }
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
  .new-event {
  height:1000px;
  background: rgb(233, 245, 255);
  background-size:cover;
  position:relative;
}

label {
   cursor: pointer;
   color: blue;
   font-size: 10px;
   margin-left: 10px;
}

.t-type{
  padding-bottom: 5px;
}

.t-sub{
  font-size: 10px;
  float: left;
  padding-top: 5px;
}

#upload-photo {
   opacity: 0;
   position: absolute;
   z-index: -1;
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

.imagePreviewWrapper {
  width: 100%;
  height: 250px;
  display: block;
  cursor: pointer;
  margin: 0 auto 30px;
  object-fit: contain;
  background-size: cover;
  background-position: center center;
  border-radius:10px;
}

.event-card{
  padding-top: 15rem;
}

.outer-form {
  text-align: center;
  max-width:1400px;
  width:100%;
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

.purchase-form {
  text-align: center;
  max-width:500px;
  width:100%;
  background-color:#ffffff;
  padding:40px;
  border-radius:4px;
  color:rgb(0, 0, 0);
  box-shadow:3px 3px 4px rgba(255, 249, 249, 0.411);
}

.field-name{
    padding-top: 15px;
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
