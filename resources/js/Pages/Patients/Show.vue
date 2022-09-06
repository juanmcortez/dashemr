<script setup>
import Layout from '@/Layouts/DashEMRLogin.vue';
import SiteHeader from '@/Components/dashemr/LayoutParts/SiteHeader.vue';
import LedgerHead from '@/Components/dashemr/Ledger/PatientInfo.vue';
import LedgerAccount from '@/Components/dashemr/Ledger/AccountTotals.vue';
import LedgerEncounters from '@/Components/dashemr/Ledger/EncountersTable.vue';

const props = defineProps({
    fullTitle: {
        type: String,
        default: "Patient's list"
    },
    patient: {
        type: Object,
        default: () => ({})
    },
});
</script>

<template>

    <SiteHeader :title="patient.demographic.full_name + '\'s Ledger'"
        :description="patient.demographic.full_name + '\'s Ledger.'" />

    <Layout>
        <template #PageHeader>
            <LedgerHead :patient="patient" />
        </template>

        <template #PageContent>

            <LedgerAccount />

            <LedgerEncounters :patient="patient" />

        </template>
    </Layout>
</template>
