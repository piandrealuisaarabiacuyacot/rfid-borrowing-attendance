import { ref } from 'vue';

const isLoginOpen = ref(false);

export function useLogin() {
    return { isLoginOpen };
}
