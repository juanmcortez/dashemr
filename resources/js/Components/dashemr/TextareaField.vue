<script setup>
const props = defineProps({
    content: {
        default: ''
    },
    placeholdertext: {
        default: ''
    },
});
</script>
<template>
    <textarea
        class="w-full text-sm leading-6 border-0 resize-none placeholder:text-sm placeholder:text-slate-400 focus:border-slate-400 focus:ring-slate-400"
        :placeholder="placeholdertext">{{   content   }}</textarea>
</template>
