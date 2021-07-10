<template>
    <carousel
    :nav="false"
    :autoplay="true"
    :items="1"
    :center="'center'"
    animateOut="animate__slideOutDown"
    animateIn="animate__flipInX"
   





    >
            <b-img class="animated owl-animated-out owl-animated-in"
            v-for="picture in PictureList "
            v-bind:key="picture.id"

            :src="'assets/img/frontend/home/carousel/'+picture.foto"></b-img>
           
    </carousel>
</template>

<script>

import carousel from 'vue-owl-carousel';
export default {

    name:"Carousel",
    components:{
        carousel
},data:()=>{
  return{
      PictureList:[
          {
          id:1,
          foto:'DSC_0003.jpg'
      },{
          id:2,
          foto:'youthevent1.jpeg'
      },{
          id:3,
          foto:'youthevent2.jpeg'
      },{
          id:4,
          foto:'youthallstar.jpg'
      },{
          id:5,
          foto:'junior.jpg'
      }

      
      ]
  }
}
}
</script>
<style lang="scss" >
@import 'Carousel.scss';
</style>