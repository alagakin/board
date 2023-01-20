<template>
    <div class="flex justify-center">
        <h1 class="text-6xl" v-text="number"></h1>
    </div>
</template>

<script>
export default {
    name: "Welcome",
    data(){
        return {
            number: 0
        }
    },
    mounted() {
        setInterval(() => {
            this.number = Math.round(Math.random() * 1000)
        }, 1000)
    }
}
</script>