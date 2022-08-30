<script setup>
import { ref } from 'vue';

const checkbox = ref();
</script>
<template>
    <input type="checkbox" ref="checkbox"
        class="m-0 mt-2.5 leading-4 bg-transparent rounded border-zinc-300 focus:border-zinc-400 focus:ring-transparent placeholder:text-zinc-400 text-zinc-600" />
</template>
