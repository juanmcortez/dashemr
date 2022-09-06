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
    <table class="encounterDetails">
        <thead>
            <tr>
                <th>Encounter</th>
                <th>Service Date</th>
                <th>Date To</th>
                <th>Facility</th>
                <th>Billing Facility</th>
                <th>Place of Service</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ invoice.pid }}.{{ invoice.encounter }}</td>
                <td>{{ invoice.serviceDate }}</td>
                <td>{{ invoice.serviceDateTo }}</td>
                <td>
                    <DashEMRSelect name="serviceFacility" :selected="invoice.service_facility.id"
                        :options="facilities.service" disabled />
                </td>
                <td>
                    <DashEMRSelect name="billingFacility" :selected="invoice.billing_facility.id"
                        :options="facilities.billing" disabled />
                </td>
                <td>
                    <DashEMRSelect name="placeOfService" :selected="invoice.place_of_service.code"
                        :options="facilities.placeOfService" disabled />
                </td>
            </tr>
        </tbody>
    </table>

    <table class="encounterExtraDetails">
        <thead>
            <tr>
                <th>Consult</th>
                <th>Authorization #</th>
                <th>Sensitivity</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <DashEMRTextarea class="h-32" :content="invoice.consult" placeholdertext="Consult information ..."
                        disabled />
                </td>
                <td>{{ invoice.authorizationNumberID }}</td>
                <td>{{ invoice.sensitivity }}</td>
            </tr>
        </tbody>
    </table>

    <table class="encounterDetails">
        <thead>
            <tr>
                <th>Admission Date</th>
                <th>Discharge Date</th>
                <th>Rendering Provider</th>
                <th>Referring Physician</th>
                <th>Ordering Physician</th>
                <th>Supervising Physician</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ invoice.admisionDate }}</td>
                <td>{{ invoice.dischargeDate }}</td>
                <td>
                    <DashEMRSelect name="renderingProvider" :selected="invoice.rendering_doctor.id"
                        :options="doctors.rendering" disabled />
                </td>
                <td>
                    <DashEMRSelect name="referringProviddr" :selected="invoice.referring_doctor.id"
                        :options="doctors.referring" disabled />
                </td>
                <td>
                    <DashEMRSelect name="orderingProvider" :selected="invoice.ordering_doctor.id"
                        :options="doctors.referring" disabled />
                </td>
                <td>
                    <DashEMRSelect name="supervisingProvider" :selected="invoice.supervising_doctor.id"
                        :options="doctors.referring" disabled />
                </td>
            </tr>
        </tbody>
    </table>
</template>
