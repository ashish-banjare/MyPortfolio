<template>
    <div class="container px-lg-5">
        <!-- Heading -->
        <div class="position-relative d-flex text-center mb-5">
            <h2 class="text-24 text-light opacity-4 text-uppercase font-weight-600 w-100 mb-0">Portfolio</h2>
            <p class="text-9 text-dark font-weight-600 position-absolute w-100 align-self-center line-height-4 mb-0">My
                Work<span class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span>
            </p>
        </div>
        <!-- Heading end-->

        <!-- Filter Menu -->
        <ul class="portfolio-menu nav nav-tabs justify-content-center border-bottom-0 mb-4">
            <li v-for="(menu, index) in portfolio.menus" :key="index" class="nav-item"> 
                <a :data-filter="filter_data[index]" class="nav-link" href="">{{menu}}</a>
            </li>
        </ul>
        <!-- Filter Menu end -->
        <div class="portfolio popup-ajax-gallery">
            <div class="row portfolio-filter">
                <!-- project block start -->
                <div v-for="(project, index) in portfolio.projects" :key="index" :class="['col-sm-6', 'col-lg-4', project.filter]">
                    <div class="portfolio-box rounded my-3">
                        <div class="portfolio-img rounded"> <img class="img-fluid d-block"
                                :src="project.image" alt="">
                            <div class="portfolio-overlay"> 
                                <a class="popup-ajax stretched-link"
                                    href="javascript:;"></a>
                                <div class="portfolio-overlay-details">
                                    <h5 class="text-white font-weight-400">{{project.title}}</h5>
                                    <span class="text-light">{{project.category}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'PortfolioSection',

    props:{
        portfolio : Object,
        Menus : Array,
    },
    
    data(){
        return {
            filter_data : [],
            dialog: false,
        }
    },

    mounted(){
        let menus_arr = [];
        this.portfolio.menus.forEach(function(menu) {
            if(menu == 'All'){
                menus_arr.push('*');
            }else{
                menus_arr.push('.'+menu.toLowerCase());
            }
        })

        this.filter_data = menus_arr;
    },
}
</script>

<style>

</style>