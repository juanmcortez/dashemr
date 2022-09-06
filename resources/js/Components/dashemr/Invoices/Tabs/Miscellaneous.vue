<script setup>
import DashEMRinput from '@/Components/dashemr/InputField.vue';
import DashEMRcheck from '@/Components/dashemr/CheckField.vue';
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
        <div class="label">Mammography certificate #</div>
        <div class="content">
            <DashEMRinput name="mammographyCertificateNumber" :value="content.mammographyCertificateNumber" disabled />
        </div>
    </div>
    <div class="holder">
        <div class="label">Claim reason</div>
        <div class="content">
            <DashEMRSelect name="claimReason" :selected="content.claimReason" :options="options.claimReason" disabled />
        </div>
    </div>
    <div class="holder">
        <div class="label">Original reference #</div>
        <div class="content">
            <DashEMRinput name="originalReferenceNumber" :value="content.originalReferenceNumber" disabled />
        </div>
    </div>
    <div class="holder">
        <div class="label">Delay reason</div>
        <div class="content">
            <DashEMRSelect name="delayReason" :selected="content.delayReason" :options="options.delayReason" disabled />
        </div>
    </div>
    <div class="holder">
        <div class="label">Claim note</div>
        <div class="content">
            <DashEMRSelect name="claimNote" :selected="content.claimNote" :options="options.claimNote" disabled />
        </div>
    </div>
    <div class="holder">
        <div class="label">Code claim note</div>
        <div class="content">
            <DashEMRinput name="codeClaimNote" :value="content.codeClaimNote" disabled />
        </div>
    </div>
    <div class="holder">
        <div class="label">Line note</div>
        <div class="content">
            <DashEMRSelect name="lineNote" :selected="content.lineNote" :options="options.lineNote" disabled />
        </div>
    </div>
    <div class="holder">
        <div class="label">Code Line note</div>
        <div class="content">
            <DashEMRinput name="codeLineNote" :value="content.codeLineNote" disabled />
        </div>
    </div>
    <div class="holder">
        <div class="label">Report type</div>
        <div class="content">
            <DashEMRSelect name="reportType" :selected="content.reportType" :options="options.reportType" disabled />
        </div>
    </div>
    <div class="holder">
        <div class="label">Report transmission</div>
        <div class="content">
            <DashEMRSelect name="reportTransmission" :selected="content.reportTransmission"
                :options="options.reportTransmission" disabled />
        </div>
    </div>
    <div class="holder">
        <div class="label">Attachment control #</div>
        <div class="content">
            <DashEMRinput name="attachmentControlNumber" :value="content.attachmentControlNumber" disabled />
        </div>
    </div>
    <div class="holder">
        <div class="label">Medicaid services EP</div>
        <div class="content">
            <DashEMRcheck name="medicaidServicesEP" :checked="content.medicaidServicesEP" disabled />
        </div>
    </div>
    <div class="holder">
        <div class="label">Referral given</div>
        <div class="content">
            <DashEMRcheck name="referralGiven" :checked="content.referralGiven" disabled />
        </div>
    </div>
    <div class="holder">
        <div class="label">Condition 1</div>
        <div class="content">
            <DashEMRSelect name="condition1" :selected="content.condition1" :options="options.condition1" disabled />
        </div>
    </div>
    <div class="holder">
        <div class="label">Condition 2</div>
        <div class="content">
            <DashEMRSelect name="condition2" :selected="content.condition2" :options="options.condition2" disabled />
        </div>
    </div>
    <div class="holder">
        <div class="label">Condition 3</div>
        <div class="content">
            <DashEMRSelect name="condition3" :selected="content.condition3" :options="options.condition3" disabled />
        </div>
    </div>
</template>
