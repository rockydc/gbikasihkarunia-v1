<template>
    <div >

  <b-navbar :sticky="true"  toggleable="lg">
    <b-navbar-brand   to="/"><b-img   
    src="../../assets/img/frontend/home/gbi logo.png"></b-img></b-navbar-brand>

    <b-navbar-toggle target="nav-collapse">
      <template #default ="{ expanded }">
          <b-icon v-if="expanded" icon="chevron-bar-up" variant="light"></b-icon>
          <b-icon v-else icon="chevron-bar-down" variant="light"></b-icon>
          
      </template>

    </b-navbar-toggle>

    <b-collapse id="nav-collapse" is-nav>

      <!-- Right aligned nav items -->
      <b-navbar-nav>

         
 
        <b-nav-item ><router-link  class="router-link"  to="/" >Beranda</router-link ></b-nav-item>
        <b-nav-item ><router-link class="router-link" to="/Renungan" >Renungan</router-link></b-nav-item>
        <b-nav-item  ><router-link class="router-link" to="/Event">Event</router-link></b-nav-item>
        <b-nav-item ><router-link class="router-link" to="/Pelayanan">Pelayanan Jemaat</router-link></b-nav-item>
        <b-nav-item ><router-link class="router-link" to="/Komunitas">Komunitas</router-link></b-nav-item>


      
      </b-navbar-nav>
    </b-collapse>
  </b-navbar>


    </div>
</template>
<script>

export default {
    name:'Navbar'
}
</script>
<style lang="scss" scoped>
@import 'Navbar.scss'
</style>