<template>
    <div>
        <headernav :navigation="navigation" :languages="languages" :currentLanguage="currentLanguage"></headernav>
        <router-view :categories="categories" :general="general" :links="links"></router-view>
        <footernav :general="general"></footernav>
        <nav-frameworks></nav-frameworks>
    </div>
</template>

<script lang="ts">
    import Vue , { VNode }  from 'vue';
    import Header from './components/HeaderNav.vue';
    import Footer from './components/FooterNav.vue';
    import NavFrameworks from './components/NavFrameworks.vue';
    import Axios from 'axios';

    export default Vue.extend({
        data() {
            return {
                categories: null,
                navigation: null,
                languages: null,
                currentLanguage: '',
                general: null,
                links: null,
                allDat: null,
            }
        },
        created() {},
        mounted() {
            let browserLanguage = navigator.language.split('-')[0];
            this.getDefaultLanguage();

            this.currentLanguage = this.checkBrowserLang( browserLanguage, this.$store.state.defaultLanguage );
            this.updateLanguage(this.currentLanguage);
            this.getData(this.currentLanguage);

            this.$store.watch(
                (state) => state.dat ,
                (newValue, oldValue) => {
                    if(newValue){
                        this.setData();
                    }
                }
            );
        },
        components: {
            'headernav': Header,
            'footernav': Footer,
            'nav-frameworks': NavFrameworks,
        },
        methods:{
            getDefaultLanguage: function () {
                Axios.get('/api/getDefaultLanguage')
                    .then(response => {
                        this.setDefaultLanguage(response.data.data.defaultLanguage)
                    });
            },
            getData: function(lang: string){
                // console.log(lang);
                Axios.get('/api/getHomeData/'+ lang, {
                    headers: {
                        'Access-Control-Allow-Origin': '*',
                    },
                    proxy: {
                        host: '192.168.1.103',
                        port: 8080
                    }})
                    .then(response => {
                        this.updateData(response.data.data);
                        this.setData();
                    });
            },
            setData: function(){
                this.navigation = this.$store.state.dat.navigation,
                this.categories = this.$store.state.dat.categories,
                this.languages = this.$store.state.dat.languages,
                this.currentLanguage = this.$store.state.loc,
                this.general = this.$store.state.dat.general,
                this.links = this.$store.state.dat.links,
                this.allDat = this.$store.state.dat
            },
            updateData: function(data: unknown){
                this.$store.commit('changedat', data);
            },
            updateLanguage: function(i: string){
                this.$i18n.locale = i;
                this.$store.commit('changelang', i);
            },
            setDefaultLanguage: function (i: string) {
                this.$store.commit('setdefaultlang', i);
                this.$i18n.fallbackLocale = i;
            },
            checkBrowserLang: function (lang: string , defaultLanguage: string){
                return this.$i18n.messages.hasOwnProperty(lang) ? lang : defaultLanguage;
            }
        }
    });
</script>


