<template>
    <v-container>
        <v-toolbar color="rgba(0,0,0,0)" flat dark>
            <v-toolbar-title class="mt-n3">Overview</v-toolbar-title>
            <v-spacer></v-spacer>
            <v-btn text color="white" class="withoutupercase"
                >Last 30 Days</v-btn
            >
            <v-btn icon dark class="ml-n3">
                <v-icon x-small color="#C3F942">fas fa-chevron-down</v-icon>
            </v-btn>
        </v-toolbar>
        <v-row>
            <v-col cols="12" sm="8">
                <Stream />
            </v-col>
            <v-col cols="12" sm="4">
                <Earning />
            </v-col>
            <v-col cols="12" sm="4">
                <Audience />
            </v-col>
            <v-col cols="12" sm="8">
                <Release />
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
import Audience from "@/Pages/Test/Apps/App13/components/Audience.vue";
import Release from "@/Pages/Test/Apps/App13/components/Release.vue";
import Stream from "@/Pages/Test/Apps/App13/components/Stream.vue";
import Earning from "@/Pages/Test/Apps/App13/components/Earning.vue";
export default {
    components: { Audience, Release, Earning, Stream }
};
</script>

<style></style>
