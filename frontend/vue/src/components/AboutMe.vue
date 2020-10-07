<template>
    <section v-bind:id="label.nav_class" class="about-me">
        <hr class="gray-line">
        <div class="labelh2-section" v-if="indx % 2 === 0">
            <label-left :label="label"></label-left>
        </div>
        <div class="labelh2-section" v-else>
            <label-right :label="label"></label-right>
        </div>

        <div class="container mx-auto">
            <h2 class="section-title date_of_birthday">{{ $t('date of birth')}}: <span
                class="orange" v-if="general.age" v-html="general.age" ></span></h2>
            <div class="block lg:flex mb-4">
                <div class="w-full lg:w-1/2 resume-education relative">
                    <div class="rounded-icon">
                        <i class="fa fa-graduation-cap"></i>
                        <span class="rezume-info-title" v-html="$t('education')"></span>
                    </div>
                    <div class="resume-out">
                        <div class="resume-info brdr-l" v-for="(education,index) in alldata.educations">
                            <h2 class="info-title text-lg lg:text-base">{{ education.translate.name }}</h2>
                            <span
                                class="info-date blue text-lg lg:text-base">{{ education.date_start }} - {{ education.date_stop }}</span>
                            <p class="text-base pr-3 md:pr-2 lg:pr-0 xl:pr-0 md:text-sm lg:text-sm " v-html="education.translate.description"></p>
                        </div>
                    </div>
                    <br>
                    <div class="icon-education-wrapper flex lg:flex-row justify-between items-center">
                        <div class="large-icon-education-item inline-block w-4/12 md:w-1/4 lg:w-1/5 xl:w-1/5 text-center">
                        <span class="w-auto">
                            <img src="/assets/img/icon/male-university-graduate-silhouette-with-the-cap.svg"
                                 width="auto" height="auto" alt="">
                        </span>
                        </div>
                        <div class="icon-education-block inline-block w-8/12 lg:w-4/5 xl:w-4/5">
                            <div class="icon-education-group flex flex-row justify-between items-center">
                            <span class="icon-education-item flex flex-col lg:flex-col items-center w-2/6 px-2">
                                <span
                                    class="icon-education-title inline-block text-center  p-0 leading-none lg:leading-normal text-sm sm:text-base md:text-base lg:text-base xl:text-base">reading</span>
                                <span class="icon-education-svg inline-block w-20 md:w-20 lg:w-20 xl:w-24 p-2">
                                    <img src="/assets/img/icon/reading.svg" class="w-auto md:w-10"
                                         alt="reading">
                                </span>
                            </span>
                                <span class="icon-education-item flex flex-col items-center w-2/6 px-2">
                                <span
                                    class="icon-education-title inline-block text-center p-0 leading-none lg:leading-normal text-sm sm:text-base md:text-base lg:text-base xl:text-base">video lessons</span>
                                <span class="icon-education-svg inline-block w-20 md:w-20 lg:w-20 xl:w-24 p-2">
                                    <img src="/assets/img/icon/video-lecture.svg" class="w-auto md:w-10"
                                         alt="video lessons">
                                </span>
                            </span>
                                <span class="icon-education-item flex flex-col items-center w-2/6 px-2">
                                <span
                                    class="icon-education-title inline-block text-center  p-0 leading-none lg:leading-normal text-sm sm:text-base md:text-base lg:text-base xl:text-base">dialogues</span>
                                <span class="icon-education-svg inline-block w-20 md:w-20 lg:w-20 xl:w-24 p-2">
                                    <img src="/assets/img/icon/conversation.svg" class="w-auto md:w-10"
                                         alt="dialogues">
                                </span>
                            </span>
                            </div>
                            <div class="icon-education-group">
                            <span
                                class="self-education block text-center pt-0 text-xl sm:text-2xl md:text-2xl lg:text-3xl xl:text-3xl uppercase">
                                {{ $t('self-education') }}
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 resume-education">
                    <div class="rounded-icon">
                        <i class="fa fa-suitcase"></i>
                        <span class="rezume-info-title" v-html="$t('experience')"></span>
                    </div>
                    <div class="resume-out">
                        <div class="resume-info"  v-for="(experience,index) in alldata.experiences">
                            <h2 class="info-title text-lg lg:text-base">{{ experience.translate.name }}</h2>
                            <span
                                class="info-date blue text-lg md:text-base lg:text-base">{{ experience.date_start }} - {{ experience.date_stop }}</span>
                            <p class="text-base pr-3 md:pr-2 lg:pr-0 xl:pr-0 md:text-sm lg:text-sm " v-html="experience.translate.description"></p>
                        </div>

                    </div>
                    <div id="link-to-github" class="link-to-github mx-auto download_block">
                        <a :href="links.link_github" target="_blank">
                        <span class="flex flex-col sm:flex-row md:flex-row lg:flex-row xl:flex-row justify-center">
                             <span class="inline-block py-2 px-3 ">
                            {{ $t('you can see the code here:') }}
                        </span>
                        <span class="inline-block p-2 w-1/5  mx-auto sm:mx-0 md:mx-0 lg:mx-0 xl:mx-0  -m-2">
                           <img src="/assets/img/icon/github.svg" alt="Link to GitHub" title="Link to GitHub">
                        </span>
                        </span>

                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mx-auto кey-information">
            <ul>
                <li>Html</li>
                <li>Css/Sass</li>
                <li>Js</li>
                <li>Php</li>
                <li>Mysql</li>
            </ul>
        </div>
        <div class="container mx-auto download_block">
            <div class="block lg:flex  mb-4">
                <div class="w-full lg:w-1/2">
                    <br>
                    <p v-html="$t('you can download the resume in pdf')"></p>
                </div>
                <div class="w-full lg:w-1/2">
                    <div class="button">
                        <a :href="`../download/${alldata.download}`" download>
                            <span class="fa fa-download uppercase"></span>&nbsp;{{ $t('download cv') }}</a>
                    </div>
                </div>
                <br>
                <br>
            </div>
        </div>
    </section>
</template>

<script lang="ts">
    import Vue , { VNode }  from 'vue';
    import LabelRight from "./LabelRight.vue";
    import LabelLeft from "./LabelLeft.vue";

    export default Vue.extend({
        props:['alldata','general', 'links', 'label', 'indx'],
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

