<template>
    <table class="w-full text-left text-gray-300 border-b-2 border-t-2 border-gray-600">
        <thead class="border-b-2 border-gray-600">
        <tr>
            <slot name="head"/>
        </tr>
        </thead>

        <tbody class="divide-y divide-gray-700 border-b-2 border-gray-600">
        <slot/>
        </tbody>


        <tfoot class="text-gray-4 bg-gray-1/30 font-semibold">
        <tr>
            <slot name="foot"/>
        </tr>
        </tfoot>
    </table>
</template>

<script>
export default {
    name: "TableBasic"
}
</script>
