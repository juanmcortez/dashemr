<script setup>
const props = defineProps({
    invoice: {
        type: Object,
        default: () => ({})
    },
});
</script>

<template>
    <table class="w-full mb-5 text-sm bg-white border border-collapse shadow-sm border-slate-400">
        <thead class="bg-slate-50">
            <tr>
                <th class="w-1/6 p-2 font-semibold text-center border border-slate-300 text-slate-900">
                    Encounter
                </th>
                <th class="w-1/6 p-2 font-semibold text-center border border-slate-300 text-slate-900">
                    Service Date
                </th>
                <th class="w-1/6 p-2 font-semibold text-center border border-slate-300 text-slate-900">
                    Date To
                </th>
                <th class="w-1/6 p-2 font-semibold text-center border border-slate-300 text-slate-900">
                    Facility
                </th>
                <th class="w-1/6 p-2 font-semibold text-center border border-slate-300 text-slate-900">
                    Billing Facility
                </th>
                <th class="w-1/6 p-2 font-semibold text-center border border-slate-300 text-slate-900">
                    Place of Service
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-row align-top">
                <td class="p-2 text-center border border-slate-300 text-slate-500">
                    {{ invoice.pid }}.{{ invoice.encounter }}
                </td>
                <td class="p-2 text-center border border-slate-300 text-slate-500">
                    {{ invoice.serviceDate }}
                </td>
                <td class="p-2 text-center border border-slate-300 text-slate-500">
                    {{ invoice.serviceDateTo }}
                </td>
                <td class="p-2 text-center border border-slate-300 text-slate-500">
                    {{ invoice.facilityID }}
                </td>
                <td class="p-2 text-center border border-slate-300 text-slate-500">
                    {{ invoice.billingFacilityID }}
                </td>
                <td class="p-2 text-center border border-slate-300 text-slate-500">
                    {{ invoice.placeOfServiceID }}
                </td>
            </tr>
        </tbody>
    </table>

    <table class="w-full mb-5 text-sm bg-white border border-collapse shadow-sm border-slate-400">
        <thead class="bg-slate-50">
            <tr>
                <th class="w-4/6 p-2 font-semibold text-center border border-slate-300 text-slate-900">
                    Consult
                </th>
                <th class="w-1/6 p-2 font-semibold text-center border border-slate-300 text-slate-900">
                    Authorization #
                </th>
                <th class="w-1/6 p-2 font-semibold text-center border border-slate-300 text-slate-900">
                    Sensitivity
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-row align-top">
                <td class="p-2 text-center border border-slate-300 text-slate-500">
                    <textarea
                        class="w-full h-32 text-sm leading-6 border-0 resize-none placeholder:text-sm placeholder:text-slate-400 focus:border-slate-400 focus:ring-slate-400"
                        placeholder="Consult information ...">{{ invoice.consult }}</textarea>
                </td>
                <td class="p-2 text-center border border-slate-300 text-slate-500">
                    {{ invoice.authorizationNumberID }}
                </td>
                <td class="p-2 text-center border border-slate-300 text-slate-500">
                    {{ invoice.sensitivity }}
                </td>
            </tr>
        </tbody>
    </table>

    <table class="w-full mb-10 text-sm bg-white border border-collapse shadow-sm border-slate-400">
        <thead class="bg-slate-50">
            <tr>
                <th class="w-1/6 p-2 font-semibold text-center border border-slate-300 text-slate-900">
                    Admission Date
                </th>
                <th class="w-1/6 p-2 font-semibold text-center border border-slate-300 text-slate-900">
                    Discharge Date
                </th>
                <th class="w-1/6 p-2 font-semibold text-center border border-slate-300 text-slate-900">
                    Rendering Provider
                </th>
                <th class="w-1/6 p-2 font-semibold text-center border border-slate-300 text-slate-900">
                    Referring Physician
                </th>
                <th class="w-1/6 p-2 font-semibold text-center border border-slate-300 text-slate-900">
                    Ordering Physician
                </th>
                <th class="w-1/6 p-2 font-semibold text-center border border-slate-300 text-slate-900">
                    Supervising Physician
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-row align-top">
                <td class="p-2 text-center border border-slate-300 text-slate-500">
                    {{ invoice.admisionDate }}
                </td>
                <td class="p-2 text-center border border-slate-300 text-slate-500">
                    {{ invoice.dischargeDate }}
                </td>
                <td class="p-2 text-center border border-slate-300 text-slate-500">
                    {{ invoice.renderingProviderID }}
                </td>
                <td class="p-2 text-center border border-slate-300 text-slate-500">
                    {{ invoice.referring_doctor.doctor_full_name }}
                </td>
                <td class="p-2 text-center border border-slate-300 text-slate-500">
                    {{ invoice.ordering_doctor.doctor_full_name }}
                </td>
                <td class="p-2 text-center border border-slate-300 text-slate-500">
                    {{ invoice.supervising_doctor.doctor_full_name }}
                </td>
            </tr>
        </tbody>
    </table>
</template>
