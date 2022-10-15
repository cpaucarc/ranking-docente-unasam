<template>
    <Card>
        <div class="flex items-start justify-between">
            <CalendarDaysIcon class="h-10 w-10"/>
            <Boton variant="outlined" color="success" class="text-xs"> {{ semestre.semanas }} semanas</Boton>
        </div>
        <div class="mt-4 space-y-2">
            <h5 class="text-xl text-gray-4">Semestre activo: {{ semestre.nombre }}</h5>
            <p class="text-sm">
                <span class="underline">{{ semestre.fecha_inicio_dMY }}</span> hasta el
                <span class="underline">{{ semestre.fecha_fin_dMY }}</span>
            </p>
            <div class="flex items-center">
                <div class="text-amber-600">
                    <ExclamationTriangleIcon class="h-7 w-7"/>
                </div>
                <div class="space-y-1 ml-4">
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
import Boton from "@/Components/Boton.vue";

defineProps({
    semestre: Object,
});
</script>
