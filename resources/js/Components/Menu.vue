<script setup>
import { Link } from '@inertiajs/vue3';
import { reactive,ref } from 'vue';
const drawer = ref(false);
</script>

<template>
      <v-app-bar
        color="primary"
        prominent
      >
        <v-app-bar-nav-icon variant="text" @click.stop="drawer = !drawer"></v-app-bar-nav-icon>

        <v-toolbar-title>My files</v-toolbar-title>

        <v-spacer></v-spacer>

        <v-btn variant="text" icon="mdi-magnify"></v-btn>

        <v-btn variant="text" icon="mdi-filter"></v-btn>

        <v-btn variant="text" icon="mdi-dots-vertical"></v-btn>
      </v-app-bar>
          <v-navigation-drawer
        v-model="drawer"
        location="bottom"
        temporary
      >
        <v-list-item>
            <v-list-item-content>
              <v-list-item-title><Link :href="route('about.index')">About</Link></v-list-item-title>
            </v-list-item-content>
        </v-list-item>
        <v-list-item>
            <v-list-item-content>
              <v-list-item-title><Link :href="route('about.create')">Create</Link></v-list-item-title>
            </v-list-item-content>
          </v-list-item>
 
      </v-navigation-drawer>
</template>

<style>
</style>
