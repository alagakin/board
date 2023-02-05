<template>
    <form action="" class="w-full rounded-lg">
        <input type="text" placeholder="search"
               class="w-full rounded-lg p-3 focus:outline-none focus:border-blue border-gray-300 text-gray-900 bg-gray-50">
    </form>
    <div class="flex justify-between mt-2">
        <div class="flex justify-center w-1/2 pr-2">
            <Select/>
        </div>
        <div class="flex justify-between w-1/2 ">
            <Select :classes="['mr-2']"/>
            <Select/>
        </div>
    </div>
</template>

<script>
import Select from "./Select.vue";

export default {
    name: "Filter",
    components: {Select},
}
</script>