import Vue from 'vue';
import Vuex from 'vuex';
import Axios from "axios";

Vue.use(Vuex);
export default new Vuex.Store({
    state: {
        defaultLanguage: '',
        loc: '',
        dat: {},
    },
    mutations: {
        changelang(state, n) {
            state.loc = n;
        },
        changedat(state, a) {
            state.dat = a;
        },
        setdefaultlang(state, b){
            state.defaultLanguage = b;
        }
    },
    actions: {
        updateData(context, lang) {
            Axios.get('/api/getHomeData/'+ lang, {
                headers: {
                    'Access-Control-Allow-Origin': '*',
                },
                proxy: {
                    host: '192.168.1.103',
                    port: 8080
                }})
                .then(response => {
                    context.commit('changedat', response.data.data);
                }).catch((error) => {
            })
        }
    }
});

