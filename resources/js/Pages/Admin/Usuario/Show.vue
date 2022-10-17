<template>
    <AppLayout title="Usuario">
        <div class="grid grid-cols-2 gap-x-8 items-start">
            <Card>
                <div class="text-center">
                    <h2 class="text-2xl font-bold">{{ usuario.fullname }}</h2>
                    <h2 class="text-lg font-semibold text-gray-2">{{ usuario.username }}</h2>
                </div>
                <div class="flex items-center justify-center">
                    <img v-if="usuario.profile_photo_url"
                         class="h-32 w-32 rounded object-cover bg-center flex-shrink-0 bg-gray-900 ring-4 ring-offset-4"
                         :class="usuario.esta_activo? 'ring-green-600':'ring-red-600'"
                         :src="usuario.profile_photo_url" :alt="usuario.name">
                </div>
                <div class="flex items-center justify-center">
                    <p class="inline-flex font-medium px-2 py-1 rounded"
                       :class="usuario.esta_activo ? 'text-green-700 bg-green-600/10' : 'text-red-700 bg-red-600/10'">
                        {{ usuario.esta_activo ? 'Usuario habilitado' : 'Usuario deshabilitado' }}
                    </p>
                </div>
                <div class="flex flex-col items-center justify-center space-y-2">
                    <p v-if="usuario.dni" class="text-center space-x-2">
                        DNI: {{ usuario.dni }}
                    </p>
                    <a href="mailto:{{ usuario.email }}"
                       class="text-center space-x-2 hover:underline">
                        {{ usuario.email }}
                    </a>
                    <p class="text-center">
                        Fecha de registro: {{ usuario.created_at }}
                    </p>
                </div>
                <div v-if="!usuario.esta_activo"
                     class="mx-12 text-sm bg-red-600 p-3 rounded-md flex items-center text-gray-4">
                    <ExclamationTriangleIcon class="icon-6 stroke-2 mr-3"/>
                    Actualmente este usuario esta deshabilitado, por lo que no tendrá acceso al sistema.
                </div>
                <div class="flex items-center justify-center">
                    <Boton v-if="usuario.id !== $page.props.user.id" as="button"
                           :color="usuario.esta_activo ? 'danger' : 'success'"
                           :title="usuario.esta_activo ? 'Deshabilitar usuario' : 'Habilitar usuario'"
                           @click="verConfirmationModal = !verConfirmationModal">
                            <span v-if="usuario.esta_activo" class="flex items-center">
                                <XCircleIcon class="icon-6 mr-2"/>Deshabilitar
                            </span>
                        <span v-else class="flex items-center">
                                <CheckCircleIcon class="icon-6 mr-2"/>Habilitar
                        </span>
                    </Boton>
                </div>
            </Card>
            <Card>
                <div class="flex justify-end mb-4">
                    <Boton title="Asignar roles" @click="verDialogModal = !verDialogModal">
                        Asignar roles
                    </Boton>
                </div>
                <TableBasic v-if="usuario.roles.length > 0">
                    <template #head>
                        <TableHead>N°</TableHead>
                        <TableHead>Rol</TableHead>
                        <TableHead><span class="sr-only">Acciones</span></TableHead>
                    </template>
                    <TableRow v-for="(rol,index) in usuario.roles" :key="rol.id">
                        <TableColumn>{{ (index + 1) }}</TableColumn>
                        <TableColumn> {{ rol.name }}</TableColumn>
                        <TableColumn class="flex items-center justify-center space-x-2">
                            <Boton as="button" color="danger"
                                   title="Quitar rol"
                                   @click="quitarRol(rol.name)">
                                <TrashIcon class="icon-5"/>
                            </Boton>
                        </TableColumn>
                    </TableRow>
                </TableBasic>
            </Card>
        </div>
        <ConfirmationModal :show="verConfirmationModal" @close="verConfirmationModal = false">
            <template #title>
                ¿Desea {{ usuario.esta_activo ? 'Deshabilitar' : 'Habilitar' }} al usuario {{ usuario.name }}?
            </template>
            <template #content>
                Si desea {{ usuario.esta_activo ? 'Deshabilitar' : 'Habilitar' }} al usuario seleccionado, pulse en
                el
                botón
                <b>"{{ usuario.esta_activo ? 'Deshabilitar' : 'Habilitar' }}"</b>, en caso
                contrario, pulse sobre el botón 'Cancelar'.
            </template>
            <template #footer>
                <JetSecondaryButton @click="verConfirmationModal = false">
                    Cancelar
                </JetSecondaryButton>

                <form @submit.prevent="cambiarEstado">
                    <Boton color="danger">
                        {{ usuario.esta_activo ? 'Deshabilitar' : 'Habilitar' }}
                    </Boton>
                </form>
            </template>
        </ConfirmationModal>

        <DialogModal :show="verDialogModal" @close="verDialogModal = false" maxWidth="lg">
            <template #title>
                Agregar roles al usuario <span class="underline">{{ usuario.name }}</span>
            </template>
            <template #content>
                <TableBasic v-if="roles_sin_asignar.length > 0">
                    <TableRow v-for="rol in roles_sin_asignar" :key="rol.id">
                        <TableColumn>
                            <input type="checkbox" v-model="form.roles_selected" :value="rol.name" :id="rol.id"
                                   class="ml-5 cursor-pointer rounded border border-zinc-300 text-sky-600 focus:ring-0 focus:ring-white disabled:checked:bg-sky-400 disabled:cursor-not-allowed soft-transition"/>
                        </TableColumn>
                        <TableColumn> {{ rol.name }}</TableColumn>
                    </TableRow>
                </TableBasic>
                <InputError class="mt-2" :message="form.errors.roles_selected"/>
            </template>
            <template #footer>
                <JetSecondaryButton @click="verDialogModal = false">Cancelar</JetSecondaryButton>
                <BotonSave @click="asignarRol" :saving="form.processing"
                           :disabled="roles_sin_asignar.length === 0" text="Agregar" savingText="Agregando"/>
            </template>
        </DialogModal>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {ref} from "vue";
