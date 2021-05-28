<template>
  <div class="dashboard">
     <vs-card>
    <template #title>
      <h2>Login</h2>
    </template>
    <template #img>
      <img src="/foto5.png" alt="">
    </template>
    <template #text>
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
      </p>
    </template>
    <template #interactions>
      <vs-button danger icon>
        <i class='bx bx-heart'></i>
      </vs-button>
      <vs-button class="btn-chat" shadow primary>
        <i class='bx bx-chat' ></i>
        <span class="span">
          54
        </span>
      </vs-button>
    </template>
  </vs-card>
  </div>
</template>

<style scoped>
.dashboard{
    padding-top: 5rem;
    padding-left: 5rem;
}
</style>
