<script setup>
import Navigation from "@/Components/Navigation.vue";
import Hero from "@/Components/Hero.vue";
import Stats from "@/Components/Stats.vue";
import Partners from "@/Components/Partners.vue";
import Features from "@/Components/Features.vue";
import PaymentsHome from "@/Components/PaymentsHome.vue";
import FAQSection from "@/Components/FAQSection.vue";
import Footer from "@/Components/Footer.vue";
import QuickDeliverySection from "@/Components/QuickDeliverySection.vue";
</script>

<template>
    <!-- Navigation -->
    <Navigation />
    <!-- Hero Section -->
    <hero />
    <!-- Stats Section -->
    <stats />
    <!-- Partners -->
    <partners />
    <!-- Features Section -->
    <features />
    <!-- Payments Section -->
    <payments-home />
    <!-- Quick Delivery Section -->
    <quick-delivery-section />
    <!-- FAQ Section -->
    <f-a-q-section />
    <!-- Footer -->
    <Footer />
</template>
