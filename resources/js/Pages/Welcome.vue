<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import Carousel from '@/Components/App/Carousel.vue'
import SectionOne from '@/Components/App/SectionOne.vue'
import SectionTwo from '@/Components/App/SectionTwo.vue'
import SectionThree from '@/Components/App/SectionThree.vue'
import SectionFour from '@/Components/App/SectionFour.vue'
import SectionFive from '@/Components/App/SectionFive.vue'

const props = defineProps({
  
});
</script>

<template>
    <Head title="Welcome" />

    <AppLayout>

        <Carousel />
        <SectionOne /> 
        <SectionTwo /> 
        <SectionThree /> 
        <SectionFour /> 
        <SectionFive /> 

    </AppLayout>
</template>

<style>

</style>
