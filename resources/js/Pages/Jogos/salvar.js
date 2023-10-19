import { form } from "./Create.vue";

function salvar() {
axios.post(route('jogos.store'), form)
.then((res) => {
if (res.status == 200) {
router.visit('/');
}
});
}
