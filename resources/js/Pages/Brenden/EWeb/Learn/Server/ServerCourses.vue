<template>
<div>
    <div v-for="server in servers" :key="server.title">
        <p class="text-body-1"> {{ server.description }} </p>
        <p class="text-h5">{{ server.title }}</p>
        <v-tabs>
            <v-tab  v-for="category in server.categories" :key="category.name">{{ category.name }} </v-tab>
            <v-tab-item v-for="category in server.categories" :key="category.name">
                <v-row class="mt-2">
                    <v-col cols="12" sm="6" md="4" v-for="course in category.courses" :key="course.name">
                        <v-card hover color="#385F73" dark>                      
                            <v-list-item three-line>
                                <v-list-item-content>
                                    <v-list-item-title class="text-h5">{{ course.name }}</v-list-item-title>
                                    <v-list-item-subtitle class="text-body-1">Listen to your favorite artists and albums whenever and wherever, online and offline online and offline.</v-list-item-subtitle>
                                </v-list-item-content>
                            </v-list-item>
                            <v-card-text>
                                <v-row align="center" class="ml-1 mb-1">
                                    <v-rating value="4.5" color="amber" dense half-increments readonly size="14"></v-rating>
                                    <div class="grey--text ml-4">4.5 (413 Reviews)</div>
                                </v-row>
                                <p class="text-subtitle-1 mb-1">Knowledge Base</p>
                                <v-avatar size="30"><img src="https://cdn.vuetifyjs.com/images/john.jpg" alt="John"></v-avatar>
                                <v-avatar size="30"><img src="https://cdn.vuetifyjs.com/images/john.jpg" alt="John"></v-avatar>
                                <v-avatar size="30"><img src="https://cdn.vuetifyjs.com/images/john.jpg" alt="John"></v-avatar>
                                <v-avatar size="30"><img src="https://cdn.vuetifyjs.com/images/john.jpg" alt="John"></v-avatar>
                                <v-avatar size="30"><img src="https://cdn.vuetifyjs.com/images/john.jpg" alt="John"></v-avatar>
                                <v-avatar size="30"><img src="https://cdn.vuetifyjs.com/images/john.jpg" alt="John"></v-avatar>
                                <p class="text-subtitle-1">Course Structure</p>
                                <v-row no-gutters >
                                    <v-col cols="" v-for="content in course.contents" :key="content.name">
                                        <p class="text-subtitle-2"><v-icon dense>mdi-web</v-icon> {{ content.value }} </p>
                                        <p class="text-caption text-capitalize"> {{ content.name }} </p>
                                    </v-col>
                                </v-row>
                                <div align="right" class="my-1 text-subtitle-2">KSh. <strong class="text-h5">2340</strong></div>                    
                                </v-card-text>
                                <v-card-actions>
                                    <v-speed-dial v-model="fab" direction="bottom" transition open-on-hover absolute top right>
                                        <template v-slot:activator>
                                            <v-btn text fab small v-model="fab"><v-icon v-if="fab" dense>mdi-close</v-icon><v-icon v-else dense>mdi-share-variant</v-icon></v-btn>
                                        </template>
                                        <v-btn fab dark small color="green" ><v-icon dense>mdi-facebook</v-icon></v-btn>
                                        <v-btn fab dark small color="indigo"><v-icon dense>mdi-twitter</v-icon></v-btn>
                                        <v-btn fab dark small color="red"><v-icon dense>mdi-linkedin</v-icon></v-btn>
                                    </v-speed-dial>  
                                    <v-btn small fab text><v-icon dense>mdi-heart-outline</v-icon></v-btn>              
                                    <v-btn small fab text><v-icon dense>mdi-compare</v-icon></v-btn>              
                                    <v-btn small fab text><v-icon dense>mdi-chat-outline</v-icon></v-btn>   
                                    <v-btn small text outlined ><v-icon dense>mdi-file-plus-outline</v-icon> Quote</v-btn>
                                    <v-btn small color="primary"><v-icon dense>mdi-cart-plus</v-icon> Enroll</v-btn>
                                </v-card-actions>
                            </v-card>
                        </v-col>
                    </v-row>
            </v-tab-item>
        </v-tabs>    
  </div>
