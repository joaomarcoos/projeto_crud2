<template>
    <CustomMain>
        <div class="containe mx-auto  px-4 py-8 font-mono">
            <h1 class="font-weight-bolder font-bold text-3xl">Listagem de jogos</h1>

            <button
            
            @click="getPage"
            class="bg-blue-400 rounded-md px-4 py-2 mb-4 mt-4">Novo</button>

            <div class="w-full flex flex-wrap ml-0 mr-0 rounded-md">
                <div v-for="jogo in jogos" :key="jogo.id" class="w-80 bg-gray-900 text-white rounded-md shadow-lg px-4 m-5">
                    <div>
                        <img src="#" alt="imagem">
                    </div>

                    <div class="p-4">
                        <p class="">
                            descrição do jogo que virá do banco em breve
                        </p>
                        <h2>{{ jogo.name }}</h2>
                        <h3>Categoria: {{ jogo.categoria }}</h3>
                        <h3>Valor: R$ {{ jogo.vlr_jogo }}</h3>
                    </div>

                    <button class="w-full bg-blue-400 rounded-md px-4 py-2 mb-4">Comprar</button>
                </div>
            </div>
        </div>

    </CustomMain>
</template>
<script setup>
import CustomMain from "@/Pages/Layout/Main.vue";
import { router } from "@inertiajs/vue3";

     const props = defineProps({
       jogos:{
        type: Array,
       required: true
       },

     })

    function getPage(){
        router.visit('/jogos/create')
    }
</script>