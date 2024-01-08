<script setup>
import { ref, computed } from "vue";

const products = ref([
    {
        name: "personal",
        link: "",
    },
    {
        name: "business",
        link: "",
    },
    {
        name: "corporate",
        link: "",
    },
    {
        name: "reinsurance",
        link: "",
    },
    {
        name: "actuarial",
        link: "",
    },
]);

const company = ref([
    {
        name: "about us",
        link: "",
    },
    {
        name: "our leadership",
        link: "",
    },
    {
        name: "our footprint",
        link: "",
    },
    {
        name: "csr & esg",
        link: "",
    },
    {
        name: "careers",
        link: "",
    },
]);

const help = ref([
    {
        name: "file a claim",
        link: "",
    },
    {
        name: "contact support",
        link: "",
    },
    {
        name: "forms & download",
        link: "",
    },
]);

const media = ref([
    {
        name: "news & updates",
        link: "",
    },
    {
        name: "blogs",
        link: "",
    },
]);

const legal = ref([
    {
        name: "privacy policy",
        link: "",
    },
    {
        name: "cookie policy",
        link: "",
    },
    {
        name: "terms & conditions",
        link: "",
    },
]);


const currentYear = computed(()=>{
    const currentDate = new Date();
    return currentDate.getFullYear();
})

const email = ref(null)
</script>

<template>
    <footer class="bg-secondary" aria-labelledby="footer-heading">
        <h2 id="footer-heading" class="sr-only">Footer</h2>
        <div
            class="mx-auto max-w-[95vw] px-6 pb-8 pt-20 sm:pt-24 lg:px-8 lg:pt-32"
        >
            <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                <div class="mt-10 xl:mt-0">
                    <h3 class="text-sm font-semibold leading-6 text-white">
                        Subscribe to our newsletter
                    </h3>
                    <p class="mt-2 text-sm leading-6 text-gray-300">
                        The latest news, articles, and resources, sent to your
                        inbox weekly.
                    </p>
                    <form class="mt-6 sm:flex sm:max-w-md">
                        <label for="email-address" class="sr-only"
                            >Email address</label
                        >
                        <input
                            v-model="email"
                            type="email"
                            name="email-address"
                            id="email-address"
                            autocomplete="email"
                            required
                            class="w-full min-w-0 appearance-none rounded-md border-0 bg-white/5 px-3 py-1.5 text-base text-white shadow-sm ring-1 ring-inset ring-white/10 placeholder:text-white focus:ring-2 focus:ring-inset focus:ring-primary sm:w-64 sm:text-sm sm:leading-6 xl:w-full"
                            placeholder="Enter your email"
                        />
                        <div class="mt-4 sm:ml-4 sm:mt-0 sm:flex-shrink-0">
                            <button
                                type="submit"
                                class="flex w-full items-center justify-center rounded-md bg-primary px-3 py-2 text-sm font-semibold text-white hover:text-gray-800 shadow-sm hover:bg-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500"
                            >
                                Subscribe
                            </button>
                        </div>
                    </form>
                </div>

                <div class="grid grid-cols-2 gap-8 xl:col-span-2">
                    <div class="md:grid md:grid-cols-4 md:gap-8">
                        <div>
                            <h3
                                class="text-lg tracking-widest font-semibold leading-6 text-white"
                            >
                                Company
                            </h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li
                                    v-for="item in company"
                                    class="hover:scale-125 duration-500 ease-in-out"
                                >
                                    <Link
                                        :href="route('home')"
                                        class="capitalize text-sm leading-6 text-gray-300 hover:text-white"
                                    >
                                        {{ item.name }}
                                    </Link>
                                </li>
                            </ul>
                        </div>

                        <div class="mt-10 md:mt-0">
                            <h3
                                class="text-lg tracking-widest font-semibold leading-6 text-white"
                            >
                                Products
                            </h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li
                                    v-for="item in products"
                                    class="hover:scale-125 duration-500 ease-in-out"
                                >
                                    <Link
                                        :href="route('home')"
                                        class="capitalize text-sm leading-6 text-gray-300 hover:text-white"
                                    >
                                        {{ item.name }}
                                    </Link>
                                </li>
                            </ul>
                        </div>

                        <div>
                            <h3
                                class="text-lg tracking-widest font-semibold leading-6 text-white"
                            >
                                Help
                            </h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li
                                    v-for="item in help"
                                    class="hover:scale-125 duration-500 ease-in-out"
                                >
                                    <Link
                                        :href="route('home')"
                                        class="capitalize text-sm leading-6 text-gray-300 hover:text-white"
                                    >
                                        {{ item.name }}
                                    </Link>
                                </li>
                            </ul>
                        </div>

                        <div class="mt-10 md:mt-0">
                            <h3
                                class="text-lg tracking-widest font-semibold leading-6 text-white"
                            >
                                Legal
                            </h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li
                                    v-for="item in legal"
                                    class="hover:scale-125 duration-500 ease-in-out"
                                >
                                    <Link
                                        :href="route('home')"
                                        class="capitalize text-sm leading-6 text-gray-300 hover:text-white"
                                    >
                                        {{ item.name }}
                                    </Link>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="md:grid md:grid-cols-3 md:gap-8">
                        <div class="mt-10 md:mt-0">
                            <h3
                                class="text-lg tracking-widest font-semibold leading-6 text-white"
                            >
                                Legal
                            </h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li
                                    v-for="item in legal"
                                    class="hover:scale-125 duration-500 ease-in-out"
                                >
                                    <Link
                                        :href="route('home')"
                                        class="capitalize text-sm leading-6 text-gray-300 hover:text-white"
                                    >
                                        {{ item.name }}
                                    </Link>
                                </li>
                            </ul>
                        </div>

                        <div class="mt-10 md:mt-0">
                            <h3
                                class="text-lg tracking-widest font-semibold leading-6 text-white"
                            >
                                Media
                            </h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li
                                    v-for="item in media"
                                    class="hover:scale-125 duration-500 ease-in-out"
                                >
                                    <Link
                                        :href="route('home')"
                                        class="capitalize text-sm leading-6 text-gray-300 hover:text-white"
                                    >
                                        {{ item.name }}
                                    </Link>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="mt-16 border-t border-white/10 pt-8 sm:mt-20 md:flex md:items-center md:justify-center lg:mt-24"
            >
                <p
                    class="mt-8 text-md leading-5 text-gray-400 md:order-1 md:mt-0"
                >
                    &copy; {{ currentYear }} <span class="text-primary font-bold">Acentria Group.</span> All rights reserved.
                </p>
            </div>
        </div>
    </footer>
</template>
