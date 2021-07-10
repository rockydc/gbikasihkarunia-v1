<template>
    <div>
        <Navbar/>

        <div class="container section-doa">
            <b-row>
                <b-col  lg="6" md="12" sm="12">
                    <div class="section-left">
                    <h1>
                        Permohonan Doa
                    </h1>
                    <p>
                        Jika saudara memiliki pokok permohonan doa, silahkan mengisi form berikut
                    </p>
                    <b-form class="form-wrapper">
                        <b-form-group
                        id="input-group-name"
                        label="Nama"
                        label-for="input-name"
                        >

                            <b-form-input
                            id="input-name"
                          
                            placeholder="Masukkan Nama Anda"
                            required
                            >
                            </b-form-input>
                        </b-form-group>
                        <b-form-group
                        id="input-group-number-wa"
                        label="Nomor Whatsapp"
                        label-for="input-number-wa"
                        >

                            <b-form-input
                            id="input-number-wa"
                       
                            placeholder="Masukkan Whatsapp Anda"
                            required
                            >
                            </b-form-input>
                        </b-form-group>
                        <b-form-group
                        id="input-group-email"
                        label="Nomor Whatsapp"
                        label-for="input-email"
                         description="Kita Menjamin Kerahasiaan Data anda."
                        >

                            <b-form-input
                            id="input-email"
                   
                            placeholder="Masukkan email Anda"
                            type="email"
                            required
                            >
                            </b-form-input>
                        </b-form-group>
                        <b-form-group
                        id="input-doa"
                        label="Pokok Doa"
                        label-for="input-doa"

                        >

                        <b-form-textarea
                            id="input-doa"
                        
                            placeholder="Isi Pokok Doa..."
                            rows="6"
                            
                            ></b-form-textarea>
                        </b-form-group>
                        <Button  title="Kirim"/>
                    </b-form>
                    </div>
                 
                </b-col>
                <b-col lg="6" md="12" sm="12">
                    <div class="section-right">
                    <p>
                        TUHAN dekat pada setiap orang yang berseru kepadaNya, pada setiap orang yang berseru kepadaNya dalam kesetiaan. Ia melakukan kehendak orang-orang yang takut akan Dia, mendengarkan teriak mereka minta tolong dan menyelamatkan mereka.
                    </p>
                    <p>
                        Mazmur 145 : 18 -19
                    </p>
                    <div class="d-flex justify-content-center align-items-center">
                        <b-img  fluid class="img-doa" src="../../assets/img/frontend/pray.png"></b-img>
                    </div> 
                    </div>

                    
                </b-col>
            </b-row>
        </div>
        <Footer/>
    </div>
</template>
<script>
import {Navbar,Footer,Button} from '../../components'
export default {
    name:'Doa',
    components:{
        Navbar,
        Footer,
        Button
    }
}
</script>
<style lang="scss" scoped>
@import 'Doa.scss';
</style>