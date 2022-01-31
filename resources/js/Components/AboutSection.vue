<template>
    <div class="container px-lg-5">
        <!-- Heading -->
        <div class="position-relative d-flex text-center mb-5">
            <h2 class="text-24 text-light opacity-4 text-uppercase font-weight-600 w-100 mb-0">About Me</h2>
            <p class="text-9 text-dark font-weight-600 position-absolute w-100 align-self-center line-height-4 mb-0">
                Know Me More<span
                    class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span> </p>
        </div>
        <!-- Heading end-->

        <div class="row">
            <div class="col-lg-8 text-center text-lg-left">
                <h2 class="text-7 font-weight-600 mb-3">I'm <span class="text-primary">{{ dev.name }},</span> a
                    {{ dev.designation }}</h2>
                <p>{{ dev.about_us }}.</p>
            </div>
            <div class="col-lg-4 mt-5 mt-lg-0">
                <div class="pl-4">
                    <ul class="list-style-2">
                        <li class=""><span class="font-weight-600 mr-2">Name:</span>{{ dev.name }}</li>
                        <li class=""><span class="font-weight-600 mr-2">Email:</span><a
                                href="mailto:chat@simone.com">{{ dev.email }}</a></li>
                        <li class=""><span class="font-weight-600 mr-2">Age:</span>28</li>
                        <li class="border-0"><span class="font-weight-600 mr-2">From:</span>{{ dev.city }},
                            {{ dev.country }}</li>
                    </ul>
                    <a :href="dev.download_cv" title="Download" download class="btn btn-primary rounded-pill">Download CV</a>
                </div>
            </div>
        </div>
        <div class="brands-grid separator-border mt-5">
            <div class="row">
                <div class="col-6 col-md-3">
                    <div class="featured-box text-center">
                        <h4 class="text-12 text-muted mb-0"><span class="counter" data-from="0"
                                v-bind:data-to="dev.experiance_years">{{ dev.experiance_years }}</span>+</h4>
                        <p class="mb-0">Years Experiance</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="featured-box text-center">
                        <h4 class="text-12 text-muted mb-0"><span class="counter" data-from="0"
                                v-bind:data-to="dev.happy_clinet">{{ dev.happy_clinet }}</span>+</h4>
                        <p class="mb-0">Happy Clients</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="featured-box text-center">
                        <h4 class="text-12 text-muted mb-0"><span class="counter" data-from="0"
                                v-bind:data-to="dev.project_done">{{ dev.project_done }}</span>+</h4>
                        <p class="mb-0">Projects Done</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="featured-box text-center">
                        <h4 class="text-12 text-muted mb-0"><span class="counter" data-from="0"
                                v-bind:data-to="dev.awards_got">{{ dev.awards_got }}</span></h4>
                        <p class="mb-0">Get Awards</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'AboutSection',

    props: {
        dev: Object,
    },
}
</script>

<style>

</style>