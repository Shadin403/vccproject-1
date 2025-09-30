<script setup>
import Hero from "@/Components/Hero.vue";
import Stats from "@/Components/Stats.vue";
import Partners from "@/Components/Partners.vue";
import Features from "@/Components/Features.vue";
import PaymentsHome from "@/Components/PaymentsHome.vue";
import FAQSection from "@/Components/FAQSection.vue";
import QuickDeliverySection from "@/Components/QuickDeliverySection.vue";
</script>

<template>
    <!-- Hero Section -->
    <hero
        v-motion
        :initial="{
            opacity: 0,
            y: 100,
        }"
        :enter="{
            opacity: 1,
            y: 0,
        }"
    />
    <!-- Stats Section -->
    <stats
        v-motion
        :initial="{
            opacity: 0,
            y: 100,
        }"
        :visibleOnce="{
            opacity: 1,
            y: 0,
        }"
    />
    <!-- Partners -->
    <partners
        v-motion
        :initial="{
            opacity: 0,
            y: 100,
        }"
        :visibleOnce="{
            opacity: 1,
            y: 0,
        }"
    />
    <!-- Features Section -->
    <features
        v-motion
        :initial="{
            opacity: 0,
            y: 100,
        }"
        :visibleOnce="{
            opacity: 1,
            y: 0,
        }"
    />
    <!-- Payments Section -->
    <payments-home
        v-motion
        :initial="{
            opacity: 0,
            y: 100,
        }"
        :visibleOnce="{
            opacity: 1,
            y: 0,
        }"
    />
    <!-- Quick Delivery Section -->
    <quick-delivery-section
        v-motion
        :initial="{
            opacity: 0,
            y: 100,
        }"
        :visibleOnce="{
            opacity: 1,
            y: 0,
        }"
    />
    <!-- FAQ Section -->
    <f-a-q-section
        v-motion
        :initial="{
            opacity: 0,
            y: 100,
        }"
        :visibleOnce="{
            opacity: 1,
            y: 0,
        }"
    />
</template>
