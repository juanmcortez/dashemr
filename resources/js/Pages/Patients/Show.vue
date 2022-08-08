<script setup>
import Layout from '@/Layouts/Authenticated.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import LedgerHead from '@/Components/dashemr/Ledger/PatientInfo.vue';
import LedgerAccount from '@/Components/dashemr/Ledger/AccountTotals.vue';
import LedgerEncounters from '@/Components/dashemr/Ledger/EncountersTable.vue';
const props = defineProps({
    patient: {
        type: Object,
        default: () => ({})
    },
});
</script>

<template>

    <Head>
        <title>{{ patient.demographic.full_name }}'s Ledger</title>
        <meta name="author" content="Juan M. Cortéz">
        <meta name="description" :content="patient.demographic.full_name + '\'s Ledger'">
        <meta name="keywords" content="EMR, Health, Patients, Insurance, Payments, Dashboard">
    </Head>
    <Layout>
        <template #header>
            <LedgerHead :patient="patient" />
        </template>

        <div class="w-full p-10 text-sm">
            <LedgerAccount />
            <LedgerEncounters :patient="patient" />
        </div>
    </Layout>

</template>
