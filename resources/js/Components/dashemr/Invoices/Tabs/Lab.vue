<script setup>
import DashEMRinput from '@/Components/dashemr/inputField.vue';
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
    <div class="flex w-full pb-2.5">
        <div class="w-5/12 font-semibold leading-10 text-right">Accession #</div>
        <div class="w-8/12 pl-3 leading-8">
            <DashEMRinput name="accessionNumberLabLevel" :value="content.accessionNumberLabLevel" disabled />
        </div>
    </div>
    <div class="flex w-full pb-2.5">
        <div class="w-5/12 font-semibold leading-10 text-right">Sales representative</div>
        <div class="w-8/12 pl-3 leading-8">
            <DashEMRinput name="salesRepresentative" :value="content.salesRepresentative" disabled />
        </div>
    </div>
    <div class="flex w-full pb-2.5">
        <div class="w-5/12 font-semibold leading-10 text-right">Location code</div>
        <div class="w-8/12 pl-3 leading-8">
            <DashEMRSelect name="locationCode" :selected="content.locationCode" :options="options.locationCode"
                disabled />
        </div>
    </div>
    <div class="flex w-full pb-2.5">
        <div class="w-5/12 font-semibold leading-10 text-right">Location name</div>
        <div class="w-8/12 pl-3 leading-8">
            <DashEMRSelect name="locationName" :selected="content.locationName" :options="options.locationName"
                disabled />
        </div>
    </div>
    <div class="flex w-full pb-2.5">
        <div class="w-5/12 font-semibold leading-10 text-right">Lab-User defined</div>
        <div class="w-8/12 pl-3 leading-8">
            <DashEMRinput name="labUserDefined" :value="content.labUserDefined" disabled />
        </div>
    </div>
    <div class="flex w-full pb-2.5">
        <div class="w-5/12 font-semibold leading-10 text-right">Reference lab</div>
        <div class="w-8/12 pl-3 leading-8">
            <DashEMRSelect name="referenceLab" :selected="content.referenceLab" :options="options.referenceLab"
                disabled />
        </div>
    </div>
    <div class="flex w-full pb-2.5">
        <div class="w-5/12 font-semibold leading-10 text-right">Panel name</div>
        <div class="w-8/12 pl-3 leading-8">
            <DashEMRinput name="panelName" :value="content.panelName" disabled />
        </div>
    </div>
    <div class="flex w-full pb-2.5">
        <div class="w-5/12 font-semibold leading-10 text-right">Lab test type</div>
        <div class="w-8/12 pl-3 leading-8">
            <DashEMRinput name="labTestType" :value="content.labTestType" disabled />
        </div>
    </div>
    <div class="flex w-full pb-2.5">
        <div class="w-5/12 font-semibold leading-10 text-right">Billing type</div>
        <div class="w-8/12 pl-3 leading-8">
            <DashEMRinput name="billingType" :value="content.billingType" disabled />
        </div>
    </div>
</template>
