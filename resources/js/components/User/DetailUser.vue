<template>
    <div class="container mt-10">
        <div class="flex">
            <div class="w-1/3">
                <img src="https://via.placeholder.com/150x150"
                     class="rounded-full ml-2 mr-2 mw-50px" alt="">
            </div>
            <div class="w-2/3">
                <h1 class="text-2xl">Valeriya Novodvorskaya</h1>
                <div class="text-lg mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi expedita minus omnis placeat possimus provident?</div>
            </div>

        </div>
        <div class="container flex flex-row flex-wrap justify-between mt-12 ">
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
import Item from "../Board/Item.vue";
export default {
    name: "DetailUser",
    components: {Item}

}
</script>