<template>
  <div class="home">
    <b-row>
      <b-col cols=12>
        <div class="new-event">
          <form class="outer-form">

            <b-row>
              <b-col>
                <div v-if="previewImage!=null"
                class="imagePreviewWrapper"
                :style="{ 'background-image': `url(${previewImage})` }"
                @click="selectImage">
                </div>
              </b-col>
            </b-row>
            <b-row>
              <b-col cols=7>
                <h2>{{e_title}}</h2>
                <p>{{e_location}}</p>
                <p>{{e_date}}</p>
                <br>
                <p>{{e_desc}}</p>
              </b-col>
              <b-col cols=5>
                <form class="purchase-form" action="">
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
                  <b-row v-if="t_type">
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
                      <h4>Total cost: {{calculateCost()}}</h4>
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
export default {
  data () {
    return {
      previewImage: 'https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80',
      e_title: 'TomorrowLand',
      e_desc: 'We are delighted and grateful to hear that the Belgian Government has given a realistic perspective for large festivals in Belgium towards the end of the summer. We want to study the guidelines and parameters from the National Government in the next days, so that we can properly communicate the different scenarios and implications. \nWith a combination of vaccination and rapid testing at the door, we believe we can make Tomorrowland a safe place, which so many people have been looking forward to for so long. We will take every measure and guideline very seriously and apply all the right protocols.',
      e_location: 'Mountain View, CA',
      e_duration: 5,
      e_date: '2012-04-23',
      t_type: true,
      n_price: 10,
      s_price: 20,
      g_price: 49,
      p_price: 99,
      t_select_type: null,
      c_t_no: 1
    }
  },

  methods: {
    calculateCost () {
      if (!this.t_type) {
        return this.c_t_no * this.n_price
      } else {
        if (this.t_select_type == null) {
          return 0
        } else if (this.t_select_type === '1') {
          return this.c_t_no * this.s_price
        } else if (this.t_select_type === '2') {
          return this.c_t_no * this.g_price
        } else if (this.t_select_type === '3') {
          return this.c_t_no * this.p_price
        }
      }
    },
    login () {
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
