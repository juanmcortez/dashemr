<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';

const props = defineProps(['linkUrl', 'tooltip', 'active']);
const classes = computed(() => {
    return props.active ? 'iconBtnTooltipClosed' : 'iconBtnTooltipOpen'
});
</script>
<template>
    <Link :href="linkUrl" target="_self" :class="'iconBtn group ' + classes">
    <slot />
    <span class="iconBtnTooltip group-hover:scale-100">
        {{ tooltip }}
    </span>
    </Link>
</template>
