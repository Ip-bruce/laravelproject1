<template>
    
    <Link href="/hello">Show Page</Link>&nbsp;
    
    <Link href="/listing/create">See Create</Link>
  
    <header class="border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 w-full" >
      <div class="container mx-auto " >
        <nav class="p-4 flex items-center justify-between" >
          <div class="text-lg" >
            <Link :href="route('listing.index')">See Listings</Link>        
          </div>
          <div class="text-xl text-blue-800 dark:text-indigo-100 font-bold text-center" >
            <Link :href="route('listing.index')">HomeRent</Link>
          </div>
          <div>
            <Link :href="route('listing.create')" class="bg-indigo-600 hover:bg-indigo-500 font-white p-2 rounded-md" >+New Listing</Link>
          </div>
        </nav>
      </div>
    </header>

    <main class="container mx-auto p-4" >
      <div v-if="flashSuccess" class="mb-4 border rounded-md shadow-sm border-green-200 dark:border-green-800 bg-green-50 dark:bg-green-900 p-2 text-center text-xl font-bold text-white ">
    {{ flashSuccess }}!
    </div>
    </main>
  
  <slot>Default</slot>
</template>

<script setup>
import { computed } from 'vue'
import { Link, usePage } from '@inertiajs/vue3'
 
const flashSuccess = computed(
  () => usePage().props.flash.success,
)
</script>
