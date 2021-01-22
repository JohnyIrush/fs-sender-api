<template>
<div class="col-md-12">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active"  >
            <img :src="imageOne" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" v-for="image in images" :key='image'>
          <img :src="image.image" class="d-block w-100" alt="...">
        </div>
      </div>
    </div>
</div>

</template>

<script>
export default {
  props: ['hamperid'],
    data(){
      return{
        images: [],
        imageOne: 'image'
    }},
    methods:{
        //fetch hamper items
        gethumperitems(){
           //alert(this.hamperid);
           console.log(this.hamperid);
            axios('/hamperimages' + '/' + this.hamperid)
            .then((response)=>{
              this.images = response.data;
            })
        }
    },
    mounted(){
     
       this.gethumperitems();
    }
}
</script>