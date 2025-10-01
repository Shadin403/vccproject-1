<template>
    <nav :class="{
        'sticky top-0 z-[999] bg-white shadow-md dark:bg-gray-800':
            isScrolled,
        'container dark:bg-gray-900': !isScrolled,
    }" class="px-6 py-4 mx-auto transition-all duration-300">
        <div class="relative">
            <!-- Mobile Header -->
            <div class="flex items-center justify-between md:hidden">
                <!-- Mobile menu button (Left) -->
                <div @click="isOpen = !isOpen">
                    <button type="button"
                        class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600 dark:text-gray-300"
                        aria-label="toggle menu">
                        <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                            <path fill-rule="evenodd"
                                d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                            </path>
                        </svg>
                    </button>
                </div>

                <!-- Logo (Center) -->
                <div class="flex-shrink-0">
                    <Link href="/" class="text-2xl font-bold text-purple-600">VCC's World</Link>
                </div>

                <!-- Cart & Theme Switcher (Right) -->
                <div class="flex items-center space-x-4">
                    <button class="relative text-purple-600 group">
                        <ShoppingCart class="w-6 h-6" />
                        <span
                            class="absolute flex items-center justify-center w-5 h-5 text-xs text-white bg-purple-600 rounded-full -top-2 -right-2">0</span>
                    </button>
                    <ThemeSwitcher />
                </div>
            </div>

            <!-- Desktop Header -->
            <div class="items-center justify-between hidden md:flex">
                <!-- Logo (Left) -->
                <div class="flex-shrink-0">
                    <Link href="/" class="text-2xl font-bold text-purple-600">VCC's World</Link>
                </div>

                <!-- Desktop Navigation -->
                <div class="flex items-center justify-between flex-1">
                    <!-- Navigation Links (Center) -->
                    <div class="flex justify-center flex-1">
                        <div class="flex space-x-12">
                            <Link :href="route('home')"
                                class="relative text-sm font-semibold tracking-wide text-gray-800 transition-all duration-300 hover:text-purple-600 group dark:text-white"
                                :class="{
                                    'text-purple-600': isActive(route('home')),
                                }">
                            <span class="relative">
                                HOME
                                <span
                                    class="absolute -bottom-2 left-0 w-full h-0.5 bg-purple-600 transform transition-transform duration-300"
                                    :class="isActive(route('home'))
                                        ? 'scale-x-100'
                                        : 'scale-x-0 group-hover:scale-x-100'
                                        "></span>
                            </span>
                            </Link>
                            <Link :href="route('products')"
                                class="relative text-sm font-semibold tracking-wide text-gray-800 transition-all duration-300 hover:text-purple-600 group dark:text-white"
                                :class="{
                                    'text-purple-600': isActive(
                                        route('products')
                                    ),
                                }">
                            <span class="relative">
                                SHOP
                                <span
                                    class="absolute -bottom-2 left-0 w-full h-0.5 bg-purple-600 transform transition-transform duration-300"
                                    :class="isActive(route('products'))
                                        ? 'scale-x-100'
                                        : 'scale-x-0 group-hover:scale-x-100'
                                        "></span>
                            </span>
                            </Link>
                        </div>
                    </div>

                    <!-- Auth Buttons (Right) -->
                    <div class="flex items-center space-x-6">
                        <button class="relative text-purple-600 group">
                            <ShoppingCart
                                class="w-6 h-6 transition-transform duration-300 transform group-hover:scale-110" />
                            <span
                                class="absolute flex items-center justify-center w-5 h-5 text-xs text-white transition-transform duration-300 transform bg-purple-600 rounded-full -top-2 -right-2 group-hover:scale-110">0</span>
                        </button>

                        <div class="flex space-x-3" v-if="!$page.props.auth.user">
                            <Link :href="route('login')"
                                class="px-6 py-2 font-semibold text-purple-600 transition-all duration-300 border-2 border-purple-600 rounded-full hover:bg-purple-600 hover:text-white hover:shadow-lg">
                            Login
                            </Link>
                            <Link :href="route('register')"
                                class="px-6 py-2 text-white font-semibold bg-purple-600 rounded-full transition-all duration-300 hover:bg-purple-700 hover:shadow-lg hover:-translate-y-0.5">
                            Register
                            </Link>
                        </div>
                        <div v-else class="relative" ref="desktopDropdownContainer">
                            <button @click="dropdownOpen = !dropdownOpen"
                                class="flex items-center space-x-3 focus:outline-none">
                                <span class="text-gray-800 dark:text-white">Hello,
                                    {{ $page.props.auth.user.name }}</span>
                                <svg class="w-4 h-4 text-gray-800 dark:text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div v-show="dropdownOpen"
                                class="absolute right-0 w-48 py-2 mt-2 bg-white rounded-md shadow-xl dark:bg-gray-700">
                                <Link :href="$page.props.auth.user.role === 'admin'
                                    ? route('admin.dashboard')
                                    : route('customer.dashboard')
                                    "
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600">
                                Dashboard</Link>
                                <Link :href="route('logout')" method="post" as="button"
                                    class="block w-full px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600">
                                Logout</Link>
                            </div>
                        </div>

                        <ThemeSwitcher />
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div :class="[isOpen ? 'flex' : 'hidden']" class="flex-col mt-2 space-y-4 md:hidden">
            <!-- Mobile Navigation Links -->
            <div class="flex flex-col space-y-4">
                <Link :href="route('home')" class="relative text-gray-700 hover:text-purple-600 group dark:text-white"
                    :class="{
                        'text-purple-600 font-semibold': isActive(
                            route('home')
                        ),
                    }">
                HOME
                <span
                    class="absolute -bottom-1 left-0 w-full h-0.5 bg-purple-600 transform transition-transform duration-300"
                    :class="isActive(route('home'))
                        ? 'scale-x-100'
                        : 'scale-x-0 group-hover:scale-x-100'
                        "></span>
                </Link>
                <Link :href="route('products')"
                    class="relative text-gray-700 hover:text-purple-600 group dark:text-white" :class="{
                        'text-purple-600 font-semibold': isActive(
                            route('products')
                        ),
                    }">
                SHOP
                <span
                    class="absolute -bottom-1 left-0 w-full h-0.5 bg-purple-600 transform transition-transform duration-300"
                    :class="isActive(route('products'))
                        ? 'scale-x-100'
                        : 'scale-x-0 group-hover:scale-x-100'
                        "></span>
                </Link>
            </div>

            <!-- Mobile Auth Buttons -->
            <div class="flex flex-col pt-4 space-y-4 border-t dark:border-gray-700">
                <div v-if="!$page.props.auth.user" class="flex flex-col space-y-4">
                    <Link :href="route('login')"
                        class="px-6 py-2 text-center text-purple-600 transition border-2 border-purple-600 rounded-full hover:bg-purple-600 hover:text-white">
                    Login</Link>
                    <Link :href="route('register')"
                        class="px-6 py-2 text-center text-white bg-purple-600 rounded-full hover:bg-purple-700">Register
                    </Link>
                </div>
                <div v-else class="relative" ref="mobileDropdownContainer">
                    <button @click="mobileDropdownOpen = !mobileDropdownOpen"
                        class="flex items-center justify-center w-full py-2 text-center text-gray-800 dark:text-white">
                        <span>Hello, {{ $page.props.auth.user.name }}</span>
                        <svg :class="{ 'rotate-180': mobileDropdownOpen }" class="w-4 h-4 ml-2 transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div v-show="mobileDropdownOpen" class="mt-2 space-y-2">
                        <Link href="/"
                            class="block px-6 py-2 text-center text-white bg-purple-600 rounded-full hover:bg-purple-700">
                        Dashboard</Link>
                        <Link :href="route('logout')" method="post" as="button"
                            class="w-full px-6 py-2 text-center text-white bg-red-600 rounded-full hover:bg-red-700">
                        Logout</Link>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</template>
