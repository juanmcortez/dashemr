<script setup>
import Layout from '@/Layouts/Authenticated.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
const props = defineProps({
    patient: {
        type: Object,
        default: () => ({})
    },
    demographic: {
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
            <h2 class="text-xl font-semibold leading-tight text-gray-800">{{ patient.demographic.full_name }}'s Ledger
            </h2>
        </template>
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <Link :href="route('patients.list')">Back to List</Link>
                        <table
                            class="w-full mb-10 text-sm bg-white border border-collapse shadow-sm border-slate-400 dark:border-slate-500 dark:bg-slate-800">
                            <thead class="bg-slate-50 dark:bg-slate-700">
                                <tr>
                                    <th
                                        class="w-1/3 p-4 font-semibold text-center border border-slate-300 dark:border-slate-600 text-slate-900 dark:text-slate-200">
                                        PID</th>
                                    <th
                                        class="w-1/3 p-4 font-semibold text-center border border-slate-300 dark:border-slate-600 text-slate-900 dark:text-slate-200">
                                        External PID</th>
                                    <th
                                        class="w-1/3 p-4 font-semibold text-center border border-slate-300 dark:border-slate-600 text-slate-900 dark:text-slate-200">
                                        Created</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td
                                        class="p-4 border border-slate-300 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                        {{ patient.pid }}</td>
                                    <td
                                        class="p-4 border border-slate-300 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                        {{ patient.externalPid }}</td>
                                    <td
                                        class="p-4 border border-slate-300 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                        {{ patient.created_at }}</td>
                                </tr>
                            </tbody>
                        </table>

                        <table
                            class="w-full mb-10 text-sm bg-white border border-collapse shadow-sm border-slate-400 dark:border-slate-500 dark:bg-slate-800">
                            <thead class="bg-slate-50 dark:bg-slate-700">
                                <tr>
                                    <th
                                        class="p-4 font-semibold text-center border border-slate-300 dark:border-slate-600 text-slate-900 dark:text-slate-200">
                                        Demographic</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td
                                        class="p-4 border border-slate-300 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                        {{ patient.demographic }}</td>
                                </tr>
                            </tbody>
                        </table>

                        <table
                            class="w-full text-sm bg-white border border-collapse shadow-sm border-slate-400 dark:border-slate-500 dark:bg-slate-800">
                            <thead class="bg-slate-50 dark:bg-slate-700">
                                <tr>
                                    <th colspan="2"
                                        class="p-4 font-semibold text-center border border-slate-300 dark:border-slate-600 text-slate-900 dark:text-slate-200">
                                        Encounters</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="invoice in patient.encounters" :key="invoice.encounter">
                                    <td
                                        class="w-3/4 p-4 border border-slate-300 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                        {{ invoice }}</td>
                                    <td
                                        class="w-1/4 p-4 text-center border border-slate-300 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                        <Link
                                            :href="route('encounter.detail', { patient: patient.pid, encounter: invoice.encounter })">
                                        View
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
