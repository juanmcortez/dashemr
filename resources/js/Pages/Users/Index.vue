<script setup>
import Layout from '@/Layouts/DashEMRLogin.vue';
import SiteHeader from '@/Components/dashemr/LayoutParts/SiteHeader.vue';

const props = defineProps({
    user: {
        type: Object,
        default: () => ({})
    },
});
</script>
<template>
    <SiteHeader :title="user.full_name + '\'s user profile'" :description="user.full_name + '\'s user profile'" />

    <Layout>
        <template #PageHeader>{{ user.full_name + '\'s user profile' }}</template>

        <template #PageContent>
            <div class="flex justify-between w-full">
                <div class="">{{ user.firstName }}</div>
                <div class="">{{ user.middleName }}</div>
                <div class="">{{ user.lastName }}</div>
                <div class="">{{ user.username }}</div>
                <div class="">{{ user.email }}</div>
            </div>
        </template>
    </Layout>
</template>
