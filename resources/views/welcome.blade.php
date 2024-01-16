<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comic Store</title>
    <script src="https://registry.npmmirror.com/vue/3.3.11/files/dist/vue.global.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
    </style>
</head>
<body>
<div id="app" class="bg-gray-200">
    <div class="container mx-auto px-4">
        <div class="py-4">
            <!-- Top navigation -->
            <div class="flex justify-between items-center">
                <div class="text-xl font-bold">COMIXTORIA</div>
                <div class="space-x-4">
                    <a href="#" class="text-blue-600">ГОЛОВНА</a>
                    <a href="#" class="text-gray-600">КАТАЛОГ</a>
                    <a href="#" class="text-gray-600">ПІДТРИМАТИ</a>
                </div>
                <div>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded">ДОДАТИ КОМІКС</button>
                </div>
            </div>
            <!-- Carousel and New Releases -->
            <div class="mt-8">
                <div class="text-2xl font-bold mb-4">НАЙПОПУЛЯРНІШЕ</div>
                <div class="flex space-x-4">
                    <div class="w-1/12 flex justify-center items-center">
                        <i class="fas fa-chevron-left text-3xl text-gray-600"></i>
                    </div>
                    <div class="w-10/12 grid grid-cols-4 gap-4">
                        <div v-for="item in popularItems" :key="item.id" class="bg-white p-2 rounded shadow">
                            <img :src="item.image" :alt="item.alt" class="w-full h-64 object-cover rounded">
                            <div class="mt-2">
                                <div class="text-lg font-bold">{{ item.title }}</div>
                                <div class="text-sm text-gray-600">{{ item.year }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/12 flex justify-center items-center">
                        <i class="fas fa-chevron-right text-3xl text-gray-600"></i>
                    </div>
                </div>
                <div class="text-2xl font-bold mt-8 mb-4">НОВІ РЕЛІЗИ</div>
                <div class="grid grid-cols-6 gap-4">
                    <div v-for="item in newReleases" :key="item.id" class="bg-white p-2 rounded shadow">
                        <img :src="item.image" :alt="item.alt" class="w-full h-48 object-cover rounded">
                        <div class="mt-2">
                            <div class="text-lg font-bold">{{ item.title }}</div>
                            <div class="text-sm text-gray-600">{{ item.year }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const { createApp, ref } = Vue;
    createApp({
        setup() {
            const popularItems = ref([
                {
                    id: 1,
                    title: 'Невразливий (2003)',
                    year: '2003',
                    image: 'https://placehold.co/200x300.png?text=Невразливий+(2003)',
                    alt: 'Comic book cover with a superhero in a dynamic pose'
                },
                // ... other popular items
            ]);
            const newReleases = ref([
                {
                    id: 1,
                    title: 'Веном: Смертоносний захисник',
                    year: '2020',
                    image: 'https://placehold.co/200x300.png?text=Веном:+Смертоносний+захисник',
                    alt: 'Comic book cover with a dark alien symbiote character'
                },
                // ... other new releases
            ]);
            return {
                popularItems,
                newReleases
            }
        }
    }).mount('#app')
</script>
</body>
</html>