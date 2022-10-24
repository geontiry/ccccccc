<template>
    <v-app :style="{ background: $vuetify.theme.themes.dark.background }">
        <SideBar />
        <RightSideBar />
        <Dashboard />
    </v-app>
</template>

<script>
import SideBar from "@/Pages/Test/Apps/App13/components/SideBar.vue";
import RightSideBar from "@/Pages/Test/Apps/App13/components/RightSideBar.vue";
import Dashboard from "@/Pages/Test/Apps/App13/components/Dashboard.vue";

export default {
    name: "Home",

    components: {
        SideBar,
        RightSideBar,
        Dashboard
    }
};
</script>
