<script setup>
import SiteHeader from '@/Components/dashemr/LayoutParts/SiteHeader.vue';
import Layout from '@/Layouts/newDesign.vue';
import PatientsTable from '@/Components/dashemr/Table.vue';

const props = defineProps({
    fullTitle: {
        type: String,
        default: "Patient's list"
    },
    patients: {
        type: Object,
        default: () => ({})
    },
});
</script>

<template>

    <SiteHeader :title="fullTitle" description="Full list of patients for the practice." />

    <Layout>
        <template #PageHeader>{{ fullTitle }}</template>

        <template #PageContent>
            <PatientsTable
                :columns="['Full Name', 'Home Phone', 'SSN', 'Date of Birth', 'Accession #', 'External ID', 'PID', 'Last Srv. Date']"
                :colData="['demographic.full_name', 'demographic.homePhone', 'demographic.socialSecurityNumber', 'demographic.dateOfBirth', 'accountLevelAccession', 'externalPid', 'pid', 'latestServiceDate']"
                :rowsData="patients.data" :rowsURL="['pid', 'patients.show']" />
        </template>
    </Layout>

</template>
