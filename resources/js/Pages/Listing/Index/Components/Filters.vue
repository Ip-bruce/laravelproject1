<template>
    <form action="">
        <div class="mv-8 mt-4 flex flex-wrap gap-2" >
            <div class="flex flex-nowrap items-center">
                <input type="text" placeholder="price from"
                class="placeholder:text-gray-400 dark:placeholder:text-gray-600 border border-gray-700 rounded-t-md rounded-l-md rounded-b-md rounded-r-none text-sm font-medium text-gray-600 dark:text-gray-400 dark:bg-gray-800">
                <input type="text" placeholder="price to" >
            </div>

            <div class="flex flex-nowrap items-center">
                <select>
                    <option value="null">Beds</option>
                    <option v-for="n in 5" :key="n" :value="n">{{ n }}</option>
                    <option>6+</option>
                </select>
                <select>
                    <option value="null">Baths</option>
                    <option v-for="n in 5" :key="n" :value="n">{{ n }}</option>
                    <option>6+</option>
                </select>
            </div>

            <div class="flex flex-nowrap items-center">
                <input type="text" placeholder="Area from">
                <input type="text" placeholder="Area to" >
            </div>
            <button type="submit" >Filter</button>
            <button type="reset" >Clear</button>
        </div>
    </form>
</template>