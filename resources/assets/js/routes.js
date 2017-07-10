
import VueRouter from 'vue-router'

let routes=[
    {
        path:"/",
        component:require("./views/home.vue")
    },
    {
        path:"/education",
        component:require("./views/education.vue")
    },
    {
        path:"/work",
        component:require("./views/work.vue")
    },
    {
        path:"/contact",
        component:require("./views/contact.vue")
    },
    {
        path:"/projects",
        component:require("./views/projects.vue")
    },
    {
        path:"/projects/kisanmitra",
        component:require("./views/projects/kisanmitra.vue")
    },
    {
        path:"/projects/bigquery",
        component:require("./views/projects/bigquery.vue")
    },
    {
        path:"/projects/grabpustak",
        component:require("./views/projects/grabpustak.vue")
    },
    {
        path:"/projects/manitmoodle",
        component:require("./views/projects/manitmoodle.vue")
    },
    {
        path:"/projects/captcha",
        component:require("./views/projects/captcha.vue")
    },



]

export default new VueRouter({
    routes:routes,
    linkActiveClass:'selected'
});