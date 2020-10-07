<template>
    <div>
        <div class="labelh2-line-right right-position w-1 sm:w-24 md:w-32 lg:w-72 xl:w-84"></div>
        <div class="container mx-auto relative">
            <div class="labelh2 right-position">
                <div class="labelh2-container">
                    <span class="labelh2-icon m-2 lg:m-3" v-html="label.icon"></span>
                    <span class="labelh2-text inline-block text-lg font-bold lg:font-medium  lg:text-3xl xl:text-3xl pr-3 lg:pr-0 xl:pr-0 mt-2 lg:m-3 text-white uppercase">{{ label.translate.name }}</span>
                </div>
            </div>
        </div>
    </div>
</template>

<script lang="ts">
    import Vue from 'vue';
    export default Vue.extend({
        props:['label'],
        data:() => {
            return {
            }
        },
    });
</script>

