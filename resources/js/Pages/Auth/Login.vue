<script setup>
import {Head, Link, useForm} from '@inertiajs/inertia-vue3';
import AuthenticationCard from '@/Components/AuthenticationCard.vue';
import AuthenticationCardLogo from '@/Components/AuthenticationCardLogo.vue';
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import Boton from '@/Components/Boton.vue';
import TextInput from '@/Components/TextInput.vue';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.transform(data => ({
        ...data,
        remember: form.remember ? 'on' : '',
    })).post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <Head title="Log in"/>

    <AuthenticationCard>
        <template #logo>
            <AuthenticationCardLogo/>
        </template>

        <div v-if="status" class="mb-4 font-medium text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <div>
                <InputLabel for="email" value="Nombre de usuario"/>
                <TextInput id="email" v-model="form.email" type="text" required autofocus/>
                <InputError class="mt-2" :message="form.errors.email"/>
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password"/>
                <TextInput id="password" v-model="form.password" type="password" required
                           autocomplete="current-password"/>
                <InputError class="mt-2" :message="form.errors.password"/>
            </div>

            <div class="block mt-4">
                <Checkbox v-model:checked="form.remember" name="remember" label="Recordar sesión"/>
            </div>

            <div class="flex items-center justify-between mt-6">
                <Link v-if="canResetPassword" :href="route('password.request')"
                      class="underline text-gray-300 hover:text-gray-200">
                    Olvidaste tu contraseña?
                </Link>

                <Boton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Iniciar sesión
                </Boton>
            </div>
        </form>
    </AuthenticationCard>
</template>
