<template>
<div>


    <div class="section-footer ">
        <div class="logo-wrapper">
            <b-img src="assets/img/frontend/home/gbi logo.png"></b-img>
        </div>
        <div class="nav-footer-wrapper">
            <div class="footer-content">
                <p class="title">
                    Form
                </p>
                <router-link to="/doa" class="footer-nav">
                <p>
                    Pelayanan Doa 
                </p>
               </router-link>
                <router-link to="/" class="footer-nav">
                <p>
                   Mulai Melayani
                </p>
               </router-link>
                 <router-link to="/" class="footer-nav">
                <p>
                    Jemaat Baru 
                </p>
               </router-link>
              
            </div>
            <div class="footer-content">
                <p class="title">
                    Lainnya
                </p>
                <router-link to="/persembahan" class="footer-nav">
                <p>
                    Persembahan
                </p>
               </router-link>
                <router-link to="/" class="footer-nav">
                <p>
                    Kumpulan video kotbah
                </p>
               </router-link>
                 <router-link to="/" class="footer-nav">
                <p>
                    Jadwal Ibadah
                </p>
               </router-link>
            </div>
            <div class="footer-content">
                <p class="title">
                    Contact
                </p>
          
              <p>Jl. Kenanga Indah IV Blok HD No.1 harapan Indah Bekasi</p>
              <p>Telp: 021 888 65751 / 021 887 2351</p>
              <p>Whatsapp : 0812 900 600 83 / 0812 8957 7774</p>
              <p>Email : kasihkarunia.gbi@gmail.com</p>
            </div>

        </div>
        <div class="touch-wrapper">
            <h1>Stay In Touch</h1>
            <div class="form-wrapper">
                <b-form>
                    <b-form-input
                    class="form-control"
                    placeholder="nama kamu"
                    >

                    </b-form-input>
                    <b-form-input
                    class="form-control"
                    placeholder="email kamu"
                    type="email"
                    >

                    </b-form-input>
                    <Button class="mt-5" :class="'btn-subscribe'"  title="Subscribe"/>
                </b-form>
            </div>
     
        </div>

    </div>

    <div class="copyright-wrapper text-center">
        <p>©  RodaSolution 2021. All rights reserved.</p>
    </div>
</div>
</template>
<script>

import {Button} from '../../components/'
export default {
    name:'Footer',
    components:{
        Button
    }
}
</script>
<style lang="scss" scoped>
@import 'Footer.scss';
</style>