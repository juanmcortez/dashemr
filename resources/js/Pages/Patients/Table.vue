<script setup>
import Layout from '@/Layouts/Authenticated.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';

const props = defineProps({
    patients: {
        type: Object,
        default: () => ({})
    },
    fullTitle: {
        type: String,
        default: "Patient's list",
    },
});
</script>

<template>

    <Head>
        <title>{{ fullTitle }}</title>
        <meta name="author" content="Juan M. Cortéz">
        <meta name="description" content="Full list of patients in the system.">
        <meta name="keywords" content="EMR, Health, Patients, Insurance, Payments, Dashboard">
    </Head>
    <Layout>
        <template #header>
            <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <h2 class="text-xl font-semibold leading-tight text-gray-800">{{ fullTitle }}</h2>
            </div>
        </template>
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <table
                            class="w-full text-sm bg-white border border-collapse shadow-sm border-slate-400 dark:border-slate-500 dark:bg-slate-800">
                            <thead class="bg-slate-50 dark:bg-slate-700">
                                <tr>
                                    <th
                                        class="w-1/4 p-4 font-semibold text-center border border-slate-300 dark:border-slate-600 text-slate-900 dark:text-slate-200">
                                        Full Name</th>
                                    <th
                                        class="p-4 font-semibold text-center border border-slate-300 dark:border-slate-600 text-slate-900 dark:text-slate-200">
                                        Home Phone</th>
                                    <th
                                        class="p-4 font-semibold text-center border border-slate-300 dark:border-slate-600 text-slate-900 dark:text-slate-200">
                                        SSN</th>
                                    <th
                                        class="p-4 font-semibold text-center border border-slate-300 dark:border-slate-600 text-slate-900 dark:text-slate-200">
                                        Date of Birth</th>
                                    <th
                                        class="p-4 font-semibold text-center border border-slate-300 dark:border-slate-600 text-slate-900 dark:text-slate-200">
                                        Accession #</th>
                                    <th
                                        class="p-4 font-semibold text-center border border-slate-300 dark:border-slate-600 text-slate-900 dark:text-slate-200">
                                        External ID</th>
                                    <th
                                        class="p-4 font-semibold text-center border border-slate-300 dark:border-slate-600 text-slate-900 dark:text-slate-200">
                                        PID</th>
                                    <th
                                        class="p-4 font-semibold text-center border border-slate-300 dark:border-slate-600 text-slate-900 dark:text-slate-200">
                                        Last Srv. Date</th>
                                    <th
                                        class="p-4 font-semibold text-center border border-slate-300 dark:border-slate-600 text-slate-900 dark:text-slate-200">
                                        &nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="patient in patients.data" :key="patient.pid" class="text-center">
                                    <td
                                        class="p-4 text-left border border-slate-300 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                        {{ patient.demographic.full_name }}</td>
                                    <td
                                        class="p-4 border border-slate-300 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                        {{ patient.demographic.homePhone }}</td>
                                    <td
                                        class="p-4 border border-slate-300 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                        {{ patient.demographic.socialSecurityNumber }}</td>
                                    <td
                                        class="p-4 border border-slate-300 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                        {{ patient.demographic.dateOfBirth }}</td>
                                    <td
                                        class="p-4 border border-slate-300 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                        {{ patient.accountLevelAccession }}</td>
                                    <td
                                        class="p-4 border border-slate-300 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                        {{ patient.externalPid }}</td>
                                    <td
                                        class="p-4 border border-slate-300 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                        {{ patient.pid }}</td>
                                    <td
                                        class="p-4 border border-slate-300 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                        {{ patient.latestServiceDate }}</td>
                                    <td
                                        class="p-4 border border-slate-300 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                        <Link :href="route('patients.show', { patient: patient.pid })">
                                        <svg class="w-5 h-5 mx-auto" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
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
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>
