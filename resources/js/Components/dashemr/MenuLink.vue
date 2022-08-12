<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';
const props = defineProps(['linkurl', 'tooltip', 'active', 'class']);
const classes = computed(() => props.active
    ? (props.tooltip != 'Click here to logout')
        ? 'relative mx-auto transition-all duration-150 ease-in-out w-7 h-7 rounded-3xl bg-zinc-600 group'
        : 'relative mx-auto transition-all duration-150 ease-in-out w-7 h-7 rounded-3xl bg-red-600 group'
    : (props.tooltip != 'Click here to logout')
        ? 'relative mx-auto transition-all duration-150 ease-in-out w-7 h-7 rounded-3xl bg-zinc-300 hover:bg-zinc-600 group'
        : 'relative mx-auto transition-all duration-150 ease-in-out w-7 h-7 rounded-3xl bg-red-300 hover:bg-red-600 group'
);
const childclasses = computed(() => props.active
    ? (props.tooltip != 'Click here to logout')
        ? 'absolute w-4 h-4 left-1.5 top-1.5 text-zinc-50'
        : 'absolute w-4 h-4 left-1.5 top-1.5 text-red-50'
    : (props.tooltip != 'Click here to logout')
        ? 'absolute w-4 h-4 left-1.5 top-1.5 text-zinc-500 group-hover:text-zinc-50'
        : 'absolute w-4 h-4 left-1.5 top-1.5 text-red-500 group-hover:text-red-50'
);
</script>

<template>
    <Link :href="linkurl" :class="class" class="flex">
    <div :class="classes">
        <span :class="childclasses">
            <slot />
        </span>
        <div
            class="absolute w-auto px-4 py-1 my-0.5 text-xs font-bold text-white transition-all duration-150 origin-left scale-0 rounded-md shadow-sm bg-zinc-700 min-w-max left-8 group-hover:scale-100">
            {{ tooltip }}
        </div>
    </div>
    </Link>
</template>
