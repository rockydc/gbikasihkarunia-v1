<template>
  <b-card

    :img-src="'../../assets/img/frontend/event/'+photo"
    img-alt="Image"
    img-top
    tag="article"
    style="max-width: 20rem;"
    class="mb-2"
  >
   
 <b-card-text>
     <div class="caption-section">
          <div class="tag">
            {{'#'+tag}}
        </div>
        <div class="date-section">
            {{date}}
        </div>
     </div>
    <h1 class="mb-4 mt-4">{{title}}</h1>
    </b-card-text>
    <b-button href="#">Selengkapnya</b-button>
  </b-card>
</template>
<script>
export default {
    name:'CardEvent',
    props:{
        title:String,
        tag:String,
        photo:String,
        date:Date
    }
}
</script>
<style lang="scss" scoped>
@import 'CardEvent.scss';
</style>