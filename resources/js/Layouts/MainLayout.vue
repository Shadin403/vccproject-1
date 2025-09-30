<template>
    <div>
        <Navigation />
        <main>
            <slot />
        </main>
        <Footer />
    </div>
</template>

<script setup>
import Navigation from "@/Components/Navigation.vue";
import Footer from "@/Components/Footer.vue";
</script>