</div>
</template>

<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue";
export default {
    components: {},
    props: {},
    data: ()=>{
        return {
            servers: [
                { 
                    title: 'Server Certification Courses', 
                    description: 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem', 
                    categories: [
                        {
                            name: 'Libraries', 
                            courses: [
                                { 
                                    name: 'PHP Certification', 
                                    contents:[
                                        { name: 'modules', value: '4' },
                                        { name: 'tutorials', value: '28' },
                                        { name: 'videos', value: '3' },
                                        { name: 'exercises', value: '36' },
                                        { name: 'days', value: '36' },
                                    ]
                                },
                                { 
                                    name: 'ASP Certification', 
                                    contents:[
                                        { name: 'modules', value: '4' },
                                        { name: 'tutorials', value: '28' },
                                        { name: 'videos', value: '3' },
                                        { name: 'exercises', value: '36' },
                                        { name: 'days', value: '36' },
                                    ]
                                },
                                { 
                                    name: 'Nodejs Certification', 
                                    contents:[
                                        { name: 'modules', value: '4' },
                                        { name: 'tutorials', value: '28' },
                                        { name: 'videos', value: '3' },
                                        { name: 'exercises', value: '36' },
                                        { name: 'days', value: '36' },
                                    ]
                                },
                            ]
                        },
                        {
                            name: 'Databases', 
                            courses: [
                                { 
                                    name: 'mySQL Certification', 
                                    contents:[
                                        { name: 'modules', value: '4' },
                                        { name: 'tutorials', value: '28' },
                                        { name: 'videos', value: '3' },
                                        { name: 'exercises', value: '36' },
                                        { name: 'days', value: '36' },
                                    ]
                                },
                                { 
                                    name: 'PostgreSQL Certification', 
                                    contents:[
                                        { name: 'modules', value: '4' },
                                        { name: 'tutorials', value: '28' },
                                        { name: 'videos', value: '3' },
                                        { name: 'exercises', value: '36' },
                                        { name: 'days', value: '36' },
                                    ]
                                },
                                { 
                                    name: 'Mongodb Certification', 
                                    contents:[
                                        { name: 'modules', value: '4' },
                                        { name: 'tutorials', value: '28' },
                                        { name: 'videos', value: '3' },
                                        { name: 'exercises', value: '36' },
                                        { name: 'days', value: '36' },
                                    ]
                                },
                            ]
                        },
                        {
                            name: 'frameworks', 
                            courses: [
                                { 
                                    name: 'Laravel Certification', 
                                    contents:[
                                        { name: 'modules', value: '4' },
                                        { name: 'tutorials', value: '28' },
                                        { name: 'videos', value: '3' },
                                        { name: 'exercises', value: '36' },
                                        { name: 'days', value: '36' },
                                    ]
                                },
                                { 
                                    name: 'Django Certification', 
                                    contents:[
                                        { name: 'modules', value: '4' },
                                        { name: 'tutorials', value: '28' },
                                        { name: 'videos', value: '3' },
                                        { name: 'exercises', value: '36' },
                                        { name: 'days', value: '36' },
                                    ]
                                },
                                { 
                                    name: 'Symfony Certification', 
                                    contents:[
                                        { name: 'modules', value: '4' },
                                        { name: 'tutorials', value: '28' },
                                        { name: 'videos', value: '3' },
                                        { name: 'exercises', value: '36' },
                                        { name: 'days', value: '36' },
                                    ]
                                },
                            ]
                        },
                    ],                    
                },
            ]
        }
    },
    computed: {},
    watch: {},
    methods: {}
};
</script>
<style scoped>
 
</style>