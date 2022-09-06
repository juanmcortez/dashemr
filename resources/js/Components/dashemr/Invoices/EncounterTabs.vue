<script setup>
import { ref } from 'vue';
import ProblemContent from '@/Components/dashemr/Invoices/Tabs/Problem.vue';
import MiscellaneousContent from '@/Components/dashemr/Invoices/Tabs/Miscellaneous.vue';
import LabContent from '@/Components/dashemr/Invoices/Tabs/Lab.vue';
const props = defineProps({
    prob: {
        type: Object,
        default: () => ({})
    },
    misc: {
        type: Object,
        default: () => ({})
    },
    lab: {
        type: Object,
        default: () => ({})
    },
    options: {
        type: Object,
        default: () => ({})
    },
    showLab: {
        type: Boolean,
        default: false,
    }
});
const openProblem = ref(false);
const openMisc = ref(false);
const openLab = ref(false);
</script>
<template>
    <ul :class="[
        'tabSelector',
        (showLab) ? (openProblem || openMisc || openLab) ? '-left-[159px]  mt-[255px]' : '-left-[160px]  mt-[255px]'
                  : (openProblem || openMisc || openLab) ? '' : ''
    ]">
        <li v-if="showLab" @click="openLab = !openLab, openMisc = openProblem = false" :class="[
            (openLab) ? 'bg-zinc-200 border-t' : 'text-zinc-50 bg-zinc-500 border-y'
        ]">
            Labs
        </li>
        <li @click="openMisc = !openMisc, openLab = openProblem = false" :class="[
            (openMisc) ? 'bg-zinc-200 border-t' : 'text-zinc-50 bg-zinc-500 border-y'
        ]">
            Miscellaneous
        </li>
        <li @click="openProblem = !openProblem, openMisc = openLab = false" :class="[
            (openProblem) ? 'bg-zinc-200 border-t' : 'text-zinc-50 bg-zinc-500 border-y'
        ]">
            Problems
        </li>
    </ul>

    <!-- Problem content -->
    <div :class="['tabContent', (openProblem) ? '' : 'hidden']">
        <ProblemContent :content="prob" :options="options.problemTab" />
    </div>
    <!-- Problem content -->


    <!-- Miscellaneous content -->
    <div :class="['tabContent', (openMisc) ? '' : 'hidden']">
        <MiscellaneousContent :content="misc" :options="options.miscTab" />
    </div>
    <!-- Miscellaneous content -->


    <!-- Lab content -->
    <div v-if="showLab" :class="['tabContent', (openLab) ? '' : 'hidden']">
        <LabContent :content="lab" :options="options.labTab" />
    </div>
    <!-- Lab content -->

</template>
