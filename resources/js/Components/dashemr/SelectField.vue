<script setup>
const props = defineProps({
    selected: {
        default: null,
    },
    options: {
        type: Array,
        default: [],
    }
});
</script>
<!-- The option selected param contains a double check. If no selected option is passed, it selects the defaul one -->
<!-- If a selected option is passed, it matchs it to the option list values -->
<template>
    <select :class="['selectField', (!selected) ? 'text-zinc-400' : 'text-zinc-600']">
        <option v-for="(item, idx) in options" :value="item.value"
            :selected="(!!selected) ? (selected == item.value) ? true : false : item.default" :key="idx">
            {{ item.description }}
        </option>
    </select>
</template>
