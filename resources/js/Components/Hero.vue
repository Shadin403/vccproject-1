<script setup>
import { Link } from "@inertiajs/vue3";
import cardImage from "../../../public/images/cardImage.png";
</script>

<template>
    <section class="container px-6 py-20 mx-auto">
        <div class="grid items-center gap-12 md:grid-cols-2">
            <div
                v-motion
                :initial="{
                    opacity: 0,
                    y: 100,
                }"
                :enter="{
                    opacity: 1,
                    y: 0,
                    transition: {
                        delay: 100,
                    },
                }"
            >
                <h1
                    class="mb-4 text-5xl font-bold text-gray-900"
                    v-motion
                    :initial="{
                        opacity: 0,
                        y: 100,
                    }"
                    :enter="{
                        opacity: 1,
                        y: 0,
                        transition: {
                            delay: 200,
                        },
                    }"
                >
                    Make Online Payments<br />Safer With
                    <span class="text-purple-600">VCC's World</span>
                </h1>
                <p
                    class="mb-8 text-gray-600"
                    v-motion
                    :initial="{
                        opacity: 0,
                        y: 100,
                    }"
                    :enter="{
                        opacity: 1,
                        y: 0,
                        transition: {
                            delay: 300,
                        },
                    }"
                >
                    Let us help you make virtual payments quicker, easier, and
                    safer than ever before.
                </p>
                <Link
                    :href="route('products')"
                    class="px-8 py-3 mb-12 mt-1 text-white transition bg-purple-600 rounded-full hover:bg-purple-700"
                    v-motion
                    :initial="{
                        opacity: 0,
                        y: 100,
                    }"
                    :enter="{
                        opacity: 1,
                        y: 0,
                        transition: {
                            delay: 400,
                        },
                    }"
                >
                    Get Your Card →
                </Link>
                <div
                    class="flex items-center space-x-4"
                    v-motion
                    :initial="{
                        opacity: 0,
                        y: 100,
                    }"
                    :enter="{
                        opacity: 1,
                        y: 0,
                        transition: {
                            delay: 500,
                        },
                    }"
                >
                    <div class="flex -space-x-2 mt-[15px]">
                        <img
                            src="https://i.pravatar.cc/40?img=1"
                            class="w-10 h-10 border-2 border-white rounded-full"
                            alt="User"
                        />
                        <img
                            src="https://i.pravatar.cc/40?img=2"
                            class="w-10 h-10 border-2 border-white rounded-full"
                            alt="User"
                        />
                        <img
                            src="https://i.pravatar.cc/40?img=3"
                            class="w-10 h-10 border-2 border-white rounded-full"
                            alt="User"
                        />
                    </div>
                    <div class="mt-[15px]">
                        <div class="font-bold text-gray-900">10.2k+</div>
                        <div class="text-sm text-gray-600">
                            Active users around the world
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="relative float-animation"
                v-motion
                :initial="{
                    opacity: 0,
                    y: 100,
                }"
                :enter="{
                    opacity: 1,
                    y: 0,
                    transition: {
                        delay: 600,
                    },
                }"
            >
                <div class="relative w-full h-96">
                    <div
                        class="absolute transform -translate-x-1/2 -translate-y-1/2 bg-purple-500 rounded-full opacity-50 top-1/2 left-1/2 w-80 h-80"
                    ></div>
                    <div
                        class="absolute transform -translate-x-1/2 -translate-y-1/2 bg-purple-600 rounded-full top-1/2 left-1/2 w-72 h-72"
                    ></div>
                    <div
                        class="absolute p-4 transform -translate-x-1/2 -translate-y-1/2 rounded-lg top-1/2 left-1/4 rotate-12"
                    >
                        <img
                            style="height: auto; width: 400px"
                            :src="cardImage"
                            alt="Card Front"
                        />
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
