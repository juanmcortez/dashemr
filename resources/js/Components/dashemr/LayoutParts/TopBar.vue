<script setup>
import TopMenuLink from '@/Components/dashemr/TopMenuLink.vue';
</script>
<template>
    <header>
        <TopMenuLink tooltip="No notfications available">
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                </path>
            </svg>
        </TopMenuLink>
        <div class="versionDate">Aug 10, 2022</div>
        <div class="systemVersion">v1.0.0</div>
    </header>
</template>
