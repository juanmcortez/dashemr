<script setup>
import SiteHeader from '@/Components/dashemr/LayoutParts/SiteHeader.vue';
import Layout from '@/Layouts/newDesign.vue';
import DashEMRInput from '@/Components/dashemr/inputField.vue';
import DashEMRCheck from '@/Components/dashemr/checkField.vue';
import DashEMRSelect from '@/Components/dashemr/SelectField.vue';
import DashEMRDivider from '@/Components/dashemr/PageTitleDivider.vue';

const props = defineProps({
    practice: {
        type: Object,
        default: () => ({})
    },
    typeOptions: {
        type: Array,
        default: [],
    },
    schedulerOptions: {
        type: Array,
        default: [],
    },
    eligibilityOptions: {
        type: Array,
        default: [],
    },
});
</script>
<template>
    <SiteHeader title="Practice Settings" description="Practice Settings" />

    <Layout>
        <template #PageHeader>Practice Settings</template>

        <template #PageContent>
            <div class="flex flex-row w-full mb-10">
                <div class="w-2/12 pr-2 leading-10 text-right">Practice Name</div>
                <div class="w-10/12">
                    <DashEMRInput name="practiceName" />
                </div>
                <div class="w-2/12 pr-2 leading-10 text-right">&nbsp;</div>
                <div class="w-10/12">&nbsp;</div>
            </div>

            <div class="flex flex-row w-full">
                <div class="w-1/12 pr-2 text-right">
                    <DashEMRCheck name="isLabPractice" :checked="practice.isLabPractice" />
                </div>
                <div class="w-2/12 leading-10">Is this a Lab Practice?</div>
                <div class="w-3/12 pr-2 leading-10 text-right">Select the type of practice</div>
                <div class="w-6/12">
                    <DashEMRSelect name="labPracticeType" :selected="practice.labPracticeType" :options="typeOptions"
                        class="w-full" />
                </div>
                <div class="w-2/12 pr-2 leading-10 text-right">Scheduler</div>
                <div class="w-4/12">
                    <DashEMRSelect name="schedulerOptions" :selected="false" :options="schedulerOptions"
                        class="w-full" />
                </div>
                <div class="w-2/12 pr-2 leading-10 text-right">Real Time Eligibility</div>
                <div class="w-4/12">
                    <DashEMRSelect name="eligibilityOptions" :selected="false" :options="eligibilityOptions"
                        class="w-full" />
                </div>
            </div>

            <DashEMRDivider class="mt-10">Ledger Settings</DashEMRDivider>

            <div class="flex flex-row w-full">
                <div class="w-2/12 pr-2 leading-10 text-right"></div>
                <div class="w-4/12"></div>
                <div class="w-2/12 pr-2 leading-10 text-right"></div>
                <div class="w-4/12"></div>
                <div class="w-2/12 pr-2 leading-10 text-right"></div>
                <div class="w-4/12"></div>
                <div class="w-2/12 pr-2 leading-10 text-right"></div>
                <div class="w-4/12"></div>
            </div>

            <DashEMRDivider class="mt-10">Encounters Settings</DashEMRDivider>

            <div class="flex flex-row w-full">
                <div class="w-2/12 pr-2 leading-10 text-right"></div>
                <div class="w-4/12"></div>
                <div class="w-2/12 pr-2 leading-10 text-right"></div>
                <div class="w-4/12"></div>
                <div class="w-2/12 pr-2 leading-10 text-right"></div>
                <div class="w-4/12"></div>
                <div class="w-2/12 pr-2 leading-10 text-right"></div>
                <div class="w-4/12"></div>
            </div>

            <DashEMRDivider class="mt-10">Statements Settings</DashEMRDivider>

            <div class="flex flex-row w-full">
                <div class="w-2/12 pr-2 leading-10 text-right"></div>
                <div class="w-4/12"></div>
                <div class="w-2/12 pr-2 leading-10 text-right"></div>
                <div class="w-4/12"></div>
                <div class="w-2/12 pr-2 leading-10 text-right"></div>
                <div class="w-4/12"></div>
                <div class="w-2/12 pr-2 leading-10 text-right"></div>
                <div class="w-4/12"></div>
            </div>

            <DashEMRDivider class="mt-10">Documents Settings</DashEMRDivider>

            <div class="flex flex-row w-full">
                <div class="w-2/12 pr-2 leading-10 text-right"></div>
                <div class="w-4/12"></div>
                <div class="w-2/12 pr-2 leading-10 text-right"></div>
                <div class="w-4/12"></div>
                <div class="w-2/12 pr-2 leading-10 text-right"></div>
                <div class="w-4/12"></div>
                <div class="w-2/12 pr-2 leading-10 text-right"></div>
                <div class="w-4/12"></div>
            </div>
        </template>
    </Layout>
</template>
