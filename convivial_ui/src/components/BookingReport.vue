<template>
  <div class="center examplex">
    <vs-table striped>
      <template #thead>
        <vs-tr>
          <vs-th>Event ID</vs-th>
          <vs-th>Name</vs-th>
          <vs-th>Date</vs-th>
          <vs-th>Ticket Type</vs-th>
          <vs-th>Customer Name</vs-th>
          <vs-th>Email</vs-th>
          <vs-th>No. of tickets</vs-th>
          <vs-th>Cost</vs-th>
        </vs-tr>
      </template>
      <template #tbody>
        <vs-tr :key="i" v-for="(tr, i) in report_data" :data="tr">
          <vs-td>#{{ tr.event_id }}</vs-td>
          <vs-td>{{ tr.e_name }}</vs-td>
          <vs-td>{{ tr.e_date }}</vs-td>
          <vs-td>{{ tr.t_type }}</vs-td>
          <vs-td>{{ tr.c_name }}</vs-td>
          <vs-td>{{ tr.c_email }}</vs-td>
          <vs-td>{{ tr.no_of_tickets }}</vs-td>
          <vs-td>{{ tr.cost }}$</vs-td>
        </vs-tr>
      </template>
    </vs-table>
  </div>
</template>

<script>

const url = 'http://localhost:8000/api/getbookingdetails'

export default {
  data () {
    return {
      report_data: []
    }
  },
  mounted () {
    fetch(url)
      .then(response => response.json())
      .then(data => { this.report_data = data })
      .catch(error => console.log(error.message))
  },
  name: 'BookingReport',
  props: {
    msg: String
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>
