<script setup>
import { Link } from '@inertiajs/inertia-vue3';
const props = defineProps({
    pagesData: {
        type: Object,
        default: () => ({})
    },
    totalItems: {
        type: Number,
        default: 0,
    },
    perPage: {
        type: Number,
        default: 100,
    },
    toPage: {
        type: Number,
        default: 0,
    },
    fromPage: {
        type: Number,
        default: 0,
    },
    firstPage: {
        type: Number,
        default: 1,
    },
    lastPage: {
        type: Number,
        default: 0,
    }
});
</script>
<template>
    <div class="paginator">
        <div class="access">
            <Link :href="route('patients.list', { page: firstPage })">
            <svg class="p-2 w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M15.707 15.707a1 1 0 01-1.414 0l-5-5a1 1 0 010-1.414l5-5a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 010 1.414zm-6 0a1 1 0 01-1.414 0l-5-5a1 1 0 010-1.414l5-5a1 1 0 011.414 1.414L5.414 10l4.293 4.293a1 1 0 010 1.414z"
                    clip-rule="evenodd"></path>
            </svg>
            </Link>

            <div v-for="(page, idx) in pagesData" :key="idx" :class="[
                (idx != 0 && idx != (pagesData.length - 1)) ? '' : 'hidden',
                (page.active) ? 'active' : ''
            ]">
                <span v-if="page.label == '...'" class="split">
                    {{ page.label }}
                </span>
                <Link v-else :href="route('patients.list', { page: page.label })">
                {{ page.label }}
                </Link>
            </div>

            <Link :href="route('patients.list', { page: lastPage })">
            <svg class="p-2 w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                    clip-rule="evenodd"></path>
                <path fill-rule="evenodd"
                    d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                    clip-rule="evenodd"></path>
            </svg>
            </Link>
        </div>
        <div class="detail">
            Viewing <strong>{{ fromPage }}</strong> to <strong>{{ toPage }}</strong> of
            <strong>{{ totalItems }}</strong> total.
        </div>
    </div>
</template>
