<script setup>
import { Link } from '@inertiajs/inertia-vue3';
const props = defineProps({
    invoice: {
        type: Object,
        default: () => ({})
    },
});
</script>

<template>
    <table
        class="w-full text-sm bg-white border border-collapse shadow-sm border-slate-400 dark:border-slate-500 dark:bg-slate-800">
        <thead class="bg-slate-50 dark:bg-slate-700">
            <tr>
                <th
                    class="p-4 font-semibold text-center border border-slate-300 dark:border-slate-600 text-slate-900 dark:text-slate-200">
                    Charges</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="charge in invoice.charges_list" :key="charge.charge">
                <td class="p-4 border border-slate-300 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                    {{ charge }}</td>
            </tr>
        </tbody>
    </table>
</template>
