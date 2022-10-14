<script setup>
import {Link} from '@inertiajs/inertia-vue3';

defineProps({
    href: String,
    as: String,
});
</script>

<template>
    <div>
        <button v-if="as === 'button'" type="submit"
                class="block w-full px-4 py-2 leading-5 text-gray-300 text-left hover:bg-gray-800 hover:text-white focus:outline-none focus:bg-gray-900 soft-transition">
            <slot/>
        </button>

        <a v-else-if="as === 'a'" :href="href"
           class="block px-4 py-2 leading-5 text-gray-300 hover:bg-gray-800 hover:text-white focus:outline-none focus:bg-gray-900 soft-transition">
            <slot/>
        </a>

        <Link v-else :href="href"
              class="block px-4 py-2 leading-5 text-gray-300 hover:bg-gray-800 hover:text-white focus:outline-none focus:bg-gray-900 soft-transition">
            <slot/>
        </Link>
    </div>
</template>