<script setup>
import { ref, onMounted, onUnmounted, computed } from "vue";
import { Link, usePage } from "@inertiajs/vue3";
import { ShoppingCart } from "lucide-vue-next";
import ThemeSwitcher from "./ThemeSwitcher.vue";

const page = usePage();
const currentRoute = computed(() => page.url);
const dropdownOpen = ref(false);
const mobileDropdownOpen = ref(false);
const isOpen = ref(false);
const isScrolled = ref(false);
const desktopDropdownContainer = ref(null);
const mobileDropdownContainer = ref(null);

const isActive = (path) => {
    const url = new URL(path);
    return url.pathname === page.url;
};

const handleScroll = () => {
    if (window.scrollY > 50) {
        isScrolled.value = true;
    } else {
        isScrolled.value = false;
    }
};

const handleClickOutside = (event) => {
    if (
        desktopDropdownContainer.value &&
        !desktopDropdownContainer.value.contains(event.target)
    ) {
        dropdownOpen.value = false;
    }
    if (
        mobileDropdownContainer.value &&
        !mobileDropdownContainer.value.contains(event.target)
    ) {
        mobileDropdownOpen.value = false;
    }
};

onMounted(() => {
    window.addEventListener("scroll", handleScroll);
    document.addEventListener("click", handleClickOutside);
});

onUnmounted(() => {
    window.removeEventListener("scroll", handleScroll);
    document.removeEventListener("click", handleClickOutside);
});
</script>
