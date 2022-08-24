<script setup>
import DashEMRinput from '@/Components/dashemr/inputField.vue';
import DashEMRcheck from '@/Components/dashemr/checkField.vue';
import DashEMRSelect from '@/Components/dashemr/SelectField.vue';
const props = defineProps({
    content: {
        type: Object,
        default: () => ({})
    },
});
</script>
<template>
    <div class="flex w-full pb-2.5">
        <div class="w-4/12 font-semibold leading-10 text-right">Date condition originated</div>
        <div class="w-8/12 pl-3">
            <DashEMRinput name="conditionOriginatedDate" :value="content.conditionOriginatedDate" disabled />
        </div>
    </div>
    <div class="flex w-full pb-2.5">
        <div class="w-4/12 font-semibold leading-10 text-right">Date first consulted</div>
        <div class="w-8/12 pl-3">
            <DashEMRinput name="firstConsultedDate" :value="content.firstConsultedDate" disabled />
        </div>
    </div>
    <div class="flex w-full pb-2.5">
        <div class="w-4/12 font-semibold leading-10 text-right">Date last seen</div>
        <div class="w-8/12 pl-3">
            <DashEMRinput name="lastSeenDate" :value="content.lastSeenDate" disabled />
        </div>
    </div>
    <div class="flex w-full pb-2.5">
        <div class="w-4/12 font-semibold leading-10 text-right">Acute manifestation</div>
        <div class="w-8/12 pl-3">
            <DashEMRinput name="acuteManifestationDate" :value="content.acuteManifestationDate" disabled />
        </div>
    </div>
    <div class="flex w-full pb-2.5">
        <div class="w-4/12 font-semibold leading-10 text-right">Last Xray</div>
        <div class="w-8/12 pl-3">
            <DashEMRinput name="lastXRayDate" :value="content.lastXRayDate" disabled />
        </div>
    </div>
    <div class="flex w-full pb-2.5">
        <div class="w-4/12 font-semibold leading-10 text-right">Illness Accident Pregnancy</div>
        <div class="w-8/12 pl-3">
            <DashEMRSelect name="illnessAccidentPregnancy" :selected="content.illnessAccidentPregnancy"
                :options="content.illnessAccidentPregnancy" disabled />
        </div>
    </div>
    <div class="flex w-full pb-2.5">
        <div class="w-4/12 font-semibold leading-10 text-right">Auto accident state</div>
        <div class="w-8/12 pl-3">
            <DashEMRinput name="autoAccidentState" :value="content.autoAccidentState" disabled />
        </div>
    </div>
    <div class="flex w-full pb-2.5">
        <div class="w-4/12 font-semibold leading-10 text-right">Accident date</div>
        <div class="w-8/12 pl-3">
            <DashEMRinput name="accidentDate" :value="content.accidentDate" disabled />
        </div>
    </div>
    <div class="flex w-full">
        <div class="w-4/12 font-semibold leading-10 text-right">Employment related</div>
        <div class="w-8/12 pl-3">
            <DashEMRcheck name="employmentRelated" :checked="content.employmentRelated" disabled />
        </div>
    </div>
</template>
