<template>
    <div>
        <Navbar/>
        <Header title="Event" image="bg-header-event-2x.png"/>
        <div class="section-event">
         
            <div class="event-wrapper container">


        
                <b-row  class="container " v-if="renunganList.length > 0" >
                    <b-col v-for="item in renunganList" v-bind:key="item.id" lg="4" md="12" sm="12" class="mt-5  content">
                        <CardEvent
                        title="Dating, Mariage & Sex"
                        tag="Youth"
                        date="05/20/2021"
                        photo="youthevent2.jpeg"
                        />
                    
                    </b-col>
                  
                
                </b-row>
                <b-row v-else>
                    <b-co>
                        Data Kosong
                    </b-co>
                </b-row>
                
            </div>
       
              
        </div>
        <Footer />
    </div>
</template>
<script>
import {Navbar,Header,CardEvent,Footer,} from '../../components'
import axios from "axios";

export default {
    name:'Event',
    components:{
        Navbar,Header,
        CardEvent,
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
@import 'Event.scss';
</style>