<script setup>
import Pagination from '../Components/Pagination.vue'

defineProps({
    usersList: Object,
});
</script>

<template>
    <div class="container mt-5">

        <h2>Laravel Inertia JS Pagination Demo</h2>
        <table class="table w-full">
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="item in usersList.data" :key="item.id">
                    <td>{{ item.id }}</td>
                    <td>{{ item.name }}</td>
                    <td>{{ item.email }}</td>
                </tr>
            </tbody>
        </table>

        <Pagination class="mt-6" :links="usersList.links" />
    </div>
</template>
    
