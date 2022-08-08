<script setup>
const props = defineProps({
    totals: {
        type: Object,
        default: () => ({})
    },
});
</script>
<template>
    <div class="flex font-semibold text-center bg-white border-b-2 border-gray-300 justify-evenly">
        <div class="flex-1 py-2">Balance</div>
        <div class="flex-1 py-2">Total</div>
        <div class="flex-1 py-2">Unbilled</div>
        <div class="flex-1 py-2">Current</div>
        <div class="flex-1 py-2">&gt;30 Days</div>
        <div class="flex-1 py-2">&gt;60 Days</div>
        <div class="flex-1 py-2">&gt;90 Days</div>
        <div class="flex-1 py-2">&gt;120 Days</div>
    </div>
    <div class="flex text-center bg-white border-b border-gray-300 justify-evenly">
        <div class="flex-1 py-2 font-semibold">Invoice</div>
        <div class="flex-1 py-2">0.00</div>
        <div class="flex-1 py-2">0.00</div>
        <div class="flex-1 py-2">0.00</div>
        <div class="flex-1 py-2">0.00</div>
        <div class="flex-1 py-2">0.00</div>
        <div class="flex-1 py-2">0.00</div>
        <div class="flex-1 py-2">0.00</div>
    </div>
    <div class="flex text-center bg-white border-b border-gray-300 justify-evenly">
        <div class="flex-1 py-2 font-semibold">Patient</div>
        <div class="flex-1 py-2">0.00</div>
        <div class="flex-1 py-2">0.00</div>
        <div class="flex-1 py-2">0.00</div>
        <div class="flex-1 py-2">0.00</div>
        <div class="flex-1 py-2">0.00</div>
        <div class="flex-1 py-2">0.00</div>
        <div class="flex-1 py-2">0.00</div>
    </div>
    <div class="flex mb-10 text-center bg-white border-b border-gray-300 justify-evenly">
        <div class="flex-1 py-2 font-semibold">Account</div>
        <div class="flex-1 py-2">0.00</div>
        <div class="flex-1 py-2">0.00</div>
        <div class="flex-1 py-2">0.00</div>
        <div class="flex-1 py-2">0.00</div>
        <div class="flex-1 py-2">0.00</div>
        <div class="flex-1 py-2">0.00</div>
        <div class="flex-1 py-2">0.00</div>
    </div>
</template>
