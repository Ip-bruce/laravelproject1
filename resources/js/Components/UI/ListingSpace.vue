<template>
    <div>
        <span class="">{{ listing.beds }}</span>&nbsp; 
        <span class="font-bold" >beds</span> 
        <span class="text-gray-400" >-</span>&nbsp;
        <span>{{ listing.bath }}</span>&nbsp;
        <span class="font-bold" >baths</span>&nbsp;
        <span>-</span>&nbsp;
        <span>{{ listing.area }}</span>&nbsp;
        <span class="font-bold" >m2</span>
    </div>
</template>

<script setup>
    defineProps({
        listing: Object,
    })
</script>