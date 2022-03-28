import { createRouter, createWebHistory } from "vue-router";
import FrontPage from "@views/FrontPage.vue";
import Page from "@views/Page.vue";
import Archive from "@views/Archive.vue";
import Single from "@views/Single.vue";
import PageNotFound from "@views/404.vue";
import DefaultLayout from "@layouts/DefaultLayout.vue";

const routes = [
  {
    path: "/",
    name: "layout",
    component: DefaultLayout,
    children: [
      { path: "/", name: "home", component: FrontPage },
      { path: "/archive/:type", name: "archive", component: Archive },
      { path: "/single/:slug", name: "single", component: Single },
      { path: "/:slug", name: "page", component: Page },
      { path: "/404", name: "404", component: PageNotFound },
    ],
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
