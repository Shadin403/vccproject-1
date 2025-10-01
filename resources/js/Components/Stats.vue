<template>
    <div>
        <!-- Stats Section -->
        <section class="container px-6 py-12 mx-auto">
            <div class="relative">
                <!-- Star decoration top right -->
                <div class="absolute -top-8 -right-4 mt-[15px] md:right-12 z-20">
                    <svg class="w-12 h-12 text-purple-500 animate-spin-slow" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                    </svg>
                </div>

                <!-- Stats Card -->
                <div
                    class="relative p-8 overflow-hidden bg-white border border-purple-100 shadow-xl dark:bg-gray-800 rounded-3xl dark:border-purple-800 md:p-12">
                    <!-- Gradient overlay effect -->
                    <div
                        class="absolute top-0 right-0 w-64 h-64 -mt-32 -mr-32 rounded-full bg-gradient-to-br from-purple-100 to-transparent opacity-30 dark:opacity-10">
                    </div>

                    <div class="relative z-10 grid grid-cols-2 gap-8 md:grid-cols-4">
                        <!-- Stat 1 -->
                        <div class="text-center">
                            <div
                                class="text-4xl font-bold text-transparent md:text-5xl bg-gradient-to-r from-gray-800 to-gray-600 dark:from-white dark:to-gray-400 bg-clip-text">
                                61+
                            </div>
                            <div class="mt-3 text-sm font-medium text-gray-600 md:text-base dark:text-gray-400">
                                Supported Currencies
                            </div>
                        </div>

                        <!-- Stat 2 -->
                        <div class="text-center">
                            <div
                                class="text-4xl font-bold text-transparent md:text-5xl bg-gradient-to-r from-gray-800 to-gray-600 dark:from-white dark:to-gray-400 bg-clip-text">
                                38.9M+
                            </div>
                            <div class="mt-3 text-sm font-medium text-gray-600 md:text-base dark:text-gray-400">
                                Merchant Partner
                            </div>
                        </div>

                        <!-- Stat 3 -->
                        <div class="text-center">
                            <div
                                class="text-4xl font-bold text-transparent md:text-5xl bg-gradient-to-r from-gray-800 to-gray-600 dark:from-white dark:to-gray-400 bg-clip-text">
                                10.2k+
                            </div>
                            <div class="mt-3 text-sm font-medium text-gray-600 md:text-base dark:text-gray-400">
                                Worldwide Clients
                            </div>
                        </div>

                        <!-- Stat 4 -->
                        <div class="text-center">
                            <div
                                class="text-4xl font-bold text-transparent md:text-5xl bg-gradient-to-r from-gray-800 to-gray-600 dark:from-white dark:to-gray-400 bg-clip-text">
                                100k $
                            </div>
                            <div class="mt-3 text-sm font-medium text-gray-600 md:text-base dark:text-gray-400">
                                Single Transaction Limit
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Star decoration bottom left -->
                <div class="absolute z-20 -bottom-4 -left-4 md:left-12">
                    <svg class="w-10 h-10 text-purple-500 animate-spin-slow" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                    </svg>
                </div>
            </div>
        </section>
    </div>
</template>

<script setup></script>

<style scoped>
@keyframes spin {
    from {
        transform: rotate(0deg);
    }

    to {
        transform: rotate(360deg);
    }
}

.animate-spin-slow {
    animation: spin 50s linear infinite;
}
</style>
