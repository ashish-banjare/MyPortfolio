<template>
    <div class="container px-lg-5">
        <!-- Heading -->
        <div class="position-relative d-flex text-center mb-5">
          <h2 class="text-24 text-light opacity-4 text-uppercase font-weight-600 w-100 mb-0">Contact</h2>
          <p class="text-9 text-dark font-weight-600 position-absolute w-100 align-self-center line-height-4 mb-0">Get
            in Touch<span class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span>
          </p>
        </div>
        <!-- Heading end-->
        <div class="row">
          <div class="col-md-4 col-xl-3 order-1 order-md-0 text-center text-md-left mt-5 mt-md-0">
            <h2 class="mb-3 text-5 text-uppercase">Address</h2>
            <p class="text-3 mb-4">{{ dev.address }}</p>
            <p class="text-3 mb-1"><span class="text-primary text-4 mr-2"><i class="fas fa-phone"></i></span>{{ dev.mobile }}</p>
            <p class="text-3 mb-4"><span class="text-primary text-4 mr-2"><i
                  class="fas fa-envelope"></i></span>{{ dev.email }}</p>
            <h2 class="mb-3 text-5 text-uppercase">Follow Me</h2>
            <ul class="social-icons ml-md-n2 justify-content-center justify-content-md-start">
              <li v-for="(account, index) in dev.social_media" :key="index" class="social-icons-dribbble">
                  <a data-toggle="tooltip" :href="account.url"
                  target="_blank" title="" :data-original-title="account.title"><i :class="account.icon"></i></a>
                </li>
            </ul>
          </div>
          <div class="col-md-8 col-xl-9 order-0 order-md-1">
            <h2 class="mb-3 text-5 text-uppercase text-center text-md-left">Send us a note</h2>
            <form id="contact-form" action="php/mail.php" method="post">
              <div class="row">
                <div class="col-xl-6">
                  <div class="form-group">
                    <input name="name" type="text" class="form-control" required placeholder="Name">
                  </div>
                </div>
                <div class="col-xl-6">
                  <div class="form-group">
                    <input name="email" type="email" class="form-control" required placeholder="Email">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <textarea name="form-message" class="form-control" rows="5" required
                  placeholder="Tell us more about your needs........"></textarea>
              </div>
              <p class="text-center mt-4 mb-0">
                <button id="submit-btn" class="btn btn-primary rounded-pill d-inline-flex" type="submit">Send
                  Message</button>
              </p>
            </form>
          </div>
        </div>
      </div>
</template>

<script>
export default {
    name: 'ContactSection',

    props: {
        dev: Object,
    },
}
</script>

<style>

</style>