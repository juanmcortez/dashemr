<script setup>
import Layout from '@/Layouts/DashEMRLogin.vue';
import SiteHeader from '@/Components/dashemr/LayoutParts/SiteHeader.vue';
import PatientsTable from '@/Components/dashemr/Table.vue';
import Paginator from '@/Components/dashemr/Paginator.vue';

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

            <Paginator :pagesData="patients.links" :totalItems="patients.total" :perPage="patients.per_page"
                :toPage="patients.to" :fromPage="patients.from" :lastPage="patients.last_page" class="mt-5" />
        </template>
    </Layout>

</template>
