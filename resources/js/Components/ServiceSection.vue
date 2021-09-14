<template>
    <div class="container px-lg-5">
        <!-- Heading -->
        <div class="position-relative d-flex text-center mb-5">
          <h2 class="text-24 text-light opacity-4 text-uppercase font-weight-600 w-100 mb-0">Services</h2>
          <p class="text-9 text-dark font-weight-600 position-absolute w-100 align-self-center line-height-4 mb-0">
            What I Do?<span
              class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span> </p>
        </div>
        <!-- Heading end-->

        <div class="row">
          <div class="col-lg-11 mx-auto">
            <div class="row">
              <div v-for="(service, index) in dev.services" :key="index" class="col-md-6">
                <div class="featured-box style-3 mb-5">
                  <div class="featured-box-icon text-primary bg-white shadow-sm rounded"> <i
                      v-bind:class="service.icon"></i> </div>
                  <h3>{{ service.title }}</h3>
                  <p class="mb-0">{{ service.description }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'ServiceSection',

    props: {
        dev: Object,
    },
}
</script>

<style>

</style>