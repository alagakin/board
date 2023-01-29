<template>
    <Header :user="user"/>
    <main class="max-w-4xl mx-auto">
        <div class="container mt-3 max-w-5xl">
            <router-view/>
        </div>
    </main>
</template>

<script>
import axios from "axios";
import Header from "./components/Header.vue";
import Board from "./components/Board.vue";

export default {
    name: "Home",
    components: {Header, Board},
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