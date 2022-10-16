<template>
    <div class="relative rounded-md">
        <div class="absolute inset-y-0 left-0 pl-3 mr-2 flex items-center pointer-events-none">
            <MagnifyingGlassIcon class="icon-5 stroke-2 text-gray-2"/>
        </div>
        <input type="search"
               ref="input"
               :value="modelValue"
               autocomplete="off"
               autofocus
               class="form block px-4 py-1.5 pl-10 w-full placeholder:text-gray-200/60 out-of-range:input-error"
               :placeholder="`${placeholder} ...`"
               @input="$emit('update:modelValue', $event.target.value)">
    </div>

</template>

<script setup>
import {onMounted, ref} from 'vue';
import {MagnifyingGlassIcon} from '@heroicons/vue/24/outline';

const props = defineProps({
    modelValue: {type: String, default: ""},
    placeholder: {type: String, default: "Buscar"}
})

defineEmits(['update:modelValue']);

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

defineExpose({focus: () => input.value.focus()});
</script>

<style scoped>

</style>
