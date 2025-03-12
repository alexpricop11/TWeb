import {createRouter, createWebHistory} from 'vue-router';
import HomePage from '@/views/HomePage.vue';
import Fixtures from '@/views/Fixtures.vue';
import League from '@/views/League.vue';
import Teams from '@/views/Teams.vue';
import History from "@/views/History.vue";
import AuthPage from "@/views/AuthPage.vue";

const routes = [
    {path: '/', name: 'Home', component: HomePage},
    {path: '/fixtures', name: 'Fixtures', component: Fixtures},
    {path: '/league', name: 'League', component: League},
    {path: '/teams', name: 'Teams', component: Teams},
    {path: '/history', name: 'History', component: History},
    {path: '/auth', name: 'Auth', component: AuthPage}
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;