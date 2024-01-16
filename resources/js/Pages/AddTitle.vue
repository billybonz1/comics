<script setup>
    import LayoutGuest from '@/Layouts/LayoutGuest.vue';
</script>
<template>
    <LayoutGuest>
        <div class="flex flex-col space-y-4">
            <input type="text" placeholder="Оригінальна назва" class="border border-gray-300 p-2 rounded">
            <input type="text" placeholder="Українська назва" class="border border-gray-300 p-2 rounded">
            <div class="flex space-x-2">
                <select class="border border-gray-300 p-2 rounded flex-1">
                    <option>Автори</option>
                </select>
                <select class="border border-gray-300 p-2 rounded flex-1">
                    <option>Видавництва</option>
                </select>
                <select class="border border-gray-300 p-2 rounded flex-1">
                    <option>Рік випуску</option>
                </select>
            </div>
            <select class="border border-gray-300 p-2 rounded">
                <option>Статус коміксу</option>
            </select>
            <button class="bg-blue-500 text-white p-2 rounded flex items-center justify-center">
                <i class="fas fa-download mr-2"></i> Виберіть вікове обмеження
            </button>
            <div class="flex justify-between">
                <div class="flex flex-wrap gap-2">
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600"><span class="text-gray-700">Супергеройка</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600"><span class="text-gray-700">Альтернатива</span>
                    </label>
                    <!-- Repeat for each genre -->
                </div>
                <div class="flex flex-wrap gap-2">
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600"><span class="text-gray-700">Романтика</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600"><span class="text-gray-700">Драма</span>
                    </label>
                    <!-- Repeat for each genre -->
                </div>
            </div>
            <textarea placeholder="Опис" class="border border-gray-300 p-2 rounded h-32"></textarea>
            <button class="bg-blue-500 text-white p-2 rounded">Завантажити</button>
        </div>
    </LayoutGuest>
</template>