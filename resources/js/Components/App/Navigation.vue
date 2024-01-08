<script setup>
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";

const socialIcons = ref([
    {
        icon: "fa-facebook",
        link: "https://www.facebook.com/Acentriagroup",
    },
    {
        icon: "fa-linkedin",
        link: "https://www.linkedin.com/company/acentria-groupltd/",
    },
    {
        icon: "fa-instagram",
        link: "https://www.instagram.com/acentriagroup/",
    },
    {
        icon: "fa-x-twitter",
        link: "https://twitter.com/acentriagroup?lang=en",
    },
]);

const menuItems = ref([
    {
        name: "home",
        link: "home",
    },
    {
        name: "about us",
        link: "about",
    },
    {
        name: "news & updates",
        link: "blogs",
    },
    {
        name: "contact us",
        link: "contacts",
    },
]);

const getRouteName = (routeName) => {
    return route(routeName)
}

</script>

<template>
    <header class="bg-white shadow">

        <div
            class="mx-auto max-w-8xl px-1 sm:px-4 lg:divide-y lg:divide-gray-200 lg:px-20"
        >
            <div class="relative flex h-32 justify-between gap-10">
                <div class="relative z-10 flex px-2 lg:px-0">
                    <div class="flex flex-shrink-0 items-center">
                        <img
                            class="h-28 w-auto"
                            src="img/logo.png"
                            alt="Your Company"
                        />
                    </div>
                </div>

                <div
                    class="relative z-0 flex flex-1 items-center justify-center px-2 sm:absolute sm:inset-0"
                >
                    <nav
                        class="hidden lg:flex lg:space-x-8 lg:py-2"
                        aria-label="Global"
                    >
                        <Link
                            v-for="menuItem in menuItems"
                            :href="getRouteName(menuItem.link)"
                            class="hover:shadow-md text-black inline-flex items-center rounded-md py-2 px-10 text-xl font-medium tracking-widest hover:text-primary duration-500 ease-in-out capitalize hover:scale-90"
                            aria-current="page"
                        >
                            {{ menuItem.name }}
                        </Link>
                    </nav>
                </div>

                <div class="relative z-10 flex items-center lg:hidden">
                    <!-- Mobile menu button -->
                    <button
                        type="button"
                        class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                        aria-controls="mobile-menu"
                        aria-expanded="false"
                    >
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open menu</span>
                        <!--
            Icon when menu is closed.

            Menu open: "hidden", Menu closed: "block"
          -->
                        <svg
                            class="block h-6 w-6"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                            />
                        </svg>
                        <!--
            Icon when menu is open.

            Menu open: "block", Menu closed: "hidden"
          -->
                        <svg
                            class="hidden h-6 w-6"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6 18L18 6M6 6l12 12"
                            />
                        </svg>
                    </button>
                </div>

                <!-- social brands -->
                <div
                    class="hidden lg:relative lg:z-10 lg:ml-4 lg:flex lg:items-center gap-5"
                >
                    <a
                        v-for="socialIcon in socialIcons"
                        :href="socialIcon.link"
                        target="_blank"
                        type="button"
                        class="group relative flex-shrink-0 rounded-full bg-primary p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-primary/50 focus:ring-offset-2"
                    >
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">View Facebook</span>
                        <div
                            class="bg-black h-8 w-8 rounded-full flex items-center justify-center group-hover:bg-white"
                        >
                            <i
                                :class="socialIcon.icon"
                                class="fab text-xl text-white group-hover:text-primary group-hover:scale-90 duration-700 ease-in-out"
                            ></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="mx-2 mb-2">
            <nav
                class="hidden lg:flex lg:space-x-8 lg:py-2 bg-secondary rounded-md"
                aria-label="Global"
            >
                <div class="grid grid-cols-5 gap-2 w-full px-6">
                    <div class="flex items-center">
                        <button
                            class="hover:scale-150 duration-500 ease-in-out ml-16 fa-xl font-bold text-white hover:text-primary"
                        >
                            <i class="fas fa-search"></i>
                        </button>
                    </div>

                    <div class="ml-36 flex items-center col-span-3 gap-10">
                        <button
                            href="#"
                            class="text-white inline-flex items-center rounded-md py-2 px-3 text-lg font-bold tracking-wide hover:text-primary hover:scale-90 duration-500 ease-in-out"
                            aria-current="page"
                        >
                            Insurance <i class="fas fa-caret-down ml-2"></i>
                        </button>
                        <button
                            href="#"
                            class="text-white inline-flex items-center rounded-md py-2 px-3 text-lg font-bold tracking-wide hover:text-primary hover:scale-90 duration-500 ease-in-out"
                            aria-current="page"
                        >
                            Reinsurance <i class="fas fa-caret-down ml-2"></i>
                        </button>
                        <button
                            href="#"
                            class="text-white inline-flex items-center rounded-md py-2 px-3 text-lg font-bold tracking-wide hover:text-primary hover:scale-90 duration-500 ease-in-out"
                            aria-current="page"
                        >
                            Actuarial <i class="fas fa-caret-down ml-2"></i>
                        </button>
                        <button
                            href="#"
                            class="text-white inline-flex items-center rounded-md py-2 px-3 text-lg font-bold tracking-wide hover:text-primary hover:scale-90 duration-500 ease-in-out"
                            aria-current="page"
                        >
                            Investment
                        </button>
                        <button
                            href="#"
                            class="text-white inline-flex items-center rounded-md py-2 px-3 text-lg font-bold tracking-wide hover:text-primary hover:scale-90 duration-500 ease-in-out"
                            aria-current="page"
                        >
                            IT & Products <i class="fas fa-caret-down ml-2"></i>
                        </button>
                    </div>

                    <div class="flex items-center ml-24">
                        <button
                            type="button"
                            class="rounded-md bg-primary px-8 py-2 text-md font-semibold text-white hover:scale-125 shadow-sm hover:bg-secondary duration-500 ease-in-out focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                        >
                            Get a quote
                        </button>
                    </div>
                </div>
            </nav>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <nav class="lg:hidden" aria-label="Global" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2">
                <!-- Current: "bg-gray-100 text-gray-900", Default: "text-gray-900 hover:bg-gray-50 hover:text-gray-900" -->
                <a
                    href="#"
                    class="bg-gray-100 text-gray-900 block rounded-md py-2 px-3 text-base font-medium"
                    aria-current="page"
                    >Dashboard</a
                >
                <a
                    href="#"
                    class="text-gray-900 hover:bg-gray-50 hover:text-gray-900 block rounded-md py-2 px-3 text-base font-medium"
                    >Team</a
                >
                <a
                    href="#"
                    class="text-gray-900 hover:bg-gray-50 hover:text-gray-900 block rounded-md py-2 px-3 text-base font-medium"
                    >Projects</a
                >
                <a
                    href="#"
                    class="text-gray-900 hover:bg-gray-50 hover:text-gray-900 block rounded-md py-2 px-3 text-base font-medium"
                    >Calendar</a
                >
            </div>
            <div class="border-t border-gray-200 pb-3 pt-4">
                <div class="flex items-center px-4">
                    <div class="flex-shrink-0">
                        <img
                            class="h-10 w-10 rounded-full"
                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt=""
                        />
                    </div>
                    <div class="ml-3">
                        <div class="text-base font-medium text-gray-800">
                            Tom Cook
                        </div>
                        <div class="text-sm font-medium text-gray-500">
                            tom@example.com
                        </div>
                    </div>
                    <button
                        type="button"
                        class="relative ml-auto flex-shrink-0 rounded-full bg-white p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                    >
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">View notifications</span>
                        <svg
                            class="h-6 w-6"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"
                            />
                        </svg>
                    </button>
                </div>
                <div class="mt-3 space-y-1 px-2">
                    <a
                        href="#"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900"
                        >Your Profile</a
                    >
                    <a
                        href="#"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900"
                        >Settings</a
                    >
                    <a
                        href="#"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900"
                        >Sign out</a
                    >
                </div>
            </div>
        </nav>

    </header>
</template>
