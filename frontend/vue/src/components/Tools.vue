<template>
    <section v-bind:id="label.nav_class" class="tools">
    <hr class="gray-line">
        <div class="labelh2-section" v-if="indx % 2 === 0">
            <label-left :label="label"></label-left>
        </div>
        <div class="labelh2-section" v-else>
            <label-right :label="label"></label-right>
        </div>
    <div class="tools-block">
        <div class="container mx-auto relative">
            <ul>
                <li  v-for="tool in alldata"><span class="inline-block w-16 h-auto"><img :src="`/assets/img/tools/${tool.link_img}`" :alt="tool.name"></span></li>
            </ul>
        </div>
    </div>
    </section>
</template>
<script lang="ts">
    import Vue from 'vue';
    import LabelRight from "./LabelRight.vue";
    import LabelLeft from "./LabelLeft.vue";

    export default Vue.extend({
        props:['alldata','general', 'label', 'indx'],
        data:() => {
            return {
            }
        },
        components: {
            'label-left': LabelLeft,
            'label-right': LabelRight
        }
    });
</script>

