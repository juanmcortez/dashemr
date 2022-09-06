<script setup>
import TopBar from '@/Components/dashemr/LayoutParts/TopBar.vue';
import SideBar from '@/Components/dashemr/LayoutParts/SideBar.vue';
import Footer from '@/Components/dashemr/LayoutParts/Footer.vue';
</script>
<template>
    <TopBar />
    <section class="wrapper">
        <SideBar />
        <section class="content">
            <header v-if="$slots.PageHeader">
                <slot name="PageHeader" />
                <input type="text" class="searchBox" placeholder="Search" />
            </header>
            <main>
                <section>
                    <article>
                        <slot name="PageContent" />
                    </article>
                    <Footer />
                    <aside v-if="$slots.innerSideBar">
                        <slot name="innerSideBar" />
                    </aside>
                </section>
            </main>
        </section>
    </section>
</template>
