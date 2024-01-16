<script setup>
    import LayoutGuest from '@/Layouts/LayoutGuest.vue';
</script>
<template>
    <LayoutGuest>
        <div class="mb-4">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Обрати тайтл</label>
            <select id="title" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                <option>Тип: Простий випуск чи Щорічник (Annual)</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="type" class="block text-gray-700 text-sm font-bold mb-2">Тип:</label>
            <select id="type" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                <option>Простий випуск чи Щорічник (Annual)</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="number" class="block text-gray-700 text-sm font-bold mb-2">Номер</label>
            <input type="text" id="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-6">
            <button class="bg-gray-300 text-gray-700 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                ЗАВАНТАЖИТИ СТОРІНКИ
            </button>
        </div>
        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                ДОДАТИ КОМІКС
            </button>
        </div>
    </LayoutGuest>
</template>