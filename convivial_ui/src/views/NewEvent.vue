<template>

  <div class="new-event">
        <form @submit.prevent="login">

            <div>
                <div v-if="previewImage!=null"
                class="imagePreviewWrapper"
                :style="{ 'background-image': `url(${previewImage})` }"
                @click="selectImage">
                </div>

                <b-row>
                    <b-col cols=4>
                        <vs-tooltip>
                            <label for="upload-photo"><box-icon name='plus-circle' ></box-icon></label>
                            <input
                            ref="fileInput"
                            type="file"
                            id="upload-photo"
                            @input="pickFile">
                            <template #tooltip>
                                Upload cover photo
                            </template>
                        </vs-tooltip>
                    </b-col>
                </b-row>
            </div>

            <h2>New event</h2>
            <p>Let's get started!</p>
            <p>{{e_title}}</p>
            <b-row>
                <b-col cols="4">
                    <p class="field-name">Event title</p>
                </b-col>
                <b-col cols="8">
                    <div class="form-group">
                        <vs-input block
                        primary class="form-control"
                        v-model="e_title"
                        />
                    </div>
                </b-col>
            </b-row>

            <b-row>
                <b-col cols="4">
                    <p class="field-name">Organizer</p>
                </b-col>
                <b-col cols="8">
                    <div class="form-group">
                        <vs-input block
                        primary class="form-control"
                        v-model="e_organizer"
                        />
                    </div>
                </b-col>
            </b-row>

            <b-row>
                <b-col cols="4">
                    <p class="field-name">Date</p>
                </b-col>
                <b-col cols="3">
                    <div class="form-group">
                        <vs-input block type="date"
                        primary class="form-control"
                        v-model="e_date"
                        />
                    </div>
                </b-col>
                <b-col cols="2">
                    <p class="field-name">Duration</p>
                </b-col>
                <b-col cols="3">
                    <div class="form-group">
                        <vs-input block type="number"
                        primary class="form-control"
                        v-model="e_date"
                        placeholder="Days"
                        />
                    </div>
                </b-col>
            </b-row>

            <b-row>
                <b-col cols="4">
                    <p class="field-name">Location</p>
                </b-col>
                <b-col cols="8">
                    <div class="form-group">
                        <vs-input block
                        primary class="form-control"
                        v-model="e_date"
                        />
                    </div>
                </b-col>
            </b-row>

            <b-row>
                <b-col cols="4">
                    <p class="field-name">More details</p>
                </b-col>
                <b-col cols="8">
                    <div class="form-group">
                        <b-form-textarea
                        id="textarea"
                        v-model="text"
                        placeholder="Description about the event..."
                        rows="3"
                        max-rows="6"
                        ></b-form-textarea>
                    </div>
                </b-col>
            </b-row>

            <b-row>
                <b-col cols="4">
                </b-col>
                <b-col cols="4">
                    <div class="form-group"><vs-button block type="submit">Create event</vs-button></div>
                </b-col>
                <b-col cols="4">
                </b-col>
            </b-row>

            </form>
    </div>
</template>

<script>
export default {
  data () {
    return {
      previewImage: null,
      e_title: '',
      password: ''
    }
  },

  methods: {
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
   margin-top: -10px;
   font-size: 7px;
   color: rgb(0, 255, 170);
   /* Style as you please, it will become the visible UI component. */
}

#upload-photo {
   opacity: 0;
   position: absolute;
   z-index: -1;
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

.new-event form {
  text-align: center;
  max-width:1000px;
  width:90%;
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
