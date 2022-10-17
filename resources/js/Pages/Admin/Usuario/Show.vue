<template>
    <AppLayout title="Usuario">
        <div class="grid grid-cols-2 gap-x-8 items-start">
            <div>
                <div class="relative w-full p-4 border border-gray-1 rounded-lg">
                    <div class="text-center">
                        <h2 class="text-2xl font-bold">{{ usuario.data.fullname }}</h2>
                        <h2 class="text-lg font-semibold text-gray-2">{{ usuario.data.username }}</h2>
                    </div>
                    <div class="flex items-center justify-center pt-4">
                        <img v-if="usuario.data.profile_photo_url"
                             class="h-32 w-32 rounded-md object-cover bg-center flex-shrink-0 bg-gray-1/50 ring-4 ring-offset-4"
                             :class="usuario.data.esta_activo? 'ring-green-4':'ring-red-4'"
                             :src="usuario.data.profile_photo_url" :alt="usuario.data.name">
                    </div>

                    <div class="px-12 flex flex-col items-center pt-6 space-y-3">

                        <span class="chip" :class="usuario.data.esta_activo ? 'bg-green-3' : 'bg-red-3'">
                            {{ usuario.data.esta_activo ? 'Usuario habilitado' : 'Usuario deshabilitado' }}
                        </span>

                        <p v-if="usuario.dni" class="flex items-center space-x-2 text-gray-4">
                            DNI: {{ usuario.data.dni }}
                        </p>
                        <a href="mailto:{{ usuario.data.email }}"
                           class="flex items-center space-x-2 text-gray-4 hover:underline">
                            Correo: {{ usuario.data.email }}
                        </a>
                        <p class="flex items-center space-x-2 text-gray-2">
                            Fecha de registro: {{ usuario.data.created_at }}
                        </p>
                    </div>
                    <div class="px-12 pt-6 space-y-2 flex flex-col items-center justify-center">

                        <div v-if="!usuario.data.esta_activo"
                             class="text-sm bg-red-3/40 p-3 rounded-md flex items-center text-gray-4">
                            <TrashIcon class="icon-6 stroke-2 mr-3"/>
                            Actualmente este usuario esta deshabilitado, por lo que no tendrá acceso al sistema.
                        </div>

                        <JetButton v-if="usuario.data.id !== $page.props.user.id" as="button"
                                   :color="usuario.data.esta_activo ? 'danger' : 'success'"
                                   :title="usuario.data.esta_activo ? 'Deshabilitar usuario' : 'Habilitar usuario'"
                                   @click="verConfirmationModal = !verConfirmationModal">
                            <span v-if="usuario.data.esta_activo" class="flex items-center">
                                <XCircleIcon class="icon-6 mr-2"/>Deshabilitar
                            </span>
                            <span v-else class="flex items-center">
                                <CheckCircleIcon class="icon-6 mr-2"/>Habilitar
                            </span>
                        </JetButton>
                    </div>
                </div>
            </div>

            <div class="">
                <div class="flex justify-end mb-4">
                    <JetButton as="button" title="Asignar roles" @click="verDialogModal = !verDialogModal">
                        Asignar Roles
                    </JetButton>
                </div>


                <TableBasic v-if="usuario.data.roles.length > 0">
                    <template #head>
                        <TableHead>N°</TableHead>
                        <TableHead>Rol</TableHead>
                        <TableHead><span class="sr-only">Acciones</span></TableHead>
                    </template>
                    <TableRow v-for="(rol,index) in usuario.data.roles" :key="rol.id">
                        <TableColumn>{{ (index + 1) }}</TableColumn>
                        <TableColumn>
                            {{ rol.name }}
                        </TableColumn>
                        <TableColumn class="flex space-x-2">
                            <Boton as="button" color="danger"
                                   title="Quitar rol"
                                   @click="quitarRol(rol.name)">
                                <TrashIcon class="icon-5"/>
                            </Boton>
                        </TableColumn>
                    </TableRow>
                </TableBasic>

            </div>
        </div>

        <ConfirmationModal :show="verConfirmationModal" @close="verConfirmationModal = false">
            <template #title>
                ¿Desea {{ usuario.data.esta_activo ? 'Deshabilitar' : 'Habilitar' }} al usuario {{ usuario.name }}?
            </template>
            <template #content>
                Si desea {{ usuario.data.esta_activo ? 'Deshabilitar' : 'Habilitar' }} al usuario seleccionado, pulse en
                el
                botón
                <b>"{{ usuario.data.esta_activo ? 'Deshabilitar' : 'Habilitar' }}"</b>, en caso
                contrario, pulse sobre el botón 'Cancelar'.
            </template>
            <template #footer>
                <JetSecondaryButton @click="verConfirmationModal = false">
                    Cancelar
                </JetSecondaryButton>

                <form @submit.prevent="cambiarEstado">
                    <JetButton color="danger">
                        {{ usuario.esta_activo ? 'Deshabilitar' : 'Habilitar' }}
                    </JetButton>
                </form>
            </template>
        </ConfirmationModal>

        <DialogModal :show="verDialogModal" @close="verDialogModal = false" maxWidth="lg">
            <template #title>
                Agregar Roles al Usuario {{ usuario.data.name }}
            </template>

            <template #content>
                <TableBasic v-if="roles_sin_asignar.data.length > 0">
                    <TableRow v-for="rol in roles_sin_asignar.data" :key="rol.id">
                        <TableColumn>
                            <input type="checkbox" v-model="form.roles_selected" :value="rol.name" :id="rol.id"
                                   class="ml-5 cursor-pointer rounded border border-zinc-300 text-sky-600 focus:ring-0 focus:ring-white disabled:checked:bg-sky-400 disabled:cursor-not-allowed soft-transition"/>
                        </TableColumn>
                        <TableColumn>
                            {{ rol.name }}
                        </TableColumn>
                    </TableRow>
                </TableBasic>

                <JetInputError class="mt-2" :message="form.errors.roles_selected"/>

            </template>

            <template #footer>
                <JetSecondaryButton @click="verDialogModal = false">Cancelar</JetSecondaryButton>
                <ButtonSave @click="asignarRol" :saving="form.processing" normalText="Asignar"
                            :disabled="roles_sin_asignar.length === 0"
                            savingText="Asignando"/>
            </template>
        </DialogModal>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {ref} from "vue";
import {Inertia} from "@inertiajs/inertia";
import {
    CheckCircleIcon,
    XCircleIcon,
    TrashIcon,
} from '@heroicons/vue/24/outline';
import {useForm} from "@inertiajs/inertia-vue3";

import JetButton from '@/Components/Boton.vue';
import JetSecondaryButton from '@/Components/SecondaryButton.vue';
import ConfirmationModal from '@/Components/ConfirmationModal.vue';

import TableBasic from "@/Components/Tables/TableBasic.vue";
import TableHead from "@/Components/Tables/TableHead.vue";
import TableRow from "@/Components/Tables/TableRow.vue";
import TableColumn from "@/Components/Tables/TableColumn.vue";

import ButtonSave from "@/Components/BotonSave.vue";
import DialogModal from "@/Components/DialogModal.vue";
import JetInputError from '@/Components/InputError.vue';
import Boton from "@/Components/Boton.vue";

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

const quitarRol = (rol_name) => {
    // console.log(rol_name);
    // Inertia.get(route('usuarios.destroyRole', {'usuario': props.usuario.id, 'rol': rol_name}), {
    //     preserveScroll: true,
    // });
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
