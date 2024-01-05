<script setup>
import 'vue3-carousel/dist/carousel.css';
import { ref } from 'vue';
import { Link } from "@inertiajs/vue3";

const slide = ref(1);

const slider = (direction) => {
    if (direction == 'next') {
        const end = 5;
        if (slide.value <= (end - 1)) {
            slide.value += 1;
        }
        else if (slide.value == end) {  
            slide.value = 1;
        }
    } else {
        const start = 1;
        if (slide.value >= 2) {
            slide.value -= 1;
        }
        else if (slide.value == start) {
            slide.value = end;
        }
    }
}

</script>

<template>
    <div>

        <Head title="Carousel" />


        <div id="controls-carousel" class="relative w-full overflow-hidden" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-96 overflow-hidden md:h-[600px]">
                <!-- Item 1 -->
                <div v-if="slide == 1" class="duration-700 ease-in-out">
                    <img src="img/concept.jpg"
                        class=" object-cover absolute block w-full h-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                    <div class="absolute z-10 flex flex-col items-center justify-center h-full w-full">
                        <div class="absolute top-0 left-0 w-full h-full bg-black opacity-60"></div>

                        <h2 data-wow-duration="2s"
                            class="wow animate__backInRight text-xl sm:text-5xl font-bold text-white z-20 mb-5 sm:mb-10">From Concept to
                            Completion</h2>
                        <p class="wow animate__backInRight text-sm sm:text-lg text-white z-20 px-10 sm:px-96 text-center mb-5 sm:mb-10 leading-8">
                            Transform your food service vision into reality with our
                            expert
                            consultancy
                            services. We provide
                            comprehensive guidance and support, ensuring a seamless transition from concept to a
                            remarkable
                            culinary space.</p>

                        <Link :href="route('services')" type="button" data-wow-delay="6s"
                            class="wow animate__rubberBand z-20 mt-5 border-2 border-primary hover:bg-primary hover:text-black px-5 py-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Learn More <i class="ml-2 fas fa-up-right"></i>
                        </Link>
                    </div>
                </div>
                <!-- Item 2 -->
                <div v-if="slide == 2" class="duration-700 ease-in-out">
                    <img src="img/design.jpg"
                        class="object-cover absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                    <div class="absolute z-10 flex flex-col items-center justify-center h-full w-full">
                        <div class="absolute top-0 left-0 w-full h-full bg-black opacity-60"></div>

                        <h2 data-wow-duration="2s"
                            class="wow animate__backInRight text-xl sm:text-5xl font-bold text-white z-20 mb-5 sm:mb-10">Layout Concepts</h2>
                        <p class="wow animate__backInRight text-sm sm:text-lg text-white z-20 px-10 sm:px-96 text-center mb-5 sm:mb-10 leading-8">
                            We pride ourselves on our ability to craft kitchen designs that
                            are not only
                            visually stunning but also
                            highly practical, ensuring your culinary operations run smoothly and efficiently.
                        </p>

                        <Link :href="route('services')" type="button" data-wow-delay="6s"
                            class="wow animate__rubberBand z-20 mt-5 border-2 border-primary hover:bg-primary hover:text-black px-5 py-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Learn More <i class="ml-2 fas fa-up-right"></i>
                        </Link>
                    </div>
                </div>
                <!-- Item 3 -->
                <div v-if="slide == 3" class="duration-700 ease-in-out">
                    <img src="img/equipment.jpg"
                        class="object-cover absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                    <div class="absolute z-10 flex flex-col items-center justify-center h-full w-full">
                        <div class="absolute top-0 left-0 w-full h-full bg-black opacity-60"></div>

                        <h2 data-wow-duration="2s"
         text-xl sm:                   class="wow animate__backInRight text-xl sm:text-5xl font-bold text-white z-20 mb-5 sm:mb-10">Choice of Equipment
                        </h2>
                        <p class="wow animate__backInRight text-sm sm:text-lg text-white z-20 px-10 sm:px-96 text-center mb-5 sm:mb-10 leading-8">
                            We guide you in choosing the ideal equipment for your culinary
                            space. We leverage
                            our industry
                            knowledge and extensive network to curate a tailored selection that meets your
                            unique needs and
                            budget, ensuring optimal performance and efficiency in your operations.
                        </p>

                        <Link  :href="route('services')" type="button" data-wow-delay="6s"
                            class="wow animate__rubberBand z-20 sm:mt-5 border-2 border-primary hover:bg-primary hover:text-black px-5 py-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Learn More <i class="ml-2 fas fa-up-right"></i>
                        </Link>
                    </div>
                </div>
                <!-- Item 3 -->
                <div v-if="slide == 4" class="duration-700 ease-in-out">
                    <img src="img/supplier.jpg"
                        class="object-cover absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                    <div class="absolute z-10 flex flex-col items-center justify-center h-full w-full">
                        <div class="absolute top-0 left-0 w-full h-full bg-black opacity-60"></div>

                        <h2 data-wow-duration="2s"
         text-xl sm:                   class="wow animate__backInRight text-xl sm:text-5xl font-bold text-white z-20 mb-5 sm:mb-10">Supplier Qualification
                        </h2>
                        <p class="wow animate__backInRight text-sm sm:text-lg text-white z-20 px-10 sm:px-96 text-center mb-5 sm:mb-10 leading-8">
                            Partnering with trusted suppliers to ensure quality and reliability in every
                            project.
                        </p>

                        <Link :href="route('services')" type="button" data-wow-delay="6s"
                            class="wow animate__rubberBand z-20 mt-5 border-2 border-primary hover:bg-primary hover:text-black px-5 py-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Learn More <i class="ml-2 fas fa-up-right"></i>
                        </Link>
                    </div>
                </div>
                <!-- Item 3 -->
                <div v-if="slide == 5" class="duration-700 ease-in-out">
                    <img src="img/procur.jpg"
                        class="object-cover absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                    <div class="absolute z-10 flex flex-col items-center justify-center h-full w-full">
                        <div class="absolute top-0 left-0 w-full h-full bg-black opacity-60"></div>

                        <h2 data-wow-duration="2s"
                            class="wow animate__backInRight text-xl sm:text-5xl font-bold text-white z-20 mb-5 sm:mb-10">Procurement &amp; <br>
                            Project Management
                        </h2>
                        <p class="wow animate__backInRight text-sm sm:text-lg text-white z-20 px-10 sm:px-96 text-center mb-5 sm:mb-10 leading-8">
                            Let us orchestrate the complex symphony of logistics, timelines, and seamless
                            execution, so you can
                            focus on your passion while we bring your vision to life.
                        </p>

                        <button type="button" data-wow-delay="6s"
                            class="wow animate__rubberBand z-20 mt-5 border-2 border-primary hover:bg-primary hover:text-black px-5 py-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Learn More <i class="ml-2 fas fa-up-right"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Slider controls -->
            <button @click="slider('prev')" type="button"
                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-8 h-8 sm:w-14 sm:h-14 rounded-full bg-primary dark:bg-gray-800/30 group-hover:bg-black dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <i class="fas fa-angle-left sm:fa-2xl text-white"></i>
                    <span class="sr-only">Previous</span>
                </span>
            </button>

            <button @click="slider('next')" type="button"
                class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-8 h-8 sm:w-14 sm:h-14 rounded-full bg-primary dark:bg-gray-800/30 group-hover:bg-black dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <i class="fas fa-angle-right sm:fa-2xl text-white"></i>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

    </div>
</template>
