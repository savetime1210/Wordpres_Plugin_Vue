<template>
  <v-app id="inspire">
    <v-card>
      <v-tabs
        v-model="tab"
        background-color="deep-purple accent-4"
        centered
        dark
        icons-and-text
      >
        <v-tabs-slider></v-tabs-slider>
  
        <v-tab href="#tab-1">
          Recents
          <!-- <v-icon>mdi-phone</v-icon> -->
        </v-tab>
  
        <v-tab href="#tab-2">
          Favorites
          <!-- <v-icon>mdi-heart</v-icon> -->
        </v-tab>
  
        <v-tab href="#tab-3">
          Nearby
          <!-- <v-icon>mdi-account-box</v-icon> -->
        </v-tab>
      </v-tabs>
  
      <v-tabs-items v-model="tab">
        <v-tab-item
          v-for="i in 3"
          :key="i"
          :value="'tab-' + i"
        >
          <v-card flat>
            <v-card-text>{{ text }}</v-card-text>
          </v-card>
        </v-tab-item>
      </v-tabs-items>
    </v-card>
  </v-app>
</template>
<script>
    'use strict';
    import Vue from 'vue'
    import vuetify from './plugins/vuetify';
    import VueI18n from 'vue-i18n'
    import axios from "axios";

    export default {
        data(){

            return {
                tab: null,
                text: "Tabs can be dynamically added and removed. This allows you to update to any number and the v-tabs component will react. In this example when we add a new tab, we automatically change our model to match. As we add more tabs and overflow the container, the selected item will be automatically scrolled into view. Remove all v-tabs and the slider will disappear.",
            }
        },

        components: {
           
        },
        computed: {
           
        },
        methods: {
        },
        beforeCreate() {
        },

        //when created, do some initializations
        created() {
        }
    }
</script>
