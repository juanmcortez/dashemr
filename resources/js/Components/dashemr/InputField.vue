<script setup>
import { onMounted, ref } from 'vue';
const input = ref(null);
const props = defineProps(['value']);
onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});
</script>
<template>
    <input type="text" ref="input" :value="(!props.value) ? '--' : props.value"
        :class="['textField', (!props.value) ? 'text-zinc-400' : 'text-zinc-600']" />
</template>
