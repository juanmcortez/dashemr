<script setup>
import Layout from '@/Layouts/Authenticated.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
const props = defineProps({
    invoice: {
        type: Object,
        default: () => ({})
    },
});
</script>

<template>

    <Head>
        <title>{{ invoice.demographic_info.full_name }}'s encounter <em>#{{ invoice.pid }}.{{ invoice.encounter }}</em>
        </title>
        <meta name="author" content="Juan M. Cortéz">
        <meta name="description"
            :content="invoice.demographic_info.full_name + '\'s encounter #' + invoice.pid + '.' + invoice.encounter">
        <meta name="keywords" content="EMR, Health, Patients, Insurance, Payments, Dashboard">
    </Head>
    <Layout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ invoice.demographic_info.full_name }}'s encounter #{{ invoice.pid }}.{{ invoice.encounter }}
            </h2>
        </template>
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <Link :href="route('patients.show', invoice.patient_info.pid)">Back to Ledger</Link>

                        <table
                            class="w-full mb-10 text-sm bg-white border border-collapse shadow-sm border-slate-400 dark:border-slate-500 dark:bg-slate-800">
                            <thead class="bg-slate-50 dark:bg-slate-700">
                                <tr>
                                    <th
                                        class="p-4 font-semibold text-center border border-slate-300 dark:border-slate-600 text-slate-900 dark:text-slate-200">
                                        Patient</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td
                                        class="p-4 border border-slate-300 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                        {{ invoice.patient_info }}</td>
                                </tr>
                                <tr>
                                    <td
                                        class="p-4 border border-slate-300 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                        {{ invoice.demographic_info }}</td>
                                </tr>
                            </tbody>
                        </table>

                        <table
                            class="w-full mb-10 text-sm text-center bg-white border border-collapse shadow-sm border-slate-400 dark:border-slate-500 dark:bg-slate-800">
                            <thead class="bg-slate-50 dark:bg-slate-700">
                                <tr>
                                    <th colspan="6"
                                        class="p-4 font-semibold border border-slate-300 dark:border-slate-600 text-slate-900 dark:text-slate-200">
                                        Encounter Info</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td
                                        class="w-1/6 p-4 border border-slate-300 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                        {{ invoice.serviceDate }}</td>
                                    <td
                                        class="w-1/6 p-4 border border-slate-300 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                        {{ invoice.serviceDateTo }}</td>
                                    <td
                                        class="w-1/6 p-4 border border-slate-300 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                        {{ invoice.facilityID }}</td>
                                    <td
                                        class="w-1/6 p-4 border border-slate-300 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                        {{ invoice.billingFacilityID }}</td>
                                    <td
                                        class="w-1/6 p-4 border border-slate-300 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                        {{ invoice.placeOfServiceID }}</td>
                                    <td
                                        class="w-1/6 p-4 border border-slate-300 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                        {{ invoice.entryDate }}</td>
                                </tr>
                                <tr>
                                    <td
                                        class="p-4 border border-slate-300 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                        {{ invoice.admisionDate }}</td>
                                    <td
                                        class="p-4 border border-slate-300 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                        {{ invoice.dischargeDate }}</td>
                                    <td
                                        class="p-4 border border-slate-300 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                        {{ invoice.renderingProviderID }}</td>
                                    <td
                                        class="p-4 border border-slate-300 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                        {{ invoice.referringProviderID }}</td>
                                    <td
                                        class="p-4 border border-slate-300 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                        {{ invoice.orderingProviderID }}</td>
                                    <td
                                        class="p-4 border border-slate-300 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                        {{ invoice.supervisingProviderID }}</td>
                                </tr>
                                <tr>
                                    <td colspan="4"
                                        class="p-4 border border-slate-300 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                        {{ invoice.consult }}</td>
                                    <td
                                        class="p-4 border border-slate-300 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                        {{ invoice.authorizationNumberID }}</td>
                                    <td
                                        class="p-4 border border-slate-300 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                        {{ invoice.sensitivity }}</td>
                                </tr>
                            </tbody>
                        </table>

                        <table
                            class="w-full text-sm bg-white border border-collapse shadow-sm border-slate-400 dark:border-slate-500 dark:bg-slate-800">
                            <thead class="bg-slate-50 dark:bg-slate-700">
                                <tr>
                                    <th
                                        class="p-4 font-semibold text-center border border-slate-300 dark:border-slate-600 text-slate-900 dark:text-slate-200">
                                        Encounter Tabs</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td
                                        class="p-4 border border-slate-300 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                        {{ invoice.problem_tab }}</td>
                                </tr>
                                <tr>
                                    <td
                                        class="p-4 border border-slate-300 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                        {{ invoice.miscellaneous_tab }}</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </Layout>

</template>
