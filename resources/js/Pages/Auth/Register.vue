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
                Create an Account
            </h2>
            <form @submit.prevent="register">
                <div class="mb-4">
                    <InputField
                        label="Name"
                        icon="user"
                        v-model="form.name"
                        placeholder="Enter your name"
                    />
                    <ValidationErrorMessages
                        v-if="form.errors.name"
                        :message="form.errors.name"
                    />
                </div>

                <div class="mb-4">
                    <InputField
                        label="Email"
                        icon="envelope"
                        v-model="form.email"
                        placeholder="Enter your email"
                    />
                    <ValidationErrorMessages
                        v-if="form.errors.email"
                        :message="form.errors.email"
                    />
                </div>

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

                <div class="mb-4">
                    <InputField
                        label="Confirm Password"
                        icon="lock"
                        v-model="form.password_confirmation"
                        type="password"
                        placeholder="Enter your password confirmation"
                    />
                </div>
                <div class="mb-4">
                    <AuthButton
                        buttonTextIF="Register"
                        buttonTextElse="Registering..."
                        routeName="login"
                        linkText="Already have an account?"
                        :form="form"
                    />
                </div>
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
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
});

const register = () => {
    form.post(route("register"), {
        onFinish: () => form.reset("password", "password_confirmation"),
        onError: (errors) => {
            console.error(errors);
        },
    });
};
</script>
