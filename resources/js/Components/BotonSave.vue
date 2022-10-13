<template>
    <Boton :disabled="saving" :class="{ 'opacity-25': saving }" :color="color" :variant="variant">
        <svg v-if="saving" class="animate-spin icon-6 mr-1" viewBox="0 0 96 96" fill="none">
            <g clip-path="url(#clip0_8070_10238)">
                <rect width="96" height="96" fill="white" fill-opacity="0.01"/>
                <path d="M48 91C71.7482 91 91 71.7482 91 48C91 24.2518 71.7482 5 48 5C24.2518 5 5 24.2518 5 48"
                      stroke="white" stroke-width="10" stroke-linecap="round"/>
            </g>
            <defs>
                <clipPath id="clip0_8070_10238">
                    <rect width="96" height="96" fill="white"/>
                </clipPath>
            </defs>
        </svg>
        <svg v-else class="icon-6 mr-1" viewBox="0 0 24 24" stroke-width="2" stroke="white" fill="none"
             stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2"/>
            <circle cx="12" cy="14" r="2"/>
            <polyline points="14 4 14 8 8 8 8 4"/>
        </svg>

        <span v-if="saving">{{ savingText }}...</span>
        <span v-else>{{ text }}</span>
    </Boton>
</template>

<script setup>
import Boton from '@/Components/Boton.vue';

const props = defineProps({
    saving: {type: Boolean, default: false},
    color: {type: String, default: 'primary'},
    variant: {type: String, default: 'filled'},
    text: String,
    savingText: String,
});
</script>
