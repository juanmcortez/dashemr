<script setup>
const props = defineProps({
    selected: {
        type: Object,
        default: () => ({})
    },
    options: {
        type: Array,
        default: [],
    }
});
</script>
<template>
    <select :class="[
        'w-full text-xs leading-5 bg-transparent border rounded border-zinc-300 focus:border-zinc-400 focus:ring-transparent placeholder:text-zinc-400 hover:cursor-pointer',
        (!selected) ? 'text-zinc-400' : 'text-zinc-600'
    ]">
        <option>Select ...</option>
        <option v-for="(item, idx) in options" :value="item.value" :selected="(selected == item.value) ? true : false"
            :key="idx">
            {{ item.description }}
        </option>
    </select>
</template>
