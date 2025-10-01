<template>
    <label
        :for="label"
        class="block mb-2 text-sm font-bold text-gray-700 dark:text-gray-300"
        >{{ label }}</label
    >
    <div class="relative">
        <span
            v-if="icon"
            class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400 pointer-events-none dark:text-gray-300"
        >
            <i :class="`fa-solid fa-${icon}`"></i>
        </span>
        <input
            :type="type"
            :id="label"
            v-model="model"
            class="w-full py-2 pl-10 pr-3 leading-tight text-gray-700 bg-white border rounded shadow appearance-none dark:border-gray-600 dark:text-gray-200 dark:bg-gray-700 focus:outline-none focus:shadow-outline"
            :placeholder="placeholder"
        />
    </div>
</template>
<script setup>
const model = defineModel();

defineProps({
    label: String,
    icon: String,
    placeholder: {
        type: String,
        default: "",
    },

    type: {
        type: String,
        default: "text",
    },
});
</script>
