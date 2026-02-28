<template>
    <div class="flex h-[calc(100vh-100px)] flex-col">
        <header class="h-[75px] shrink-0 bg-brand"></header>

        <!-- Hero Section -->
        <section class="relative flex-1 overflow-hidden">
            <img :src="philsca" alt="Philsca" class="object-cover" />

            <div class="absolute inset-0 flex items-center bg-[#193153]/50">
                <div
                    class="mx-auto w-full max-w-[1400px] px-[50px] font-raleway text-white"
                >
                    <div class="py-10">
                        <p class="text-[50px] font-medium">
                            RFID-Based Attendance <br />
                            Monitoring, Borrowing, and <br />
                            Inventory Management System
                        </p>
                        <p>
                            A smart and automated system designed to improve
                            efficiency, accuracy, <br />
                            and real-time tracking using RFID technology.
                        </p>
                    </div>

                    <Button
                        label="GET STARTED TODAY"
                        class="border-white p-3 transition duration-300 hover:bg-black/50"
                        is-blue="true"
                        :custom-width="'300px'"
                        data-aos="fade-right"
                        data-aos-delay="300"
                        data-aos-duration="1000"
                    />
                </div>
            </div>
        </section>
    </div>

    <!-- Feature section -->
    <section class="h-[500px] w-full bg-[#FAFAFA]">
        <div
            class="mx-auto flex h-full w-full max-w-[1400px] items-center justify-center gap-10 px-[50px]"
        >
            <FeatureCard
                v-for="(card, index) in cards"
                :key="index"
                :title="card.title"
                :image="card.image"
                :sub="card.sub"
                data-aos="fade-down"
                data-aos-duration="1000"
                :data-aos-delay="index * 300"
            />
        </div>
    </section>

    <section class="h-screen w-full">
        <div class="h-[60%]">
            <section class="flex h-full items-center justify-center gap-10">
                <!-- GAWING COMPONENT! -->
                <div
                    class="mx-auto flex w-full max-w-[1400px] gap-15 px-[50px]"
                >
                    <!-- left side -->
                    <div class="w-full">
                        <p class="py-5 text-4xl italic">We are</p>
                        <h1 class="py-5 text-[50px] font-bold text-brand">
                            Smart Automation <br />
                            Through RFID Technology
                        </h1>
                        <p class="text-[18px] text-custom-gray">
                            The RFID-Based Attendance Monitoring, Borrowing, and
                            Inventory <br />
                            System is designed to provide an efficient and
                            automated solution for <br />
                            tracking attendance, managing borrowed items, and
                            maintaining <br />
                            inventory records.
                        </p>
                    </div>
                    <!-- right side -->
                    <div class="w-[70%]">
                        <img
                            :src="Container4"
                            class="h-full w-full object-cover"
                        />
                    </div>
                </div>
            </section>
        </div>

        <div class="bg-blue-100">test</div>
    </section>
</template>

<script setup>
import philsca from '@/assets/images/philsca.png';
import Button from '@/components/Buttons/Button.vue';
import FeatureCard from '@/components/Cards/FeatureCard.vue';
import FeatureImage from '@/assets/images/Container.png';
import FeatureImage2 from '@/assets/images/Container 2.png';
import FeatureImage3 from '@/assets/images/Container 3.png';
import Container4 from '@/assets/images/Container 4.png';

const cards = [
    {
        image: FeatureImage,
        title: 'ATTENDANCE TRACKING',
        sub: 'Utilizes passive RFID tags for automated entry and exit logging. The system records user ID, timestamp, and location. This eliminates manual sign-ins and enhances overall data accuracy.',
    },
    {
        image: FeatureImage2,
        title: 'ASSET BORROWING',
        sub: "Manages the lending and return of equipment. Each item is tagged and linked to a borrower's profile. The system tracks due dates to reduce loss and improve accountability.",
    },
    {
        image: FeatureImage3,
        title: 'INVENTORY',
        sub: 'Provides a centralized database for all tagged items, conditions, and maintenance schedules. It ensures that asset tracking is accurate and up-to-date.',
    },
];
</script>
