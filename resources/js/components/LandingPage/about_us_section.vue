<template>
    <div
        class="mx-auto flex w-full max-w-[1400px] flex-col gap-15 px-[50px] md:flex-row"
    >
        <!-- left side -->
        <div class="w-full md:py-20">
            <p class="py-5 text-4xl italic" v-if="hasImage">We are</p>
            <h1
                class="py-5 font-bold text-brand"
                :style="{ fontSize: headerSize }"
            >
                {{ header }}
            </h1>
            <div>
                <p class="text-[18px] text-custom-gray">
                    {{ sub }}
                </p>
                <div
                    v-if="hasButton"
                    class="pt-10"
                    data-aos="fade-right"
                    data-aos-delay="300"
                    data-aos-duration="1000"
                >
                    <Button label="LEARN MORE" is-blue="true" />
                </div>
            </div>
        </div>
        <!-- right side -->
        <div class="w-full md:py-20">
            <div
                v-if="hasImage"
                data-aos="fade-left"
                data-aos-delay="300"
                data-aos-duration="1000"
            >
                <img :src="image" class="h-full w-full object-cover" />
            </div>

            <div
                v-else
                class="md:flex md:h-full md:w-full md:justify-center md:gap-10"
            >
                <!-- Circle 1 -->
                <div class="flex flex-col items-center">
                    <p class="h-[60px] font-bold whitespace-nowrap md:py-5">
                        RFID INTEGRATION
                    </p>
                    <div
                        class="border-gray flex h-[150px] w-[150px] items-center justify-center rounded-full border-2"
                    >
                        <p
                            class="text-[40px]"
                            data-aos="zoom-in"
                            data-aos-duration="1000"
                            data-aos-delay="300"
                        >
                            125
                        </p>
                    </div>
                </div>
                <!-- Circle 2 -->
                <div class="flex flex-col items-center">
                    <p class="h-[60px] py-5 font-bold whitespace-nowrap">
                        AUTOMATED RECORDING
                    </p>
                    <div
                        class="border-gray flex h-[150px] w-[150px] items-center justify-center rounded-full border-2"
                    >
                        <p
                            class="text-[40px]"
                            data-aos="zoom-in"
                            data-aos-duration="1000"
                            data-aos-delay="600"
                        >
                            616k
                        </p>
                    </div>
                </div>
                <!-- Circle 3 -->
                <div class="flex flex-col items-center">
                    <p class="h-[60px] py-5 font-bold whitespace-nowrap">
                        RFID INTEGRATION
                    </p>
                    <div
                        class="border-gray flex h-[150px] w-[150px] items-center justify-center rounded-full border-2"
                    >
                        <p
                            class="text-[40px]"
                            data-aos="zoom-in"
                            data-aos-duration="1000"
                            data-aos-delay="900"
                        >
                            100+
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import Button from '../Buttons/Button.vue';

const props = defineProps({
    hasImage: {
        type: Boolean,
        required: true,
    },
    hasButton: {
        type: Boolean,
        required: true,
    },
    header: {
        type: String,
        required: true,
    },
    sub: {
        type: String,
        required: true,
    },
    image: {
        type: String,
    },
    headerSize: {
        type: String,
        default: '50px',
    },
});
</script>
