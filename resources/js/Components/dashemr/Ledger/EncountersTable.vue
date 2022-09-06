<script setup>
import { Link } from '@inertiajs/inertia-vue3';
const props = defineProps({
    patient: {
        type: Object,
        default: () => ({})
    },
});
</script>
<template>
    <table class="table-fixed">
        <thead>
            <tr>
                <th class="w-32">Invoice #</th>
                <th class="w-32">Service Date</th>
                <th class="w-14">Prv.</th>
                <th class="w-28">CPT Code</th>
                <th class="w-28">Modifier</th>
                <th class="w-40">ICDs</th>
                <th class="w-14">Qty.</th>
                <th class="w-32">Charge</th>
                <th class="w-24">PTP</th>
                <th class="w-24">PBR</th>
                <th class="w-24">Paid</th>
                <th class="w-24">Adj.</th>
                <th class="w-32">Balance</th>
                <th class="w-32">DOE</th>
                <th class="w-48">Insurance</th>
                <th class="w-10">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <tr v-if="patient.encounters.length === 0">
                <td colspan="16" class="noResults">No encounters available for this patient.</td>
            </tr>
            <tr v-else v-for="(invoice, jdx) in patient.encounters" :key="invoice.encounter" class="results">
                <td colspan="16" class="p-0 m-0">
                    <table class="details">
                        <tbody>
                            <tr v-for="(item, kdx) in invoice.charges_list" :key="item.charge">
                                <td :class="(kdx != 0) ? 'w-32 invisible' : 'w-32'">{{ invoice.encounter }}</td>
                                <td :class="(kdx != 0) ? 'w-32 invisible' : 'w-32'">{{ invoice.serviceDate }}</td>
                                <td :class="(kdx != 0) ? 'w-14 invisible' : 'w-14'">
                                    <abbr class="hover:cursor-help" :title="invoice.rendering_doctor.display_name">
                                        {{ invoice.rendering_doctor.abbreviation }}
                                    </abbr>
                                </td>
                                <td class="w-28">{{ item.code }}</td>
                                <td class="w-28">{{ item.modifier }}</td>
                                <td class="w-40">{{ item.icd_items_list }}</td>
                                <td class="w-14">{{ item.units }}</td>
                                <td class="w-32">$ {{ item.fee }}</td>
                                <td class="w-24">$ 0.00</td>
                                <td class="w-24">$ 0.00</td>
                                <td class="w-24">$ 0.00</td>
                                <td class="w-24">$ 0.00</td>
                                <td class="w-32">$ {{ (item.fee - 0 - 0 - 0 - 0).toFixed(2) }}</td>
                                <td :class="(kdx != 0) ? 'w-32 invisible' : 'w-32'">{{ invoice.entryDate }}</td>
                                <td :class="(kdx != 0) ? 'w-48 invisible' : 'w-48'">---</td>
                                <td :class="(kdx != 0) ? 'w-10 invisible' : 'w-10'">
                                    <Link :href="route('patients.encounter.detail', invoice.encounter)"
                                        class="flex w-4 h-4 mx-auto mt-0.5">
                                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                        <path fill-rule="evenodd"
                                            d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    </Link>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</template>