import {Inertia} from "@inertiajs/inertia";
import {useForm} from "@inertiajs/inertia-vue3";
import {
    CheckCircleIcon,
    XCircleIcon,
    TrashIcon,
    ExclamationTriangleIcon
} from '@heroicons/vue/24/outline';

import Boton from "@/Components/Boton.vue";
import ConfirmationModal from '@/Components/ConfirmationModal.vue';

import TableBasic from "@/Components/Tables/TableBasic.vue";
import TableHead from "@/Components/Tables/TableHead.vue";
import TableRow from "@/Components/Tables/TableRow.vue";
import TableColumn from "@/Components/Tables/TableColumn.vue";

import DialogModal from "@/Components/DialogModal.vue";
import InputError from '@/Components/InputError.vue';
import Card from "@/Components/Card.vue";
import JetSecondaryButton from '@/Components/SecondaryButton.vue';
import BotonSave from "@/Components/BotonSave.vue";

const props = defineProps({
    usuario: Object,
    roles_sin_asignar: Object
});

const verConfirmationModal = ref(false);
const verDialogModal = ref(false);

const cambiarEstado = () => {
    Inertia.delete(route('admin.usuario.destroy', {'usuario': props.usuario.id}), {
        preserveScroll: true,
        onSuccess: () => {
            verConfirmationModal.value = false
        }
    });
};

const quitarRol = (role_name) => {
    Inertia.get(route('admin.usuario.role.destroy', {'usuario': props.usuario.id, 'role': role_name}), {
        preserveScroll: true,
    });
};


const form = useForm({
    _method: 'POST',
    roles_selected: [],
});

const asignarRol = () => {
    form.put(route('admin.usuario.update', {'usuario': props.usuario.id}), {
        preserveScroll: true,
        onSuccess: () => {
            verDialogModal.value = false;
            form.reset();
        }
    });
}
</script>
