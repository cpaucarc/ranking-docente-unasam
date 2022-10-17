<template>
    <Card>
        <div class="flex items-start justify-between">
            <CalendarDaysIcon class="icon-12"/>
            <p class="inline-flex font-medium px-2 py-1 rounded text-green-700 bg-green-600/10 text-sm">
                {{ semestre.semanas }} semanas
            </p>
        </div>
        <div class="mt-4 space-y-2">
            <h5 class="text-xl text-gray-4">Semestre activo: {{ semestre.nombre }}</h5>
            <p class="text-sm">
                <span class="underline">{{ semestre.fecha_inicio_dMY }}</span> hasta el
                <span class="underline">{{ semestre.fecha_fin_dMY }}</span>
            </p>
            <div class="flex items-center bg-amber-600 rounded p-3">
                <ExclamationTriangleIcon class="icon-6 stroke-2"/>
                <div class="ml-2">
                    <h3 class="text-sm font-semibold">
                        Importante
                    </h3>
                    <div class="text-sm">
                        Los datos que se muestran y actualicen serán para este
                        semestre académico.
                    </div>
                </div>
            </div>
        </div>
    </Card>
</template>

<script setup>
import {CalendarDaysIcon, ExclamationTriangleIcon} from "@heroicons/vue/24/outline";
import Card from "@/Components/Card.vue";

defineProps({
    semestre: Object,
});
</script>
