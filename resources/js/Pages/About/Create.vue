<script setup>
import { Head, Link } from '@inertiajs/vue3';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Menu from '@/Components/Menu.vue'
import { reactive,ref } from 'vue';
import SiteLayout from '@/Layouts/SiteLayout.vue';

defineProps({
    message: String,
});
</script>

<template>
    <SiteLayout>
        <Head title="Welcome" />
        <Link :href="route('about.index')">Index</Link>
        <h1 id="message">{{ message }}</h1>
        <ApplicationLogo class="w-20 h-20 fill-current text-gray-500" />
    </SiteLayout>
</template>

<style>
#message {
    font-size: 24px;
    margin: 20px;
}
</style>
