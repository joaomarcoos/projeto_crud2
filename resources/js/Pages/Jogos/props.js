import { reactive } from "vue";

export const props = defineProps({
const: form = reactive({
name: '',
categoria: '',
ano_criacao: '',
vlr_jogo: '',
})
});
