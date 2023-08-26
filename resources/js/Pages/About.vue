<script setup>
defineProps({
    message: String,
});
</script>

<template>
<h1 id="message">{{ message }}</h1>
</template>

<style>
#message {
    font-size: 24px;
    margin: 20px;
}
</style>
