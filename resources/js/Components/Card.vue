<template>
    <div class="bg-gray-900 w-full rounded-lg shadow-lg">
        <div class="px-6 pt-5 pb-4 border-b-2 border-gray-800 rounded-t-lg" v-if="$slots.head">
            <h1 class="font-bold text-gray-400 tracking-wide">
                <slot name="head"></slot>
            </h1>
        </div>

        <div class="px-6 pt-5 pb-7 space-y-6">
            <slot/>
        </div>

    </div>
</template>
