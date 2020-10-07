<template>
    <div class="nav_lang invisible   lg:visible xl:visible flex items-center h-0 lg:h-20 xl:h-20">
        <span class="hidden lang-label current-lang text-white font-black pr-4 lg:block xl:block ">{{currentLanguage}}</span>
        <div class="flex flex-row sm:flex-row  md:flex-row lg:flex-col xl:flex-col  justify-center block-lang-links  lg:border-l-2 border-solid border-white pl-0 md:pl-4 h-full" >
            <div v-for="(lang,i) in langs">
                <router-link  v-if="lang.key !== currentLanguage"  v-bind:key="lang.id"  :to="`/${lang.key}`" :class="`inline-block mt-4 lg:mt-0 text-gray-700 hover:text-white py-2`">{{lang.key}}</router-link>
            </div>
        </div>
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
        methods: {
            updateLanguage: function(to,from){
                this.$store.commit('changelang', to.name);
                this.$i18n.locale = to.name;
                this.$store.dispatch('updateData', to.name);
            }
        },
        watch:{
            $route: 'updateLanguage'
        }
    });
</script>

