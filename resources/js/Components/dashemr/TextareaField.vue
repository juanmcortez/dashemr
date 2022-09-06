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
    <textarea class="textareaField" :placeholder="placeholdertext">{{   content   }}</textarea>
</template>
