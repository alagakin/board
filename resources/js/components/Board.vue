<template>
    <form action="" class="w-full rounded-lg">
        <input type="text" placeholder="search" class="w-full rounded-xl p-3 focus:outline-none">
    </form>
    <div class="container flex flex-row flex-wrap justify-between mt-7 ">
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
import Item from "./Item.vue";
export default {
    name: "Board",
    components: {Item}
}
</script>