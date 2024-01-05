<script setup>
import { ref } from 'vue';
import Navigation from '@/Components/App/Navigation.vue'
import Footer from '@/Components/App/Footer.vue'

const props = defineProps({

});

</script>

<template>
    <div>
        <div>
            <Navigation />
            <slot  />
            
            <Footer />
        </div>
    </div>
</template>
