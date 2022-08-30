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
    <aside :class="[
        'fixed top-0 w-1/3 h-screen pl-10 transition-all duration-300',
        (openProblem || openMisc || openLab) ? 'right-0' : '-right-[600px]'
    ]">
        <div class="w-full h-full border-l mt-36 bg-zinc-200 border-zinc-500 border-y border-md">
            <ul :class="[
                'absolute top-0 flex flex-row -rotate-90',
                (showLab) ? '-left-[116px]  mt-[273px]' : '-left-[81px]  mt-[238px]'
            ]">
                <li v-if="showLab" @click="openLab = !openLab, openMisc = openProblem = false" :class="[
                    'px-4 py-1 mr-2 border-zinc-500 border-x cursor-pointer',
                    (openLab) ? 'bg-zinc-200 border-t' : 'text-zinc-50 bg-zinc-500 border-y'
                ]">
                    Labs
                </li>
                <li @click="openMisc = !openMisc, openLab = openProblem = false" :class="[
                    'px-4 py-1 mr-2 border-zinc-500 border-x cursor-pointer',
                    (openMisc) ? 'bg-zinc-200 border-t' : 'text-zinc-50 bg-zinc-500 border-y'
                ]">
                    Miscellaneous
                </li>
                <li @click="openProblem = !openProblem, openMisc = openLab = false" :class="[
                    'px-4 py-1 border-zinc-500 border-x cursor-pointer',
                    (openProblem) ? 'bg-zinc-200 border-t' : 'text-zinc-50 bg-zinc-500 border-y'
                ]">
                    Problems
                </li>
            </ul>


            <!-- Problem content -->
            <div :class="['px-8 py-6 flex flex-col text-sm', (openProblem) ? '' : 'hidden']">
                <ProblemContent :content="prob" :options="options.problemTab" />
            </div>
            <!-- Problem content -->


            <!-- Miscellaneous content -->
            <div :class="['px-8 py-6 flex flex-col text-sm', (openMisc) ? '' : 'hidden']">
                <MiscellaneousContent :content="misc" :options="options.miscTab" />
            </div>
            <!-- Miscellaneous content -->


            <!-- Lab content -->
            <div v-if="showLab" :class="['px-8 py-6 flex flex-col text-sm', (openLab) ? '' : 'hidden']">
                <LabContent :content="lab" :options="options.labTab" />
            </div>
            <!-- Lab content -->
        </div>
    </aside>
</template>
