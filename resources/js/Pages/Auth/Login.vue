<template>
    <div
        class="flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900"
    >
        <div
            class="w-full max-w-md p-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
        >
            <h2
                class="mb-8 text-2xl font-bold text-center text-gray-800 dark:text-white"
            >
                Login to Your Account
            </h2>
            <form @submit.prevent="login">
                <!-- Email -->
                <div class="mb-4">
                    <InputField
                        label="Email"
                        icon="envelope"
                        v-model="form.email"
                        type="email"
                        placeholder="Enter your email"
                    />
                    <ValidationErrorMessages
                        v-if="form.errors.email"
                        :message="form.errors.email"
                    />
                </div>

                <!-- Password -->

                <div class="mb-4">
                    <InputField
                        label="Password"
                        icon="lock"
                        v-model="form.password"
                        type="password"
                        placeholder="Enter your password"
                    />

                    <ValidationErrorMessages
                        v-if="form.errors.password"
                        :message="form.errors.password"
                    />
                </div>

                <!-- Remember -->
                <div class="flex items-center mb-4">
                    <input
                        class="mr-2"
                        type="checkbox"
                        id="remember"
                        v-model="form.remember"
                    />
                    <label
                        for="remember"
                        class="block text-sm font-bold text-gray-700 dark:text-gray-300"
                    >
                        Remember Me
                    </label>
                </div>

                <!-- Submit button -->
                <AuthButton
                    buttonTextIF="Login"
                    buttonTextElse="Logging in..."
                    routeName="register"
                    linkText="Don't have an account?"
                    :form="form"
                />
            </form>
        </div>
    </div>
</template>

<script setup>
import { useForm } from "@inertiajs/vue3";
import InputField from "../../Components/InputField.vue";
import AuthButton from "../../Components/AuthButton.vue";
import ValidationErrorMessages from "../../Components/ValidationErrorMessages.vue";

const form = useForm({
    email: "",
    password: "",
    remember: false,
});

const login = () => {
    form.post(route("login"), {
        onFinish: () => form.reset("password"), // password clear হবে
    });
};
</script>
