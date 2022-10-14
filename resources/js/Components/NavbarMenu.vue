<template>
    <nav class="border-b border-gray-700">
        <!-- Primary Navigation Menu -->
        <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <Link :href="route('dashboard')">
                            <ApplicationMark class="block h-9 w-auto"/>
                        </Link>
                    </div>

                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <NavLink :href="route('dashboard')" :active="route().current('dashboard')">
                            Dashboard
                        </NavLink>
                        <NavLink :href="route('investigacion.listar_investigaciones')"
                                 :active="route().current('investigacion.*')">
                            Investigación
                        </NavLink>
                    </div>
                </div>

                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <!-- Settings Dropdown -->
                    <div class="ml-3 relative">
                        <Dropdown align="right" width="48">
                            <template #trigger>
                                <button v-if="$page.props.jetstream.managesProfilePhotos"
                                        class="flex items-center gap-x-1 font-semibold text-gray-300 hover:text-gray-50 soft-transition">
                                    <img class="icon-10 rounded-full object-cover"
                                         :src="$page.props.user.profile_photo_url" :alt="$page.props.user.name">
                                    {{ $page.props.user.name }}
                                    <ChevronDownIcon class="icon-4"/>
                                </button>

                                <span v-else class="inline-flex rounded-md">
                                    <Boton color="secondary">
                                        {{ $page.props.user.name }}
                                        <ChevronDownIcon class="icon-4"/>
                                    </Boton>
                                </span>
                            </template>

                            <template #content>
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    Manage Account
                                </div>

                                <DropdownLink :href="route('profile.show')">
                                    Profile
                                </DropdownLink>

                                <div class="border-t border-gray-700"/>

                                <!-- Authentication -->
                                <form @submit.prevent="logout">
                                    <DropdownLink as="button">
                                        Log Out
                                    </DropdownLink>
                                </form>
                            </template>
                        </Dropdown>
                    </div>
                </div>

                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <Boton color="secondary" @click="showingNavigationDropdown = ! showingNavigationDropdown">
                        <Bars3Icon class="icon-6"
                                   :class="{'hidden': showingNavigationDropdown, 'inline-flex': !showingNavigationDropdown }"/>
                        <XMarkIcon class="icon-6"
                                   :class="{'hidden': !showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }"/>
                    </Boton>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{'block': showingNavigationDropdown, 'hidden': ! showingNavigationDropdown}"
             class="sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <ResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                    Dashboard
                </ResponsiveNavLink>
            </div>

            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="flex items-center px-4">
                    <div v-if="$page.props.jetstream.managesProfilePhotos" class="shrink-0 mr-3">
                        <img class="h-10 w-10 rounded-full object-cover"
                             :src="$page.props.user.profile_photo_url" :alt="$page.props.user.name">
                    </div>

                    <div>
                        <div class="font-medium text-base text-gray-800">
                            {{ $page.props.user.name }}
                        </div>
                        <div class="font-medium text-sm text-gray-500">
                            {{ $page.props.user.email }}
                        </div>
                    </div>
                </div>

                <div class="mt-3 space-y-1">
                    <ResponsiveNavLink :href="route('profile.show')" :active="route().current('profile.show')">
                        Profile
                    </ResponsiveNavLink>

                    <!-- Authentication -->
                    <form method="POST" @submit.prevent="logout">
                        <ResponsiveNavLink as="button">
                            Log Out
                        </ResponsiveNavLink>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</template>

<script setup>
import {ref} from "vue";
import {Inertia} from "@inertiajs/inertia";
import {Link} from '@inertiajs/inertia-vue3';
import ApplicationMark from '@/Components/ApplicationMark.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import Boton from '@/Components/Boton.vue';

import {ChevronDownIcon, Bars3Icon, XMarkIcon} from "@heroicons/vue/20/solid";

const showingNavigationDropdown = ref(false);

const switchToTeam = (team) => {
    Inertia.put(route('current-team.update'), {
        team_id: team.id,
    }, {
        preserveState: false,
    });
};

const logout = () => {
    Inertia.post(route('logout'));
};
</script>
