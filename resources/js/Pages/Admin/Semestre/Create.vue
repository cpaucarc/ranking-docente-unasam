<template>
    <AppLayout title="Semestre Académico">
        <div class="space-y-8">
            <form @submit.prevent="crearSemestre">
                <div class="space-y-6">
                    <div class="grid grid-cols-3 gap-x-6 items-start">
                        <div>
                            <JetLabel for="nombre" value="Semestre académico"/>
                            <div class="flex space-x-2">
                                <TextInput id="anio" class="w-32 text-center" type="number" v-model="form.anio"
                                           placeholder="2022" min="2000" required autofocus
                                           :class="{'input-error': form.anio === '' || 'anio' in form.errors}"/>
                                <TextInput class="w-10 text-center rounded-none bg-gray-2" type="text" value="-"
                                           disabled="true"/>
                                <TextInput id="semestre" class="w-24 text-center" type="number"
                                           v-model="form.semestre" placeholder="2" max="2"
                                           oninput="this.value = this.value.replace(/[^0-2]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                           :class="{'input-error': form.semestre === '' || 'semestre' in form.errors}"/>
                            </div>
                            <JetInputError class="mt-2" :message="form.errors.anio"/>
                            <JetInputError class="mt-2" :message="form.errors.semestre"/>
                        </div>
                        <div>
                            <JetLabel for="fecha_inicio" value="Fecha Inicio"/>
                            <TextInput id="fecha_inicio" class="w-full" type="date" v-model="form.fecha_inicio"
                                       autocomplete="off"
                                       :class="{'input-error': form.fecha_inicio === '' || 'fecha_inicio' in form.errors}"/>
                            <JetInputError class="mt-2" :message="form.errors.fecha_inicio"/>
                        </div>
                        <div>
                            <JetLabel for="fecha_fin" value="Fecha Fin"/>
                            <TextInput id="fecha_fin" class="w-full" type="date" v-model="form.fecha_fin"
                                       autocomplete="off"
                                       :class="{'input-error': form.fecha_fin === '' || 'fecha_fin' in form.errors}"/>
                            <JetInputError class="mt-2" :message="form.errors.fecha_fin"/>
                        </div>
                    </div>

                    <div class="flex justify-end" v-if="semanas > 0">
                        <p class="text-sm bg-indigo-3/40 rounded-md px-6 py-2.5 text-gray-4">
                            Hay <span class="font-semibold">{{ semanas }} semanas</span> entre las fechas
                            <span class="font-semibold">{{ form.fecha_inicio }}</span> y <span
                            class="font-semibold">{{ form.fecha_fin }}</span>
                        </p>
                    </div>

                    <div class="flex items-center justify-end gap-x-2">
                        <JetSecondaryButton as="link" :href="route('admin.semestres.index')">Cancelar
                        </JetSecondaryButton>
                        <BotonSave text="Registrar" savingText="Registrando" :saving="form.processing"/>
                    </div>
                </div>
            </form>
        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';

import {useForm} from "@inertiajs/inertia-vue3";

import BotonSave from '@/Components/BotonSave.vue';
import TextInput from '@/Components/TextInput.vue';
import JetSecondaryButton from '@/Components/SecondaryButton.vue';
import JetInputError from '@/Components/InputError.vue';
import JetLabel from '@/Components/InputLabel.vue';
import {computed, watch} from "vue";

const form = useForm({
    anio: "",
    semestre: "",
    fecha_inicio: "",
    fecha_fin: "",
});

const crearSemestre = () => {
    form.post(route('admin.semestres.store'), {
        preserveScroll: true,
    });
};

function calcularFecha(fecha_inicio, semanas) {
    const inicio = new Date(form.fecha_inicio);
    inicio.setDate(inicio.getDate() + semanas * 7);
    return inicio.toISOString();
}

const semanas = computed(() => {
    if (form.fecha_inicio.length === 0 && form.fecha_fin.length === 0)
        return 0;

    let inicio = new Date(form.fecha_inicio)
    let fin = new Date(form.fecha_fin)
    return Math.round((fin - inicio) / 604800000);
})

watch(
    () => form.fecha_inicio,
    (valor) => {
        form.fecha_fin = calcularFecha(valor, parseInt(form.semestre) === 0 ? 8 : 16).split("T")[0];
    },
    {deep: true},
)

watch(
    () => form.semestre,
    (valor) => {
        if (form.fecha_inicio.length > 0) {
            form.fecha_fin = calcularFecha(form.fecha_inicio, parseInt(valor) === 0 ? 8 : 16).split("T")[0];
        }
    },
    {deep: true},
)

</script>
