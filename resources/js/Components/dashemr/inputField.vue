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
    <input type="text" ref="input" :value="(!props.value) ? '--' : props.value" :class="[
        'w-full m-0 border-0 border-b leading-4 bg-transparent border-zinc-300 focus:border-zinc-400 focus:ring-transparent placeholder:text-zinc-400 text-xs',
        (!props.value) ? 'text-zinc-400' : 'text-zinc-600'
    ]" />
</template>
