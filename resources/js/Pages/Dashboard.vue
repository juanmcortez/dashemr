<script setup>
import SiteHeader from '@/Components/dashemr/LayoutParts/SiteHeader.vue';
import Layout from '@/Layouts/newDesign.vue';

const props = defineProps({
    fullTitle: {
        type: String,
        default: "Dashboard"
    }
});
</script>

<template>

    <SiteHeader :title="fullTitle" description="Main statistics about your practice." />

    <Layout>
        <template #PageHeader>{{ fullTitle }}</template>

        <template #PageContent>
            You're logged in!
        </template>
    </Layout>

</template>
