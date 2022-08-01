<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
</script>

<template>

    <Head title="Patient's list" />
    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Patient's list
            </h2>
        </template>
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <table class="w-full">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Date of Birth / Age</th>
                                    <th>SSN</th>
                                    <th>PID</th>
                                    <th>External ID</th>
                                    <th>Created</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="patient in $attrs.patients.data" class="text-center">
                                    <td class="text-left">{{ patient.full_name }}</td>
                                    <td>{{ patient.homePhone }}</td>
                                    <td>
                                        <table class="w-full">
                                            <tr>
                                                <td>{{ patient.dateOfBirth }}</td>
                                                <td>{{ patient.age }}</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td>{{ patient.socialSecurityNumber }}</td>
                                    <td>{{ patient.patient_info.pid }}</td>
                                    <td>{{ patient.patient_info.externalPid }}</td>
                                    <td>{{ patient.patient_info.created_at }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
