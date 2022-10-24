<template>
<div>
    <v-row>
        <v-col cols="12" sm="12" md="4" v-for="course in courses" :key="course.title">
            <v-card hover>
                <v-list-item three-line>
                    <v-list-item-content>
                        <v-list-item-title class="text-h6"><v-icon>mdi-web</v-icon> <a :href="course.href">{{ course.title }}</a> </v-list-item-title>
                        <v-list-item-subtitle class="text-subtitle-1"> {{ course.description }} </v-list-item-subtitle>
                        </v-list-item-content>
                    </v-list-item>
                <v-list dense>
                    <v-list-item><v-list-item-title class="text-subtitle-2">Learning Certification</v-list-item-title></v-list-item>
                    <v-divider></v-divider>
                    <v-row no-gutters>
                        <v-col cols="4" v-for="category in course.categories" :key="category.title">
                            <v-list-item><v-list-item-subtitle class="text-caption"> {{ category.name }} </v-list-item-subtitle></v-list-item>
                        <v-list-item>
                            <v-list-item-content>
                                <v-list-item-subtitle v-for="certificate in category.certificates" :key="certificate.name">
                                    <v-icon color="primary" dense>mdi-check-circle-outline</v-icon> {{ certificate.name }} 
                                </v-list-item-subtitle>
                            </v-list-item-content>
                        </v-list-item>

                        </v-col>
                    </v-row>
                </v-list> 
                <v-card-actions class="justify-center">
                    <v-speed-dial v-model="fab" direction="bottom" transition open-on-hover absolute top right>
                        <template v-slot:activator>
                            <v-btn text fab small v-model="fab"><v-icon v-if="fab" dense>mdi-close</v-icon><v-icon v-else dense>mdi-share-variant</v-icon></v-btn>
                        </template>
                        <v-btn fab dark small color="green" ><v-icon dense>mdi-facebook</v-icon></v-btn>
                        <v-btn fab dark small color="indigo"><v-icon dense>mdi-twitter</v-icon></v-btn>
                        <v-btn fab dark small color="red"><v-icon dense>mdi-linkedin</v-icon></v-btn>
                    </v-speed-dial>
                    <v-btn color="primary" :href="course.href">Explore <v-icon dense class="ml-2">mdi-arrow-right-bold-circle-outline</v-icon></v-btn>
                </v-card-actions>
            </v-card>
        </v-col>
    </v-row>
</div>
</template>

<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue";
export default {
    components: {},
    props: {},
    data: ()=>{
        return {
            courses: [
                { 
                    title: 'Client Courses', 
                    description: 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem', 
                    href: route('eweb.learn.client'),
                    categories: [
                        { 
                            name: 'Core', 
                            certificates: [
                                { name: 'HTML' },
                                { name: 'CSS' },
                                { name: 'JavaScript' },
                            ]
                        },
                        { 
                            name: 'Native', 
                            certificates: [
                                { name: 'Tailwind' },
                                { name: 'Bootstrap' },
                                { name: 'jQuery' },
                            ]
                        },
                        { 
                            name: 'Modern', 
                            certificates: [
                                { name: 'Vue' },
                                { name: 'React' },
                                { name: 'Angular' },
                            ]
                        },
                    ],
                },
                { 
                    title: 'Server Courses', 
                    description: 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem', 
                    href: route('eweb.learn.server'),
                    categories: [
                        { 
                            name: 'Libraries', 
                            certificates: [
                                { name: 'PHP' },
                                { name: 'ASP' },
                                { name: 'Nodejs' },
                            ]
                        },
                        { 
                            name: 'Databases', 
                            certificates: [
                                { name: 'mySQL' },
                                { name: 'PostgreSQL' },
                                { name: 'Mongodb' },
                            ]
                        },
                        { 
                            name: 'Frameworks', 
                            certificates: [
                                { name: 'Laravel' },
                                { name: 'Django' },
                                { name: 'Symfony' },
                            ]
                        },
                    ],
                },
                { 
                    title: 'Full Courses', 
                    description: 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem', 
                    href: route('eweb.learn.full'),
                    categories: [
                        { 
                            name: 'PHP Stacks', 
                            certificates: [
                                { name: 'LaraVue' },
                                { name: 'LaraReact' },
                                { name: 'LaraStrap' },
                            ]
                        },
                        { 
                            name: 'JS Stacks', 
                            certificates: [
                                { name: 'MEAN' },
                                { name: 'MERN' },
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