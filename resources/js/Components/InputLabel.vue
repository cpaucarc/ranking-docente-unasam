<script setup>
defineProps({
    value: String,
    nullable: {type: Boolean, default: false}
});
</script>

<template>
    <label class="block font-semibold text-gray-400 mb-1">
        <span v-if="value">{{ value }}</span>
        <span v-else><slot/></span>
        <span v-if="nullable" class="text-red-500 ml-2 text-sm">* Opcional</span>
    </label>
</template>
