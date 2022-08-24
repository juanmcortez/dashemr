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
        <div class="w-4/12 font-semibold leading-10 text-right">Mammography certificate #</div>
        <div class="w-8/12 pl-3">
            <DashEMRinput name="mammographyCertificateNumber" :value="content.mammographyCertificateNumber" disabled />
        </div>
    </div>
    <div class="flex w-full pb-2.5">
        <div class="w-4/12 font-semibold leading-10 text-right">Claim reason</div>
        <div class="w-8/12 pl-3">
            <DashEMRSelect name="claimReason" :selected="content.claimReason" :options="content.claimReason" disabled />
        </div>
    </div>
    <div class="flex w-full pb-2.5">
        <div class="w-4/12 font-semibold leading-10 text-right">Original reference #</div>
        <div class="w-8/12 pl-3">
            <DashEMRinput name="originalReferenceNumber" :value="content.originalReferenceNumber" disabled />
        </div>
    </div>
    <div class="flex w-full pb-2.5">
        <div class="w-4/12 font-semibold leading-10 text-right">Delay reason</div>
        <div class="w-8/12 pl-3">
            <DashEMRSelect name="delayReason" :selected="content.delayReason" :options="content.delayReason" disabled />
        </div>
    </div>
    <div class="flex w-full pb-2.5">
        <div class="w-4/12 font-semibold leading-10 text-right">Claim note</div>
        <div class="w-8/12 pl-3">
            <DashEMRSelect name="claimNote" :selected="content.claimNote" :options="content.claimNote" disabled />
        </div>
    </div>
    <div class="flex w-full pb-2.5">
        <div class="w-4/12 font-semibold leading-10 text-right">Code claim note</div>
        <div class="w-8/12 pl-3">
            <DashEMRinput name="codeClaimNote" :value="content.codeClaimNote" disabled />
        </div>
    </div>
    <div class="flex w-full pb-2.5">
        <div class="w-4/12 font-semibold leading-10 text-right">Line note</div>
        <div class="w-8/12 pl-3">
            <DashEMRSelect name="lineNote" :selected="content.lineNote" :options="content.lineNote" disabled />
        </div>
    </div>
    <div class="flex w-full pb-2.5">
        <div class="w-4/12 font-semibold leading-10 text-right">Code Line note</div>
        <div class="w-8/12 pl-3">
            <DashEMRinput name="codeLineNote" :value="content.codeLineNote" disabled />
        </div>
    </div>
    <div class="flex w-full pb-2.5">
        <div class="w-4/12 font-semibold leading-10 text-right">Report type</div>
        <div class="w-8/12 pl-3">
            <DashEMRSelect name="reportType" :selected="content.reportType" :options="content.reportType" disabled />
        </div>
    </div>
    <div class="flex w-full pb-2.5">
        <div class="w-4/12 font-semibold leading-10 text-right">Report transmission</div>
        <div class="w-8/12 pl-3">
            <DashEMRSelect name="reportTransmission" :selected="content.reportTransmission"
                :options="content.reportTransmission" disabled />
        </div>
    </div>
    <div class="flex w-full pb-2.5">
        <div class="w-4/12 font-semibold leading-10 text-right">Attachment control #</div>
        <div class="w-8/12 pl-3">
            <DashEMRinput name="attachmentControlNumber" :value="content.attachmentControlNumber" disabled />
        </div>
    </div>
    <div class="flex w-full pb-2.5">
        <div class="w-4/12 font-semibold leading-10 text-right">Medicaid services EP</div>
        <div class="w-8/12 pl-3">
            <DashEMRcheck name="medicaidServicesEP" :checked="content.medicaidServicesEP" disabled />
        </div>
    </div>
    <div class="flex w-full pb-2.5">
        <div class="w-4/12 font-semibold leading-10 text-right">Referral given</div>
        <div class="w-8/12 pl-3">
            <DashEMRcheck name="referralGiven" :checked="content.referralGiven" disabled />
        </div>
    </div>
    <div class="flex w-full pb-2.5">
        <div class="w-4/12 font-semibold leading-10 text-right">Condition 1</div>
        <div class="w-8/12 pl-3">
            <DashEMRSelect name="condition1" :selected="content.condition1" :options="content.condition1" disabled />
        </div>
    </div>
    <div class="flex w-full pb-2.5">
        <div class="w-4/12 font-semibold leading-10 text-right">Condition 2</div>
        <div class="w-8/12 pl-3">
            <DashEMRSelect name="condition2" :selected="content.condition2" :options="content.condition2" disabled />
        </div>
    </div>
    <div class="flex w-full">
        <div class="w-4/12 font-semibold leading-10 text-right">Condition 3</div>
        <div class="w-8/12 pl-3">
            <DashEMRSelect name="condition3" :selected="content.condition3" :options="content.condition3" disabled />
        </div>
    </div>
</template>
