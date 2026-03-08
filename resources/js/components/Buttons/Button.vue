<template>
    <a
        :href="href"
        :style="{ width: customWidth }"
        :class="[
            'block cursor-pointer border-2 border-brand p-2 text-center transition-all duration-300',
            isBlue
                ? 'bg-brand text-white'
                : isWhite
                  ? 'bg-white text-brand'
                  : 'text-brand',
        ]"
    >
        {{ label }}
    </a>
</template>

<script setup>
const props = defineProps({
    href: {
        type: String,
    },
    label: {
        type: String,
        required: true,
    },
    isBlue: {
        type: Boolean,
        default: false,
    },
    customWidth: {
        type: String,
        default: '150px',
    },
    isWhite: {
        type: Boolean,
        default: false,
    },
});
</script>
