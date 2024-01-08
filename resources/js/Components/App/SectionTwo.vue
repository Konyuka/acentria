<script setup>
import { ref } from "vue";

const services = ref([
    {
        name: "insurance",
        content: "Quis tellus eget adipiscing convallis sit sit eget",
        url: "",
        icon: ""
    },
    {
        name: "reinsurance",
        content: "Quis tellus eget adipiscing convallis sit sit eget",
        url: "",
        icon: ""
    },
    {
        name: "actuarial",
        content: "Quis tellus eget adipiscing convallis sit sit eget",
        url: "",
        icon: ""
    },
    {
        name: "investment",
        content: "Quis tellus eget adipiscing convallis sit sit eget",
        url: "",
        icon: ""
    },
]);
</script>

<template>
    <div>
        <div class="bg-secondary py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:text-center">
                    <h2 class="text-base font-semibold leading-7 text-primary">
                        Acentria Group Services
                    </h2>
                    <p
                        class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl"
                    >
                        our Line of Business
                    </p>
                    <p class="mt-6 text-lg leading-8 text-gray-300">
                        Quis tellus eget adipiscing convallis sit sit eget
                        aliquet quis. Suspendisse eget egestas a elementum
                        pulvinar et feugiat blandit at. In mi viverra elit nunc.
                    </p>
                </div>

                <div
                    class="mx-auto mt-16 max-w-4xl sm:mt-20 lg:mt-24 lg:max-w-none"
                >
                    <dl
                        class="grid max-w-4xl grid-cols-1 gap-x-20 gap-y-16 lg:max-w-none lg:grid-cols-4"
                    >
                        <div v-for="service in services" class="flex flex-col">
                            <dt
                                class="capitalize tracking-widest flex items-center gap-x-3 text-2xl font-semibold leading-7 text-white"
                            >
                                <svg
                                    class="h-5 w-5 flex-none text-primary"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M5.5 17a4.5 4.5 0 01-1.44-8.765 4.5 4.5 0 018.302-3.046 3.5 3.5 0 014.504 4.272A4 4 0 0115 17H5.5zm3.75-2.75a.75.75 0 001.5 0V9.66l1.95 2.1a.75.75 0 101.1-1.02l-3.25-3.5a.75.75 0 00-1.1 0l-3.25 3.5a.75.75 0 101.1 1.02l1.95-2.1v4.59z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                                {{ service.name }}
                            </dt>
                            <dd
                                class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-300"
                            >
                                <p class="flex-auto">
                                    {{ service.content }}
                                </p>
                                <p class="mt-6">
                                    <Link
                                        :href="route('home')"
                                        class="text-sm font-semibold leading-6 text-primary"
                                        >Learn more
                                        <span aria-hidden="true">→</span>
                                    </Link>
                                </p>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</template>
