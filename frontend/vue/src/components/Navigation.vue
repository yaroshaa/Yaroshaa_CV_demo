<template>
    <div id="head-menu" class="text-sm lg:flex mt-1">
        <span class="item-menu block lg:inline-block lg:mt-0 border-solid border-t-2 border-transparent hover:border-white px-2 mt-1 sm:p-2" v-for="item in navigation">
            <a href="#"
               v-bind:title="item.name"
               v-scroll-to="'#'+item.class"
               :class="`block lg:inline-block m-4 md:m-0 lg:m-0 lg:mt-0 text-gray-700 hover:text-white hover:border-white`">{{ item.name }}</a>

        </span>
    </div>
</template>
<script lang="ts">
    import Vue from 'vue';
    export default Vue.extend({
        props:['navigation'],
        data:() => {
            return {
            }
        },
    });
</script>

