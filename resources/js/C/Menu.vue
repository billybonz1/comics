<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { defineProps, ref } from 'vue';

const showAddPopup = ref(false);

const showPopup = (b) => {
    showAddPopup.value = b;
}

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <div class="flex justify-between items-center">
        <div class="text-xl font-bold">
            <img src="/logodark.svg" class="logo"/>
        </div>
        <div class="space-x-4">
            <Link :href="route('main')" class="text-gray-600">ГОЛОВНА</Link>
            <Link :href="route('catalog')" class="text-gray-600">КАТАЛОГ</Link>
            <Link :href="route('support')" class="text-gray-600">ПІДТРИМАТИ</Link>
        </div>
        <div>
            <button class="bg-blue-600 text-white px-4 py-2 rounded" @click="showPopup(true)">ДОДАТИ КОМІКС</button>
        </div>
    </div>
    <div id="add-popup" v-if="showAddPopup">
        <div class="flex flex-col space-y-4">
            <Link :href="route('addtitle')" class="bg-blue-500 text-white font-medium py-2 px-4 rounded-full shadow-lg focus:outline-none">
                Додати новий тайтл
            </Link>
            <Link :href="route('uploadcomics')" class="bg-blue-500 text-white font-medium py-2 px-4 rounded-full shadow-lg focus:outline-none">
                Додати випуск
            </Link>
        </div>
        <div class="absolute top-4 right-4 text-white text-2xl cursor-pointer" @click="showPopup(false)">
            &times;
        </div>
    </div>
</template>

<style>
.logo{
    min-height: 3vw;
}
#add-popup{
    position: absolute;
    z-index: 100;
    background-color: #0000007d;
    width: 100%;
    height: 100vh;
    left: 0;
    top: 0;
    padding: 30px;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
}
</style>