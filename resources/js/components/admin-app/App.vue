<template>
    <div class="admin-container">
        <div class="admin-flex-container">
            <the-side-bar></the-side-bar>
            <div class="admin-content-container">
                <header class="admin-header">
                    <div class="admin-header-title-title">
                        <h4 class="admin-header-text">Dashsboard</h4>
                    </div>
                    <div class="admin-header-download-container">
                        <button class="doc-btn">Documentation</button>
                        <button class="resumebtn">Upload Resume</button>
                    </div>
                </header>
                <the-form />
                <recent-projects />
            </div>
        </div>
    </div>
</template>

<script>
// https://vueframework.com/guide/introduction.html#getting-started

import TheSideBar from "./com/TheSideBar.vue";
import TheForm from "./com/TheForm.vue";
import RecentProjects from "./com/RecentProjects.vue";
export default {
    components: { TheSideBar, TheForm, RecentProjects },
    mounted() {
        console.log("Component mounted.");
    },
};
</script>
<!-- https://pixinvent.com/demo/vuexy-vuejs-laravel-admin-template/demo-4/dashboard/ecommerce -->
<style scoped>
.admin-container {
    background: #151c2f;
    padding: 1rem 1rem;
    border-radius: 25px;
}
.admin-flex-container {
    display: flex;
}
.admin-content-container {
    width: 100%;
}
.admin-header {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: #283045;
    padding: 0.5rem 1.25rem;
    border-radius: 10px;
}
.admin-header-text {
    font-size: 12px;
    text-transform: uppercase;
    margin-bottom: 0;
}
.admin-header-download-container {
    display: flex;
}

.doc-btn {
    background: linear-gradient(118deg, #7367f0, rgba(115, 103, 240, 0.7));
    margin-right: 10px;
    border-radius: 5px;
    border: none;
}
.resumebtn {
    background: #ea5455;
    color: #fff;
    border-radius: 5px;
    border: none;
}
</style>
