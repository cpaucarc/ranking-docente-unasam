<template>
    <AppLayout title="Usuario">
        <div class="space-y-8">
            <SectionTitle>
                <template #title>
                    Lista de usuarios del sistema
                </template>
                <template #aside>
                    <Boton as="link" :href="route('admin.usuario.create')">Registrar nuevo</Boton>
                </template>
            </SectionTitle>
            <div class="w-full flex items-center justify-between">
                <SearchInput v-model="filtros.nombre" class="w-1/3" placeholder="Buscar por usuario, DNI o nombres"/>
                <div class="flex items-center gap-x-3">
                    <select v-model="filtros.estado" class="select" @change="filtrarUsuarios">
                        <option value="todos">Usuarios habilitados e deshabilitados</option>
                        <option value="activos">Solo usuarios habilitados</option>
                        <option value="inactivos">Solo usuarios deshabilitados</option>
                    </select>
                    <select v-model="filtros.rol" class="select" @change="filtrarUsuarios">
                        <option value="todos">Todos los usuarios</option>
                        <option value="con_roles">Usuarios con algún rol</option>
                        <option value="" disabled></option>
                        <option v-for="(user_role, r_id) in user_roles" :key="r_id" :value="r_id">
                            Con rol {{ user_role }}
                        </option>
                        <option value="" disabled></option>
                        <option value="sin_roles">Usuarios sin roles</option>
                    </select>
                </div>
            </div>
            <TableBasic v-if="usuarios.data.length>0">
                <template #head>
                    <TableHead>Apellidos y Nombres</TableHead>
                    <TableHead>Usuario</TableHead>
                    <TableHead>Fecha de creación</TableHead>
                    <TableHead>Roles</TableHead>
                    <TableHead>Estado</TableHead>
                    <TableHead><span class="sr-only">Acciones</span></TableHead>
                </template>
                <TableRow v-for="usuario in usuarios.data" :key="usuario.id">
                    <TableColumn>
                        <div class="flex gap-x-3 h-14 items-center soft-transition">
                            <img class="icon-8 avatar" :src="usuario.data.profile_photo_url" :alt="usuario.name">
                            <div class="flex flex-col leading-5 group focus:outline-none soft-transition">
                                <p class="font-medium uppercase text-xs">{{
                                        usuario.data.fullname ?? usuario.data.name
                                    }}</p>
                                <p v-if="usuario.data.dni" class="text-gray-2">DNI: {{ usuario.data.dni }}</p>
                            </div>
                        </div>
                    </TableColumn>
                    <TableColumn>{{ usuario.data.username }}</TableColumn>
                    <TableColumn>{{ usuario.data.created_at }}</TableColumn>
                    <TableColumn>
                        <ul v-if="usuario.data.roles.length > 0" class="whitespace-nowrap pl-3">
                            <li v-for="rol in usuario.data.roles" :key="rol.id">
                                • {{ rol.name }}
                            </li>
                        </ul>
                        <p v-else class="ml-3 text-gray-2">Ninguno</p>
                    </TableColumn>
                    <TableColumn>
                        <div class="flex items-center space-x-1">
                            <p class="inline-flex text-xs font-medium px-2 py-1 rounded-md"
                               :class="usuario.data.esta_activo ? 'bg-green-3/50' : 'bg-red-3/50'">
                                {{ usuario.data.esta_activo ? 'Habilitado' : 'Deshabilitado' }}
                            </p>
                            <Boton v-if="usuario.id !== $page.props.user.id" as="button" variant="outlined"
                                   :title="usuario.data.esta_activo ? 'Deshabilitar usuario' : 'Habilitar usuario'"
                                   @click="verConfirmationModal = !verConfirmationModal;
                                   usuario_id=usuario.data.id;estado_usuario=usuario.data.esta_activo;
                                   name_usuario=usuario.data.name">
                                <svg class="icon-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none"
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <rect x="3" y="3" width="6" height="6" rx="1"/>
                                    <rect x="15" y="15" width="6" height="6" rx="1"/>
                                    <path d="M21 11v-3a2 2 0 0 0 -2 -2h-6l3 3m0 -6l-3 3"/>
                                    <path d="M3 13v3a2 2 0 0 0 2 2h6l-3 -3m0 6l3 -3"/>
                                </svg>
                            </Boton>
                        </div>
                    </TableColumn>
                    <TableColumn class="text-right">
                        <Boton as="link" :href="route('admin.usuario.show',{'usuario':usuario.data})"
                               title="Ver usuario">
                            Ver usuario
                        </Boton>
                    </TableColumn>
                </TableRow>
            </TableBasic>
        </div>
        <!-- Modal para activar y desactivar usuarios -->
        <ConfirmationModal :show="verConfirmationModal" @close="verConfirmationModal = false">
            <template #title>
                ¿Desea {{ estado_usuario ? 'Deshabilitar' : 'Habilitar' }} al usuario
                <span class="uppercase">{{ name_usuario }}</span>?
            </template>
            <template #content>
                Si desea {{ estado_usuario ? 'Deshabilitar' : 'Habilitar' }} al usuario seleccionado, pulse sobre el
                botón
                <b>"{{ estado_usuario ? 'Deshabilitar' : 'Habilitar' }}"</b>, en caso
                contrario, pulse sobre el botón 'Cancelar'.
            </template>
            <template #footer>
                <JetSecondaryButton @click="verConfirmationModal = false">
                    Cancelar
                </JetSecondaryButton>
                <form @submit.prevent="cambiarEstado">
                    <Boton color="danger">
                        {{ estado_usuario ? 'Deshabilitar' : 'Habilitar' }}
                    </Boton>
                </form>
            </template>
        </ConfirmationModal>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {Inertia} from "@inertiajs/inertia";
import {ref, watch} from "vue";
import {useForm} from "@inertiajs/inertia-vue3";
import {debounce} from "lodash";

import SectionTitle from "@/Components/SectionTitle.vue";
import Boton from '@/Components/Boton.vue';

import TableBasic from "@/Components/Tables/TableBasic.vue"
import TableColumn from "@/Components/Tables/TableColumn.vue"
import TableHead from "@/Components/Tables/TableHead.vue"
import TableRow from "@/Components/Tables/TableRow.vue"

import JetSecondaryButton from '@/Components/SecondaryButton.vue';
import ConfirmationModal from '@/Components/ConfirmationModal.vue';
import SearchInput from "@/Components/Forms/SearchInput.vue";

const props = defineProps({
    usuarios: Object,
    usuario_id: 0,
    estado_usuario: Boolean,
    name_usuario: String,
    user_roles: Object,
    filters: Object,
});

const verConfirmationModal = ref(false);

const cambiarEstado = () => {
    Inertia.delete(route('admin.usuario.destroy', {'usuario': props.usuario_id}), {
        preserveScroll: true,
        onSuccess: () => {
            verConfirmationModal.value = false
        }
    });
};

const filtros = useForm({
    nombre: props.filters?.nombre ?? "",
    rol: props.filters?.rol ?? "0",
    estado: props.filters?.estado ?? "todos",
});

// Todo: Buscar
const search = ref(props.filters.search);
watch(
    () => filtros.nombre,
    debounce(function (value) {
        console.log('Buscando usuario, ', value);
        filtrarUsuarios();
    }, 1500),
    {deep: true},
);

const filtrarUsuarios = () => {
    filtros.get(route('admin.usuario.index'), {
        preserveState: true,
        replace: true
    });
}
</script>
