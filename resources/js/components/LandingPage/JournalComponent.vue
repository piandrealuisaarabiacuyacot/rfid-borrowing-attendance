<template>
    <div class="flex">
        <div>
            <img :src="image" alt="Repair Image" />
        </div>
        <div>
            <p class="text-white uppercase">{{ header }}</p>
            <p class="text-custom-gray">{{ date }}</p>
        </div>
    </div>
</template>
<script setup>
const props = defineProps({
    image: {
        type: String,
        required: true,
    },
    header: {
        type: String,
        required: true,
    },
    date: {
        type: String,
        required: true,
    },
});
</script>
