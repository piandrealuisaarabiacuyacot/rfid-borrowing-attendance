<template>
    <Link :href="href" 
        :style="{ width: customWidth }"
        :class="['block text-center p-2 border-2 border-brand', isBlue ? 'bg-brand text-white' : 'text-brand']"> 
        {{ label }} 
    </Link>
</template>

<script setup>
const props = defineProps({
    href: {
        type: String,
    },
    label: {
        type: String,
        required: true
    },
    isBlue: {
        type: Boolean,
        default: false
    },
    customWidth: {
        type: String,
        default: '150px'
    }
});
</script>