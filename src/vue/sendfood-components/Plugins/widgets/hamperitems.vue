<template>
<div class="col-md-12">
 <div class="row justify-content-center">
   <div class="col-md-4"  v-for="item in items" :key='item' >
             {{item}}
   </div>
 </div>
</div>

</template>

<script>
export default {
  props: ['hamperid'],
    data(){
      return{
        items: []
    }},
    methods:{
        //fetch hamper items
        gethumperitems(){
           //alert(this.hamperid);
           console.log(this.hamperid);
            axios('/hamperitems' + '/' + this.hamperid)
            .then((response)=>{
              this.items = response.data;
              console.log(response);
            })
        }
    },
    mounted(){
     
       this.gethumperitems();
    }
}
</script>