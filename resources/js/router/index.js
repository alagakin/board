import {createRouter, createWebHistory} from 'vue-router';
import Board from "../components/Board.vue";
import User from "../User/User.vue";
import DetailItem from "../components/DetailItem.vue";
import DetailUser from "../components/DetailUser.vue";

const routes = [
    {
        path: '/',
        name: 'board',
        component: Board
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