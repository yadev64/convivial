<template>
  <div>
    <form>
        <b-row>
            <b-col>
                <h2>Sales</h2>
                <h3>{{t_sold}}</h3>
            </b-col>
            <b-col>
                <h2>Revenue</h2>
                <h3>${{t_revenue}}</h3>
            </b-col>
        </b-row>
        <br>
        <b-row>
            <b-col>
                <h5>Type</h5>
            </b-col>
            <b-col>
                <h5>Normal</h5>
            </b-col>
            <b-col>
                <h5>Silver</h5>
            </b-col>
            <b-col>
                <h5>Gold</h5>
            </b-col>
            <b-col>
                <h5>Platinum</h5>
            </b-col>
        </b-row>
        <b-row>
            <b-col>
                <p>Count</p>
            </b-col>
            <b-col>
                <p>475</p>
            </b-col>
            <b-col>
                <p>1213</p>
            </b-col>
            <b-col>
                <p>230</p>
            </b-col>
            <b-col>
                <p>320</p>
            </b-col>
        </b-row>
        <b-row>
            <b-col>
                <p>Revenue</p>
            </b-col>
            <b-col>
                <p>6454</p>
            </b-col>
            <b-col>
                <p>7563</p>
            </b-col>
            <b-col>
                <p>5355</p>
            </b-col>
            <b-col>
                <p>6463</p>
            </b-col>
        </b-row>
    </form>
  </div>
</template>

<script>
export default {
  name: 'RevenueReport',
  props: {
    msg: String
  },
  data () {
    return {
      t_sold: 3752,
      t_revenue: 32752
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
form {
  text-align: left;
  max-width:500px;
  width:90%;
  background-color:#ffffff;
  padding:40px;
  border-radius:10px;
  color:rgb(0, 0, 0);
  box-shadow:3px 3px 4px rgba(255, 249, 249, 0.2);
}

h3{
  color: rgb(74, 74, 255);
}
</style>
