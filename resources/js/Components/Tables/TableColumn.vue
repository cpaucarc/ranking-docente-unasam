<template>
    <td :class="`px-3 py-4 leading-4 ${clase_hide}`">
        <slot/>
    </td>
</template>

<script setup>
const props = defineProps({
    hideOn: {type: [Boolean, String], default: false}
})

const clase_hide = props.hideOn ? {
    'sm': ' hidden sm:table-cell ',
    'md': ' hidden md:table-cell ',
    'lg': ' hidden lg:table-cell '
}[props.hideOn === true ? 'lg' : props.hideOn] : '';

</script>
