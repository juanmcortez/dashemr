<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';
const props = defineProps(['linkurl', 'tooltip', 'active', 'class']);
const classes = computed(() => props.active
    ? (props.tooltip != 'Click here to logout')
        ? 'logoutBtnBase bg-zinc-600 group'
        : 'logoutBtnBase bg-red-600 group'
    : (props.tooltip != 'Click here to logout')
        ? 'logoutBtnBase bg-zinc-300 hover:bg-zinc-600 group'
        : 'logoutBtnBase bg-red-300 hover:bg-red-600 group'
);
const childclasses = computed(() => props.active
    ? (props.tooltip != 'Click here to logout')
        ? 'iconBtnBase text-zinc-50'
        : 'iconBtnBase text-red-50'
    : (props.tooltip != 'Click here to logout')
        ? 'iconBtnBase text-zinc-500 group-hover:text-zinc-50'
        : 'iconBtnBase text-red-500 group-hover:text-red-50'
);
</script>

<template>
    <Link :href="linkurl" :class="class" class="flex">
    <div :class="classes">
        <span :class="childclasses">
            <slot />
        </span>
        <div class="tooltip group-hover:scale-100">
            {{ tooltip }}
        </div>
    </div>
    </Link>
</template>
