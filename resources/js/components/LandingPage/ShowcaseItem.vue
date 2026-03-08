<template>
    <div class="flex gap-5">
        <div>
            <component :is="icon" />
        </div>

        <div class="md:w-[500px]">
            <h1 class="font-bold text-brand uppercase md:text-[25px]">
                {{ header }}
            </h1>
            <p class="text-custom-gray">{{ text }}</p>
        </div>
    </div>
</template>

<script setup>
const props = defineProps({
    header: {
        type: String,
        required: true,
    },
    icon: {
        type: Object,
        required: true,
    },
    text: {
        type: String,
        required: true,
    },
});
</script>
