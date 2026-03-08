<script setup>
import Button from '../Buttons/Button.vue';
</script>

<template>
    <div class="flex h-[400px] w-full items-center justify-center bg-brand">
        <div class="p-5 text-center md:py-10">
            <div class="py-10">
                <h1 class="text-[20px] font-bold text-white md:text-[30px]">
                    TRANSFORMING MANUAL SYSTEMS INTO SMART RFID SOLUTIONS
                </h1>
                <p class="text-center text-white">
                    This thesis project demonstrates the development of an
                    integrated RFID-<br />based attendance, borrowing, and
                    inventory management system.
                </p>
            </div>

            <div
                class="flex items-center justify-center"
                data-aos="fade-up"
                data-aos-duration="1000"
            >
                <Button label="LEARN MORE" :is-white="true" />
            </div>
        </div>
    </div>
</template>
