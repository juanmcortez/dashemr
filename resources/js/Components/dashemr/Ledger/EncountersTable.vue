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
    <table class="w-full mt-10 text-sm bg-white border border-collapse shadow-sm border-slate-400">
        <thead class="bg-slate-50 dark:bg-slate-700">
            <tr>
                <th class="w-32 p-2 font-semibold text-center border border-slate-300 text-slate-900">Invoice #</th>
                <th class="w-32 p-2 font-semibold text-center border border-slate-300 text-slate-900">Service Date</th>
                <th class="p-2 font-semibold text-center border w-14 border-slate-300 text-slate-900">Provider</th>
                <th class="w-32 p-2 font-semibold text-center border border-slate-300 text-slate-900">CPT Code</th>
                <th class="w-32 p-2 font-semibold text-center border border-slate-300 text-slate-900">Modifier</th>
                <th class="w-32 p-2 font-semibold text-center border border-slate-300 text-slate-900">ICDs</th>
                <th class="p-2 font-semibold text-center border w-14 border-slate-300 text-slate-900">Qty.</th>
                <th class="p-2 font-semibold text-center border w-28 border-slate-300 text-slate-900">Charge</th>
                <th class="p-2 font-semibold text-center border w-28 border-slate-300 text-slate-900">PTP</th>
                <th class="p-2 font-semibold text-center border w-28 border-slate-300 text-slate-900">PBR</th>
                <th class="p-2 font-semibold text-center border w-28 border-slate-300 text-slate-900">Paid</th>
                <th class="p-2 font-semibold text-center border w-28 border-slate-300 text-slate-900">Adjustment</th>
                <th class="p-2 font-semibold text-center border border-slate-300 text-slate-900">Balance</th>
                <th class="w-32 p-2 font-semibold text-center border border-slate-300 text-slate-900">DOE</th>
                <th class="w-32 p-2 font-semibold text-center border border-slate-300 text-slate-900">Insurance</th>
                <th class="w-10 p-2 font-semibold text-center border border-slate-300 text-slate-900">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <tr v-if="patient.encounters.length === 0">
                <td colspan="16" class="p-2 font-semibold text-center border border-slate-300 text-slate-500">
                    No encounters available for this patient
                </td>
            </tr>
            <tr v-else v-for="(invoice, jdx) in patient.encounters" :key="invoice.encounter"
                :class="['align-top ', (jdx % 2 ? 'bg-slate-50' : 'bg-slate-100')]">
                <td class="p-2 font-semibold text-center border border-slate-300 text-slate-900">
                    {{ invoice.encounter }}
                </td>
                <td class="p-2 text-center border border-slate-300 text-slate-900">
                    {{ invoice.serviceDate }}
                </td>
                <td class="p-2 text-center border border-slate-300 text-slate-900">
                    {{ invoice.referringProviderID }}
                </td>
                <td colspan="10" class="text-center border border-slate-300 text-slate-900">
                    <table class="w-full text-sm">
                        <tbody>
                            <tr v-for="(item, kdx) in invoice.charges_list" :key="item.charge" class="align-top">
                                <td class="w-32 p-2 text-center border-r border-slate-300 text-slate-900">
                                    {{ item.code }}
                                </td>
                                <td class="w-32 p-2 text-center border-r border-slate-300 text-slate-900">
                                    {{ item.modifier }}
                                </td>
                                <td class="w-32 p-2 text-center border-r border-slate-300 text-slate-900">
                                    {{ item.ICDitems.split(':') }}
                                </td>
                                <td class="p-2 text-center border-r w-14 border-slate-300 text-slate-900">
                                    {{ item.units }}
                                </td>
                                <td class="p-2 text-center border-r w-28 border-slate-300 text-slate-900">
                                    $ {{ item.fee }}
                                </td>
                                <td class="p-2 text-center border-r w-28 border-slate-300 text-slate-900">$ 0.00</td>
                                <td class="p-2 text-center border-r w-28 border-slate-300 text-slate-900">$ 0.00</td>
                                <td class="p-2 text-center border-r w-28 border-slate-300 text-slate-900">$ 0.00</td>
                                <td class="p-2 text-center border-r w-28 border-slate-300 text-slate-900">$ 0.00</td>
                                <td class="p-2 text-center text-slate-900">
                                    $ {{ (item.fee - 0 - 0 - 0 - 0).toFixed(2) }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td class="p-2 text-center border border-slate-300 text-slate-900">
                    {{ invoice.entryDate }}
                </td>
                <td class="p-2 text-center border border-slate-300 text-slate-900">
                    --
                </td>
                <td class="p-2 text-center border border-slate-300 text-slate-900">
                    <Link :href="route('patients.encounter.detail', invoice.encounter)"
                        class="flex w-4 h-4 mx-auto mt-0.5">
                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                        <path fill-rule="evenodd"
                            d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    </Link>
                    <Link class="flex w-4 h-4 mx-auto mt-5">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                        </path>
                    </svg>
                    </Link>
                </td>
            </tr>
        </tbody>
    </table>
</template>
