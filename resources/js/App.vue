<template>
    <Header :user="user"/>
    <main class="max-w-4xl mx-auto">
            <router-view/>
    </main>
</template>

<script>
import axios from "axios";
import Header from "./components/Share/Header.vue";
import Index from "./components/Index.vue";

export default {
    name: "Home",
    components: {Header, Index},
    data() {
        return {
            user: null
        }
    },
    mounted() {
        this.getUser();
    },
    methods: {
        getUser() {
            axios.get('/get-user').then((response) => {
                this.user = response.data
            })
        }
    }
}
</script>