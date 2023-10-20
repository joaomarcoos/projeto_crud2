<template>
    <CustomMain>
        <div class="w-full flex justify-center px-4 py-8 font-mono">

            <div class="w-1/3 bg-gray-900 rounded-md shadow-lg">
                <form class="w-full">
                    <div class="flex p-2 flex-wrap">

                        <!-- <div class="w-full px-3 mb-6 md:mb-0">
                            <label class=" text-slate-100 text-xs font-bold mb-2" for="img">
                                Insiera a imagem do jogo
                            </label>
                            <input class="w-full text-slate-100 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight" id="img" name="img" type="file">
                        </div> -->

                        <div class="w-full px-3 mb-6 md:mb-0">
                            <label class=" text-slate-100 text-xs font-bold mb-2" for="name">
                                Nome:
                            </label>
                            <input v-model="form.name" name="name" class="w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight" type="text" placeholder="Digite o nome">
                        </div>

                        <div class="w-full px-3 mb-6 md:mb-0">
                            <label class=" text-slate-100 text-xs font-bold mb-2" for="categoria">
                                Categoria:
                            </label>
                            <input v-model="form.categoria" name="categoria" class="w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight" type="text" placeholder="Digite a categoria">
                        </div>

                        <div class="w-full px-3 mb-6 md:mb-0">
                            <label class=" text-slate-100 text-xs font-bold mb-2" for="ano_criacao">
                                Ano de Criação:
                            </label>
                            <input v-model="form.ano_criacao" name="ano_criacao" class="w-full border rounded py-3 px-4 mb-3 leading-tight" type="number">
                        </div>

                        <div class="w-full px-3 mb-6 md:mb-0">
                            <label class=" text-slate-100 text-xs font-bold mb-2" for="vlr_jogo">
                                Valor do Jogo:
                            </label>
                            <input v-model="form.vlr_jogo" name="vlr_jogo" class="w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight" type="number" placeholder="Digite o valor do jogo">
                        </div>
    
    
                    </div>
                </form>

                <div class="flex justify-center">
                    <button 
                    type="button"
                    @click="salvar" 
                    class=" hover:bg-gray-900 hover:text-slate-100 border border-gray-300 hover:border-white w-3/4 bg-white p-4 m-4 rounded-md font-extrabold">Salvar</button>
                </div>
            
            </div>
        </div>

    </CustomMain>
</template>

<script setup>
import CustomMain from "@/Pages/Layout/Main.vue";
import { router } from '@inertiajs/vue3';
import axios from 'axios';
import {reactive} from "vue";

const form = reactive ({
        name:'',
        categoria:'',
        ano_criacao:'',
        vlr_jogo:'',
})


function salvar(){
    axios.post(route('jogos.store'), form)
    .then((res)=>{
        if(res.status == 200){
            router.visit('/jogos');
        }
    })

    .catch((err)=>{
        console.log(err.menssage);
    })
}

</script>