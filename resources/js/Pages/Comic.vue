<script setup>
const issues = ref([
    { title: 'Невразливий (2003) #1 - Автор Перекладу', date: '04.11.2023' },
    { title: 'Невразливий (2003) #2 - Автор Перекладу', date: '04.11.2023' },
    { title: 'Невразливий (2003) #3 - Автор Перекладу', date: '04.11.2023' },
    { title: 'Невразливий (2003) #4 - Автор Перекладу', date: '04.11.2023' },
    { title: 'Невразливий (2003) #5 - Автор Перекладу', date: '04.11.2023' },
    { title: 'Невразливий (2003) #6 - Автор Перекладу', date: '04.11.2023' }
]);
const comments = ref([
    { user: 'User1346', timestamp: '23:07 04.11.2023' },
    { user: 'User4201', timestamp: '23:07 04.11.2023' }
]);
</script>
<template>
    <div id="app" class="bg-gray-100">
        <div class="max-w-2xl mx-auto py-10">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="flex">
                    <div class="w-48 h-64 bg-blue-500 text-white p-2">
                        <img src="https://placehold.co/150x200" alt="Placeholder image for a comic book cover with a superhero theme" class="rounded-lg">
                    </div>
                    <div class="ml-4">
                        <h2 class="text-2xl font-bold mb-2">Невразливий / Invincible (2003)</h2>
                        <p class="text-sm"><strong>Видавництво:</strong> Image</p>
                        <p class="text-sm"><strong>Автори:</strong> Роберт Кіркман, Раян Оттлі, Біл...</p>
                        <p class="text-sm"><strong>Жанри:</strong> Супергеройка, Підліткова Драма, Пригоди</p>
                        <p class="text-sm"><strong>К-ть випусків:</strong> 15/144</p>
                        <p class="text-sm mt-4"><strong>Опис:</strong></p>
                        <p class="text-sm">Dssadadssadad asdsadasdas fdsg dfgfgj j ghkjjk hjkljh fgh ghjk l jhghd fhk fhgk fhgk ghjkl ghjkl ghjkl ghjk dgrksjrdtsdty kjhjv jhfs rjgdfsgjkh kjhkg sntfgjhdj fghkfgjdfgh dfghkjgj asjghjedh hasdkjghf dfgsjhdfkj gskldjkgj dfgjdfg j dfgjdfgjlsdfkgjfgj</p>
                    </div>
                </div>
                <div class="mt-6">
                    <h3 class="bg-red-500 text-white text-center py-2">СПИСОК ВИПУСКІВ</h3>
                    <div class="mt-4">
                        <div v-for="issue in issues" class="flex justify-between items-center bg-blue-200 p-4 my-2 rounded-lg">
                            <span>{{ issue.title }}</span>
                            <span>{{ issue.date }}</span>
                        </div>
                    </div>
                </div>
                <div class="mt-6">
                    <h3 class="text-lg font-bold mb-2">КОМЕНТАРІ</h3>
                    <div class="mt-4">
                        <div v-for="comment in comments" class="flex items-center bg-white p-4 my-2 rounded-lg shadow">
                            <i class="fas fa-user-circle text-3xl mr-4"></i>
                            <div>
                                <p class="text-sm">{{ comment.user }}</p>
                                <p class="text-sm">{{ comment.timestamp }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-6">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300">ДОДАТИ КОМЕНТАР</button>
                </div>
            </div>
        </div>
    </div>
</template>