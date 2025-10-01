<script setup>
import { ArrowRightIcon } from "@heroicons/vue/24/solid";
</script>

<template>
    <footer class="py-12 bg-white dark:bg-gray-800">
        <div class="container px-6 mx-auto">
            <div class="grid gap-8 md:grid-cols-4">
                <div>
                    <h3 class="mb-4 text-xl font-bold dark:text-white">
                        Quick Links
                    </h3>
                    <ul class="space-y-2 text-gray-600 dark:text-gray-300">
                        <li>
                            <a href="#" class="hover:text-purple-600"
                                >Discover the power of our service and rewarding
                                work ethic</a
                            >
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="mb-4 text-xl font-bold dark:text-white">
                        Contact
                    </h3>
                    <ul class="space-y-2 text-gray-600 dark:text-gray-300">
                        <li>
                            <a href="#" class="hover:text-purple-600">Home</a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-purple-600">VCC's</a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-purple-600">Cart</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul
                        class="mt-12 space-y-2 text-gray-600 dark:text-gray-300"
                    >
                        <li>
                            <a href="#" class="hover:text-purple-600"
                                >Instagram</a
                            >
                        </li>
                        <li>
                            <a href="#" class="hover:text-purple-600"
                                >Microsoft Teams</a
                            >
                        </li>
                    </ul>
                </div>
                <div class="flex items-center justify-center">
                    <button
                        class="px-8 py-3 text-white transition bg-purple-600 rounded-full hover:bg-purple-700"
                    >
                        Get Your Card <ArrowRightIcon class="w-5 h-5 ml-2" />
                    </button>
                </div>
            </div>
        </div>
    </footer>
</template>
