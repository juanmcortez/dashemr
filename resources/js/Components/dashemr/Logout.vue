<script setup>
import { Link } from '@inertiajs/inertia-vue3';
const props = defineProps(['href', 'active']);
</script>
<template>
    <Link :href="href"
        class="uppercase font-xs overflow-hidden w-6 h-6 pt-0.5 pl-0.5 rounded-md text-red-500 hover:text-red-100 hover:bg-red-800">
    <slot />
    </Link>
</template>
