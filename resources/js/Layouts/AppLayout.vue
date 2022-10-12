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

        <div class="min-h-screen bg-gray-100">
            <!-- Navigation Menu -->
            <NavbarMenu/>

            <!-- Page Heading -->
            <header v-if="$slots.header" class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header"/>
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <slot/>
                </div>
            </main>
        </div>
    </div>
</template>
