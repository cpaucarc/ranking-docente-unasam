<template>
    <AppLayout title="Investigación">
        <template #header>
            <h2 class="font-semibold text-xl leading-tight">
                Investigación
            </h2>
        </template>

        <SectionTitle>
            <template #title>
                Investigaciones
            </template>
            <template #description>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam aut beatae cum dicta dolorem
                doloremque eaque esse est facere maxime modi molestiae quis, recusandae repellendus reprehenderit rerum
                sit ullam vero.
            </template>
        </SectionTitle>

    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import SectionTitle from '@/Components/SectionTitle.vue';
</script>
