<script setup>
import DashEMRinput from '@/Components/dashemr/InputField.vue';
import DashEMRSelect from '@/Components/dashemr/SelectField.vue';
const props = defineProps({
    content: {
        type: Object,
        default: () => ({})
    },
    options: {
        type: Object,
        default: () => ({}),
    },
});
</script>
<template>
    <div class="holder">
        <div class="label">Accession #</div>
        <div class="content">
            <DashEMRinput name="accessionNumberLabLevel" :value="content.accessionNumberLabLevel" disabled />
        </div>
    </div>
    <div class="holder">
        <div class="label">Sales representative</div>
        <div class="content">
            <DashEMRinput name="salesRepresentative" :value="content.salesRepresentative" disabled />
        </div>
    </div>
    <div class="holder">
        <div class="label">Location code</div>
        <div class="content">
            <DashEMRSelect name="locationCode" :selected="content.locationCode" :options="options.locationCode"
                disabled />
        </div>
    </div>
    <div class="holder">
        <div class="label">Location name</div>
        <div class="content">
            <DashEMRSelect name="locationName" :selected="content.locationName" :options="options.locationName"
                disabled />
        </div>
    </div>
    <div class="holder">
        <div class="label">Lab-User defined</div>
        <div class="content">
            <DashEMRinput name="labUserDefined" :value="content.labUserDefined" disabled />
        </div>
    </div>
    <div class="holder">
        <div class="label">Reference lab</div>
        <div class="content">
            <DashEMRSelect name="referenceLab" :selected="content.referenceLab" :options="options.referenceLab"
                disabled />
        </div>
    </div>
    <div class="holder">
        <div class="label">Panel name</div>
        <div class="content">
            <DashEMRinput name="panelName" :value="content.panelName" disabled />
        </div>
    </div>
    <div class="holder">
        <div class="label">Lab test type</div>
        <div class="content">
            <DashEMRinput name="labTestType" :value="content.labTestType" disabled />
        </div>
    </div>
    <div class="holder">
        <div class="label">Billing type</div>
        <div class="content">
            <DashEMRinput name="billingType" :value="content.billingType" disabled />
        </div>
    </div>
</template>
