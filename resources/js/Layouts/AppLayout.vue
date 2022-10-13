<script setup>
import {Head} from '@inertiajs/inertia-vue3';
import Banner from '@/Components/Banner.vue';
import NavbarMenu from "@/Components/NavbarMenu.vue";

defineProps({
    title: String,
});
</script>

<template>
    <div>
        <Head :title="title"/>

        <Banner/>

        <div class="min-h-screen">
            <!-- Navigation Menu -->
            <NavbarMenu/>

            <!-- Page Heading -->
            <header v-if="$slots.header" class="shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-gray-400">
                    <slot name="header"/>
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <div class="py-16 max-w-8xl mx-auto sm:px-6 lg:px-8 text-gray-100">
                    <slot/>
                </div>
            </main>
        </div>
    </div>
</template>
