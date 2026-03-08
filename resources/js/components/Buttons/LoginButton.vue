<template>
    <div
        v-if="text == 'Login'"
        class="h-[50px] w-full cursor-pointer rounded-[10px] bg-brand text-center leading-[50px] text-white"
    >
        <Link> {{ text }} </Link>
    </div>

    <div
        v-else
        class="h-[50px] w-full cursor-pointer rounded-[10px] bg-brand text-center leading-[50px] text-white"
    >
        <Link class="flex items-center justify-center gap-2">
            <UserRound class="shrink-0" /> {{ text }}
        </Link>
    </div>
</template>
<script setup>
import UserRound from '../Icon/UserRound.vue';

const props = defineProps({
    text: {
        type: String,
        requied: true,
    },
});
</script>
