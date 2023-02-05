<template>
    <div class="container bg-white pt-2 pb-12">
        <div class="mb-4  border-gray-200 dark:border-gray-700 w-2/3 m-auto">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center justify-center"
                ref="tabs" data-tabs-toggle="#myTabContent" role="tablist">
                <li class="mr-12" >
                    <button class="inline-block p-4 border-b-2 rounded-t-lg"
                            id="profile-tab" data-tabs-target="#profile"
                            type="button" role="tab" aria-controls="profile"
                            aria-selected="false">Update Profile
                    </button>
                </li>
                <li class="mr-12" >
                    <button
                        class="inline-block p-4 border-b-2 rounded-t-lg"
                        id="dashboard-tab" data-tabs-target="#dashboard"
                        type="button" role="tab" aria-controls="dashboard"
                        aria-selected="false">New Post
                    </button>
                </li>
            </ul>
        </div>
        <div ref="tabContent">
            <div class="hidden p-4  "
                 id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <UpdateProfile />
            </div>
            <div class="hidden p-4 "
                 id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                <NewPost />
            </div>
        </div>
    </div>

</template>
<style>

</style>
<script>
import UpdateProfile from "./UpdateProfile.vue";
import {initTabs} from "flowbite";
import NewPost from "./NewPost.vue";
export default {
    name: "User.vue",
    components: {NewPost, UpdateProfile},

    mounted() {
        initTabs()
    }

}
</script>