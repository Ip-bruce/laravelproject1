<template>
    <div>
    <span>{{ listing.street }} {{ listing.street_nr }}</span> 
    <span classs="font-bold p-2" >,</span> <span class="font-bold" >{{ listing.city }}</span>
    </div>  
</template>

<script setup>
    defineProps({
        listing: Object,
    })
</script>