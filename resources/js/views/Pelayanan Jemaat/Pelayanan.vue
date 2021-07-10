<template>
    <div>
       <Navbar/>
       <Header title="Pelayanan"  image="bg-header-pelayanan-2x.png" />
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
    name:'Pelayanan',
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
                    photo:'penyerahan-anak.png',
                    title:'Penyerahan Anak',
                    caption:'Kami Melayani penyerahan Anak yang baru lahir untuk didoakan oleh Bp Gembala Pdt Sahala Nainggolan m.Th',
                    pic:'Bp Andreas : 085880238222'

                },
                {
                    id:2,
                    photo:'pernikahan.png',
                    title:'Pernikahan',
                    caption:'Pemberkatan nikah adalah suatu peristiwa sakral dan sangat penting yang dinanti-nantikan oleh pasangan calon mempelai sebagai momen persatuan menjadi suami istri di dalam Tuhan sekaligus sebagai langkah awal memasuki kehidupan keluarga yang baru.',
                    pic:'Pdp Novri R: 08118123970'

                },
                {
                    id:3,
                    photo:'baptis.png',
                    title:'Baptisan Air',
                    caption:'Baptisan air adalah salah satu sakramen yang dit.Baptisan air bukan sekadar suatu upacara peresmian untuk menjadi Kristen, tetapi baptisan air merupakan serangkaian langkah-langkah pertobatan dari dosa yang membawa kita kepada keselamatan (Markus 16:16).',
                    pic:'Pdm Dadang M : 081389258860'

                },
                {
                    id:4,
                    photo:'diakonia.png',
                    title:'Dukacita',
                    caption:'Pelayanan yang ditujukkan kepada orang yang baru kehilangan kerabat terdekat atau anggota keluarga yang dikasihi.',
                    pic:'Bp Udikun  : 081281616121'

                },
                ]
        }
    }
}
</script>
<style lang="scss" scoped>
@import 'Pelayanan.scss';
</style>