<script setup>
import { Link } from '@inertiajs/inertia-vue3';
const props = defineProps(['href', 'active']);
</script>
<template>
    <Link :href="href" class="logoutBtn">
    <slot />
    </Link>
</template>
