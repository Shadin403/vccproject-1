<template>
    <div class="flex items-center justify-between">
        <button
            :disabled="form.processing"
            type="submit"
            class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline"
        >
            <span v-if="!form.processing">{{ buttonTextIF }}</span>
            <span v-else>{{ buttonTextElse }}</span>
        </button>

        <Link
            :href="route(routeName)"
            class="inline-block text-sm font-bold text-blue-500 align-baseline hover:text-blue-800"
        >
            {{ linkText }}
        </Link>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3"; // inertia-vue3 এর Link ব্যবহার করবে

defineProps({
    buttonTextIF: String,
    buttonTextElse: String,
    routeName: String,
    linkText: String,
    form: Object, // ✅ এখানে সঠিকভাবে form লিখতে হবে
});
</script>
