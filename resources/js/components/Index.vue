<template>
    <div class="container mt-5">
        <Filter />
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
    </div>
</template>

<script>
import Item from "./Board/Item.vue";
import Filter from "./Board/Filter/Filter.vue";
export default {
    name: "Board",
    components: {Item, Filter}
}
</script>