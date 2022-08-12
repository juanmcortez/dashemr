<script setup>
import TopBar from '@/Components/dashemr/LayoutParts/TopBar.vue';
import SideBar from '@/Components/dashemr/LayoutParts/SideBar.vue';
</script>
<template>
    <div class="flex flex-col">

        <TopBar />

        <main class="flex-grow w-full h-screen">

            <SideBar />

            <section class="flex flex-col flex-grow h-screen pt-6 pl-14">

                <h2 class="flex justify-between h-20 px-10 text-2xl font-semibold leading-none border-b py-7 bg-zinc-100 border-zinc-200"
                    v-if="$slots.PageHeader">
                    <slot name="PageHeader" />

                    <input type="text"
                        class="px-4 pt-4 pb-3 -mt-0.5 text-xs leading-none border-0 bg-zinc-300 rounded-3xl w-40 placeholder:text-zinc-100 ring-0 focus:bg-zinc-400 focus:ring-0 text-zinc-100 placeholder:text-xs"
                        placeholder="Search" />
                </h2>

                <article class="flex flex-1 p-10">
                    <div class="flex flex-col w-full">
                        <slot name="PageContent" />
                    </div>
                </article>
            </section>

        </main>

    </div>
</template>
