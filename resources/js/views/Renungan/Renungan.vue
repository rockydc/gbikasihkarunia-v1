<template>
    <div>
        <Navbar/>
        <Header title="Renungan" image="bg-header-renungan-2x.png"/>
        <div class="section-renungan">
         
            <div class="renungan-wrapper container">


        
                <b-row  class="container " v-if="renunganList.length > 0" >
                    <b-col v-for="item in renunganList" v-bind:key="item.id" lg="4" md="12" sm="12" class="mt-5  content">
                    <RenunganComponents data-aos="fade-up" :data-aos-delay="1000-(100*(item.id))"
                    :slug="item.slug"
                    :tanggal="item.tanggal" 
                    :judul="item.judul" 
                    :caption="item.deskripsi  | subStr"/>
                    
                    </b-col>
                  
                
                </b-row>
                <b-row v-else>
                    <b-col>
                        Maaf, data tidak ditemukan atau data kosong
                    </b-col>
                </b-row>
                
            </div>
           
              
        </div>
        <Footer />
    </div>
</template>
<script>
import {Navbar,Header,RenunganComponents,Footer} from '../../components'
import axios from "axios";

export default {
    name:'Renungan',
    components:{
        Navbar,Header,
        RenunganComponents,
        Footer
    },
    data:()=>{
        return{
            renunganList:[]
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
@import 'Renungan.scss';
</style>