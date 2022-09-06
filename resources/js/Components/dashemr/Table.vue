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
    <table>
        <thead>
            <tr>
                <th v-for="(column, idx) in columns" :key="idx">
                    {{ column }}
                </th>
            </tr>
        </thead>
        <tbody v-if="isEmpty(rowsURL) === false">
            <Link v-for="(row, jdx) in rowsData" :key="jdx" :href="route(rowsURL[1], row[rowsURL[0]])">
            <td v-for="(column, kdx) in colData" :key="kdx" :class="[(kdx == 0 ? 'text-left' : 'text-center')]">
                {{ getDataFromIndex(column, row) }}
            </td>
            </Link>
        </tbody>
        <tbody v-else>
            <tr v-for="(row, jdx) in rowsData" :key="jdx">
                <td v-for="(column, kdx) in colData" :key="kdx" :class="[(kdx == 0 ? 'text-left' : 'text-center')]">
                    {{ getDataFromIndex(column, row) }}
                </td>
            </tr>
        </tbody>
    </table>
</template>
