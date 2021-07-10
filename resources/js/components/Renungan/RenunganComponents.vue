<template>
<div>
	<router-link v-bind:to="'/detail-renungan/'+slug">
    <a href="#">
        <figure>
            <div class="date">
                <span class="card-date-day">{{tanggal | dateFormat}}</span>
                <span class="card-date-month">{{tanggal | monthFormat}}</span>
            </div>
            <figcaption>
                <h4><span>
                    {{judul}}
                    </span></h4>
                    <div class="text-white caption-wrap" v-html=caption>
					
                    </div>
            </figcaption>
        </figure>
    </a>
	</router-link>
</div>
</template>
<script>
export default {
    name:'RenunganComponents',
    props:{
        judul:String,
        caption:String,
        tanggal:String,
        slug:String
    },
    filters:{
        dateFormat:(date)=>{
            let myDate = new Date(date)
            let dateString = myDate.toDateString().split(' ')
            return dateString[2]
        },
		monthFormat:(date)=>{
			let myDate = new Date(date)
            let dateString = myDate.toDateString().split(' ')
          
            return dateString[1].toUpperCase();

		}
    }
}
</script>
<style lang="scss" scoped>
@import 'RenunganComponent.scss';
</style>