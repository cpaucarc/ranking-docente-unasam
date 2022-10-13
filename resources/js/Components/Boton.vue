<template>
    <Link v-if="as === 'link'" :href="href" :class="btn_clase">
        <slot/>
    </Link>

    <a v-else-if="as ==='a'" :href="href" target="_blank" :class="btn_clase">
        <slot/>
    </a>

    <button v-else :type="type" :class="btn_clase">
        <slot/>
    </button>
</template>

<script setup>
import {Link} from '@inertiajs/inertia-vue3';
import {computed} from "vue";

const props = defineProps({
    color: {type: String, default: 'primary'}, // primary, success, warning, danger
    variant: {type: String, default: 'filled'}, // filled, outlined, text, secondary

    as: {type: String, required: false},
    href: {type: String, required: false},
    type: {type: String, required: false, default: 'submit'},
});

const btn_clase = computed(() => {
    if (props.color === 'secondary') {
        return 'btn-secondary';
    }

    return {
        'primary-filled': 'btn-primary-filled',
        'primary-outlined': 'btn-primary-outlined',
        'primary-text': 'btn-primary-text',

        'success-filled': 'btn-success-filled',
        'success-outlined': 'btn-success-outlined',
        'success-text': 'btn-success-text',

        'warning-filled': 'btn-warning-filled',
        'warning-outlined': 'btn-warning-outlined',
        'warning-text': 'btn-warning-text',

        'danger-filled': 'btn-danger-filled',
        'danger-outlined': 'btn-danger-outlined',
        'danger-text': 'btn-danger-text',
    }[props.color + '-' + props.variant];
});

</script>
