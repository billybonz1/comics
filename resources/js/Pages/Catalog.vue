<script setup>
    import LayoutGuest from '@/Layouts/LayoutGuest.vue';
</script>

<template>
    <LayoutGuest>
        <div class="mt-8">
            <div class="bg-gray-800 min-h-screen text-white">
                        <div class="container mx-auto px-4 py-6">
                        <!-- Dropdowns and search bar -->
                        <div class="flex justify-between mb-6">
                            <div class="flex space-x-2">
                            <select class="bg-gray-700 text-white p-2 rounded">
                                <option>Категорії</option>
                            </select>
                            <select class="bg-gray-700 text-white p-2 rounded">
                                <option>Видавництва</option>
                            </select>
                            <select class="bg-gray-700 text-white p-2 rounded">
                                <option>Автори</option>
                            </select>
                            </div>
                            <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Сортувати за
                            </button>
                        </div>

                        <!-- Pagination -->
                        <div class="flex justify-center mb-6">
                            <div class="flex space-x-1">
                            <span class="px-3 py-1 bg-blue-600 text-white rounded">1</span>
                            <span class="px-3 py-1 bg-gray-700 text-white rounded">2</span>
                            <span class="px-3 py-1 bg-gray-700 text-white rounded">3</span>
                            <span class="px-3 py-1 bg-gray-700 text-white rounded">4</span>
                            <span class="px-3 py-1 bg-gray-700 text-white rounded">5</span>
                            <span class="px-3 py-1 bg-gray-700 text-white rounded">6</span>
                            <span class="px-3 py-1 bg-gray-700 text-white rounded">7</span>
                            <span class="px-3 py-1 bg-gray-700 text-white rounded">8</span>
                            <span class="px-3 py-1 bg-gray-700 text-white rounded">9</span>
                            <span class="px-3 py-1 bg-gray-700 text-white rounded">10</span>
                            <span class="px-3 py-1 bg-gray-700 text-white rounded">11</span>
                            <span class="px-3 py-1 bg-gray-700 text-white rounded">12</span>
                            <span class="px-3 py-1 bg-gray-700 text-white rounded">13</span>
                            </div>
                        </div>

                        <!-- Comic Book Listings -->
                        <div class="grid gap-6 mb-6">
                            <!-- First Comic Book -->
                            <div class="bg-gray-700 p-4 rounded-lg">
                                <div class="flex items-start">
                                    <img class="w-32 h-48 object-cover rounded mr-4" src="https://placehold.co/128x192" alt="Placeholder image for Teenage Mutant Ninja Turtles: The Last Ronin (2020)">
                                    <div class="flex flex-col">
                                    <span class="text-blue-300 text-sm">IDW</span>
                                    <h3 class="text-xl font-bold mb-2">Підлітки Мутанти Ніндзя Черепахи: Останній Ронін / Teenage Mutant Ninja Turtles: The Last Ronin (2020)</h3>
                                    <p class="text-gray-300 text-sm mb-4">
                                        Kevin Eastman, Tom Waltz, ...
                                    </p>
                                    <div class="flex items-center mb-4">
                                        <span class="bg-green-600 text-xs text-white font-bold px-2 py-1 rounded">13+</span>
                                    </div>
                                    <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                        Читати
                                    </button>
                                    </div>
                                </div>
                                </div>

                            <!-- Second Comic Book -->
                            <div class="bg-gray-700 p-4 rounded-lg">
                                <div class="flex items-start">
                                    <img class="w-32 h-48 object-cover rounded mr-4" src="https://placehold.co/128x192" alt="Placeholder image for The Boys (2008)">
                                    <div class="flex flex-col">
                                    <span class="text-blue-300 text-sm">Dynamite</span>
                                    <h3 class="text-xl font-bold mb-2">Хлопаки / The Boys (2008)</h3>
                                    <p class="text-gray-300 text-sm mb-4">
                                        Garth Ennis, Darick Robertson
                                    </p>
                                    <div class="flex items-center mb-4">
                                        <span class="bg-red-600 text-xs text-white font-bold px-2 py-1 rounded">18+</span>
                                    </div>
                                    <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                        Читати
                                    </button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </LayoutGuest>
</template>
<style>
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
</style>