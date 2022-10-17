<template>
    <AppLayout title="Semestre Académico">
        <div class="space-y-8">
            <SectionTitle>
                <template #title>
                    Lista de semestres académicos
                </template>
                <template #aside>
                    <Boton as="link" :href="route('admin.semestre.create')">Registrar nuevo</Boton>
                </template>
            </SectionTitle>
            <div class="grid grid-cols-3 gap-x-8 items-start">
                <div class="col-span-1">
                    <SemestreActivo :semestre="semestre_activo"/>
                </div>
                <div class="col-span-2">
                    <TableBasic v-if="semestres.data.length>0">
                        <template #head>
                            <TableHead>N°</TableHead>
                            <TableHead>Nombre</TableHead>
                            <TableHead>Fecha Inicio</TableHead>
                            <TableHead>Fecha Fin</TableHead>
                            <TableHead>Semanas</TableHead>
                            <TableHead>Estado</TableHead>
                        </template>
                        <TableRow v-for="(semestre,index) in semestres.data" :key="semestre.id">
                            <TableColumn>
                                {{ (semestres.current_page - 1) * semestres.per_page + (index + 1) }}
                            </TableColumn>
                            <TableColumn>{{ semestre.nombre }}</TableColumn>
                            <TableColumn>{{ semestre.fecha_inicio_dMY }}</TableColumn>
                            <TableColumn>{{ semestre.fecha_fin_dMY }}</TableColumn>
                            <TableColumn>{{ semestre.semanas }}</TableColumn>
                            <TableColumn>
                                <div class="flex items-center space-x-1">
                                    <p class="inline-flex text-xs font-medium px-2 py-1 rounded"
                                       :class="semestre.esta_activo ? 'text-green-700 bg-green-600/10' : 'text-red-700 bg-red-600/10'">
                                        {{ semestre.esta_activo ? 'Activo' : 'Inactivo' }}
                                    </p>
                                    <Boton v-if="!semestre.esta_activo && semestre.activable"
                                           @click="activarSemestre(semestre.id)" variant="text"
                                           title="Activar semestre">
                                        <PlayCircleIcon class="icon-5"/>
                                    </Boton>
                                </div>
                            </TableColumn>
                        </TableRow>
                    </TableBasic>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {Inertia} from "@inertiajs/inertia";

import {PlayCircleIcon} from "@heroicons/vue/24/outline";

import SectionTitle from "@/Components/SectionTitle.vue";
import Boton from '@/Components/Boton.vue';

import SemestreActivo from "@/Components/App/Semestre/SemestreActivo.vue";
import TableBasic from "@/Components/Tables/TableBasic.vue"
import TableColumn from "@/Components/Tables/TableColumn.vue"
import TableHead from "@/Components/Tables/TableHead.vue"
import TableRow from "@/Components/Tables/TableRow.vue"

defineProps({
    semestres: Array,
    semestre_activo: Object,
});

const activarSemestre = (semestre) => {
    Inertia.get(route('admin.semestre.edit', semestre), {preserveScroll: true});
};
</script>
