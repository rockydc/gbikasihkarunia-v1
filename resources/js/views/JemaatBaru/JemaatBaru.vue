<template>
    <div>
        <Navbar/>
        <Header title="Form Jemaat Baru"  image="bg-header-komunitas-2x.png" />
        <div class="section-jemaat  ">
            <b-row class="container"> 
                <b-col>

<lottie-player src="https://assets7.lottiefiles.com/packages/lf20_u8o7BL.json"  background="transparent"  speed="0.5"  style="width: 100%;"    autoplay></lottie-player>
                </b-col>
                <b-col>
                    <div class="form-wrapepr">
                        <b-form id="form-pendaftaran" method="post" action="#">

                             <b-form-input
                            class="form-control"
                            name="nama"
                          
                            placeholder="masukkan nama anda">
                            </b-form-input>
                            <b-form-input
                            class="form-control"
                            name="pekerjaan"
                           
                            placeholder="masukkan nama pekerjaan">
                            </b-form-input>
                            <b-form-input
                            class="form-control"
                            name="no_telepon"
              
                            placeholder="08xxxxxxx">
                            </b-form-input>
                            <b-form-input
                            class="form-control"
                            name="jenis kelamin"
                            type="date"
                            >
                            </b-form-input>
                             <b-form-textarea
                                id="alamat"
                                v-model="text"
                                placeholder="masukkan Alamat Anda"
                                rows="6"
                                
                                ></b-form-textarea>
                            <b-form-group label="Status Kawin" v-slot="{ statusmenikah }">
                            <b-form-radio v-model="statuskawin" :statusmenikah="statusmenikah" name="some-radios" value="belum menikah">Lajang</b-form-radio>
                            <b-form-radio v-model="statuskawin" :statusmenikah="statusmenikah" name="some-radios" value="sudah menikah">Sudah Menikah</b-form-radio>
                            </b-form-group>

                            <div class="group-form-keluarga" v-if="statuskawin==='sudah menikah'" >
                                <div>
                                    <h3>Anggota</h3>

                                    <div class="form-group mr-3">
                                    <label  for="namakeluarga[]">Nama Anggota</label>
                                    <input type="text" name="namakeluarga[]" class="form-control">
                                    </div>
                                    <div class="form-group mr-3">
                                    <label  for="pekerjaan_anggota[]">Pekerjaan</label>
                                    <input type="text" name="pekerjaan_anggota[]" class="form-control" placeholder="mahasiswa,pegawai swasta,pelajar,etc">
                                    </div>
                                    
                                    <div class="form-group mr-3 ">
                                    <label class="" for="tempatlahir[]">Tempat Lahir</label>
                                    <input type="text" name="tempatlahir[]" class="form-control">
                                    </div>

                                    <div class="form-group mr-3 ">
                                    <label class="" for="tgl_lahir_anggota[]">Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir_anggota[]" class="form-control">
                                    </div>

                                    <div class="form-group mr-3">
                                    <label class="" for="tgl_baptis_anggota[]">Tanggal Baptis</label>
                                    <input type="date" name="tgl_baptis_anggota[]" class="form-control">
                                    </div>
                                    <div class="form-group mr-3">
                                    <label class="" for="hubungan[]">Hubungan</label>
                                    <select class="custom-select" name="hubungan[]">
                                    <option selected>Pilih hubungan</option>
                                    <option value="Istri">Istri</option>
                                    <option value="Anak">Anak</option>
                                    
                                </select>
                                </div>
                                                    
                                <div class="form-group mr-3">
                                <label class="" for="gender_anggota[]">Jenis Kelamin</label>
                                <select class="custom-select" name="gender_anggota[]">
                                <option selected>Pilih Jenis Kelamin</option>
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                                
                            </select>
                                </div>
                            <div class="form-group ">
                                <label class="" for="statusmenikah[]">Status Menikah</label>
                                <select class="custom-select" name="statusmenikah[]">
                                <option selected>Pilih status menikah</option>
                                <option value="sudah menikah">Sudah Menikah</option>
                                <option value="belum menikah">belum menikah</option>
                                
                            </select>
                            </div>
                                </div>



                                
                            </div>
                        </b-form>
                        <b-button>
                            Kirim
                        </b-button>
                        <div class="mt-3">Selected: <strong>{{ statuskawin }}</strong></div>
                    </div>
                </b-col>
            </b-row>
        </div>

    </div>
</template>

<script>
import {Navbar,Header,Footer} from '../../components'
export default {
    name:'JemaatBaru',
    components:{
        Navbar,
        Header,
        Footer
    },
    data(){
        return{
            statuskawin:'',
            anggotaKeluarga:[
                {
                    nama:[''],
                    
                }
            ]
        }
    }
}
</script>
<style lang="scss" scoped>
@import 'JemaatBaru.scss';
</style>