<script setup>
import { Head, Link } from '@inertiajs/vue3';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import SiteLayout from '@/Layouts/SiteLayout.vue';

defineProps({
    message: String,
});
</script>

<template>
    <SiteLayout>
        <Link :href="route('about.create')">Create</Link>
        <v-btn>
          Button
        </v-btn>
        <h1 id="message">{{ message }}</h1>
        <div class="sample-box">サンプルボックス</div>
        <ApplicationLogo class="w-20 h-20 fill-current text-gray-500" />
    </SiteLayout>
</template>

<style lang="scss">
@import "../../scss/mixin.scss";
/*定義したミックスインを呼び出し*/
.sample-box {
    border: 1px solid black;
    @include box001;
}

#message {
    font-size: 24px;
    margin: 20px;
}
</style>
