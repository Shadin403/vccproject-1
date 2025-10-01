<style scoped></style>

<template>
    <p class="font-bold text-red-700">{{ message }}</p>
</template>

<script setup>
defineProps({
    message: String,
});
</script>
