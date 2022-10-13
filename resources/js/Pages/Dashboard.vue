<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import SectionTitle from '@/Components/SectionTitle.vue';
import Boton from '@/Components/Boton.vue';

import {HomeIcon} from "@heroicons/vue/24/outline";
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl leading-tight">
                Dashboard
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

        <div class="flex flex-wrap gap-5">
            <PrimaryButton>
                Primary
            </PrimaryButton>

            <SecondaryButton>
                Secondary
            </SecondaryButton>

            <Boton>
                Boton Primary
            </Boton>

            <Boton color="success">
                <HomeIcon class="h-5 w-5"/>
                Boton Success
            </Boton>

            <Boton color="warning">
                <HomeIcon class="h-5 w-5"/>
                Boton Warning
            </Boton>

            <Boton color="danger">
                <HomeIcon class="h-5 w-5"/>
                Boton Danger
            </Boton>

            ||

            <Boton variant="outlined" color="success">
                Boton Outline Success
            </Boton>
            <Boton variant="outlined" color="danger">
                Boton Outline Danger
            </Boton>
            <Boton variant="outlined">
                <HomeIcon class="h-5 w-5"/>
                Boton Outline Primary
            </Boton>
            <Boton variant="outlined" color="warning">
                <HomeIcon class="h-5 w-5"/>
                Boton Outline Warning
            </Boton>
            <Boton variant="outlined" color="warning">
                <HomeIcon class="h-5 w-5"/>
            </Boton>

            ||

            <Boton color="secondary">
                <HomeIcon class="h-5 w-5"/>
                Boton secundario
            </Boton>

            ||

            <Boton variant="text" color="danger">
                <HomeIcon class="h-5 w-5"/>
                Boton Text
            </Boton>
            <Boton variant="text" color="success">
                <HomeIcon class="h-5 w-5"/>
                Boton Text Success
            </Boton>
            <Boton variant="text" color="primary">
                <HomeIcon class="h-5 w-5"/>
            </Boton>
            ||
            <Boton color="success" variant="outlined" as="a" href="#">
                Enlace Externo
            </Boton>
        </div>
    </AppLayout>
</template>
