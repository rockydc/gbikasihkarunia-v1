<template>
    <div>
       <Navbar/>
       <Header title="Komunitas"  image="bg-header-komunitas-2x.png" />
       <div class="section-komunitas">
            <b-img class="bg-header" src="../../assets/img/frontend/pelayanan/bg-pelayanan-2x.png"></b-img>
            <div class="wrapper container">
                <SmartCard 
                v-for="items in pelayanan" 
                v-bind:key="items.id"
                :photo="items.photo"
                :title="items.title"
                :caption="items.caption"
                :pic="items.pic"
                />
            </div>


       </div>
    <Footer/>
 
    </div>

</template>
<script>
import {Navbar,Header,Footer,SmartCard} from '../../components'
export default {
    name:'Komunitas',
    components:{
        Navbar,
        Header,
        SmartCard,
        Footer
    },
        data:()=>{
        return{
            pelayanan:[
                {
                    id:1,
                    photo:'youth.png',
                    title:'Youth & Junior ',
                    caption:'SABTU : 18:00 WIB',
                    pic:'Grace : 081319724304'

                },
                {
                    id:2,
                    photo:'kaum pria.png',
                    title:'Kaum Pria',
                    caption:'SABTU : 18:00 WIB',
                    pic:'Grace : 081319724304'

                },
                {
                    id:3,
                    photo:'kaum wanita.png',
                    title:'Kaum Wanita',
                    caption:'Baptisan air adalah salah satu sakramen yang dit.Baptisan air bukan sekadar suatu upacara peresmian untuk menjadi Kristen, tetapi baptisan air merupakan serangkaian langkah-langkah pertobatan dari dosa yang membawa kita kepada keselamatan (Markus 16:16).',
                    pic:'Pdm Dadang M : 081389258860'

                },
                {
                    id:4,
                    photo:'kids.png',
                    title:'Kids',
                    caption:'Pelayanan yang ditujukkan kepada orang yang baru kehilangan kerabat terdekat atau anggota keluarga yang dikasihi.',
                    pic:'Bp Udikun  : 081281616121'

                },
                ]
        }
    }
}
</script>
<style lang="scss" scoped>
@import 'Komunitas.scss';
</style>