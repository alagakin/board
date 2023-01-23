<template>
    <header class="bg-white">
        <div class="flex flex-row justify-between max-w-5xl mx-auto">
            <div class="font-medium text-2xl p-3">
                <router-link to="/">
                    Board
                </router-link>
            </div>
            <SignIn v-if="!user"/>
            <div v-else class="font-medium text-md p-3"><router-link to="/user">Home</router-link></div>
        </div>
    </header>
</template>

<script>
import SignIn from "../Auth/SignIn.vue";

export default {
    name: "Header",
    components: {SignIn},
    props: {
        user: Object
    }
}
</script>