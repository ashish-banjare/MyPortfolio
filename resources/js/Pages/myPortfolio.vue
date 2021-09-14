<template>
  <div>
    <!-- ======================Intro======================= -->
    <section id="home">
        <!-- Home Section Component -->
        <HomeSection
          v-bind:dev_name         = "dev.name"
          v-bind:dev_designation  = "dev.designation"
          v-bind:dev_city         = "dev.city"
          v-bind:dev_country      = "dev.country"
        > </HomeSection>
    </section>
    <!-- Intro end -->

    <!-- ====================About========================= -->
    <section id="about" class="section">
      <AboutSection v-bind:dev = "dev"  />
    </section>
    <!-- About end -->

    <!-- Services
    ============================================= -->
    <section id="services" class="section bg-light">
      <ServiceSection v-bind:dev = "dev"  />
    </section>
    <!-- Services end -->

    <!-- Resume
  ============================================= -->
    <section id="resume" class="section">
      <ResumeSection v-bind:dev = "dev"  />
    </section>
    <!-- Resume end -->

    <!-- Portfolio
  ============================================= -->
    <section id="portfolio" class="section bg-light">
      <PortfolioSection v-bind:portfolio = "dev.portfolio"  />
    </section>
    <!-- Portfolio end -->

    <!-- Testimonial
  ============================================= -->
    <section id="testimonial" class="section">
      <TestimonialSection v-bind:testimonial = "dev.testimonials"  />
    </section>
    <!-- Testimonial end -->

    <!-- Contact Me
  ============================================= -->
    <section id="contact" class="section bg-light">
      <ContactSection v-bind:dev = "dev"  />
    </section>
    <!-- Contact Me end -->


  </div>
</template>

<script>
    import Layout from '@/Shared/Layout'
    import HomeSection from '@/Components/HomeSection.vue'
    import AboutSection from '@/Components/AboutSection.vue'
    import ServiceSection from '@/Components/ServiceSection.vue'
    import ResumeSection from '@/Components/ResumeSection.vue'
    import PortfolioSection from '@/Components/PortfolioSection.vue'
    import TestimonialSection from '@/Components/TestimonialSection.vue'
    import ContactSection from '@/Components/ContactSection.vue'

    export default {

      name: 'portfolio',
      
      layout: Layout,

      components: {
        HomeSection,
        AboutSection,
        ServiceSection,
        ResumeSection,
        PortfolioSection,
        TestimonialSection,
        ContactSection,
      },
      
      metaInfo: {
        title: 'Dashboard'
      },

      props: {
        dev: Object,
      },
    }
</script>
