<script setup>
import { ref } from "vue";
import { Link } from "@inertiajs/vue3";

const isOpen = ref(false);
</script>

<template>
    <nav
        class="container px-6 py-4 mx-auto md:flex md:justify-between md:items-center"
    >
        <div class="flex items-center justify-between">
            <Link href="/" class="text-2xl font-bold text-purple-600"
                >VCC's World</Link
            >

            <!-- Mobile menu button -->
            <div @click="isOpen = !isOpen" class="flex md:hidden">
                <button
                    type="button"
                    class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600"
                    aria-label="toggle menu"
                >
                    <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                        <path
                            fill-rule="evenodd"
                            d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"
                        ></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div
            :class="[isOpen ? 'flex' : 'hidden']"
            class="flex-col mt-2 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0"
        >
            <a href="#" class="text-gray-700 hover:text-purple-600">HOME</a>
            <a href="#" class="text-gray-700 hover:text-purple-600">VCC's</a>
            <a href="#" class="text-gray-700 hover:text-purple-600"
                >CONTACT US</a
            >

            <div class="flex items-center space-x-4">
                <button class="text-purple-600">🛒</button>
                <Link
                    href="/login"
                    class="px-6 py-2 text-purple-600 transition border-2 border-purple-600 rounded-full hover:bg-purple-600 hover:text-white"
                    >Login</Link
                >
                <Link
                    href="/register"
                    class="px-6 py-2 text-white bg-purple-600 rounded-full hover:bg-purple-700"
                    >Register</Link
                >
            </div>
        </div>
    </nav>
</template>
