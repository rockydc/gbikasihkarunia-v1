<template>
    <b-button >
        {{title}}
    </b-button>
</template>

<script>
export default {
    name:'Button',
    props:{
        title:String
    }
}
</script>

<style lang="scss">

@import 'Button.scss';

</style>