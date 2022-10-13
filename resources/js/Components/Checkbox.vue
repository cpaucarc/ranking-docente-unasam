<script setup>
import {computed} from 'vue';

const emit = defineEmits(['update:checked']);

const props = defineProps({
    checked: {
        type: [Array, Boolean],
        default: false,
    },
    value: {
        type: String,
        default: null,
    },
    label: {
        type: String,
        default: null,
    },
});

const proxyChecked = computed({
    get() {
        return props.checked;
    },

    set(val) {
        emit('update:checked', val);
    },
});

const clases = computed(() => {
    return props.checked
        ? "text-gray-50 font-medium"
        : "text-gray-300 font-normal";
});
</script>


<template>
    <!--    <input-->
    <!--        v-model="proxyChecked"-->
    <!--        type="checkbox"-->
    <!--        :value="value"-->
    <!--        class="icon-5 text-blue-600 rounded border focus:ring-3 bg-gray-700 border-gray-600 focus:ring-blue-600 ring-offset-gray-800 soft-transition"-->
    <!--    >-->

    <label
        class="text-sm cursor-pointer inline-flex items-center gap-x-1 select-none tracking-wide soft-transition"
        :class="clases"
    >
        <input
            type="checkbox"
            v-model="proxyChecked"
            :value="value"
            class="text-blue-600 bg-transparent mr-1 cursor-pointer rounded border border-gray-500 focus:border-blue-600 soft-transition"
        />
        {{ label }}
    </label>
</template>
