
import VueRouter from 'vue-router'

let routes=[
    {
        path:"/",
        component:require("./views/home.vue")
    },
    {
        path:"/about",
        component:require("./views/about.vue")
    },
    {
        path:"/projects",
        component:require("./views/projects.vue")
    },
    {
        path:"/contact",
        component:require("./views/contact.vue")
    }
]

export default new VueRouter({
    routes:routes,
    linkActiveClass:'active'
});