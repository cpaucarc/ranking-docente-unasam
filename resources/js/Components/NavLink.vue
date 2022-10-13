<script setup>
import {computed} from 'vue';
import {Link} from '@inertiajs/inertia-vue3';

const props = defineProps({
    href: String,
    active: Boolean,
});

const classes = computed(() => {
    return 'inline-flex items-center px-1 pt-1 border-b-2 leading-5 soft-transition ' + (props.active
        ? 'font-bold border-blue-600 text-gray-100 focus:outline-none focus:border-blue-500'
        : 'font-semibold border-transparent text-gray-400 hover:text-gray-300 hover:border-gray-700 focus:outline-none focus:text-gray-400 focus:border-gray-600');
});
</script>

<template>
    <Link :href="href" :class="classes">
        <slot/>
    </Link>
</template>
