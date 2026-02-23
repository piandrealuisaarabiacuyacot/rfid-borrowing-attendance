<template>
    <div>
        <header class="flex justify-center items-center">
            <nav class="h-[150px] w-[1500px] flex justify-between px-20">
                <div class="flex justify-center items-center">
                    <img :src="logo" alt="logo">
                </div>

                <div class="flex justify-center items-center">
                    <NavButton :href="route('landingPage')" :label="'Home'" class="m-5"/>
                    <NavButton :href="route('about')" :label="'About Us'" class="m-5"/>
                    <NavButton :label="'Login'" :is-blue="true" class="m-5"/>
                </div>
            </nav>
        </header>

        <main>
            <slot />
        </main>
    </div>
</template>
<script setup>
import NavButton from '@/components/Buttons/NavButton.vue';
import logo from '../assets/images/logo.png'
</script>