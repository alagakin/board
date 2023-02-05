import {createRouter, createWebHistory} from 'vue-router';
import Index from "../components/Index.vue";
import User from "../components/User/User.vue";
import DetailItem from "../components/Board/DetailItem.vue";
import DetailUser from "../components/User/DetailUser.vue";

const routes = [
    {
        path: '/',
        name: 'board',
        component: Index
    },
    {
        path: '/user',
        name: 'user',
        component: User
    },
    {
        path: '/items/:id/',
        name: 'detail_item',
        component: DetailItem,
        props: true
    },
    {
        path: '/users/:id/',
        name: 'detail_user',
        component: DetailUser,
        props: true
    }
]

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes
})

export default router;