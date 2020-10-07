<template>
    <section v-bind:id="label.nav_class" class="pt-5 pb-6 projects">
        <hr class="gray-line">
        <div class="labelh2-section">
            <div class="labelh2-section" v-if="indx % 2 === 0">
                <label-left :label="label"></label-left>
            </div>
            <div class="labelh2-section" v-else>
                <label-right :label="label"></label-right>
            </div>
        </div>
        <div class="container mx-auto relative" v-for="(project,index) in alldata" >
            <div class="w-full project-logo" style = "padding: 20px;" v-bind:style="(index % 2 === 0) ? 'text-align: right;' : 'text-align:left;'" >
                <img :src="`/assets/img/projects/${project.link_logo}`" :alt="project.name"  class="inline-block w-auto h-auto rounded-lg">
            </div>
            <div class="block box-border lg:flex xl:flex mb-4 project-block">
                <div class="block  box-border w-full md:w-full lg:w-1/3 xl:w-1/3  p-3 md:mx-0 lg:mx-0 xl:mx-0  description-list" v-html="project.translate.description_list">
                </div>
                <div class="block box-border w-full md:w-full lg:w-1/3 xl:w-1/3 p-3 md:mx-0 lg:mx-0 xl:mx-0 text-center promo-image">
                    <img class="inline-block rounded-full " :src="`/assets/img/projects/${project.link_img}`"  :alt="`Promo image ${project.name}`">
                </div>
                <div class="block box-border w-full md:w-full lg:w-1/3 xl:w-1/3 p-3 md:mx-0 lg:mx-0 xl:mx-0 text-center lg:text-justify xl:text-justify description-text" v-html="project.translate.description">
                </div>
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
        components: {
            'label-left': LabelLeft,
            'label-right': LabelRight,
        },
        data:() => {
            return {
            }
        }
    });
</script>

