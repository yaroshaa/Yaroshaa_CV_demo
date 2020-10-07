<template>
    <section v-bind:id="label.nav_class" class="portfolio portfolio-web">
        <hr class="gray-line">
        <div class="labelh2-section">
            <div class="labelh2-section" v-if="indx % 2 === 0">
                <label-left :label="label"></label-left>
            </div>
            <div class="labelh2-section" v-else>
                <label-right :label="label"></label-right>
            </div>
        </div>
            <div class="container mx-auto relative py-16">
                <div class="s-portfolio">
                    <div id="portfolio-filters" class="w-full">
                        <div class="text-sm text-gray-600 uppercase hover:text-blue-600 mb-0 pr-3 filter-item inline-block cursor-pointer"
                             v-on:click="updateFilter('new_work'); isActiveGroup(0)"
                             :class="[{active : activeGroup === 0}]"
                        >{{ $t('new works') }}</div>
                        <div class="text-sm text-gray-600 uppercase hover:text-blue-600 mb-0 pr-3 filter-item inline-block cursor-pointer"
                             v-for="(group,index) in alldata.groups"
                             v-html="group.translate.name"
                             :class="[{active : activeGroup === group.id}]"
                             v-on:click="updateFilter(group.nav_class); isActiveGroup(group.id)"
                            ></div>
                    </div>
                </div>
            </div>
            <div class="container mx-auto relative mb-24 overflow-hidden">
                <div id="portfolio-gallery" class="grid-portfolio block ">
                    <transition-group   name="list-complete"  class="list-complete"  tag="div">
                        <div v-for="(page,index) in filteredImages"
                             class=" portfolio-item block float-left m-0 lg:cursor-pointer xl:cursor-pointer lg:hover:opacity-75 xl:hover:opacity-75  w-full md:w-w-3/6 lg:w-1/3 xl:w-1/3 overflow-hidden relative p-px "
                             :key = "page.id"
                             :class="[page.group, [page.new_work ? 'new_work' : ''], {click : isActive === index}]"
                             v-on:click="openNav(index)">
                                <div class="portfolio-img-effect w-full tracking-normal">
                                    <img :src="`/assets/img/portfolio/web/970x647/${page.thumb}`" :alt="page.translate.name">
                                </div>
                            <transition name="fade">
                                <div class="portfolio-item-click" >
                                    <div class="mb-6">
                                        <h4 class="text-lg text-white mb-2" v-html="page.translate.name" ></h4>
                                        <p class="text-white text-opacity-75"></p>
                                    </div>
                                    <ul class="inline-block inline-block m-0 top-0 left-0 pt-2 pl-2">
                                        <li class="inline-block block mb-2">
                                            <span
                                               class="lightbox inline-block text-center align-middle w-9 h-9 p-2 text-sm bg-white rounded-full"
                                               :title="page.translate.name"
                                               :key="page.id"
                                               @click="() => showImg(index, page.img_link)"
                                            >
                                                <i class="ti-fullscreen"></i>
                                            </span>
                                        </li>
                                        <li class="inline-block block mb-2">
                                            <a :href="page.web_link ? page.web_link : '#'" target="_blank"
                                               class="inline-block text-center align-middle w-9 h-9 p-2 text-sm bg-white rounded-full">
                                                <i class="ti-link"></i>
                                            </a>
                                        </li>
                                        <li class="inline-block block mb-2" v-for="technology in page.icons ">
                                                <span
                                                    class="inline-block text-center align-middle w-9 h-9 p-2 text-sm bg-white rounded-full">
                                                    <img :src="`/assets/img/icons_logo/${technology.icon}`" width="23" height="23"
                                                         :alt="technology.name">
                                                </span>
                                        </li>
                                    </ul>
                                </div>
                            </transition>

                        </div>
                    </transition-group>
                </div>
            </div>

        <vue-easy-lightbox
            escDisabled
            moveDisabled
            :visible="visible"
            :imgs="img"
            :index="index"
            @hide="handleHide">
        </vue-easy-lightbox>
    </section>

</template>

<script lang="ts">
    import Vue from 'vue';
    import LabelLeft from "@/components/LabelLeft.vue";
    import LabelRight from "@/components/LabelRight.vue";
    import VueEasyLightbox from 'vue-easy-lightbox';

    interface Item{
        id:number,
        group:string,
        thumb:string,
        img_link:string,
        demo_link:string,
        web_link:string,
        new_work:number,
        status:number,
        order:number,
        created_at:string,
        updated_at:string,
        translate:{
            id:number,
            lang_id:number,
            web_portfolio_id:number,
            name:string,
            description:string,
            full_text:string,
            created_at:string,
            updated_at:string
        },
        icons:[{
                id:number,
                name:string,
                link_img:string,
                icon:string,
                order:number,
                status:number,
                created_at:string,
                updated_at:string,
                pivot:{
                    web_portfolio_id:number,
                    technology_id:number
                }
            }]
    }

    export default Vue.extend({
        props:['alldata','general', 'label', 'indx'] ,
        components: {
            'label-left': LabelLeft,
            'label-right': LabelRight,
            'vue-easy-lightbox': VueEasyLightbox,
        },
        data: () => {
            const dir: string  = 'assets/img/portfolio/web/970x647/';
            return {
                dir: dir,
                visible: false,
                isActive: -1,
                activeGroup: 0,
                img: '',
                index: 0,
                galleryFilter: 'new_work',
                images: [] as Item[]
           }
        },
        created(){
            this.images = this.alldata.pages as Item[] ;
        },
        computed: {
            filteredImages: function() {
                if (this.galleryFilter === 'new_work') {
                    return this.images.filter(image => image.new_work === 1);
                } else {
                    return this.images.filter(image => image.group === this.galleryFilter);
                }
            }
        },
        methods: {
            openNav: function (key) {
                this.isActive = (this.isActive === key) ? -1 : key;
                setTimeout(() => {
                    this.isActive = -1
                }, 15000)
            },
            isActiveGroup: function(key) {
                this.activeGroup = this.activeGroup === key ? -1 : key;
            },
            showImg: function (key: number, link: string) {
                this.img = this.dir+link;
                this.index = key;
                this.visible = true;
            },
            handleHide: function () {
                this.visible = false;
            },
            updateFilter: function(filterName) {
                this.galleryFilter = filterName;
            }
        },
    });

</script>
<style>

</style>

