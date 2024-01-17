<template>
    <div class="w-full max-w-xs mx-auto">
      <form @submit.prevent="submitForm" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="title_id">
            Title ID
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title_id" type="text" v-model="comic.title_id">
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="issue_type">
            Issue Type
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="issue_type" type="text" v-model="comic.issue_type">
        </div>
        <!-- Add more input fields for each property of the comic -->
        <div class="flex items-center justify-between">
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Create Comic
          </button>
        </div>
      </form>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        comic: {
          title_id: '',
          issue_type: '',
          // Initialize all other comic properties to an empty string
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