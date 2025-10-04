<template>
    <main class="min-h-screen bg-gray-50 dark:bg-gray-900">
        <!-- Mobile Filter Toggle Button -->
        <button @click="sidebarOpen = !sidebarOpen"
            class="fixed z-40 p-4 text-white transition-all duration-300 bg-purple-600 rounded-full shadow-lg bottom-6 left-6 lg:hidden hover:bg-purple-700 hover:scale-110">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4">
                </path>
            </svg>
        </button>

        <!-- Sidebar Overlay (Mobile) -->
        <div v-if="sidebarOpen" @click="sidebarOpen = false"
            class="fixed inset-0 z-40 bg-black bg-opacity-50 lg:hidden"></div>

        <div class="flex">
            <!-- Left Sidebar Filter -->
            <aside :class="[
                'fixed lg:sticky top-0 h-screen bg-white shadow-xl z-50 transition-transform duration-300 ease-in-out dark:bg-gray-800',
                'w-80 overflow-y-auto',
                sidebarOpen
                    ? 'translate-x-0'
                    : '-translate-x-full lg:translate-x-0',
            ]">
                <div class="p-6">
                    <!-- Sidebar Header -->
                    <div class="flex items-center justify-between mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white">
                            Filters
                        </h2>
                        <button @click="sidebarOpen = false"
                            class="text-gray-500 lg:hidden hover:text-gray-700 dark:text-gray-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Card Type Filter -->
                    <div class="mb-6">
                        <label class="block mb-3 text-sm font-bold text-gray-900 dark:text-white">Card Type</label>
                        <div class="space-y-2">
                            <label
                                class="flex items-center p-3 transition border-2 border-gray-200 rounded-lg cursor-pointer hover:border-purple-600 dark:border-gray-700 dark:hover:border-purple-500">
                                <input type="radio" v-model="filters.cardType" value="all"
                                    class="w-4 h-4 text-purple-600 focus:ring-purple-500" />
                                <span class="ml-3 text-gray-700 dark:text-gray-300">All Types</span>
                            </label>
                            <label
                                class="flex items-center p-3 transition border-2 border-gray-200 rounded-lg cursor-pointer hover:border-purple-600 dark:border-gray-700 dark:hover:border-purple-500">
                                <input type="radio" v-model="filters.cardType" value="visa"
                                    class="w-4 h-4 text-purple-600 focus:ring-purple-500" />
                                <span class="ml-3 text-gray-700 dark:text-gray-300">Visa</span>
                            </label>
                            <label
                                class="flex items-center p-3 transition border-2 border-gray-200 rounded-lg cursor-pointer hover:border-purple-600 dark:border-gray-700 dark:hover:border-purple-500">
                                <input type="radio" v-model="filters.cardType" value="mastercard"
                                    class="w-4 h-4 text-purple-600 focus:ring-purple-500" />
                                <span class="ml-3 text-gray-700 dark:text-gray-300">Mastercard</span>
                            </label>
                        </div>
                    </div>

                    <!-- Other filters here... -->
                    <!-- Validity Filter -->
                    <div class="mb-6">
                        <label class="block mb-3 text-sm font-bold text-gray-900 dark:text-white">Validity
                            Period</label>
                        <select v-model="filters.validity"
                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-purple-600 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            <option value="all">All Periods</option>
                            <option value="1">1 Month</option>
                            <option value="3">3 Months</option>
                            <option value="6">6 Months</option>
                            <option value="12">12 Months</option>
                        </select>
                    </div>

                    <!-- Balance Filter -->
                    <div class="mb-6">
                        <label class="block mb-3 text-sm font-bold text-gray-900 dark:text-white">Balance Amount</label>
                        <select v-model="filters.balance"
                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-purple-600 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            <option value="all">All Amounts</option>
                            <option value="50">$50</option>
                            <option value="100">$100</option>
                            <option value="250">$250</option>
                            <option value="500">$500</option>
                            <option value="1000">$1000</option>
                        </select>
                    </div>

                    <!-- Product Type Filter -->
                    <div class="mb-6">
                        <label class="block mb-3 text-sm font-bold text-gray-900 dark:text-white">Product Type</label>
                        <div class="space-y-2">
                            <label
                                class="flex items-center p-3 transition border-2 border-gray-200 rounded-lg cursor-pointer hover:border-purple-600 dark:border-gray-700 dark:hover:border-purple-500">
                                <input type="radio" v-model="filters.productType" value="all"
                                    class="w-4 h-4 text-purple-600 focus:ring-purple-500" />
                                <span class="ml-3 text-gray-700 dark:text-gray-300">All Products</span>
                            </label>
                            <label
                                class="flex items-center p-3 transition border-2 border-gray-200 rounded-lg cursor-pointer hover:border-purple-600 dark:border-gray-700 dark:hover:border-purple-500">
                                <input type="radio" v-model="filters.productType" value="simple"
                                    class="w-4 h-4 text-purple-600 focus:ring-purple-500" />
                                <span class="ml-3 text-gray-700 dark:text-gray-300">Simple Products</span>
                            </label>
                            <label
                                class="flex items-center p-3 transition border-2 border-gray-200 rounded-lg cursor-pointer hover:border-purple-600 dark:border-gray-700 dark:hover:border-purple-500">
                                <input type="radio" v-model="filters.productType" value="variation"
                                    class="w-4 h-4 text-purple-600 focus:ring-purple-500" />
                                <span class="ml-3 text-gray-700 dark:text-gray-300">Variation Products</span>
                            </label>
                        </div>
                    </div>

                    <!-- Reset Filters Button -->
                    <button @click="resetFilters"
                        class="w-full px-6 py-3 text-purple-600 transition border-2 border-purple-600 rounded-lg hover:bg-purple-50 dark:text-purple-400 dark:border-purple-400 dark:hover:bg-gray-700">
                        Reset Filters
                    </button>
                </div>
            </aside>

            <!-- Main Content Area -->
            <div class="flex-1 w-full lg:ml-0">
                <!-- Hero Section -->
                <section class="px-6 py-12 bg-gradient-to-r from-purple-600 to-purple-800">
                    <div class="mx-auto max-w-7xl">
                        <div class="text-center text-white">
                            <h1 class="mb-4 text-5xl font-bold">
                                Shop
                                <span class="text-yellow-300">Virtual Credit Cards</span>
                            </h1>
                            <p class="text-lg text-purple-100">
                                Choose from our wide selection of VCC cards for
                                secure online payments
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Products Grid -->
                <section class="p-4 sm:p-6 lg:p-8">
                    <div class="mx-auto max-w-7xl">
                        <!-- Results Header -->
                        <div class="flex flex-col items-start justify-between gap-4 mb-8 sm:flex-row sm:items-center">
                            <p class="text-lg text-gray-600 dark:text-gray-400">
                                Showing
                                <span class="font-bold text-purple-600 dark:text-purple-400">{{ filteredProducts.length
                                }}</span>
                                products
                            </p>
                            <div class="flex gap-2">
                                <button @click="viewMode = 'grid'" :class="[
                                    'p-2 rounded-lg transition',
                                    viewMode === 'grid'
                                        ? 'bg-purple-600 text-white'
                                        : 'bg-gray-200 text-gray-600 hover:bg-gray-300 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600',
                                ]">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                                        </path>
                                    </svg>
                                </button>
                                <button @click="viewMode = 'list'" :class="[
                                    'p-2 rounded-lg transition',
                                    viewMode === 'list'
                                        ? 'bg-purple-600 text-white'
                                        : 'bg-gray-200 text-gray-600 hover:bg-gray-300 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600',
                                ]">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6h16M4 12h16M4 18h16"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Products Grid/List Container -->
                        <div v-if="filteredProducts.length > 0" :class="[
                            'gap-6',
                            viewMode === 'grid'
                                ? 'grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4'
                                : 'flex flex-col',
                        ]">
                            <!-- Product Card Loop -->
                            <div v-for="product in filteredProducts" :key="product.id" :class="[
                                'group bg-white rounded-lg shadow-sm overflow-hidden transition-all duration-300 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 hover:shadow-lg hover:border-purple-300 dark:hover:border-purple-500',
                                viewMode === 'list' ? 'flex flex-row' : 'flex flex-col h-[420px]',
                            ]">
                                <!-- Product Image Container -->
                                <div :class="[
                                    'relative overflow-hidden',
                                    viewMode === 'list' ? 'w-1/3 flex-shrink-0' : 'w-full h-40',
                                ]">
                                    <img :src="product.image" :alt="product.name" :class="[
                                        'object-cover transition-transform duration-300 group-hover:scale-105',
                                        viewMode === 'list' ? 'w-full h-full' : 'w-full h-full',
                                    ]" />
                                </div>

                                <!-- Product Info Container -->
                                <div class="flex flex-col flex-1 p-6">
                                    <div class="flex-grow">
                                        <div class="flex items-start justify-between mb-2">
                                            <h3
                                                class="text-lg font-semibold text-gray-900 dark:text-white line-clamp-2">
                                                {{ product.name }}
                                            </h3>
                                            <span :class="[
                                                'flex-shrink-0 ml-2 px-2.5 py-0.5 text-xs font-semibold text-white rounded-full',
                                                product.productType === 'variation'
                                                    ? 'bg-gradient-to-r from-purple-600 to-purple-800'
                                                    : 'bg-gradient-to-r from-pink-500 to-red-500',
                                            ]">
                                                {{ product.productType === "variation" ? "Variation" : "Simple" }}
                                            </span>
                                        </div>
                                        <p class="mt-1 mb-3 text-sm text-gray-500 dark:text-gray-400 line-clamp-3">
                                            {{ product.description }}
                                        </p>
                                    </div>

                                    <!-- Product Details Badges -->
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <span
                                            class="px-2.5 py-1 text-xs font-medium text-purple-700 bg-purple-100 rounded-full dark:bg-purple-900/50 dark:text-purple-300">
                                            {{ product.cardType === "visa" ? "Visa" : "Mastercard" }}
                                        </span>
                                        <span
                                            class="px-2.5 py-1 text-xs font-medium text-blue-700 bg-blue-100 rounded-full dark:bg-blue-900/50 dark:text-blue-300">
                                            {{ product.validity }} Month{{ product.validity > 1 ? "s" : "" }}
                                        </span>
                                        <span
                                            class="px-2.5 py-1 text-xs font-medium text-green-700 bg-green-100 rounded-full dark:bg-green-900/50 dark:text-green-300">
                                            ${{ product.balance }} Balance
                                        </span>
                                    </div>

                                    <!-- Variation Selector -->
                                    <div v-if="product.productType === 'variation'" class="mb-4">
                                        <select v-model="selectedVariations[product.id]"
                                            class="w-full px-3 py-2 text-sm border-2 border-gray-200 rounded-lg focus:border-purple-600 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                            <option v-for="(variation, index) in product.variations" :key="index"
                                                :value="variation">
                                                {{ variation.label }} - ${{ variation.price }}
                                            </option>
                                        </select>
                                    </div>

                                    <!-- Price and Add to Cart Button -->
                                    <div class="flex items-center justify-between mt-auto">
                                        <p class="text-xl font-bold text-purple-600 dark:text-purple-400">
                                            ${{ getProductPrice(product) }}
                                        </p>
                                        <button @click="addToCart(product)"
                                            class="px-4 py-2 text-sm font-semibold text-white transition-all duration-300 transform bg-purple-600 rounded-lg shadow-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-opacity-50 hover:scale-105 dark:bg-purple-500 dark:hover:bg-purple-600">
                                            Add to Cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- No Products Found -->
                        <div v-else class="py-20 text-center">
                            <svg class="w-24 h-24 mx-auto mb-4 text-gray-300 dark:text-gray-600" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                            <h3 class="mb-2 text-2xl font-bold text-gray-900 dark:text-white">
                                No Products Found
                            </h3>
                            <p class="mb-6 text-gray-600 dark:text-gray-400">
                                Try adjusting your filters to see more results
                            </p>
                            <button @click="resetFilters"
                                class="px-6 py-3 text-white transition bg-purple-600 rounded-lg hover:bg-purple-700 dark:bg-purple-500 dark:hover:bg-purple-600">
                                Reset Filters
                            </button>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
