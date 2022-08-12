<script setup>
import BalanceTable from '@/Components/dashemr/Table.vue';
const props = defineProps({
    totals: {
        type: Object,
        default: () => ({
            0: { 'balance': 'Invoice', 'total': '0.00', 'unbilled': '0.00', 'current': '0.00', '30days': '0.00', '60days': '0.00', '90days': '0.00', '120days': '0.00' },
            1: { 'balance': 'Patient', 'total': '0.00', 'unbilled': '0.00', 'current': '0.00', '30days': '0.00', '60days': '0.00', '90days': '0.00', '120days': '0.00' },
            2: { 'balance': 'Total', 'total': '0.00', 'unbilled': '0.00', 'current': '0.00', '30days': '0.00', '60days': '0.00', '90days': '0.00', '120days': '0.00' },
        })
    },
});
</script>
<template>
    <BalanceTable
        :columns="['Balance', 'Total', 'Unbilled', 'Current', '&gt;30 Days', '&gt;60 Days', '&gt;90 Days', '&gt;120 Days']"
        :colData="['balance', 'total', 'unbilled', 'current', '30days', '60days', '90days', '120days']"
        :rowsData="totals" />
</template>
