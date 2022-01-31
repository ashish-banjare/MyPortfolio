<template>
    <div class="container px-lg-5">
        <!-- Heading -->
        <div class="position-relative d-flex text-center mb-5">
          <h2 class="text-24 text-light opacity-4 text-uppercase font-weight-600 w-100 mb-0">Testimonial</h2>
          <p class="text-9 text-dark font-weight-600 position-absolute w-100 align-self-center line-height-4 mb-0">
            Client Speak<span
              class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span> </p>
        </div>
        <!-- Heading end-->
        <carousel :autoplay="true" :nav="false">
            <div v-for="(value, index) in testimonial" :key="index" class="owl-theme" data-loop="true" data-nav="false" data-autoplay="false" data-margin="20"
            data-stagepadding="0" data-slideby="1" data-items-xs="1" data-items-sm="1" data-items-md="1"
            data-items-lg="2">
                <div class="item">
                <div class="bg-light rounded p-5">
                    <div class="d-flex align-items-center mt-auto mb-4"> <img
                        class="img-fluid rounded-circle border d-inline-block w-auto"
                        :src="value.client_img" alt="">
                        <p class="ml-3 mb-0"><strong class="d-block text-dark font-weight-600">{{ value.name }}</strong> <span
                            class="text-muted font-weight-500">{{ value.organization }}</span></p>
                        </div>
                        <p class="text-dark font-weight-500 mb-4">{{ value.comment }}</p>
                        <span class="text-2"> 
                            <i v-for="index in starCountArray(value.star)" :key="index" class="fas fa-star text-warning"></i> 
                        </span>
                    </div>
                </div>
            </div>
        </carousel>
    </div>
</template>

<script>

import carousel from 'vue-owl-carousel'

export default {
    name: 'TestimonialSection',

    components: { carousel },

    props:{
        testimonial : Array,
    },
    
    data(){
        return {
            
        }
    },

    methods:{
        starCountArray(star_count){
            let temp = [];
            for (let index = 0; index < star_count; index++) {
                temp.push(index);
            }
            return temp;
        },
    },

    mounted(){
        // console.log(this.testimonial);
    },
}
</script>

<style>
    /* width */
    ::-webkit-scrollbar {
    width: 5px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px grey; 
    border-radius: 10px;
    }
    
    /* Handle */
    ::-webkit-scrollbar-thumb {
    background: #20c997; 
    border-radius: 10px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
    background: rgb(30, 99, 61); 
    }
    .parent-div{
        overflow-y: scroll;
        height: 400px;
    }
</style>