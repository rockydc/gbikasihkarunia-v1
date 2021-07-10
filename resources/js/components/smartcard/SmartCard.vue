<template>
    <div class="content-wrapper">
        <div class="photo-wrapper">
            <b-img :src="'../../assets/img/frontend/pelayanan/'+ photo">

            </b-img>
        </div>
        <div class="text-wrapper">
            <h1>{{title}}</h1>
            <p>{{caption}}</p>
            <p>{{pic}}</p>
        </div>
    </div>
</template>
<script>
export default {
    name:'SmartCard',
    props:{
        title:String,
        caption:String,
        photo:String,
        pic:String
    }
}
</script>
<style lang="scss">

@import 'SmartCard.scss';


</style>