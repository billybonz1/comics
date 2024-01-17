
<template>
  <div class="w-full max-w-xs mx-auto">
    <form @submit.prevent="submitForm" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="ukrainian_name">
          Ukrainian Name
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="ukrainian_name" type="text" v-model="title.ukrainian_name">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="original_name">
          Original Name
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="original_name" type="text" v-model="title.original_name">
      </div>
      <!-- Add more input fields for each property of the title -->
      <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
          Create Title
        </button>
      </div>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      title: {
        ukrainian_name: '',
        original_name: '',
        // Initialize all other title properties to an empty string
      },
    };
  },
  methods: {
    submitForm() {
      // Handle form submission
    },
  },
};
</script>

<style scoped>
</style>