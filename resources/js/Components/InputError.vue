<script setup>
import {ExclamationTriangleIcon} from "@heroicons/vue/20/solid";

defineProps({
    message: String,
});
</script>

<template>
    <div v-show="message">
        <p class="text-sm text-red-500 inline-flex items-center gap-x-1">
            <ExclamationTriangleIcon class="icon-5 text-red-600/90"/>
            {{ message }}
        </p>
    </div>
</template>
