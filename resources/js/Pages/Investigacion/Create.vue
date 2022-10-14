<template>
    <AppLayout title="Dashboard">
        <div class="max-w-xl mx-auto">

            <Card>
                <div>
                    <InputLabel for="titulo" value="Título de la investigación"/>
                    <textarea id="titulo" v-model="form.titulo" rows="5"></textarea>
                    <InputError :message="form.errors.titulo"/>
                </div>

                <div>
                    <InputLabel for="fecha_inicio" value="Fecha de inicio"/>
                    <TextInput id="fecha_inicio" v-model="form.fecha_inicio" type="date"/>
                    <InputError :message="form.errors.fecha_inicio"/>
                </div>

                <div>
                    <InputLabel for="fecha_inicio" value="Fecha de inicio"/>
                    <TextInput id="fecha_inicio" type="file"/>
                    <InputError :message="form.errors.fecha_inicio"/>
                </div>

                <div class="grid grid-cols-3 gap-4">
                    <div class="col-span-3 md:col-span-2">
                        <InputLabel for="fuente" value="Fuente de financión"/>
                        <select id="fuente" v-model="form.fuente">
                            <template v-for="fuente in fuentes" :key="fuente.id">
                                <option :value="fuente.id">{{ fuente.nombre }}</option>
                            </template>
                        </select>
                        <InputError :message="form.errors.fuente"/>
                    </div>

                    <div class="col-span-3 md:col-span-1">
                        <InputLabel for="monto" value="Monto (S/.)"/>
                        <TextInput id="monto" v-model="form.monto" type="number" :disabled="form.fuente < 1"/>
                        <InputError :message="form.errors.monto"/>
                    </div>
                </div>
            </Card>

            <div>
                {{ fuentes }}
            </div>
            <div>
                {{ form }}
            </div>

        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Card from "@/Components/Card.vue";
import TextInput from "@/Components/TextInput.vue";
import InputLabel from "@/Components/InputLabel.vue";
import InputError from "@/Components/InputError.vue";
import {useForm} from "@inertiajs/inertia-vue3";
import {watch} from "vue";

const props = defineProps({
    fuentes: Array,
})

const form = useForm({
    titulo: '',
    fuente: '0',
    monto: '0',
});


watch(
    () => form.fuente,
    (fuente_id) => {
        if (fuente_id < 1) {
            form.monto = '0';
        }
    }
);
</script>
