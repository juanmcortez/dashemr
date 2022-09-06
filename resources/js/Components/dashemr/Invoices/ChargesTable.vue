<script setup>
const props = defineProps({
    charges: {
        type: Object,
        default: () => ({})
    },
});
</script>

<template>
    <table class="chargesDetails">
        <thead>
            <tr>
                <th>Charges Details</th>
            </tr>
        </thead>
    </table>

    <table class="chargeItem" v-for="(charge, idx) in charges" :key="charge.charge">
        <tbody>
            <!-- Details -->
            <tr>
                <td class="label">Code</td>
                <td colspan="3">
                    <span v-if="charge.codeType" class="mr-2 text-xs">[ {{ charge.codeType }} ]</span>
                    {{ charge.code }}
                </td>
                <td class="label">Fee</td>
                <td> $ {{ charge.fee }}</td>
                <td class="label">Copay</td>
                <td>$ {{ charge.copay }}</td>
                <td class="label">Insurance</td>
                <td> $ {{ (charge.fee - charge.copay).toFixed(2) }}</td>
                <td class="label">Units</td>
                <td>{{ charge.units }} un.</td>
            </tr>
            <!-- Anesthesia -->
            <tr v-if="charge.codeType == 'ANES'">
                <td class="label">ANES</td>
                <td colspan="11">
                    {{ charge.anesthesia_info }}
                </td>
            </tr>
            <!-- NDCs -->
            <tr v-if="charge.codeType == 'HCPCS' || charge.codeType == 'CVX'">
                <td class="label">NDC</td>
                <td colspan="11">
                    {{ charge.special_code_info.NDCvalue }}
                </td>
            </tr>
            <!-- Mods -->
            <tr>
                <td class="label">Modifiers</td>
                <td colspan="3">
                    {{ charge.modifier }}
                </td>
                <td class="label">Notes</td>
                <td colspan="9">
                    {{ charge.noteCodes }}
                </td>
            </tr>
            <!-- ICDs -->
            <tr>
                <td class="label">ICD's</td>
                <td colspan="11">
                    {{ charge.icd_items_list }}
                </td>
            </tr>
            <!-- Custom -->
            <tr>
                <td class="label">Custom 1</td>
                <td>{{ charge.custom1 }}</td>
                <td class="label">Custom 2</td>
                <td>{{ charge.custom1 }}</td>
                <td class="label">Custom 3</td>
                <td>{{ charge.custom1 }}</td>
                <td class="label">Custom 4</td>
                <td>{{ charge.custom1 }}</td>
                <td class="label">Custom 5</td>
                <td>{{ charge.custom1 }}</td>
                <td class="label"></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</template>
