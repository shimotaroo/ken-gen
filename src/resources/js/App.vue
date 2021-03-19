<template>
    <v-app>
        <Header />
        <Decription />
        <div class="input-container">
            <Top />
        </div>
        <Footer />
    </v-app>
</template>

<script>
import Header from './components/Header.vue'
import Footer from './components/Footer.vue'
import Decription from './components/Description'
import Top from './components/Top.vue'

export default {
    components: {
        Header,
        Footer,
        Decription,
        Top,
    }
}
</script>