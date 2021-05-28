<template>
  <div class="center examplex">
    <vs-table striped>
      <template #thead>
        <vs-tr>
          <vs-th>Event ID</vs-th>
          <vs-th>Name</vs-th>
          <vs-th>Organizer</vs-th>
          <vs-th>Date</vs-th>
          <vs-th>Ticket type</vs-th>
          <vs-th>$ from Normal</vs-th>
          <vs-th>$ from Silver</vs-th>
          <vs-th>$ from Gold</vs-th>
          <vs-th>$ from Platinum</vs-th>
          <vs-th>Total revenue</vs-th>
        </vs-tr>
      </template>
      <template #tbody>
        <vs-tr :key="i" v-for="(tr, i) in events" :data="tr">
          <vs-td>#{{ tr.id }}</vs-td>
          <vs-td>{{ tr.name }}</vs-td>
          <vs-td>{{ tr.organizer }}</vs-td>
          <vs-td>{{ tr.date }}</vs-td>
          <vs-td>{{ tr.t_type }}</vs-td>
          <vs-td>{{ tr.n_rev }}$</vs-td>
          <vs-td>{{ tr.s_rev }}$</vs-td>
          <vs-td>{{ tr.g_rev }}$</vs-td>
          <vs-td>{{ tr.p_rev }}$</vs-td>
          <vs-td>{{ tr.total_rev }}$</vs-td>
        </vs-tr>
      </template>
    </vs-table>
  </div>
</template>

<script>
export default {
  name: 'EventReport',
  props: {
    msg: String
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>
