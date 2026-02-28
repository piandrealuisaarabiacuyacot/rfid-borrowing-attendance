<template>
    <div class="w-[500px]">
        <div class="py-5">
            <img :src="image" class="h-[200px] w-full object-cover" />
        </div>
        <h1 class="font-bold text-brand">{{ title }}</h1>
        <p class="text-custom-gray">{{ sub }}</p>
    </div>
</template>
<script setup>
const props = defineProps({
    image: {
        type: String,
        required: true,
    },
    title: {
        type: String,
    },
    sub: {
        type: String,
    },
});
</script>
