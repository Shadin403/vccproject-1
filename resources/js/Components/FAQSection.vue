<script setup>
import { ref } from "vue";

const faqs = ref([
    {
        id: 1,
        question: "Is VCC's World accepted globally?",
        answer: "Yes, VCC's World is accepted at millions of merchants worldwide wherever Visa and MasterCard are accepted.",
        isOpen: false,
    },
    {
        id: 2,
        question: "Can I use cryptocurrency with VCC's World?",
        answer: "Absolutely! You can fund your VCC's World virtual credit card using various cryptocurrencies.",
        isOpen: false,
    },
    {
        id: 3,
        question: "Can VCC's World see my personal details?",
        answer: "We value your privacy. We only collect minimal information required for account creation and security.",
        isOpen: false,
    },
    {
        id: 4,
        question: "Do you offer a money-back guarantee?",
        answer: "Yes, we offer a money-back guarantee. Contact our support team for more details.",
        isOpen: false,
    },
    {
        id: 5,
        question: "How can I get help with my VCC?",
        answer: "Our support team is available 24/7 through live chat, email, and phone to assist you.",
        isOpen: false,
    },
]);

const toggleFAQ = (faq) => {
    faq.isOpen = !faq.isOpen;
};
</script>

<template>
    <section class="container px-6 py-20 mx-auto">
        <h2 class="mb-12 text-4xl font-bold text-center dark:text-white">
            Frequently Asked <span class="text-purple-600">Questions</span>
        </h2>
        <div class="max-w-3xl mx-auto space-y-4">
            <div
                v-for="faq in faqs"
                :key="faq.id"
                class="p-6 transition bg-white rounded-lg shadow cursor-pointer dark:bg-gray-800 hover:shadow-lg"
                @click="toggleFAQ(faq)"
            >
                <div class="flex items-center justify-between">
                    <h3 class="font-semibold dark:text-white">
                        {{ faq.question }}
                    </h3>
                    <span class="text-2xl dark:text-white">{{
                        faq.isOpen ? "−" : "+"
                    }}</span>
                </div>
                <div
                    class="mt-4 text-gray-600 dark:text-gray-300"
                    :class="{ hidden: !faq.isOpen }"
                >
                    {{ faq.answer }}
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped></style>
