<template>
    <div>
        <Navbar/>
          <Header title="Persembahan"  image="bg-header-pelayanan-2x.png" />
          <div class="section-persembahan text-center container">
              <p class="title">
                  2 Korintus 9:7
              </p>
              <p class="quote">
                  "Hendaklah masing-masing memberikan menurut kerelaan hatinya, jangan dengan sedih hati atau karena paksaan, sebab Allah mengasihi orang yang memberi dengan sukacita"
              </p>
              <div class="content-persembahan">
                    <b-row  v-for="item in persembahanList" v-bind:key="item.id">
                        <b-col >
                            <p>{{item.nama}}</p>
                        </b-col>
                        <b-col>
                            <p>{{item.no_rek}}</p>
                        </b-col>
                        <b-col>
                            <p>{{item.atas_nama}}</p>
                        </b-col>
                    </b-row>
              </div>
             
          </div>

            <Footer/>
    </div>
</template>

<script>
import axios from 'axios'
import {Navbar,Header,Footer} from '../../components'
export default {
    name:'Persembahan',
    components:{
        Navbar,
        Header,
        Footer
    },
    data:()=>{
      return{
        persembahanList:[]
      }
    },
    mounted(){
      axios
      .get("http://localhost:8000/api/persembahan/getdata")
     .then(res=>(this.persembahanList = res.data.data.data))
     .catch(err=>console.log(err));
    }
}
</script>
<style lang="scss" scope>
@import 'Persembahan.scss';
</style>