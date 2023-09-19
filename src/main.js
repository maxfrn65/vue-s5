import './assets/main.css'
import { createApp } from 'vue'
import App from './App.vue'
import { createRouter, createWebHistory } from 'vue-router'
import Countries from "@/views/Countries.vue";
import Home from "@/views/Home.vue";
import About from "@/views/About.vue";

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes: [
        {
            path: '/',
            component: Home
        },
        {
            path: '/countries',
            component: Countries
        },
        {
            path: '/about',
            component: About,
            name: 'about'
        }
    ]
})
const app = createApp(App)
app.use(router)
app.mount('#app')
