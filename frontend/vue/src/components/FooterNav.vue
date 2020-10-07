<template>
    <footer class="">
        <div class="footer_copyright">
            <div class="container mx-auto">
                <div class="flex mb-4 px-3">
                    <div class="w-1/2 copyright_text ">
                        Copiright © 2016 Yaroshaa
                    </div>
                    <div class="w-1/2">
                        <div id="scrollUp" class="go-top float-right">
                            <a  id="go-top" v-scroll-to="`#start`" >
                                <i class="fa fa-angle-up"></i>
                                {{ $t('up') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>

<script lang="ts">
    import Vue from 'vue';
    export default Vue.extend({

        data:() => {
            return {
            }
        }
    });
</script>

