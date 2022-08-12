<script setup>
import { Head } from '@inertiajs/inertia-vue3';
const props = defineProps({
    title: {
        type: String,
        default: "DashEMR",
    },
    author: {
        type: String,
        default: 'Juan M. Cortéz',
    },
    description: {
        type: String,
        default: 'Full customizable EMR system.',
    },
    keywords: {
        type: String,
        default: 'EMR, Health, Patients, Insurance, Payments, Dashboard',
    }
});
</script>
<template>

    <Head>
        <title>{{ title }}</title>
        <meta name="author" :content="author">
        <meta name="description" :content="description">
        <meta name="keywords" :content="keywords">
    </Head>

</template>
