<script setup>
import { useLayoutStore } from '@/Stores/layout.js'
import { useStyleStore } from '@/Stores/style.js'
import NavBar from '@/Components/NavBar.vue'
import AsideMenu from '@/Components/AsideMenu.vue'
import FooterBar from '@/Components/FooterBar.vue'

const styleStore = useStyleStore()

const layoutStore = useLayoutStore()
</script>

<template>
  <div id="app" class="bg-gray-200">
      <div class="container mx-auto px-4">
          <div class="py-4">
              <Menu></Menu>
              <slot />
          </div>
      </div>
  </div>
</template>