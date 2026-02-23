<template>
    <Link :href="href" :class="['text-center w-[100px] p-2 border-2 border-brand', isBlue ? 'bg-brand text-white' : 'text-brand']"> {{ label }} </Link>
</template>

<script setup>
const props = defineProps({
    href: {
        type: String,
        required: true
    },
    label: {
        type: String,
        required: true
    },
    isBlue: {
        type: Boolean,
        default: false
    }
});
</script>