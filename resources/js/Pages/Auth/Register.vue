<template>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="max-w-md w-full bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-8">
                Create an Account
            </h2>
            <form @submit.prevent="register">
                <div class="mb-4">
                    <label
                        for="name"
                        class="block text-gray-700 text-sm font-bold mb-2"
                        >Name</label
                    >
                    <input
                        type="text"
                        id="name"
                        v-model="form.name"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        placeholder="Enter your name"
                        required
                    />
                </div>
                <div class="mb-4">
                    <label
                        for="email"
                        class="block text-gray-700 text-sm font-bold mb-2"
                        >Email Address</label
                    >
                    <input
                        type="email"
                        id="email"
                        v-model="form.email"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        placeholder="Enter your email"
                        required
                    />
                </div>
                <div class="mb-4">
                    <label
                        for="password"
                        class="block text-gray-700 text-sm font-bold mb-2"
                        >Password</label
                    >
                    <input
                        type="password"
                        id="password"
                        v-model="form.password"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        placeholder="******************"
                        required
                    />
                </div>
                <div class="mb-6">
                    <label
                        for="password_confirmation"
                        class="block text-gray-700 text-sm font-bold mb-2"
                        >Confirm Password</label
                    >
                    <input
                        type="password"
                        id="password_confirmation"
                        v-model="form.password_confirmation"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        placeholder="******************"
                        required
                    />
                </div>
                <div class="flex items-center justify-between">
                    <button
                        :disabled="form.processing"
                        type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    >
                        <span v-if="!form.processing">Register</span>
                        <span v-else>Registering...</span>
                    </button>
                    <a
                        href="/login"
                        class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800"
                    >
                        Already have an account?
                    </a>
                </div>
            </form>
        </div>
    </div>
</template>

<script setup>
import { reactive } from "vue";
import { router } from "@inertiajs/vue3";

const form = reactive({
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
});

const register = () => {
    router.post(route("register"), form, {
        onFinish: () => (form.processing = false),
        onSuccess: () => {
            // Redirect will be handled automatically
        },
        onError: (errors) => {
            console.error(errors);
        },
    });
    form.processing = true;
};
</script>
