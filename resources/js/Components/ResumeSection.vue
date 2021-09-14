<template>
  <div class="container px-lg-5">
      <!-- Heading -->
      <div class="position-relative d-flex text-center mb-5">
          <h2 class="text-24 text-light opacity-4 text-uppercase font-weight-600 w-100 mb-0">Summary</h2>
          <p class="text-9 text-dark font-weight-600 position-absolute w-100 align-self-center line-height-4 mb-0">
              Resume<span class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span>
          </p>
      </div>
      <!-- Heading end-->

      <div class="row">
          <!-- My Education -->
          <div class="col-md-6">
              <h2 class="text-6 font-weight-600 mb-4">{{ dev.resume.summary.my_education.heading }}</h2>
              <div v-for="(record, index) in dev.resume.summary.my_education.records" :key="index"
                  class="bg-white border rounded p-4 mb-4">
                  <p class="badge badge-primary text-2 font-weight-400">{{ record.year_periods }}</p>
                  <h3 class="text-5">{{ record.title }}</h3>
                  <p class="text-danger">{{ record.organization }}</p>
                  <p class="mb-0">{{ record.description }}</p>
              </div>
          </div>

          <!-- My Experience -->
          <div class="col-md-6">
              <h2 class="text-6 font-weight-600 mb-4">{{ dev.resume.summary.my_experience.heading }}</h2>
              <div v-for="(record, index) in dev.resume.summary.my_experience.records" :key="index"
                  class="bg-white border rounded p-4 mb-4">
                  <p class="badge badge-primary text-2 font-weight-400">{{ record.year_periods }}</p>
                  <h3 class="text-5">{{ record.title }}</h3>
                  <p class="text-danger">{{ record.organization }}</p>
                  <p class="mb-0">{{ record.description }}</p>
              </div>
          </div>
      </div>
      <!-- My Skills -->
      <h2 class="text-6 font-weight-600 mt-4 mb-4">My Skills</h2>
      <div class="row">
        
        <div class="col-md-6">
            <div v-for="(row, index2) in skill_rows" :key="index2">
                <div v-if="index2 <= 2">
                    <p class="text-dark font-weight-500 text-left mb-2">{{row.title}} <span class="float-right">{{row.value_now}}%</span></p>
                    <div class="progress progress-sm mb-4">
                        <div class="progress-bar" role="progressbar" :style="{'width': row.value_now+'%'}" :aria-valuenow="row.value_now" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div v-for="(row, index2) in skill_rows" :key="index2">
                <div v-if="index2 > 2">
                    <p class="text-dark font-weight-500 text-left mb-2">{{row.title}} <span class="float-right">{{row.value_now}}%</span></p>
                    <div class="progress progress-sm mb-4">
                        <div class="progress-bar" role="progressbar" :style="{'width': row.value_now+'%'}" :aria-valuenow="row.value_now" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="text-center mt-5"><a :href="dev.download_cv" title="Download" download class="btn btn-outline-secondary rounded-pill shadow-none">Download
              CV <span class="ml-1"><i class="fas fa-download"></i></span></a></div>
  </div>
</template>

<script>



export default {
    name: 'ResumeSection',

    props: {
        dev : Object,
    },

    data: function(){
        return {
            skill_columns : [],
            skill_rows : {},
        }
    },

    mounted: function(){
        this.skill_columns  = (this.dev.resume.skills.length/3);
        this.skill_rows     = this.dev.resume.skills;
    }
}


</script>