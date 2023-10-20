<template>
    <nav class="bg-white p-8">
        <div class="container mx-auto flex justify-between items-center">

            <a href="/">
                <img src="img/logo.png" alt="Logo" class="w-28 h-auto object-cover">
            </a>

            <div class="space-x-6">
                <a href="/jogos" class="hover:bg-gray-300 p-2 rounded-md">JOGOS</a>
                <a href="#" class="hover:bg-gray-300 p-2 rounded-md">CATEGORIAS</a>
                <a href="#" class="hover:bg-gray-300 p-2 rounded-md">LANÇAMENTOS</a>
            </div>
        </div>
    </nav>

    <main>
        <slot>
            <div class="w-full flex justify-center items-center ">
                <div>
                    <h1 class="font-extrabold text-xl">Em criação ainda</h1>
                </div>
            </div>
        </slot>
    </main>

    <footer>
        <div class="fixed text-center bottom-0 w-full bg-gray-900 text-white p-6">
            <p class="text-white font-weight-bold text-sm">Copyright &copy; 2023</p>
        </div>
    </footer>
</template>