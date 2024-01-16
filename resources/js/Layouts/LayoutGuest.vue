<script setup>
import { useStyleStore } from '@/Stores/style.js'
import Menu from '@/C/Menu.vue';
const styleStore = useStyleStore()
</script>

<template>
  <div id="app" class="bg-gray-200">
      <div class="container mx-auto px-4">
          <div class="py-4">
              <Menu></Menu>
              <div class="mx-auto py-4">
                <slot />
              </div>
          </div>
      </div>
  </div>
</template>
