<template>
    <Link
        :href="route(routeName)"
        class="relative text-sm font-semibold tracking-wide text-gray-800 transition-all duration-300 hover:text-purple-600 group dark:text-white"
        :class="{
            'text-purple-600': isActive(route(routeName)),
        }"
    >
        <span class="relative">
            <slot></slot>
            <span
                class="absolute -bottom-2 left-0 w-full h-0.5 bg-purple-600 transform transition-transform duration-300"
                :class="
                    isActive(route(routeName))
                        ? 'scale-x-100'
                        : 'scale-x-0 group-hover:scale-x-100'
                "
            ></span>
        </span>
    </Link>
</template>

<script setup>
defineProps({
    routeName: String,
});
</script>
