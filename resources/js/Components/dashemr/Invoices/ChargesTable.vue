<script setup>
const props = defineProps({
    charges: {
        type: Object,
        default: () => ({})
    },
});
</script>

<template>
    <table class="w-full text-sm border border-b-0 border-collapse shadow-sm bg-slate-200 border-slate-400">
        <thead class="bg-slate-50">
            <tr>
                <th class="p-2 font-semibold text-center border border-b-0 border-slate-300 text-slate-900 leading-10">
                    Charges
                </th>
            </tr>
        </thead>
    </table>
    <table v-for="(charge, idx) in charges" :key="charge.charge"
        class="w-full mb-10 text-sm bg-white shadow-sm last-of-type:mb-0">
        <tbody :class="['align-top', (idx % 2) ? 'bg-slate-100' : 'bg-slate-50']">
            <!-- Details -->
            <tr class="border border-slate-300 text-slate-500">
                <td class="w-1/12 p-2 font-semibold text-right text-slate-700">Code</td>
                <td colspan="3" class="w-3/12 p-2 pl-0 border-r border-slate-300">
                    <span v-if="charge.codeType" class="mr-2 text-xs">
                        [ {{ charge.codeType }} ]
                    </span>
                    {{ charge.code }}
                </td>
                <td class="w-1/12 p-2 font-semibold text-right text-slate-700">Fee</td>
                <td class="w-1/12 p-2 pl-0 border-r border-slate-300">
                    $ {{ charge.fee }}
                </td>
                <td class="w-1/12 p-2 font-semibold text-right text-slate-700">Copay</td>
                <td class="w-1/12 p-2 pl-0 border-r border-slate-300">
                    $ {{ charge.copay }}
                </td>
                <td class="w-1/12 p-2 font-semibold text-right text-slate-700">Insurance</td>
                <td class="w-1/12 p-2 pl-0 border-r border-slate-300">
                    $ {{ (charge.fee - charge.copay).toFixed(2) }}
                </td>
                <td class="w-1/12 p-2 font-semibold text-right text-slate-700">Units</td>
                <td class="w-1/12 p-2 pl-0">
                    {{ charge.units }} un.
                </td>
            </tr>
            <!-- Anesthesia -->
            <tr v-if="charge.codeType == 'ANES'" class="border-2 border-x-slate-200 border-y-slate-200">
                <td class="w-1/12 p-2 font-semibold text-right text-slate-700">ANES</td>
                <td colspan="11" class="w-11/12 p-2 pl-0">
                    {{ charge.anesthesia_info }}
                </td>
            </tr>
            <!-- NDCs -->
            <tr v-if="charge.codeType == 'HCPCS' || charge.codeType == 'CVX'"
                class="border-2 border-x-slate-200 border-y-slate-200">
                <td class="w-1/12 p-2 font-semibold text-right text-slate-700">NDC</td>
                <td colspan="11" class="w-11/12 p-2 pl-0 text-slate-500">
                    {{ charge.special_code_info.NDCvalue }}
                </td>
            </tr>
            <!-- Mods -->
            <tr class="border border-slate-300 text-slate-500">
                <td class="w-1/12 p-2 font-semibold text-right text-slate-700">Modifiers</td>
                <td colspan="3" class="w-3/12 p-2 pl-0 border-r border-slate-300">
                    {{ charge.modifier }}
                </td>
                <td class="w-1/12 p-2 font-semibold text-right text-slate-700">Notes</td>
                <td colspan="9" class="w-7/12 p-2 pl-0">
                    {{ charge.noteCodes }}
                </td>
            </tr>
            <!-- ICDs -->
            <tr class="border border-slate-300 text-slate-500">
                <td class="w-1/12 p-2 font-semibold text-right text-slate-700">ICD's</td>
                <td colspan="11" class="w-11/12 p-2 pl-0">
                    {{ charge.icd_items_list }}
                </td>
            </tr>
            <!-- Custom -->
            <tr class="border border-slate-300 text-slate-500">
                <td class="w-1/12 p-2 font-semibold text-right text-slate-700">Custom 1</td>
                <td class="w-1/12 p-2 pl-0 border-r border-slate-300">
                    {{ charge.custom1 }}
                </td>
                <td class="w-1/12 p-2 font-semibold text-right text-slate-700">Custom 2</td>
                <td class="w-1/12 p-2 pl-0 border-r border-slate-300">
                    {{ charge.custom1 }}
                </td>
                <td class="w-1/12 p-2 font-semibold text-right text-slate-700">Custom 3</td>
                <td class="w-1/12 p-2 pl-0 border-r border-slate-300">
                    {{ charge.custom1 }}
                </td>
                <td class="w-1/12 p-2 font-semibold text-right text-slate-700">Custom 4</td>
                <td class="w-1/12 p-2 pl-0 border-r border-slate-300">
                    {{ charge.custom1 }}
                </td>
                <td class="w-1/12 p-2 font-semibold text-right text-slate-700">Custom 5</td>
                <td class="w-1/12 p-2 pl-0 border-r border-slate-300">
                    {{ charge.custom1 }}
                </td>
                <td class="w-1/12 p-2 font-semibold text-right text-slate-700"></td>
                <td class="w-1/12 p-2 pl-0"></td>
            </tr>
        </tbody>
    </table>
</template>
