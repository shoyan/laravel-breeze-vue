<script setup>
import { Link } from '@inertiajs/vue3';
import Menu from '@/Components/Menu.vue'
</script>

<template>
    <v-app class="mt-16">
    <Menu></Menu>
        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"
        >
            <slot />
        </div>
        <footer>
            footer
        </footer>
</v-app>
</template>

<style>
footer {
    position: fixed;
    bottom: 0;
    background: blue;
    width: 100%;
    color: white;
    text-align: center;
    padding: 20px;
}
</style>
