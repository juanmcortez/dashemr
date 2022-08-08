<script setup>
import Layout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
import LedgerHead from '@/Components/dashemr/Ledger/PatientInfo.vue';
import EncounterDetails from '@/Components/dashemr/Invoices/EncounterDetail.vue';
import EncounterCharges from '@/Components/dashemr/Invoices/ChargesTable.vue';
const props = defineProps({
    invoice: {
        type: Object,
        default: () => ({})
    },
});
</script>

<template>

    <Head>
        <title>
            {{ invoice.patient.demographic.full_name }}'s encounter
            <em>#{{ invoice.patient.pid }}.{{ invoice.encounter }}</em>
        </title>
        <meta name="author" content="Juan M. Cortéz">
        <meta name="description"
            :content="invoice.patient.demographic.full_name + '\'s encounter #' + invoice.patient.pid + '.' + invoice.encounter">
        <meta name="keywords" content="EMR, Health, Patients, Insurance, Payments, Dashboard">
    </Head>
    <Layout>
        <template #header>
            <LedgerHead :patient="invoice.patient" />
        </template>

        <div class="w-full p-10 text-sm">

            <EncounterDetails :invoice="invoice" />

            <EncounterCharges :invoice="invoice" />

        </div>
    </Layout>

</template>
