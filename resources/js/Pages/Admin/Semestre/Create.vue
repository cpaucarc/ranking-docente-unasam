<template>
    <AppLayout title="Semestre Académico">
        <div class="max-w-lg mx-auto">
            <Card>
                <div>
                    <JetLabel for="anio" value="Semestre académico"/>
                    <div class="flex space-x-2">
                        <TextInput id="anio" type="number" v-model="form.anio" :placeholder="new Date().getFullYear()"
                                   min="2000" max="3000" required autofocus
                                   :class="{'input-error': form.anio === '' || 'anio' in form.errors}"/>
                        <TextInput class="w-16 text-center rounded" type="text" value="-" disabled="true"/>
                        <TextInput type="number" v-model="form.semestre" placeholder="2" min="0" max="2"
                                   oninput="this.value = this.value.replace(/[^0-2]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                   :class="{'input-error': form.semestre === '' || 'semestre' in form.errors}"/>
                    </div>
                   <div class="flex justify-between">
                       <InputError :message="form.errors.anio"/>
                       <InputError :message="form.errors.semestre"/>
                   </div>
                </div>
                <div>
                    <JetLabel for="inicio" value="Inicio del semestre académico"/>
                    <TextInput id="inicio" class="w-full" type="date" v-model="form.fecha_inicio" autocomplete="off"
                               required
                               :class="{'input-error': form.fecha_inicio === '' || 'fecha_inicio' in form.errors}"/>
                    <InputError :message="form.errors.fecha_inicio"/>
                </div>
                <div>
                    <JetLabel for="fin" value="Fin del semestre académico"/>
                    <TextInput id="fin" class="w-full" type="date" v-model="form.fecha_fin" autocomplete="off" required
                               :class="{'input-error': form.fecha_fin === '' || 'fecha_fin' in form.errors}"/>
                    <InputError :message="form.errors.fecha_fin"/>
                </div>
                <div class="flex justify-end" v-if="semanas > 0">
                    <p class="text-sm bg-indigo-3/40 rounded-md px-6 py-2.5 text-gray-4">
                        Hay <span class="font-semibold">{{ semanas }} semanas</span> entre las fechas
                        <span class="font-semibold">{{ form.fecha_inicio }}</span> y <span
                        class="font-semibold">{{ form.fecha_fin }}</span>
                    </p>
                </div>
                <div class="flex items-center justify-end gap-4">
                    <JetSecondaryButton as="link" :href="route('admin.semestre.index')">Cancelar</JetSecondaryButton>
                    <BotonSave @click="crearSemestre" text="Registrar" savingText="Registrando"
                               :saving="form.processing"/>
                </div>
            </Card>
        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {useForm} from "@inertiajs/inertia-vue3";
import {computed, watch} from "vue";

import Card from "@/Components/Card.vue";
import JetLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import InputError from "@/Components/InputError.vue";
import JetSecondaryButton from '@/Components/SecondaryButton.vue';
import BotonSave from '@/Components/BotonSave.vue';

const form = useForm({
    anio: "",
    semestre: "",
    fecha_inicio: "",
    fecha_fin: "",
});

const crearSemestre = () => {
    form.post(route('admin.semestre.store'), {preserveScroll: true,});
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

watch(() => form.fecha_inicio,
    (valor) => {
        form.fecha_fin = calcularFecha(valor, parseInt(form.semestre) === 0 ? 8 : 16).split("T")[0];
    },
    {deep: true},
)

watch(() => form.semestre,
    (valor) => {
        if (form.fecha_inicio.length > 0) {
            form.fecha_fin = calcularFecha(form.fecha_inicio, parseInt(valor) === 0 ? 8 : 16).split("T")[0];
        }
    },
    {deep: true},
)
</script>
