export function getPage() {
axios.get(route('jogos.index'))
.then(response => {
router.visit('/jogos/create');
console.log(response.headers);
})

.catch((error) => {
console.log(error.menssage);
});
}
