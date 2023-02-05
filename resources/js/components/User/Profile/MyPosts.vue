<template>
    <div class="container flex flex-row flex-wrap justify-between">
        <Item />
        <Item />
        <Item />
        <Item />
        <Item />
        <Item />
        <Item />
        <Item />
    </div>
</template>

<script>
import Item from "../../Board/Item.vue";
export default {
    name: "MyPosts",
    components: {Item}
}
</script>

<style scoped>

</style>