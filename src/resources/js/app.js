import './bootstrap'

// Vue.jsをインポートする
import Vue from 'vue'

// ルーティングの定義をインポートする
import router from './router'

// Vuetifyをインポートする
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'

// ルートコンポーネントをインポートする
import App from './App.vue'

Vue.use(Vuetify)

new Vue({
    el: '#app',
    router,
    components: {
        App,
    },
    template: '<App />',
    vuetify: new Vuetify(),
})