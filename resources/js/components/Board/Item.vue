<template>
    <div class="w-1/2 mb-3">
        <div class="flex justify-center">
            <div>
                <div class="mb-4 flex">
                    <router-link :to="{
                        name: 'detail_user',
                        params: {id: 23}
                    }">
                        <img src="https://via.placeholder.com/50x50"
                             class="rounded-full ml-2 mr-2 mw-50px" alt="">
                    </router-link>
                    <div class="flex flex-col ">
                        <router-link :to="{
                            name: 'detail_user',
                            params: {id: 23}
                        }">
                            <span>Valeria Novodvorskaya</span>
                        </router-link>
                        <span class="text-slate-400">day ago</span>
                    </div>
                </div>
                <router-link :to="{
                     name: 'detail_item',
                     params: {id: 54},
                }">
                    <img src="https://via.placeholder.com/350x250"
                         class="rounded-md" alt="">
                </router-link>
                <router-link :to="{
                     name: 'detail_item',
                     params: {id: 54},
                }">
                    <div class="text-xl">Product</div>
                </router-link>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    name: "Item",

}
</script>