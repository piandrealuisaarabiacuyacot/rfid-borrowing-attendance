<template>
    <div class="min-w-[300px] flex-1">
        <div class="mb-5 overflow-hidden">
            <img
                :src="image"
                :alt="title"
                class="h-[230px] w-full object-cover"
            />
        </div>
        <h3 class="mb-2 text-lg font-bold text-brand uppercase">
            {{ title }}
        </h3>
        <p class="text-sm leading-relaxed text-custom-gray">
            {{ sub }}
        </p>
    </div>
</template>

<script setup>
const props = defineProps({
    image: { type: String, required: true },
    title: { type: String },
    sub: { type: String },
});
</script>
