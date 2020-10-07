<template>
    <div class="flex flex-row sm:flex-row  md:flex-row lg:flex-col xl:flex-col  justify-center block-lang-links  lg:border-l-2 border-solid border-white pl-0 md:pl-3 h-full" >
        <router-link  v-for="lang in langs" v-bind:key="lang.id"  :to="`/${lang.key}`"
           :class="`inline-block m-1 mx-2 lg:mt-0 text-gray-700 hover:text-white`">{{ lang.key }}</router-link>
    </div>
</template>

<script lang="ts">
    import Vue from 'vue';
    export default Vue.extend({
        props:['langs', 'currentLanguage'],
        data:() => {
            return {
            }
        },
    });
</script>

