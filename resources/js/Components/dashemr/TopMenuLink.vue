<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';
const props = defineProps(['linkurl', 'tooltip', 'active', 'class']);
const classes = computed(() => props.active
    ? 'relative mx-auto transition-all duration-150 ease-in-out w-6 h-6 group'
    : 'relative mx-auto transition-all duration-150 ease-in-out w-6 h-6 group'
);
const childclasses = computed(() => props.active
    ? 'absolute w-4 h-4 left-1 top-1 text-red-500'
    : 'absolute w-4 h-4 left-1 top-1 text-red-200 group-hover:text-red-500'
);
</script>

<template>
    <Link :href="linkurl" :class="class" class="flex">
    <div :class="classes">
        <span :class="childclasses">
            <slot />
        </span>
        <div
            class="absolute w-auto px-4 py-1 mx-auto text-xs font-bold text-white transition-all duration-150 origin-bottom scale-0 rounded-md shadow-sm right-5 bg-zinc-700 min-w-max top-6 group-hover:scale-100">
            {{ tooltip }}
        </div>
    </div>
    </Link>
</template>
