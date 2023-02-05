<template>
    <form class="container pl-8 pr-8">
        <div class="w-full pb-3">
            <label
                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                for="grid-password">
                Title of your product/service
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-password" type="text"
                placeholder="My Beautiful Product">
        </div>
        <div class="w-full pb-3">
            <label for="message" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Describe Your Product</label>
            <textarea id="message" rows="4" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Leave a comment..."></textarea>
        </div>
        <div class="w-full pb-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="picture">Upload picture</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="picture">Picture will attract more attention to your product</div>
        </div>
        <button type="submit" class="block text-white bg-blue-700
        hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300
        font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 m-auto">Publish</button>

    </form>

</template>

<script>
export default {
    name: "NewPost"
}
</script>

<style scoped>

</style>