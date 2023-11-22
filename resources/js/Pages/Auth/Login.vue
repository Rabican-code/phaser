<script setup>
import { Head, Link, useForm } from "@inertiajs/vue3";
import AuthenticationCard from "@/Components/AuthenticationCard.vue";
import AuthenticationCardLogo from "@/Components/AuthenticationCardLogo.vue";
import Checkbox from "@/Components/Checkbox.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { AcademicCapIcon } from '@heroicons/vue/24/outline'

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: "",
    password: "",
    remember: false,
});

const submit = () => {
    form.transform((data) => ({
        ...data,
        remember: form.remember ? "on" : "",
    })).post(route("login"), {
        onFinish: () => form.reset("password"),
    });
};
</script>

<template>
    <Head title="Login" />
    <div class="flex sm-m:flex-col-reverse">
        <div class="w-[100vw] ">

            <p class="w-[40vw] sm-m:w-[80vw] text-lg m-8 font-extrabold">
                Phasor - Australian electrical & construction standards AI chatbot
            </p>

            <div class="flex ml-24 mt-24  sm-m:h-[50vh]">
                <div class="w-[20vw]">
                    <form @submit.prevent="submit">
                        <div>
                            <div>
                                <div class="relative mt-2 rounded-md shadow-sm">
                                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                        <img src="../../../../public/img/safetyhat.png" class="h-5 w-5 text-green-400"
                                            aria-hidden="true" />
                                    </div>

                                    <input type="email" name="email" v-model="form.email" id="email" required autofocus
                                        class="sm-m:w-[50vw] block w-[25vw] rounded-full border-0 py-3 pl-10 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                        placeholder="Username and email" />
                                </div>
                            </div>
                            <InputError class="mt-2" :message="form.errors.email" />
                        </div>

                        <div class="mt-4">
                            <div>
                                <div class="relative mt-2 rounded-md shadow-sm">
                                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                        <img src="../../../../public/img/lock.png" class="h-5 w-5 text-green-400"
                                            aria-hidden="true" />
                                    </div>
                                    <input type="password" name="password" v-model="form.password" id="password" required
                                        class="sm-m:w-[50vw] block w-[25vw] rounded-full border-0 py-3 pl-10 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                        placeholder="Password" />
                                </div>
                            </div>
                            <InputError class="mt-2" :message="form.errors.password" />
                        </div>

                        <div class="block mt-4 w-[25vw]" >
                            <label class="flex sm-m:w-[40vw] items-center justify-end">
                                <Link v-if="canResetPassword" :href="route('password.request')"
                                    class="underline text-sm  text-white hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Forgot your password?
                                </Link>
                            </label>
                        </div>

                        <div class="flex sm-m:w-[60vw] items-center sm-m:justify-center justify-start mt-4">
                            <button class="w-[150px]  h-[50px] rounded-full bg-[#b30059] hover:bg-[#7a204d]"
                                :disabled="form.processing">
                                Login
                            </button>
                        </div>

                        <div class="flex mt-8 sm-m:w-[40vw] items-center justify-center">
                            <a class="text-lg hover:underline" :href="('register')" :disabled="form.processing">
                                New? Sign up?
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="!sm-m:w-[70wv] bg-white xl:h-[100vh] w-full flex flex-col justify-between">
            <div>
                <img class="m-2 w-[200px]" src="../../../../public/img/solar.png" alt="">
            </div>
            <div class="flex justify-center">
                <p class="text-gray-400 w-[30vw] sm-m:text-lg sm-m:w-[40vw] font-extrabold text-4xl ">Welcome to Phasor! an
                    AI assistant trained on Australian electrical and construction standards!</p>
            </div>
            <div class="flex justify-end mr-4">
                <img class="w-[200px]" src="../../../../public/img/men.png" alt="">
            </div>
        </div>
    </div>
</template>