</template>
<script setup>
import { ref, computed } from "vue";

const sidebarOpen = ref(false);
const viewMode = ref("grid");

const filters = ref({
    cardType: "all",
    validity: "all",
    balance: "all",
    productType: "all",
});

const selectedVariations = ref({});

// Static Products Data
const products = ref([
    {
        id: 1,
        name: "Visa Virtual Card - Basic",
        price: 25,
        balance: 50,
        validity: 1,
        cardType: "visa",
        productType: "simple",
        image: "https://bd.visa.com/dam/VCOM/regional/ap/bangladesh/global-elements/images/bd-visa-gold-card-498x280.png",
        description: "Perfect for small online purchases and subscriptions",
    },
    {
        id: 2,
        name: "Mastercard Premium - Standard",
        price: 45,
        balance: 100,
        validity: 3,
        cardType: "mastercard",
        productType: "simple",
        image: "https://bd.visa.com/dam/VCOM/regional/ap/bangladesh/global-elements/images/bd-visa-gold-card-498x280.png",
        description: "Ideal for regular showpping and online transactions",
    },
    {
        id: 3,
        name: "Visa Virtual Card - Pro",
        price: 95,
        balance: 250,
        validity: 6,
        cardType: "visa",
        productType: "variation",
        image: "https://bd.visa.com/dam/VCOM/regional/ap/bangladesh/global-elements/images/bd-visa-gold-card-498x280.png",
        description: "Multiple balance optwions for flexible usage",
        variations: [
            { label: "$250 Balance", price: 95, balance: 250 },
            { label: "$300 Balance", price: 110, balance: 300 },
            { label: "$350 Balance", price: 125, balance: 350 },
        ],
    },
    {
        id: 4,
        name: "Mastercard Business Elite",
        price: 180,
        balance: 500,
        valwidity: 12,
        cardType: "mastercard",
        productType: "variation",
        image: "https://bd.visa.com/dam/VCOM/regional/ap/bangladesh/global-elements/images/bd-visa-gold-card-498x280.png",
        description: "Premium card for business and high-value transactions",
        variations: [
            { label: "$500 Balance", price: 180, balance: 500 },
            { label: "$750 Balance", price: 250, balance: 750 },
            { label: "$1000 Balance", price: 320, balance: 1000 },
        ],
    },
    {
        id: 5,
        nawme: "Visa Elite - Premium",
        price: 350,
        balance: 1000,
        validity: 12,
        cardType: "visa",
        productType: "simple",
        image: "https://bd.visa.com/dam/VCOM/regional/ap/bangladesh/global-elements/images/bd-visa-gold-card-498x280.png",
        description: "Top-tier virtual card with maximum benefits",
    },
    {
        id: 6,
        name: "Mastercard Standard - Basic",
        price: 35,
        balance: 75,
        validity: 3,
        cardType: "mastercard",
        productType: "simple",
        image: "https://bd.visa.com/dam/VCOM/regional/ap/bangladesh/global-elements/images/bd-visa-gold-card-498x280.png",
        description: "Affordable option for regular online shopping",
    },
    {
        id: 7,
        name: "Visa Pro - Flexible",
        price: 65,
        balance: 150,
        validity: 6,
        cardType: "visa",
        productType: "variation",
        image: "https://bd.visa.com/dam/VCOM/regional/ap/bangladesh/global-elements/images/bd-visa-gold-card-498x280.png",
        description: "Choose your preferred balance amount",
        variations: [
            { label: "$150 Balance", price: 65, balance: 150 },
            { label: "$200 Balance", price: 85, balance: 200 },
        ],
    },
    {
        id: 8,
        name: "Mastercard Gold - Premium",
        price: 280,
        balance: 750,
        validity: 12,
        cardType: "mastercard",
        productType: "simple",
        image: "https://bd.visa.com/dam/VCOM/regional/ap/bangladesh/global-elements/images/bd-visa-gold-card-498x280.png",
        description: "Premium card with extended validity",
    },
]);

