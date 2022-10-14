<template>
    <AppLayout title="Semestre Académico">
        <div class="space-y-8">
            <Boton as="link" :href="route('admin.semestres.create')">
                Nuevo Semestre
            </Boton>

            <div class="grid grid-cols-3 gap-x-8 items-start">
                <div class="col-span-1">
                    <pre>
                    {{ semestre_activo }}
                    </pre>
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
                            <TableHead><span class="sr-only">Acciones</span></TableHead>
                        </template>

                        <TableRow v-for="(semestre,index) in semestres.data" :key="semestre.id">
                            <TableColumn>{{ (index + 1) }}</TableColumn>
                            <TableColumn>{{ semestre.nombre }}</TableColumn>
                            <TableColumn>{{ semestre.fecha_inicio_dMY }}</TableColumn>
                            <TableColumn>{{ semestre.fecha_fin_dMY }}</TableColumn>
                            <TableColumn>{{ semestre.semanas }}</TableColumn>
                            <TableColumn>{{ semestre.esta_activo }}</TableColumn>
                            <TableColumn> Acción</TableColumn>
                        </TableRow>
                    </TableBasic>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';

import Boton from '@/Components/Boton.vue';

import TableBasic from "@/Components/Tables/TableBasic.vue"
import TableColumn from "@/Components/Tables/TableColumn.vue"
import TableHead from "@/Components/Tables/TableHead.vue"
import TableRow from "@/Components/Tables/TableRow.vue"

const props = defineProps({
    semestres: Array,
    semestre_activo: Object,
});

</script>

<style scoped>

</style>
