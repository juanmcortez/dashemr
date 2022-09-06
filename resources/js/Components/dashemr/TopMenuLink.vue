<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';
const props = defineProps(['linkurl', 'tooltip', 'active', 'class']);
const childclasses = computed(() => props.active
    ? 'topMenuBtnTooltipClose'
    : 'topMenuBtnTooltipOpen group-hover:text-red-500'
);
</script>

<template>
    <Link :href="linkurl" :class="class" class="flex">
    <div class="topMenuBtn group">
        <span :class="childclasses">
            <slot />
        </span>
        <div class="topMenuBtnTooltip group-hover:scale-100">
            {{ tooltip }}
        </div>
    </div>
    </Link>
</template>
