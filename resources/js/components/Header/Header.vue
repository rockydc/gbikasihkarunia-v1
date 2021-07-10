<template>
    <div class="header">
        <b-img class="img-header" :src="'../../assets/img/frontend/'+image" fluid alt="bg-header-renungan-2x image"></b-img>
        <h1 class="header-title">
            {{title}}
        </h1>
    </div>
</template>
<script>
export default {
    name:'Header',
    props:{
        title:String,
        image:String
    }
}
</script>
<style lang="scss" scoped>
@import 'Header.scss';
</style>