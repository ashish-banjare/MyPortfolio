<template>
    <div class="hero-wrap">
        <div class="hero-mask opacity-8 bg-dark"></div>
        <div class="hero-bg parallax" style="background-image:url('images/intro-bg.jpg');"></div>
        <div class="hero-content section d-flex fullscreen">
            <div class="container my-auto">
                <!-- <div class="row">
                    <div class="col-12 text-center">
                        <p class="text-7 font-weight-500 text-white mb-2 mb-md-3">Welcome</p>
                        <h2 class="text-16 font-weight-600 text-white mb-2 mb-md-3">
                            <p>I'm {{ dev_name }}</p>
                        </h2>
                        <p class="text-5 text-light mb-4">I'm a {{ dev_designation }}.</p>
                        <p class="text-5 text-light mb-4">based in {{ dev_city }}, {{ dev_country }}.</p>
                        <a href="#contact"
                            class="btn btn-outline-primary rounded-pill shadow-none smooth-scroll mt-2">Hire
                            Me</a>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-12 text-center">
                       
                        <p class="text-7 font-weight-500 text-white mb-2 mb-md-3">Welcome</p>
                        <vue-typed-js :strings="['I\'m '+dev_name, 'I\'m a Freelancer.']" :loop="true" :typeSpeed="150">
                            <p class="text-16 font-weight-600 text-white mb-2 mb-md-3"><span class="typing"></span></p>
                        </vue-typed-js>
                        <p class="text-5 text-light mb-4">based in {{ dev_city }}, {{ dev_country }}.</p>
                        <a href="#contact" class="btn btn-outline-primary rounded-pill shadow-none smooth-scroll mt-2">Hire Me</a>
                    </div>
                </div>
            </div>
            <a href="#about" class="scroll-down-arrow text-white smooth-scroll"><span class="animated"><i
                        class="fa fa-chevron-down"></i></span></a>
        </div>
    </div>
</template>

<script>


export default {
    name: 'HomeSection',


    props: [
        'dev_name',
        'dev_designation',
        'dev_city',
        'dev_country',
    ],
}
</script>

<style>

</style>