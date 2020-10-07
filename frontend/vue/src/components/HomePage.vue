<template>
    <div>
        <component
            v-for="(category,index) in categories"
            v-bind:key="category.label.id"
            v-bind:is="category.label.key"
            v-bind:alldata="category.data"
            v-bind:label="category.label"
            v-bind:general="general"
            v-bind:links="links"
            v-bind:indx="index" >
        </component>
    </div>
</template>

<script lang="ts">
import Vue from 'vue';
import StartComponent from './Start.vue';
import SpokenlangsComponent from './SpokenLangs.vue';
import AboutmeComponent from './AboutMe.vue';
import ContactsComponent from './Contacts.vue';
import ProjectsComponent from './Projects.vue';
import SocialnetworksComponent from './SocialNetworks.vue';
import WebportComponent from './WebPort.vue';
import TechnologyComponent from './Technology.vue';
import ToolsComponent from './Tools.vue';

export default Vue.extend( {
    props: [
        'categories',
        'general',
        'links'
    ],
    data() {
        return {}
    },
    components: {
        'start': StartComponent,
        'aboutme': AboutmeComponent,
        'spokenlangs': SpokenlangsComponent,
        'tools': ToolsComponent,
        'technology': TechnologyComponent,
        'webportfolio': WebportComponent,
        'projects': ProjectsComponent,
        'socialnetworks': SocialnetworksComponent,
        'contacts': ContactsComponent,
    },
    created() {
    },
    methods: {
    }
});
</script>

