<template>
    <div class="admin-sidebar-container">
        <div class="admin-current-title">
            <h5 class="admin-current-item-text">Add Portfolio Project</h5>
        </div>
        <nav class="admin-nav">
            <ul class="admin-nav-list">
                <li class="admin-nav-item">
                    <a class="admin-nav-title">Manage Portfolio Projects</a>
                </li>
                <li class="admin-nav-item">
                    <a class="admin-nav-title">Manage Blogs</a>
                </li>
                <li class="admin-nav-item">
                    <a class="admin-nav-title">Manage Info</a>
                </li>
                <li class="admin-nav-item">
                    <a class="admin-nav-title">Send Email</a>
                </li>
                <li class="admin-nav-item">
                    <a class="admin-nav-title">Freelance Client Data</a>
                </li>
            </ul>
        </nav>
    </div>
</template>

<script>
export default {};
</script>

<style>
.admin-current-item-text {
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
    border-bottom: 1px solid #8f8d8d;
    padding-bottom: 0.25rem;
}
.admin-sidebar-container {
    background: #283045;
    padding: 1rem 1rem;
    border-radius: 15px;
    margin-right: 25px;
    width: 25%;
}
.admin-nav-list,
.admin-nav,
.admin-nav-item {
    margin-left: 0;
    padding-left: 0;
}
.admin-nav-item {
    list-style-type: none;
    padding: 0.5rem 0;
}
.admin-nav-title {
    cursor: pointer;
}
</style>
