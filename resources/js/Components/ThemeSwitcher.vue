<template>
    <button
        @click="toggleTheme"
        class="relative inline-flex items-center justify-center w-10 h-10 overflow-hidden transition-colors duration-300 rounded-full focus:outline-none"
        :class="{ 'bg-gray-200': !isDarkMode, 'bg-gray-800': isDarkMode }"
    >
        <div class="relative w-4 h-4">
            <Sun
                class="absolute inset-0 w-full h-full text-yellow-500 transition-all duration-300 transform"
                :class="{
                    'opacity-0 scale-50 rotate-90': isDarkMode,
                    'opacity-100 scale-100 rotate-0': !isDarkMode,
                }"
            />
            <Moon
                class="absolute inset-0 w-full h-full text-gray-400 transition-all duration-300 transform"
                :class="{
                    'opacity-100 scale-100 rotate-0': isDarkMode,
                    'opacity-0 scale-50 -rotate-90': !isDarkMode,
                }"
            />
        </div>
    </button>
</template>

<script setup>
import { ref, onMounted } from "vue";
import { Sun, Moon } from "lucide-vue-next";
import { setThemeOnLoad, switchTheme } from "../theme.js";

const isDarkMode = ref(false);

const toggleTheme = () => {
    switchTheme();
    isDarkMode.value = localStorage.theme === "dark";
};

onMounted(() => {
    setThemeOnLoad();
    isDarkMode.value = localStorage.theme === "dark";
});
</script>
