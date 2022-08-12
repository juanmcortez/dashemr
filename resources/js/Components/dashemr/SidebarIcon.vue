<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';

const props = defineProps(['likUrl', 'tooltip', 'active']);
const classes = computed(() => {
    return props.active
        ? 'bg-green-600 font-semibold text-white rounded-xl'
        : 'bg-gray-800 font-semibold text-green-500 rounded-3xl'
});
</script>
<template>
    <Link :href="linkUrl" target="_self"
        :class="'relative flex items-center w-10 h-10 mx-auto my-2 transition-all duration-300 ease-linear cursor-pointer hover:bg-green-600 hover:text-white hover:rounded-xl group ' + classes">
    <slot />
    <span
        class="absolute w-auto p-2 m-2 text-xs font-bold text-white transition-all duration-200 origin-left scale-0 bg-gray-900 rounded-md shadow-md min-w-max left-14 group-hover:scale-100">
        {{ tooltip }}
    </span>
    </Link>
</template>
