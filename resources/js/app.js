

import Vue from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue'
import vuetify from 'vuetify' // path to vuetify export
import VueTypedJs from 'vue-typed-js'


Vue.config.productionTip = false
Vue.mixin({ methods: { route: window.route } })

Vue.use(VueTypedJs)

createInertiaApp({
  resolve: name => require(`./Pages/${name}`),
  setup({ el, app, props }) {
    
    new Vue({
      
      metaInfo: {
        titleTemplate: title => (title ? `${title} - My Portfolio` : 'My Portfolio'),
      },

      render: h => h(app, props),

      vuetify,

    }).$mount(el)
  },
})