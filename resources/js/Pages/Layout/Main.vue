<template>
    <nav class="bg-white p-8">
        <div class="container mx-auto flex justify-between items-center">

            <a href="#">
                <img src="img/logo.png" alt="Logo" class="w-28 h-auto object-cover">
            </a>

            <div class="space-x-6">
                <a href="/" class="hover:bg-gray-300 p-2 rounded-md">HOME</a>
                <a href="#" class="hover:bg-gray-300 p-2 rounded-md">JOGOS</a>
                <a href="#" class="hover:bg-gray-300 p-2 rounded-md">CATEGORIAS</a>
                <a href="#" class="hover:bg-gray-300 p-2 rounded-md">LANÇAMENTOS</a>
                <a href="#" class="hover:bg-gray-300 p-2 rounded-md">ENTRAR</a>
                <a href="#" class="hover:bg-gray-300 p-2 rounded-md">CADASTRAR</a>
            </div>
        </div>
    </nav>

    <main>
        <slot>
            
        </slot>
    </main>

    <footer>
        <div class="absolute text-center bottom-0 w-full bg-gray-900 text-white p-6">
            <p class="text-white font-weight-bold text-sm">Copyright &copy; 2023</p>
        </div>
    </footer>
</template>