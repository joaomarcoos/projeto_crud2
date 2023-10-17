<template>
    <CustomMain>

        <div class="w-full bg-gray-500">
            <h1>Olá</h1>
            
            <p>{{ id }}</p>
            <p>{{ name }}</p>

            oasdfasd
        </div>
    </CustomMain>
</template>
<script setup>
import CustomMain from "@/Pages/Layout/Main.vue";
     const props = defineProps({
        id:{
            type: Number,
            required: true,
        },
        name:{
            type: String,
            default: 'nome não informado!'
        }
     })
</script>