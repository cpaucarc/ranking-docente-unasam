<script setup>
import {ref} from 'vue';
import {useForm} from '@inertiajs/inertia-vue3';
import ActionMessage from '@/Components/ActionMessage.vue';
import ActionSection from '@/Components/ActionSection.vue';
import DialogModal from '@/Components/DialogModal.vue';
import InputError from '@/Components/InputError.vue';
import Boton from '@/Components/Boton.vue';
import BotonSave from '@/Components/BotonSave.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

import {ComputerDesktopIcon, DevicePhoneMobileIcon} from "@heroicons/vue/24/outline";

defineProps({
    sessions: Array,
});

const confirmingLogout = ref(false);
const passwordInput = ref(null);

const form = useForm({
    password: '',
});

const confirmLogout = () => {
    confirmingLogout.value = true;

    setTimeout(() => passwordInput.value.focus(), 250);
};

const logoutOtherBrowserSessions = () => {
    form.delete(route('other-browser-sessions.destroy'), {
        preserveScroll: true,
        onSuccess: () => closeModal(),
        onError: () => passwordInput.value.focus(),
        onFinish: () => form.reset(),
    });
};

const closeModal = () => {
    confirmingLogout.value = false;

    form.reset();
};
</script>

<template>
    <ActionSection>
        <template #title>
            Sesiones del navegador
        </template>

        <template #description>
            Administre y cierre sesión en sus sesiones activas en otros navegadores y dispositivos.
        </template>

        <template #content>
            <div class="max-w-xl text-gray-200">
                Si es necesario, puede cerrar sesión en todas sus otras sesiones de navegador en todos sus dispositivos.
                Algunas de sus sesiones recientes se enumeran a continuación; sin embargo, esta lista puede no ser
                exhaustiva. Si cree que su cuenta se ha visto comprometida, también debe actualizar su contraseña.
            </div>

            <!-- Other Browser Sessions -->
            <div v-if="sessions.length > 0" class="mt-5 space-y-6">
                <div v-for="(session, i) in sessions" :key="i" class="flex items-center">
                    <div>
                        <ComputerDesktopIcon v-if="session.agent.is_desktop" class="icon-8 text-gray-200"/>
                        <DevicePhoneMobileIcon v-else class="icon-8 text-gray-200"/>
                    </div>

                    <div class="ml-3">
                        <div class="text-gray-400">
                            {{ session.agent.platform ? session.agent.platform : 'Unknown' }} -
                            {{ session.agent.browser ? session.agent.browser : 'Unknown' }}
                        </div>

                        <div>
                            <div class="text-sm text-gray-300">
                                {{ session.ip_address }},

                                <span v-if="session.is_current_device"
                                      class="text-green-600 font-semibold">This device</span>
                                <span v-else>Last active {{ session.last_active }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex items-center mt-5">
                <Boton @click="confirmLogout">
                    Cerrar sesión en otros navegadores
                </Boton>

                <ActionMessage :on="form.recentlySuccessful" class="ml-3">
                    Hecho.
                </ActionMessage>
            </div>

            <!-- Log Out Other Devices Confirmation Modal -->
            <DialogModal :show="confirmingLogout" @close="closeModal">
                <template #title>
                    Cerrar sesión de otras sesiones del navegador
                </template>

                <template #content>
                    Ingrese su contraseña para confirmar que desea cerrar sesión en sus otras sesiones del navegador
                    en todos tus dispositivos.

                    <div class="mt-4">
                        <TextInput ref="passwordInput" v-model="form.password" type="password"
                                   placeholder="Contraseña" @keyup.enter="logoutOtherBrowserSessions"/>

                        <InputError :message="form.errors.password" class="mt-2"/>
                    </div>
                </template>

                <template #footer>
                    <Boton color="secondary" @click="closeModal">
                        Cancelar
                    </Boton>

                    <Boton class="ml-3" :class="{ 'opacity-25': form.processing }" :disabled="form.processing"
                           @click="logoutOtherBrowserSessions">
                        Cerrar sesiones
                    </Boton>

                </template>
            </DialogModal>
        </template>
    </ActionSection>
</template>
