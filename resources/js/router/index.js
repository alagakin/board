import {createRouter, createWebHistory} from 'vue-router';
import Board from "../components/Board.vue";
import User from "../User/User.vue";

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
    }
]

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes
})

export default router;