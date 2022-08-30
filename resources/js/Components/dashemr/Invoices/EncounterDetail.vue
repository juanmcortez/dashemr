<script setup>
import DashEMRTextarea from '@/Components/dashemr/TextareaField.vue';
import DashEMRSelect from '@/Components/dashemr/SelectField.vue';
const props = defineProps({
    invoice: {
        type: Object,
        default: () => ({})
    },
    doctors: {
        type: Object,
        default: () => ({})
    },
    facilities: {
        type: Object,
        default: () => ({})
    },
});
</script>

<template>
    <table class="w-full mb-5 text-sm bg-white border border-collapse shadow-sm border-slate-400">
        <thead class="bg-slate-50">
            <tr>
                <th class="w-1/6 p-2 font-semibold leading-10 text-center border border-slate-300 text-slate-900">
                    Encounter
                </th>
                <th class="w-1/6 p-2 font-semibold leading-10 text-center border border-slate-300 text-slate-900">
                    Service Date
                </th>
                <th class="w-1/6 p-2 font-semibold leading-10 text-center border border-slate-300 text-slate-900">
                    Date To
                </th>
                <th class="w-1/6 p-2 font-semibold leading-10 text-center border border-slate-300 text-slate-900">
                    Facility
                </th>
                <th class="w-1/6 p-2 font-semibold leading-10 text-center border border-slate-300 text-slate-900">
                    Billing Facility
                </th>
                <th class="w-1/6 p-2 font-semibold leading-10 text-center border border-slate-300 text-slate-900">
                    Place of Service
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-row align-top">
                <td class="p-2 leading-10 text-center border border-slate-300 text-slate-500">
                    {{  invoice.pid  }}.{{  invoice.encounter  }}
                </td>
                <td class="p-2 leading-10 text-center border border-slate-300 text-slate-500">
                    {{  invoice.serviceDate  }}
                </td>
                <td class="p-2 leading-10 text-center border border-slate-300 text-slate-500">
                    {{  invoice.serviceDateTo  }}
                </td>
                <td class="p-2 text-center border border-slate-300 text-slate-500">
                    <DashEMRSelect name="serviceFacility" :selected="invoice.service_facility.id"
                        :options="facilities.service" disabled />
                </td>
                <td class="p-2 text-center border border-slate-300 text-slate-500">
                    <DashEMRSelect name="billingFacility" :selected="invoice.billing_facility.id"
                        :options="facilities.billing" disabled />
                </td>
                <td class="p-2 text-center border border-slate-300 text-slate-500">
                    <DashEMRSelect name="placeOfService" :selected="invoice.place_of_service.code"
                        :options="facilities.placeOfService" disabled />
                </td>
            </tr>
        </tbody>
    </table>

    <table class="w-full mb-5 text-sm bg-white border border-collapse shadow-sm border-slate-400">
        <thead class="bg-slate-50">
            <tr>
                <th class="w-4/6 p-2 font-semibold leading-10 text-center border border-slate-300 text-slate-900">
                    Consult
                </th>
                <th class="w-1/6 p-2 font-semibold leading-10 text-center border border-slate-300 text-slate-900">
                    Authorization #
                </th>
                <th class="w-1/6 p-2 font-semibold leading-10 text-center border border-slate-300 text-slate-900">
                    Sensitivity
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-row align-top">
                <td class="p-2 text-center border border-slate-300 text-slate-500">
                    <DashEMRTextarea class="h-32" :content="invoice.consult" placeholdertext="Consult information ..."
                        disabled />
                </td>
                <td class="p-2 leading-10 text-center border border-slate-300 text-slate-500">
                    {{  invoice.authorizationNumberID  }}
                </td>
                <td class="p-2 leading-10 text-center border border-slate-300 text-slate-500">
                    {{  invoice.sensitivity  }}
                </td>
            </tr>
        </tbody>
    </table>

    <table class="w-full mb-10 text-sm bg-white border border-collapse shadow-sm border-slate-400">
        <thead class="bg-slate-50">
            <tr>
                <th class="w-1/6 p-2 font-semibold leading-10 text-center border border-slate-300 text-slate-900">
                    Admission Date
                </th>
                <th class="w-1/6 p-2 font-semibold leading-10 text-center border border-slate-300 text-slate-900">
                    Discharge Date
                </th>
                <th class="w-1/6 p-2 font-semibold leading-10 text-center border border-slate-300 text-slate-900">
                    Rendering Provider
                </th>
                <th class="w-1/6 p-2 font-semibold leading-10 text-center border border-slate-300 text-slate-900">
                    Referring Physician
                </th>
                <th class="w-1/6 p-2 font-semibold leading-10 text-center border border-slate-300 text-slate-900">
                    Ordering Physician
                </th>
                <th class="w-1/6 p-2 font-semibold leading-10 text-center border border-slate-300 text-slate-900">
                    Supervising Physician
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-row align-top">
                <td class="p-2 leading-10 text-center border border-slate-300 text-slate-500">
                    {{  invoice.admisionDate  }}
                </td>
                <td class="p-2 leading-10 text-center border border-slate-300 text-slate-500">
                    {{  invoice.dischargeDate  }}
                </td>
                <td class="p-2 text-center border border-slate-300 text-slate-500">
                    <DashEMRSelect name="renderingProvider" :selected="invoice.rendering_doctor.id"
                        :options="doctors.rendering" disabled />
                </td>
                <td class="p-2 text-center border border-slate-300 text-slate-500">
                    <DashEMRSelect name="referringProviddr" :selected="invoice.referring_doctor.id"
                        :options="doctors.referring" disabled />
                </td>
                <td class="p-2 text-center border border-slate-300 text-slate-500">
                    <DashEMRSelect name="orderingProvider" :selected="invoice.ordering_doctor.id"
                        :options="doctors.referring" disabled />
                </td>
                <td class="p-2 text-center border border-slate-300 text-slate-500">
                    <DashEMRSelect name="supervisingProvider" :selected="invoice.supervising_doctor.id"
                        :options="doctors.referring" disabled />
                </td>
            </tr>
        </tbody>
    </table>
</template>
