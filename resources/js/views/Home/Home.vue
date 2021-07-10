<template>
    <div>
        <Navbar/>
        <div class="msg-pastor-wrapper container-fluid">

            <div class="photo-wrapper">
                <b-img 
                rounded="circle"
                src="assets/img/frontend/home/foto-pagem-dan-sam.png">

                </b-img>
            </div>
            <div class="quote-wrapper">

                <div class="quote">
                    <i><h1>             
                    "Penginjilan dan Pemuridan Untuk Mendewasakan Jemaat Menjadi Sempurna Seperti Kristus."
                    </h1></i>
                    <p class="mt-3">
                        Sammy Christian lumban radja s.psi & Pdt Sahala Nainggolan m.Th
                    </p>
                </div>


            </div>

        </div>



        <div class="red-wrapper">
            <b-img class="bg-img" src="assets/img/frontend/home/BG-home.png"></b-img>
            
            <div class="section-news" data-aos="fade-down" data-aos-duration="1000">
          
                       <h1  class="mb-5">Seputar Kasih Karunia</h1>
         
             
                <div class="container">
                            <Carousel/>
                </div>
        
            </div>
         
            <div class="section-video">
          
                <b-row class="container-fluid" v-for="video in videoObject" v-bind:key="video.id">
                    <b-col class="mt-5" lg="7" md="12" sm="12">
                        <Youtube data-aos="fade-down" data-aos-duration="1000"
                        :videoId="video.sumberurl" maxWidth="360px"
                        />
                    </b-col>
                    <b-col class="mt-5 title-wrapper" lg="5" md="12" sm="12">
                        <h1 data-aos="fade-up" data-aos-duration="1500">{{video.nama}}</h1>
                    </b-col>
                </b-row>

            </div>
        </div>

        <div class="section-renungan">
            <h1 data-aos="fade-down" data-aos-delay="200" >Renungan</h1>
            <div class="renungan-wrapper">


        
                <b-row  class="container " v-if="renunganList.length > 0" >
                    <b-col v-for="item in renunganList" v-bind:key="item.id" lg="4" md="12" sm="12" class="mt-5  content">
                    <RenunganComponents data-aos="fade-up" :data-aos-delay="1000-(100*(item.id))"
                    :slug="item.slug"
                    :tanggal="item.tanggal" 
                    :judul="item.judul" 
                    :caption="item.deskripsi  | subStr"/>
                    
                    </b-col>
                  
                
                </b-row>
                
            </div>
              <Button class="btn-renungan" title="Lihat Semua"/>
              
        </div>
        <Footer />
    </div>
</template>

<script>
import {Navbar,Carousel,Youtube,RenunganComponents,Button,Footer} from '../../components';
import axios from "axios";


export default {    
    name:'Home',
    components:{
        Navbar,
        Carousel,
        Youtube,
        RenunganComponents,
        Button,
        Footer
       
    },
    data:()=>{
        return{
            renunganList:[],
            videoObject:[]
        }
    },
    mounted(){
    axios
     .get("http://localhost:8000/api/renungan/getdata",
     {
       params:{
        limit:3
       }
     }
     )
     .then(res=>(this.renunganList = res.data.data.data))
     .catch(err=>console.log(err));
    
    axios.get('http://localhost:8000/api/video/getdata')
    .then(res=>this.videoObject = res.data.data.data)
    .catch(err=>console.log(err))
    },
    filters:{
        subStr:(string)=>{
                     if(string.length > 100){
                return string.substring(0,100) + '. . .';
            }
            return string
        }
          
    }
}
</script>
<style lang="scss" scoped>
@import 'home.scss';
</style>