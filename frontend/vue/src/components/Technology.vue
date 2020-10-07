<template>
    <section v-bind:id="label.nav_class" class="">
        <hr class="gray-line">
        <div class="labelh2-section">
            <div class="labelh2-section" v-if="indx % 2 === 0">
                <label-left :label="label"></label-left>
            </div>
            <div class="labelh2-section" v-else>
                <label-right :label="label"></label-right>
            </div>
        </div>
        <div class="container mx-auto relative">
            <div class="flex">
                <div class="w-full py-5">
                    <div class="center technology-slider">
                        <VueSlickCarousel v-bind="settings">
                            <div class="ca-item-main" v-for="technology in alldata">
                                <img :src="`/assets/img/technologies/${technology.link_img}`" width="150" height="150" :alt="technology.name">
                            </div>
                        </VueSlickCarousel>
                    </div>
                </div>
            </div>
        </div>

    </section>
</template>

<script lang="ts">
    import Vue from 'vue';
    import LabelRight from "./LabelRight.vue";
    import LabelLeft from "./LabelLeft.vue";
    import VueSlickCarousel from 'vue-slick-carousel'

    export default Vue.extend({

        props:['alldata','general', 'label', 'indx'],
        components: {
            'label-left': LabelLeft,
            'label-right': LabelRight,
            VueSlickCarousel
        },
        data:() => {
            return {
                settings: {
                    arrows: true,
                    dots: false,
                    swipe:true,
                    focusOnSelect: true,
                    infinite: true,
                    speed: 500,
                    slidesToShow: 6,
                    slidesToScroll: 1,
                    touchThreshold: 5,
                    autoplay:true,
                    autoplaySpeed:1500,
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 4,
                                slidesToScroll: 4,
                                initialSlide: 4
                            }
                        },
                        {
                            breakpoint: 800,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 3,
                                initialSlide: 3
                            }
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2,
                                initialSlide: 2
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 300,
                            settings: "unslick" // destroys slick
                        }
                    ],
                    mobileFirst: false,
                    useCSS: true,

                },
            }
        }
    });

</script>

