<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { },
  props: {},

  setup (props, ctx) {
    const state = reactive({  
        title: 'Client Courses', 
            description: 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem', 
            href: route('learn.client'),
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
    })
    
    return { } 
  }
} 
</script>

<template>
<div>
    <v-row>
        <v-card hover>
                <v-list-item three-line>
                    <v-list-item-content>
                        <v-list-item-title class="text-h6"><v-icon>mdi-web</v-icon> <a :href="href">{{ title }}</a> </v-list-item-title>
                        <v-list-item-subtitle class="text-subtitle-1"> {{ description }} </v-list-item-subtitle>
                        </v-list-item-content>
                    </v-list-item>
                <v-list dense>
                    <v-list-item><v-list-item-title class="text-subtitle-2">Learning Certification</v-list-item-title></v-list-item>
                    <v-divider></v-divider>
                    <v-row no-gutters>
                        <v-col cols="4" v-for="category in categories" :key="category.title">
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
                    <v-btn color="primary" :href="href">Explore <v-icon dense class="ml-2">mdi-arrow-right-bold-circle-outline</v-icon></v-btn>
                </v-card-actions>
            </v-card>
    </v-row>
</div>
</template>

<style scoped>
 
</style>