// Filtered Products
const filteredProducts = computed(() => {
    return products.value.filter((product) => {
        if (
            filters.value.cardType !== "all" &&
            product.cardType !== filters.value.cardType
        )
            return false;
        if (
            filters.value.validity !== "all" &&
            product.validity !== parseInt(filters.value.validity)
        )
            return false;
        if (
            filters.value.balance !== "all" &&
            product.balance !== parseInt(filters.value.balance)
        )
            return false;
        if (
            filters.value.productType !== "all" &&
            product.productType !== filters.value.productType
        )
            return false;
        return true;
    });
});

// Get Product Price (considering variations)
const getProductPrice = (product) => {
    if (
        product.productType === "variation" &&
        selectedVariations.value[product.id]
    ) {
        return selectedVariations.value[product.id].price;
    }
    return product.price;
};

// Initialize variations with first option
products.value.forEach((product) => {
    if (product.productType === "variation" && product.variations) {
        selectedVariations.value[product.id] = product.variations[0];
    }
});

// Reset Filters
const resetFilters = () => {
    filters.value = {
        cardType: "all",
        validity: "all",
        balance: "all",
        productType: "all",
    };
};

// Add to Cart
const addToCart = (product) => {
    const selectedProduct = {
        ...product,
        selectedPrice: getProductPrice(product),
        selectedVariation:
            product.productType === "variation"
                ? selectedVariations.value[product.id]
                : null,
    };
    console.log("Added to cart:", selectedProduct);
    alert(`${product.name} added to cart!`);
};
</script>
