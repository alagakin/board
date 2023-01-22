<template>
    <header class="bg-white">
        <div class="flex flex-row justify-between max-w-5xl mx-auto">
            <div class="font-medium text-2xl p-3">
                Board
            </div>
            <SignIn />
        </div>
    </header>
    <main class="max-w-4xl mx-auto">
        <div class="container mt-3 max-w-5xl">
            <form action="" class="w-full rounded-lg">
                <input type="text" placeholder="search" class="w-full rounded-xl p-3 focus:outline-none">
            </form>
            <div class="container flex flex-row flex-wrap justify-between mt-7 ">
                <div class="w-1/2 mb-3">
                    <div class="flex justify-center">
                        <div>
                            <div class="mb-4 flex">
                                <a href="">
                                    <img src="https://via.placeholder.com/50x50" class="rounded-full ml-2 mr-2 mw-50px" alt="">
                                </a>
                                <div class="flex flex-col ">
                                    <a href="">
                                        <span>Valeria Novodvorskaya</span>
                                    </a>
                                    <span class="text-slate-400">day ago</span>
                                </div>
                            </div>
                            <a href="#">
                                <img src="https://via.placeholder.com/350x250" class="rounded-md" alt="">
                            </a>
                            <div class="text-xl">Product</div>
                        </div>
                    </div>
                </div>
                <div class="w-1/2 mb-3">
                    <div class="flex justify-center">
                        <div>
                            <div class="mb-4 flex">
                                <a href="">
                                    <img src="https://via.placeholder.com/50x50" class="rounded-full ml-2 mr-2 mw-50px" alt="">
                                </a>
                                <div class="flex flex-col ">
                                    <a href="">
                                        <span>Valeria Novodvorskaya</span>
                                    </a>
                                    <span class="text-slate-400">day ago</span>
                                </div>
                            </div>
                            <a href="#">
                                <img src="https://via.placeholder.com/350x250" class="rounded-md" alt="">
                            </a>
                            <div class="text-xl">Product</div>
                        </div>
                    </div>
                </div>
                <div class="w-1/2 mb-3">
                    <div class="flex justify-center">
                        <div>
                            <div class="mb-4 flex">
                                <a href="">
                                    <img src="https://via.placeholder.com/50x50" class="rounded-full ml-2 mr-2 mw-50px" alt="">
                                </a>
                                <div class="flex flex-col ">
                                    <a href="">
                                        <span>Valeria Novodvorskaya</span>
                                    </a>
                                    <span class="text-slate-400">day ago</span>
                                </div>
                            </div>
                            <a href="#">
                                <img src="https://via.placeholder.com/350x250" class="rounded-md" alt="">
                            </a>
                            <div class="text-xl">Product</div>
                        </div>
                    </div>
                </div>
                <div class="w-1/2 mb-3">
                    <div class="flex justify-center">
                        <div>
                            <div class="mb-4 flex">
                                <a href="">
                                    <img src="https://via.placeholder.com/50x50" class="rounded-full ml-2 mr-2 mw-50px" alt="">
                                </a>
                                <div class="flex flex-col ">
                                    <a href="">
                                        <span>Valeria Novodvorskaya</span>
                                    </a>
                                    <span class="text-slate-400">day ago</span>
                                </div>
                            </div>
                            <a href="#">
                                <img src="https://via.placeholder.com/350x250" class="rounded-md" alt="">
                            </a>
                            <div class="text-xl">Product</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
import SignIn from "./Auth/SignIn.vue";

export default {
    name: "Home",
    components: {SignIn},

}
</script>