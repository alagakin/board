<template>
    <Header :user="user" />
    <router-view />
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