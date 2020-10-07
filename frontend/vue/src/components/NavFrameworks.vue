<template>
    <div class="block-list-link-frameworks inline-block fixed  z-10 flex flex-col ">
        <span class="icon blade inline-block p-2 w-10 md:w-10 lg:w-10 xl:w-12">
            <a href="http://yaroshaa.com/" :title="$t('laravel blade front-end')" >
                <img :src="`${baseUrl}/assets/img/icons_logo/icon_laravel_blade.svg`" class="inline-block" alt="laravel blade">
            </a>
        </span>
        <span class="icon vue inline-block p-2 w-10 md:w-10 lg:w-10 xl:w-12">
            <a href="http://yaroshaa.com/vue/" :title="$t('vue front-end')">
               <img :src="`${baseUrl}/assets/img/icons_logo/icon_vue.svg`" class="inline-block" alt="vue">
            </a>
        </span>
        <span class="icon angular inline-block p-2 w-10 md:w-10 lg:w-10 xl:w-12">
            <a href="http://yaroshaa.com/angular/" :title="$t('angular front-end')+'in work'" style="pointer-events: none;">
               <img :src="`${baseUrl}/assets/img/icons_logo/icon_angular_gray.svg`" class="inline-block" alt="angular">
            </a>
        </span>
        <span class="icon react inline-block p-2 w-10 md:w-10 lg:w-10 xl:w-12">
             <a href="http://yaroshaa.com/react/" :title="$t('react front-end')+'in work'" style="pointer-events: none;">
                <img :src="`${baseUrl}/assets/img/icons_logo/icon_react_gray.svg`" class="inline-block" alt="react">
             </a>
        </span>
    </div>
</template>

<script lang="ts">
    import Vue from 'vue';
    export default Vue.extend({
        data:() => {
            return {
                baseUrl: process.env.BASE_URL
            }
        },
    });
</script>

