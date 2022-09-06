<script setup>
import Layout from '@/Layouts/DashEMRLogin.vue';
import SiteHeader from '@/Components/dashemr/LayoutParts/SiteHeader.vue';
import LedgerHead from '@/Components/dashemr/Ledger/PatientInfo.vue';
import EncounterTabs from '@/Components/dashemr/Invoices/EncounterTabs.vue';
import EncounterDetails from '@/Components/dashemr/Invoices/EncounterDetail.vue';
import ChargesTable from '@/Components/dashemr/Invoices/ChargesTable.vue';
const props = defineProps({
    invoice: {
        type: Object,
        default: () => ({})
    },
    options: {
        type: Object,
        default: () => ({})
    },
    practice: {
        type: Object,
        default: () => ({})
    },
});
</script>

<template>

    <SiteHeader
        :title="invoice.patient.demographic.full_name + '\'s encounter #' + invoice.patient.pid + '.' + invoice.encounter"
        :description="invoice.patient.demographic.full_name + '\'s encounter #' + invoice.patient.pid + '.' + invoice.encounter" />

    <Layout>
        <template #PageHeader>
            <LedgerHead :patient="invoice.patient" />
        </template>

        <template #PageContent>
            <EncounterDetails :invoice="invoice" :doctors="options.doctors" :facilities="options.facilities" />

            <ChargesTable :charges="invoice.charges_list" />
        </template>

        <template #innerSideBar>
            <EncounterTabs :prob="invoice.problem_tab" :misc="invoice.miscellaneous_tab" :lab="invoice.lab_tab"
                :options="options" :showLab="practice.isLabPractice" />
        </template>
    </Layout>
</template>
