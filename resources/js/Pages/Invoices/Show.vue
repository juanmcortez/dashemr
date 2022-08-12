<script setup>
import SiteHeader from '@/Components/dashemr/LayoutParts/SiteHeader.vue';
import Layout from '@/Layouts/newDesign.vue';
import LedgerHead from '@/Components/dashemr/Ledger/PatientInfo.vue';
import EncounterDetails from '@/Components/dashemr/Invoices/EncounterDetail.vue';
import ChargesTable from '@/Components/dashemr/Invoices/ChargesTable.vue';
const props = defineProps({
    invoice: {
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

            <EncounterDetails :invoice="invoice" />

            <ChargesTable :charges="invoice.charges_list" />

        </template>
    </Layout>
</template>
