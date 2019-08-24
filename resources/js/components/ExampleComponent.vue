<template>
    <div>
        <button type="submit" class="my-button">My Button</button>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style>
    .my-button {
        background-color: #1d2124;
        color: #ffffff;
        padding: 10px 15px;
    }
</style>
