<template>
    <div class="w-full bg-gray-500">
        <h1>Olá</h1>

        <p>{{ id }}</p>
        <p>{{ name }}</p>
    </div>
</template>
<script setup>
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