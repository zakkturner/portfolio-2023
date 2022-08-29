<template>
    <div class="admin-container">
        <header class="admin-header">
            <div class="admin-header-title-title">
                <h4 class="admin-header-text">Dashssboard</h4>
            </div>
            <div class="admin-header-download-container">
                <button class="doc-btn">Documentation</button>
                <button class="resumebtn">Documentation</button>
            </div>
        </header>
        <div class="admin-main-container">
            <div class="admin-sidebar-container">
                <div class="admin-current-title">
                    <h5 class="admin-current-item-text">
                        Add Portfolio Project
                    </h5>
                </div>
                <nav class="admin-nav">
                    <ul class="admin-nav-list">
                        <li class="admin-nav-item">
                            <span class="admin-nav-title"
                                >Manage Portfolio Projects</span
                            >
                        </li>
                        <li class="admin-nav-item">
                            <span class="admin-nav-title">Manage Blogs</span>
                        </li>
                        <li class="admin-nav-item">
                            <span class="admin-nav-title">Manage Info</span>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="admin-content-container">
                <div class="admin-form-container">
                    <form></form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log("Component mounted.");
    },
};
</script>
