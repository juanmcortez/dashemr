<script setup>
import DashEMRinput from '@/Components/dashemr/InputField.vue';
import DashEMRcheck from '@/Components/dashemr/CheckField.vue';
import DashEMRSelect from '@/Components/dashemr/SelectField.vue';
const props = defineProps({
    content: {
        type: Object,
        default: () => ({}),
    },
    options: {
        type: Object,
        default: () => ({}),
    },
});
</script>
<template>
    <div class="holder">
        <div class="label">Date condition originated</div>
        <div class="content">
            <DashEMRinput name="conditionOriginatedDate" :value="content.conditionOriginatedDate" disabled />
        </div>
    </div>
    <div class="holder">
        <div class="label">Date first consulted</div>
        <div class="content">
            <DashEMRinput name="firstConsultedDate" :value="content.firstConsultedDate" disabled />
        </div>
    </div>
    <div class="holder">
        <div class="label">Date last seen</div>
        <div class="content">
            <DashEMRinput name="lastSeenDate" :value="content.lastSeenDate" disabled />
        </div>
    </div>
    <div class="holder">
        <div class="label">Acute manifestation</div>
        <div class="content">
            <DashEMRinput name="acuteManifestationDate" :value="content.acuteManifestationDate" disabled />
        </div>
    </div>
    <div class="holder">
        <div class="label">Last Xray</div>
        <div class="content">
            <DashEMRinput name="lastXRayDate" :value="content.lastXRayDate" disabled />
        </div>
    </div>
    <div class="holder">
        <div class="label">Illness Accident Pregnancy</div>
        <div class="content">
            <DashEMRSelect name="illnessAccidentPregnancy" :selected="content.illnessAccidentPregnancy"
                :options="options.illnessAccidentPregnancy" disabled />
        </div>
    </div>
    <div class="holder">
        <div class="label">Auto accident state</div>
        <div class="content">
            <DashEMRinput name="autoAccidentState" :value="content.autoAccidentState" disabled />
        </div>
    </div>
    <div class="holder">
        <div class="label">Accident date</div>
        <div class="content">
            <DashEMRinput name="accidentDate" :value="content.accidentDate" disabled />
        </div>
    </div>
    <div class="holder">
        <div class="label">Employment related</div>
        <div class="content">
            <DashEMRcheck name="employmentRelated" :checked="content.employmentRelated" disabled />
        </div>
    </div>
</template>
