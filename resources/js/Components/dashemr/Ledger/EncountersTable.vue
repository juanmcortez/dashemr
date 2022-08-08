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
    <div class="flex font-semibold text-center bg-white border-b-2 border-gray-300 justify-evenly">
        <div class="flex-1 py-4">Invoice #</div>
        <div class="flex-1 py-4">Service Date</div>
        <div class="flex-1 py-4">CPT Code</div>
        <div class="flex-1 py-4">Modifier</div>
        <div class="flex-1 py-4">ICDs</div>
        <div class="flex-1 py-4">Qty.</div>
        <div class="flex-1 py-4">Charge</div>
        <div class="flex-1 py-4">PTP</div>
        <div class="flex-1 py-4">PBR</div>
        <div class="flex-1 py-4">Paid</div>
        <div class="flex-1 py-4">Adjustment</div>
        <div class="flex-1 py-4">Balance</div>
        <div class="flex-1 py-4">Provider</div>
        <div class="flex-1 py-4">DOE</div>
        <div class="flex-1 py-4">Insurance</div>
        <div class="flex-1 py-4">&nbsp;</div>
    </div>
    <div v-if="patient.encounters[0]" v-for="invoice in patient.encounters" :key="invoice.encounter"
        class="bg-white border-b border-gray-300 justify-evenly">
        <div class="flex text-center" v-for="(item, indx) in invoice.charges_list" :key="item.charge">
            <div :class="{ 'invisible': indx != 0 }" class="flex-1 py-2">{{ invoice.encounter }}</div>
            <div :class="{ 'invisible': indx != 0 }" class="flex-1 py-2">{{ invoice.serviceDate }}</div>
            <div class="flex-1 py-2">{{ item.code }}</div>
            <div class="flex-1 py-2">{{ item.modifier }}</div>
            <div class="flex-1 py-2">{{ item.ICDitems }}</div>
            <div class="flex-1 py-2">{{ item.units }}</div>
            <div class="flex-1 py-2">${{ item.fee }}</div>
            <div class="flex-1 py-2">$0.00</div>
            <div class="flex-1 py-2">$0.00</div>
            <div class="flex-1 py-2">$0.00</div>
            <div class="flex-1 py-2">$0.00</div>
            <div class="flex-1 py-2">${{ item.fee }}</div>
            <div :class="{ 'invisible': indx != 0 }" class="flex-1 py-2">{{ invoice.referringProviderID }}</div>
            <div :class="{ 'invisible': indx != 0 }" class="flex-1 py-2">{{ invoice.entryDate }}</div>
            <div :class="{ 'invisible': indx != 0 }" class="flex-1 py-2"> -- </div>
            <div :class="{ 'invisible': indx != 0 }" class="flex-1 py-2">
                <Link :href="route('encounter.detail', { encounter: invoice.encounter })">
                <svg class="w-4 h-4 mx-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                    <path fill-rule="evenodd"
                        d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                        clip-rule="evenodd"></path>
                </svg>
                </Link>
            </div>
        </div>
    </div>
    <div v-else class="bg-white border-b border-gray-300 justify-evenly">
        <div class="flex text-center">
            <div class="flex-1 py-4 font-semibold">No encounters available.</div>
        </div>
    </div>
</template>
