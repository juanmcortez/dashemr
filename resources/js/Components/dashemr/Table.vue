<script setup>
import { Link } from '@inertiajs/inertia-vue3';

const props = defineProps({
    columns: {
        type: Array,
        default: ['Column 1', 'Column 2', 'Column 3', 'Column 4', 'Column 5', 'Column 6', 'Column 7'],
    },
    colData: {
        type: Array,
        default: ['column_1', 'column_2', 'column_3', 'column_4', 'column_5', 'column_6', 'column_7'],
    },
    rowsData: {
        type: Object,
        default: () => ({}),
    },
    rowsURL: {
        type: Array,
        default: ['column_1', 'url.name'],
    }
});

function getDataFromIndex(index = '', data = '') {
    if (index.includes('.')) {
        let newIdx = index.split('.');
        return data[newIdx[0]][newIdx[1]];
    }
    return (data) ? data[index] : '--';
}

function isEmpty(checkArr) {
    return (checkArr[1] != 'url.name') ? false : true;
}
</script>
<template>
    <table
        class="w-full text-sm bg-white border border-collapse shadow-sm border-slate-400 dark:border-slate-500 dark:bg-slate-800">
        <thead class="bg-slate-50 dark:bg-slate-700">
            <tr>
                <th class="p-2 font-semibold text-center border border-slate-300 dark:border-slate-600 text-slate-900 dark:text-slate-200"
                    v-for="(column, idx) in columns" :key="idx">
                    {{ column }}
                </th>
            </tr>
        </thead>
        <tbody v-if="isEmpty(rowsURL) === false">
            <Link v-for="(row, jdx) in rowsData" :key="jdx" :href="route(rowsURL[1], row[rowsURL[0]])"
                :class="['table-row cursor-pointer', (jdx % 2) ? 'bg-zinc-50 hover:bg-zinc-200' : 'bg-zinc-100 hover:bg-zinc-200']">
            <td v-for="(column, kdx) in colData" :key="kdx"
                :class="['p-2 border border-slate-300 dark:border-slate-700 text-slate-500 dark:text-slate-400', (kdx == 0 ? 'text-left' : 'text-center')]">
                {{ getDataFromIndex(column, row) }}
            </td>
            </Link>
        </tbody>
        <tbody v-else>
            <tr v-for="(row, jdx) in rowsData" :key="jdx" class="table-row">
                <td v-for="(column, kdx) in colData" :key="kdx"
                    :class="['p-2 border border-slate-300 dark:border-slate-700 text-slate-500 dark:text-slate-400', (kdx == 0 ? 'text-left' : 'text-center')]">
                    {{ getDataFromIndex(column, row) }}
                </td>
            </tr>
        </tbody>
    </table>
</template>
