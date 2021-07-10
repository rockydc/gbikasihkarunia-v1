<template>
  <div id="app">
 
    <div id="nav">
     
    </div>
    <router-view></router-view>
  </div>
</template>


<style lang="scss">

*{
  box-sizing:border-box;
  -webkit-box-sizing:border-box;
  margin:0;
  padding:0;
  scroll-behavior: smooth;
}
body{
  background-color:#fff;
}
.title{
    font-size:20px;
    
}
.section-footer{

  border-top:1px solid #E3E3E3;
}

    .btn-smart{
        background-color:#F2792E;
        border:none;
        transition:ease-in-out 0.5s;
        &:hover{
          
           background-color:#f32905;
        }
    }
</style>