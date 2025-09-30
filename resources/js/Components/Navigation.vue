<template>
    <nav
        :class="{
            'sticky top-0 z-[999] bg-white shadow-md': isScrolled,
            container: !isScrolled,
        }"
        class="px-6 py-4 mx-auto transition-all duration-300"
    >
        <div class="relative flex items-center justify-between">
            <!-- Logo (Left) -->
            <div class="flex-shrink-0">
                <Link href="/" class="text-2xl font-bold text-purple-600"
                    >VCC's World</Link
                >
            </div>

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

            <!-- Desktop Navigation -->
            <div
                class="hidden md:flex md:items-center md:justify-between md:flex-1"
            >
                <!-- Navigation Links (Center) -->
                <div class="flex-1 flex justify-center">
                    <div class="flex space-x-12">
                        <Link
                            :href="route('home')"
                            class="text-gray-800 font-semibold tracking-wide text-sm transition-all duration-300 hover:text-purple-600 relative group"
                            :class="{
                                'text-purple-600': isActive(route('home')),
                            }"
                        >
                            <span class="relative">
                                HOME
                                <span
                                    class="absolute -bottom-2 left-0 w-full h-0.5 bg-purple-600 transform transition-transform duration-300"
                                    :class="
                                        isActive(route('home'))
                                            ? 'scale-x-100'
                                            : 'scale-x-0 group-hover:scale-x-100'
                                    "
                                ></span>
                            </span>
                        </Link>
                        <Link
                            :href="route('products')"
                            class="text-gray-800 font-semibold tracking-wide text-sm transition-all duration-300 hover:text-purple-600 relative group"
                            :class="{
                                'text-purple-600': isActive(route('products')),
                            }"
                        >
                            <span class="relative">
                                SHOP
                                <span
                                    class="absolute -bottom-2 left-0 w-full h-0.5 bg-purple-600 transform transition-transform duration-300"
                                    :class="
                                        isActive(route('products'))
                                            ? 'scale-x-100'
                                            : 'scale-x-0 group-hover:scale-x-100'
                                    "
                                ></span>
                            </span>
                        </Link>
                    </div>
                </div>

                <!-- Auth Buttons (Right) -->
                <div class="flex items-center space-x-6">
                    <button class="text-purple-600 relative group">
                        <ShoppingCart
                            class="w-6 h-6 transition-transform duration-300 transform group-hover:scale-110"
                        />
                        <span
                            class="absolute -top-2 -right-2 w-5 h-5 bg-purple-600 text-white text-xs rounded-full flex items-center justify-center transform transition-transform duration-300 group-hover:scale-110"
                            >0</span
                        >
                    </button>
                    <Link
                        :href="route('login')"
                        class="px-6 py-2 text-purple-600 font-semibold transition-all duration-300 border-2 border-purple-600 rounded-full hover:bg-purple-600 hover:text-white hover:shadow-lg"
                    >
                        Login
                    </Link>
                    <Link
                        :href="route('register')"
                        class="px-6 py-2 text-white font-semibold bg-purple-600 rounded-full transition-all duration-300 hover:bg-purple-700 hover:shadow-lg hover:-translate-y-0.5"
                    >
                        Register
                    </Link>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div
            :class="[isOpen ? 'flex' : 'hidden']"
            class="flex-col mt-2 space-y-4 md:hidden"
        >
            <!-- Mobile Navigation Links -->
            <div class="flex flex-col space-y-4">
                <Link
                    :href="route('home')"
                    class="text-gray-700 hover:text-purple-600 relative group"
                    :class="{
                        'text-purple-600 font-semibold': isActive(
                            route('home')
                        ),
                    }"
                >
                    HOME
                    <span
                        class="absolute -bottom-1 left-0 w-full h-0.5 bg-purple-600 transform transition-transform duration-300"
                        :class="
                            isActive(route('home'))
                                ? 'scale-x-100'
                                : 'scale-x-0 group-hover:scale-x-100'
                        "
                    ></span>
                </Link>
                <Link
                    :href="route('products')"
                    class="text-gray-700 hover:text-purple-600 relative group"
                    :class="{
                        'text-purple-600 font-semibold': isActive(
                            route('products')
                        ),
                    }"
                >
                    SHOP
                    <span
                        class="absolute -bottom-1 left-0 w-full h-0.5 bg-purple-600 transform transition-transform duration-300"
                        :class="
                            isActive(route('products'))
                                ? 'scale-x-100'
                                : 'scale-x-0 group-hover:scale-x-100'
                        "
                    ></span>
                </Link>
                >
            </div>

            <!-- theme toggle button -->
            <div class="flex items-center">ic</div>

            <!-- Mobile Auth Buttons -->
            <div class="flex flex-col space-y-4 pt-4 border-t">
                <button class="text-purple-600 flex items-center space-x-2">
                    <ShoppingCart class="w-6 h-6" />
                    <span>Cart</span>
                </button>
                <Link
                    :href="route('login')"
                    class="px-6 py-2 text-center text-purple-600 transition border-2 border-purple-600 rounded-full hover:bg-purple-600 hover:text-white"
                    >Login</Link
                >
                <Link
                    :href="route('register')"
                    class="px-6 py-2 text-center text-white bg-purple-600 rounded-full hover:bg-purple-700"
                    >Register</Link
                >
            </div>
        </div>
    </nav>
</template>
<script setup>
import { ref, onMounted, onUnmounted, computed } from "vue";
import { Link, usePage } from "@inertiajs/vue3";
import { ShoppingCart } from "lucide-vue-next";

const page = usePage();
const currentRoute = computed(() => page.url.value);

const isOpen = ref(false);
const isScrolled = ref(false);

const isActive = (path) => {
    return currentRoute.value === path;
};

const handleScroll = () => {
    if (window.scrollY > 50) {
        isScrolled.value = true;
    } else {
        isScrolled.value = false;
    }
};

onMounted(() => {
    window.addEventListener("scroll", handleScroll);
});

onUnmounted(() => {
    window.removeEventListener("scroll", handleScroll);
});
</script>
