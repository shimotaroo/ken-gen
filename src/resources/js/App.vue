<template>
    <v-app>
        <Header />
        <Decription />
        <v-main>
            <router-view />
        </v-main>
        <Footer />
    </v-app>
</template>

<script>
import Header from './components/Header'
import Footer from './components/Footer'
import Decription from './components/Description'
import Top from './components/Top'

export default {
    components: {
        Header,
        Footer,
        Decription,
        Top,
    }
}
</script>