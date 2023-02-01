<template>
    <div class="container bg-white p-10 mt-10">
        <h2 class="text-center text-xl">Here you can update your profile
            info</h2>


        <form class="w-full max-w-lg mx-auto mt-12" id="update-profile"
              v-on:submit.prevent="update">
            <label class="flex justify-center mb-6 cursor-pointer"
                   for="update-profile-picture">
                <img :src="picture"
                     class="rounded-full ml-2 mr-2 mw-50px max-w-2xl" id="picture" alt="">
            </label>
            <input class="hidden" v-on:change="uploadPicture" type="file"
                   id="update-profile-picture">
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label
                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-first-name">
                        Name
                    </label>
                    <input
                        v-model="user.name"
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-first-name" type="text" placeholder="Alex">

                    <p class="text-red-500 text-xs italic"
                       v-show="errors?.name?.length"
                       v-text="errors?.name?.length ? errors.name[0] : ''"></p>

                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label
                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-last-name">
                        Email
                    </label>
                    <input
                        v-model="user.email"
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-last-name" type="text"
                        placeholder="email@email.com" autocomplete="off">
                    <p class="text-red-500 text-xs italic"
                       v-show="errors?.email?.length"
                       v-text="errors?.email?.length ? errors.email[0] : ''"></p>

                </div>

            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label
                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-password">
                        Password
                    </label>
                    <input
                        v-model="user.password"
                        autocomplete="new-password"
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-password" type="password"
                        placeholder="******************">
                    <p class="text-red-500 text-xs italic"
                       v-show="errors?.password?.length"
                       v-text="errors?.password?.length ? errors.password[0] : ''"></p>

                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label
                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-password">
                        Password
                    </label>
                    <input
                        v-model="user.password_confirm"
                        autocomplete="new-password"
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-password-confirm" type="password"
                        placeholder="******************">
                    <p class="text-red-500 text-xs italic"
                       v-show="errors?.password_confirm?.length"
                       v-text="errors?.password_confirm?.length ? errors.password_confirm[0] : ''"></p>

                </div>
            </div>
            <div>
                <input
                    class="block cursor-pointer mx-auto shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                    type="submit"
                    value="Update"
                />
            </div>
        </form>
    </div>

    <div ref="success" id="success-modal" tabindex="-1"
         class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-md md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div
                    class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                        Success!
                    </h3>
                    <button type="button" v-on:click="successModal.hide()"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                        <svg aria-hidden="true" class="w-5 h-5"
                             fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400 text-center">
                        Your profile successfully updated!
                    </p>
                </div>
                <!-- Modal footer -->
                <div
                    class="flex  justify-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button v-on:click="successModal.hide()" type="button"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Ok
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>
<style>
    #picture {
        width: 120px;
        height: 120px;
    }
</style>
<script>
import axios from "axios";
import {initModals, Modal} from "flowbite";

export default {
    name: "User.vue",
    data() {
        return {
            user: {
                name: '',
                email: '',
                password: '',
                password_confirm: '',
                picture: ''
            },
            errors: {},
            successModal: {}
        }
    },
    mounted() {
        this.getUser()
        this.successModal = new Modal(document.querySelector('#success-modal'))
    },
    methods: {
        getUser() {
            axios.get('/get-user').then((response) => {
                this.user = response.data
                this.user.name = response.data.name;
                this.user.email = response.data.email
            })
        },
        update() {
            axios.post('/update-user', this.user).then(response => {
                if (response.data.errors) {
                    this.errors = response.data.errors
                } else if (response.data == true) {
                    this.successModal.show();
                }
            })
        },
        uploadPicture(event) {
            Array.prototype.forEach.call(event.target.files, (file) => {
                file.url = URL.createObjectURL(file)
                this.user.picture = file;
            })
        }
    },
    computed: {
        picture() {
            if (this.user.picture.url) {
                return this.user.picture.url
            }
            return 'https://via.placeholder.com/120x120';
        }
    }
}
</script>