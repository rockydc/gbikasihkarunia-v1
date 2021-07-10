<template>
    <div :style="styles.widthLimiter">
        <div class="iframe-wrapper">
            <iframe :src="src"  frameborder="0" allowfullscreen="true">
            </iframe>
        </div>
    </div>
</template>
<script>
export default {
    name:'Youtube',
    props:[
        "maxWidth","videoId"
    ],
    computed:{
        src(){
            return `${this.videoId}`;
        }
    },
    data(){
        return{
            styles:{
                widthLimitter:{
                    maxWidth: this.maxWidth ? this.maxWidth :null
                }
        
            }
        }
    }
}
</script>
<style lang="scss" scoped>
@import 'Youtube.scss';
</style>