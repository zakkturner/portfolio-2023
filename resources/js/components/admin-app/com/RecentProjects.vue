<template>
    <div class="admin-recent-container">
        <ul class="recent-list">
            <li class="recent-item">
                <a href="/"> Recent Project </a>
            </li>
            <li class="recent-item">
                <a href="/"> Recent Project </a>
            </li>
            <li class="recent-item">
                <a href="/"> Recent Project </a>
            </li>
            <li class="recent-item">
                <a href="/"> Recent Project </a>
            </li>
        </ul>
    </div>
</template>

<script>
export default {};
</script>

<style>
.admin-recent-container {
    width: 100%;

    padding: 1rem;
    margin-top: 25px;
    border-radius: 15px;
    background-color: #283045;
}
.recent-list {
    display: flex;
    justify-content: space-between;
    list-style-type: none;
    padding-left: 0;
    margin: 0;
}
</style>
