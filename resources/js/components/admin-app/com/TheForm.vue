<template>
    <div class="admin-form-container">
        <h5>Add Portfolio Project</h5>
        <form class="admin-form">
            <div class="admin-input-group">
                <input
                    class="admin-input"
                    type="text"
                    name="link"
                    placeholder="Project Name:"
                />
            </div>
            <div class="admin-input-group">
                <input
                    class="admin-input"
                    type="text"
                    name="client"
                    placeholder="Client:"
                />
            </div>
            <div class="admin-input-group">
                <input
                    class="admin-input"
                    type="text"
                    name="project_url"
                    placeholder="Project Url:"
                />
            </div>
            <div class="admin-input-group">
                <input
                    class="admin-input"
                    type="text"
                    name="technologies"
                    placeholder="Technologies:"
                />
            </div>
            <div class="admin-input-group">
                <input
                    class="admin-input"
                    type="text"
                    name="image_url"
                    placeholder="Image Url:"
                />
            </div>
            <div class="admin-input-group">
                <input
                    type="text"
                    class="admin-input"
                    name="image_url"
                    placeholder="Date Created:"
                />
            </div>
        </form>
    </div>
</template>

<script>
export default {};
</script>

<style>
.admin-form-container {
    background-color: #283045;
    border-radius: 10px;
    margin-top: 25px;
    padding: 1rem;
}
.admin-input-group {
    display: flex;
    flex-direction: column;
}
.admin-input {
    background: #283045;
    color: #fff;
    border: none;
    margin-bottom: 1rem;
    border-bottom: 1px solid #fff;
}
.admin-input::placeholder {
    color: #c9c9c9;
}
</style>
