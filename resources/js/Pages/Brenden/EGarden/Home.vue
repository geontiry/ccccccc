<template>
    <div>
        <v-app :style="{ background: $vuetify.theme.themes.dark.background }">
        <v-container>
        <v-layout row>
      <v-flex md8>
        <v-app :style="{background: $vuetify.theme.themes.dark.background}" class="rounded-tr-xl rounded-br-xl">
          <v-container>
              <v-row>
                <v-col cols="12" sm="12">
                  <v-app-bar color="rgba(0,0,0,0)" flat class="mx-8 mb-8 mt-3">
                    <v-text-field
                    prepend-icon="mdi-magnify"
                    color="teal"
                    placeholder="Search your symptoms"
                    flat
                    success 
                  ></v-text-field>
                  <v-spacer></v-spacer>
                   <v-chip
                    class="ma-2"
                    color="white" 
                  >
                    <v-icon left color="teal">
                      mdi-clock-time-nine
                    </v-icon>
                    14:02 AM Today Nov,19
                  </v-chip>
                  </v-app-bar>
                </v-col>
                <v-col cols="12" sm="12">
                  <v-card class="mx-12 rounded-tl-xl rounded-tr-xl rounded-bl-xl rounded-br-xl mt-n15" >
                  <v-list-item three-line>
                    <v-list-item-content class="pa-10">
        <v-list-item-title class="headline mb-1">
          Today <span class="teal--text">-10%</span> discount<br>
          on lung examinations
        </v-list-item-title>
        <v-list-item-subtitle>
          The package price includes: consultation<br>
          of a pulmonologist, spirography, cardiogram <span class="teal--text">></span>
        </v-list-item-subtitle>
      </v-list-item-content>

      <v-list-item-avatar
        tile
        size="150"
        class="pr-10"
        
      >
      <img src="/storage/brenden/egarden/3.png">
      </v-list-item-avatar>
    </v-list-item>

  </v-card>
                </v-col>
                <v-col cols="12" sm="12">
                  <v-card class="mx-12 rounded-tl-xl rounded-tr-xl rounded-bl-xl rounded-br-xl mt-n10">
                    <v-app-bar color="rgba(0,0,0,0)" flat class="ma-8">
                   <h5>Statistics of your health</h5>
                  <v-spacer></v-spacer>
                  <v-btn 
                  color="teal"
                      text
                      >2019  
                    <v-icon right>   
                      mdi-chevron-down
                    </v-icon>
                  </v-btn>
                   <v-btn color="teal" rounded dark depressed>Year</v-btn>
                   <v-btn text >Mounth</v-btn>
                  </v-app-bar>
                  <template>
                <v-sparkline
                  :value="value"
                  color="teal"
                  :smooth="radius || false"
                  :padding="padding"
                  :line-width="width"
                  :stroke-linecap="lineCap" 
                  :fill="fill"
                  :type="type"
                  :auto-line-width="autoLineWidth"
                  auto-draw
                ></v-sparkline>
                      </template>
                  </v-card>
                </v-col>
                <v-col cols="12" sm="6">
                    <v-card class="mx-12 rounded-tl-xl rounded-tr-xl rounded-bl-xl rounded-br-xl mt-n4" 
                    color="teal" dark >
                  <v-list-item three-line>
                    <v-list-item-content class="pa-2">
        <v-list-item-title class="headline mb-1">
          Heart rate <br>
          <h2>112 bpm</h2>
        </v-list-item-title>

      </v-list-item-content>

      <v-list-item-avatar
        tile
        size="150"
        class="pr-10"
        
      >
      <v-icon size="100">fas fa-heartbeat</v-icon>
      </v-list-item-avatar>
    </v-list-item>

  </v-card>
                </v-col>
                 <v-col cols="12" sm="6">
<v-card class="mx-12 rounded-tl-xl rounded-tr-xl rounded-bl-xl rounded-br-xl mt-n12">
          <v-app-bar color="rgba(0,0,0,0)" flat class="ma-8">
                   <h5>Your activity</h5>
                  <v-spacer></v-spacer>
                   <v-btn color="teal" rounded dark depressed>Week</v-btn>
                   <v-btn text >Mounth</v-btn>
                  </v-app-bar>      
                  <v-progress-circular
                        rotate="360"
                        size="100"
                        width="15"
                        value="50"
                        color="teal"
                        class="mt-n5 ml-5 mb-2"
                      >
                       50
                      </v-progress-circular>
                      <v-progress-circular
                        rotate="360"
                        size="100"
                        width="15"
                        value="70"
                        color="red"
                        class="mt-n5 ml-2 mb-2"
                      >
                       70
                      </v-progress-circular>
                      <v-progress-circular
                        rotate="360"
                        size="100"
                        width="15"
                        value="80"
                        color="blue"
                        class="mt-n5 ml-2 mb-2"
                      >
                       80
                      </v-progress-circular>
                  </v-card>
                 </v-col>
              </v-row>
          </v-container>
        </v-app>
      </v-flex>
       <v-flex md4>
        <v-app :style="{background: $vuetify.theme.themes.light.background}">
          <v-container>
              <v-row>
                <v-col cols="12" sm="12">
                  <v-list two-line>
     
            <v-list-item
            >
              <v-list-item-avatar>
                <img src="https://cdn.vuetifyjs.com/images/lists/3.jpg">
              </v-list-item-avatar>
              <v-list-item-content>
                <v-list-item-title >Anastasia Turner</v-list-item-title>
                <v-list-item-subtitle class="teal--text">35 years, Houston</v-list-item-subtitle>    
              </v-list-item-content>
              <v-spacer></v-spacer>
                 <v-icon color="teal">mdi-menu</v-icon>
            </v-list-item>
        </v-list>
              </v-col>
              <v-col cols="12" md="4" >
                   <v-row>
                     <v-col cols="12" md="2">
                        <v-card height="50px" width="10px" color="green"></v-card>
                     </v-col>
                     <v-col cols="12" md="10">
                       <v-list two-line subheader class="ml-n8">
                  <v-list-item>
                    <v-list-item-content>
                       <v-list-item-subtitle>Blood</v-list-item-subtitle>
                      <v-list-item-title>A+</v-list-item-title>
                    </v-list-item-content>
                  </v-list-item>
                </v-list>
                     </v-col>
                   </v-row>
                  </v-col>
                  <v-col cols="12" md="4">
                     <v-row>
                     <v-col cols="12" md="2">
                        <v-card height="50px" width="10px" color="red"></v-card>
                     </v-col>
                     <v-col cols="12" md="10">
                       <v-list two-line subheader class="ml-n8">
                  <v-list-item>
                    <v-list-item-content>
                       <v-list-item-subtitle>Height</v-list-item-subtitle>
                      <v-list-item-title>175 cm</v-list-item-title>
                    </v-list-item-content>
                  </v-list-item>
                </v-list>
                     </v-col>
                   </v-row>
                  </v-col>
                  <v-col cols="12" md="4">
                    <v-row>
                     <v-col cols="12" md="2">
                        <v-card height="50px" width="10px" color="grey"></v-card>
                     </v-col>
                     <v-col cols="12" md="10">
                       <v-list two-line subheader class="ml-n8">
                  <v-list-item>
                    <v-list-item-content>
                       <v-list-item-subtitle>Weight</v-list-item-subtitle>
                      <v-list-item-title>64 kg</v-list-item-title>
                    </v-list-item-content>
                  </v-list-item>
                </v-list>
                     </v-col>
                    </v-row>
                  </v-col>
                <v-col cols="12" sm="12">
                  <v-btn 
                      text
                      >November  
                    <v-icon right>   
                      mdi-chevron-down
                    </v-icon>
                  </v-btn>
                </v-col>
                <v-col cols="12" sm="12">
                    <v-list>
                <v-list-item >
                  <v-item-content>
                        <v-btn class="mr-1" outlined color="teal darken-1">MO</v-btn>
                  </v-item-content>
                   <v-item-content>
                        <v-btn class="mr-1" outlined color="teal darken-1">Tu</v-btn>
                  </v-item-content>
                   <v-item-content>
                        <v-btn class="mr-1" outlined color="teal darken-1">We</v-btn>
                  </v-item-content>
                   <v-item-content>
                        <v-btn  class="mr-1" color="teal darken-1" dark>Th</v-btn>
                  </v-item-content>
                  <v-item-content>
                        <v-btn  class="mr-1" outlined color="teal darken-1">Fr</v-btn>
                  </v-item-content>
                  <v-item-content>
                        <v-btn  class="mr-1" outlined color="teal darken-1">Sa</v-btn>
                  </v-item-content>
                  
                </v-list-item>
              </v-list>
                </v-col>
                <v-col cols="12" sm="12">
                    <v-card class="mx-12 rounded-tl-xl rounded-tr-xl rounded-bl-xl rounded-br-xl mt-n4 py-4" 
                    color="teal" dark flat>
                  <v-list-item three-line>
      <v-list-item-avatar
        tile
        size="30" 
      >
      <v-icon size="30">mdi-tooth</v-icon>
      </v-list-item-avatar>
      <v-list-item-content class="pa-2">
        <v-list-item-title class="headline mb-1">
          Dentist <br>
          <h6>8:00 - 9:30</h6> 
          <h6>Dr. Alex Brown(cab 39)</h6>
        </v-list-item-title>
      </v-list-item-content>
    </v-list-item>
  </v-card>
  </v-col>
                <v-col cols="12" sm="12">
                    <v-card class="mx-12 rounded-tl-xl rounded-tr-xl rounded-bl-xl rounded-br-xl mt-n4 py-4" 
                    color="teal lighten-5" flat>
                  <v-list-item three-line>
      <v-list-item-avatar tile size="30" >
              <v-icon size="30">fas fa-heartbeat</v-icon>
              </v-list-item-avatar>
              <v-list-item-content class="pa-2">
                <v-list-item-title class="headline mb-1">
                  Cardiologist <br>
                  <h6>9:45 - 11:50</h6> 
                  <h6>Dr. Elika Clark(cab 61)</h6>
                </v-list-item-title>
              </v-list-item-content>
            </v-list-item>
          </v-card>
          
                </v-col>
                <v-col cols="12" sm="12">
                  <v-btn 
                      text
                      >Your Traitment  
                    <v-icon right>   
                      mdi-chevron-down
                    </v-icon>
                  </v-btn>
                </v-col>
                 <v-col cols="12" sm="12">
                    <v-card class="mx-12 rounded-tl-xl rounded-tr-xl rounded-bl-xl rounded-br-xl mt-n4 " 
                    color="teal lighten-5" flat>
                  <v-list-item three-line>
      <v-list-item-avatar tile size="30" >
              <v-icon size="30" color="teal">mdi-pill</v-icon>
              </v-list-item-avatar>
              <v-list-item-content class="pa-2">
                <v-list-item-title class="headline mb-1">
                  Gentle Iron <br>
                  <h6><span class="teal--text">2 capsules</span> with meals every day</h6> 
                </v-list-item-title>
              </v-list-item-content>
            </v-list-item>
          </v-card>
          
                </v-col>
              </v-row>
          </v-container>
        </v-app>
      </v-flex>
    </v-layout>
            
        </v-container>
            <v-container fluid>
                <v-row>
                    <v-col cols="12" sm="3">
                        <v-card class="mb-2 pa-1 borderLeft" color="#4FC694">
                            <v-toolbar color="#4FC694" dark flat>
                                <v-tabs align-with-title>
                                    <v-tabs-slider
                                        color="white"
                                    ></v-tabs-slider>
                                    <v-tab>
                                        <v-btn dark icon>
                                            <v-icon>fas fa-home</v-icon>
                                        </v-btn>
                                    </v-tab>
                                    <v-tab>
                                        <v-btn dark icon>
                                            <v-badge content="2" color="orange">
                                                <v-icon
                                                    >fas
                                                    fa-shopping-cart</v-icon
                                                >
                                            </v-badge>
                                        </v-btn>
                                    </v-tab>
                                </v-tabs>
                            </v-toolbar>
                        </v-card>
                        <v-card class="rounded-xl">
                            <v-list three-line>
                                <template v-for="item in items">
                                    <v-subheader
                                        v-if="item.header"
                                        :key="item.header"
                                        v-text="item.header"
                                    ></v-subheader>
                                    <v-list-item v-else :key="item.title">
                                        <v-list-item-avatar
                                            color="#EFF4F1"
                                            size="70"
                                            rounded
                                        >
                                            <img :src="item.avatar" />
                                        </v-list-item-avatar>
                                        <v-list-item-content>
                                            <v-list-item-title
                                                v-html="item.title"
                                            ></v-list-item-title>
                                            <v-list-item-subtitle
                                                v-html="item.subtitle"
                                            ></v-list-item-subtitle>
                                            <v-list-item-title
                                                v-html="item.money"
                                            ></v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </template>
                            </v-list>
                        </v-card>
                    </v-col>
                    <v-col cols="12" sm="6">
                        <v-text-field
                            label="Search"
                            prepend-inner-icon="fas fa-search"
                            filled
                            rounded
                            color="#4FC694"
                        ></v-text-field>
                        <v-card class="rounded-xl mt-2">
                            <v-row>
                                <v-col cols="12" sm="4" align="center">
                                    <v-avatar size="300" tile>
                                        <v-img
                                            src="/storage/brenden/egarden/5.png"
                                        ></v-img>
                                    </v-avatar>
                                    <v-btn fab icon class="ml-14"
                                        ><v-icon>fas fa-minus</v-icon></v-btn
                                    >
                                    1
                                    <v-btn fab icon
                                        ><v-icon>fas fa-plus</v-icon></v-btn
                                    >
                                </v-col>
                                <v-col cols="12" sm="8" class="px-10">
                                    <v-app-bar flat color="rgba(0,0,0,0)">
                                        <v-spacer></v-spacer>
                                        <v-icon color="grey lighten-1"
                                            >fas fa-heart</v-icon
                                        >
                                    </v-app-bar>
                                    <h3 class="grey--text">Lidah Buaya</h3>
                                    <p class="grey--text">
                                        Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Reiciendis
                                        consequuntur dolorum, quibusdam eum
                                        pariatur, laboriosam quia provident
                                        placeat corrupti repellat odio at. Hic
                                        commodi .
                                    </p>
                                    <h5 class="grey--text">Overview</h5>
                                    <v-row>
                                        <v-col cols="12" sm="6">
                                            <v-app-bar
                                                flat
                                                color="rgba(0,0,0,0)"
                                            >
                                                <v-avatar
                                                    color="#FDD3E9"
                                                    size="30"
                                                    class="mr-3"
                                                >
                                                    <v-icon
                                                        small
                                                        color="grey darken-1"
                                                        >far
                                                        fa-calendar-alt</v-icon
                                                    >
                                                </v-avatar>
                                                30 Days
                                            </v-app-bar>
                                            <v-app-bar
                                                flat
                                                color="rgba(0,0,0,0)"
                                            >
                                                <v-avatar
                                                    color="#FDD3E9"
                                                    size="30"
                                                    class="mr-3"
                                                >
                                                    <v-icon
                                                        small
                                                        color="grey darken-1"
                                                        >fas
                                                        fa-compress-alt</v-icon
                                                    >
                                                </v-avatar>
                                                4.7 Diameter
                                            </v-app-bar>
                                        </v-col>
                                        <v-col cols="12" sm="6">
                                            <v-app-bar
                                                flat
                                                color="rgba(0,0,0,0)"
                                            >
                                                <v-avatar
                                                    color="#FDD3E9"
                                                    size="30"
                                                    class="mr-3"
                                                >
                                                    <v-icon
                                                        small
                                                        color="grey darken-1"
                                                        >fas
                                                        fa-temperature-low</v-icon
                                                    >
                                                </v-avatar>
                                                70% Humidity
                                            </v-app-bar>
                                            <v-app-bar
                                                flat
                                                color="rgba(0,0,0,0)"
                                            >
                                                <v-avatar
                                                    color="#FDD3E9"
                                                    size="30"
                                                    class="mr-3"
                                                >
                                                    <v-icon
                                                        small
                                                        color="grey darken-1"
                                                        >fas fa-tint</v-icon
                                                    >
                                                </v-avatar>
                                                4.2° Height
                                            </v-app-bar>
                                        </v-col>
                                    </v-row>
                                    <v-btn rounded color="warning"
                                        ><v-icon left>fas fa-plus</v-icon>Add to
                                        cart</v-btn
                                    >
                                    <strong class="ml-2">$234</strong>
                                </v-col>
                            </v-row>
                        </v-card>
                        <v-row>
                            <v-col cols="12" sm="6">
                                <v-card class="rounded-xl mt-16">
                                    <v-row>
                                        <v-col cols="12" sm="4" align="center">
                                            <v-avatar
                                                size="200"
                                                tile
                                                class="mt-n16"
                                            >
                                                <v-img
                                                    src="/storage/brenden/egarden/2.png"
                                                ></v-img>
                                            </v-avatar>
                                        </v-col>
                                        <v-col cols="12" sm="8" class="pa-10">
                                            <h3 class="black--text">
                                                Bonsi Tree
                                            </h3>
                                            <h3 class="black--text">$386</h3>
                                        </v-col>
                                    </v-row>
                                </v-card>
                            </v-col>
                            <v-col cols="12" sm="6">
                                <v-card class="rounded-xl mt-16">
                                    <v-row>
                                        <v-col cols="12" sm="4" align="center">
                                            <v-avatar
                                                size="200"
                                                tile
                                                class="mt-n16"
                                            >
                                                <v-img
                                                    src="/storage/brenden/egarden/66.png"
                                                ></v-img>
                                            </v-avatar>
                                        </v-col>
                                        <v-col cols="12" sm="8" class="pa-10">
                                            <h3 class="black--text">
                                                Weired Cactus
                                            </h3>
                                            <h3 class="black--text">$128</h3>
                                        </v-col>
                                    </v-row>
                                </v-card>
                            </v-col>
                        </v-row>
                    </v-col>
                    <v-col cols="12" sm="3">
                        <v-card class="mb-2 pa-1 borderRight" color="#4FC694">
                            <v-toolbar color="#4FC694" dark flat>
                                <v-avatar class="ml-14 mr-2 border" size="35">
                                    <img
                                        src="https://cdn.vuetifyjs.com/images/lists/2.jpg"
                                    />
                                </v-avatar>
                                <v-toolbar-title
                                    class="title white--text pl-0 mr-3"
                                    >Fua Lamba</v-toolbar-title
                                >
                                <v-icon small>fas fa-chevron-down</v-icon>
                            </v-toolbar>
                        </v-card>
                        <v-card class="rounded-xl">
                            <v-toolbar flat>
                                <v-toolbar-title>Online</v-toolbar-title>
                                <v-spacer></v-spacer>
                                <v-btn text class="mr-2">
                                    <v-badge
                                        bordred
                                        bottom
                                        color="orange"
                                        dot
                                        offset-x="10"
                                        offset-y="10"
                                    >
                                        <v-icon left color="black"
                                            >fas fa-user</v-icon
                                        >
                                    </v-badge>
                                    119
                                </v-btn>
                            </v-toolbar>
                            <v-list three-line class="mt-n4">
                                <v-list-item-group>
                                    <template v-for="item in files">
                                        <v-list-item :key="item.title">
                                            <v-list-item-avatar rounded>
                                                <img :src="item.avatar" />
                                            </v-list-item-avatar>
                                            <template>
                                                <v-list-item-content>
                                                    <v-list-item-title
                                                        v-html="item.title"
                                                    ></v-list-item-title>
                                                    <v-list-item-subtitle
                                                        v-text="item.subtitle"
                                                    ></v-list-item-subtitle>
                                                </v-list-item-content>
                                                <v-list-item-action>
                                                    <v-list-item-action-text
                                                        v-text="item.action"
                                                    ></v-list-item-action-text>
                                                </v-list-item-action>
                                            </template>
                                        </v-list-item>
                                    </template>
                                </v-list-item-group>
                            </v-list>
                            <v-toolbar flat class="mt-n5">
                                <v-toolbar-title
                                    >Recomdation Friend</v-toolbar-title
                                >
                            </v-toolbar>
                            <v-app-bar flat color="rgba(0,0,0,0)">
                                <v-avatar rounded size="40" class="mr-2">
                                    <v-img
                                        src="https://cdn.vuetifyjs.com/images/lists/1.jpg"
                                    ></v-img>
                                </v-avatar>
                                <strong>Kel Varnesan</strong>
                                <v-spacer></v-spacer>
                                <v-btn text color="orange">Add</v-btn>
                            </v-app-bar>
                            <v-app-bar flat color="rgba(0,0,0,0)">
                                <v-avatar rounded size="40" class="mr-2">
                                    <v-img
                                        src="https://cdn.vuetifyjs.com/images/lists/2.jpg"
                                    ></v-img>
                                </v-avatar>
                                <strong>Russel D</strong>
                                <v-spacer></v-spacer>
                                <v-btn text color="orange">Add</v-btn>
                            </v-app-bar>
                        </v-card>
                    </v-col>
                </v-row>
            </v-container>
        </v-app>
    </div>
</template>

<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue";
export default {
    components: {},
    props: {
        //rating: { type: Object, required: true},
    },
    data: function() {
        return {
            width: 2,
      radius: 10,
      padding: 8,
      lineCap: 'round',
      value: [0, 2, 5, 9, 5, 10, 3, 5, 0, 0, 1, 8, 2, 9, 0],
      fill: false,
      type: 'trend',
      autoLineWidth: false,
            items: [
                { header: "Top Selling" },
                {
                    avatar: "/storage/brenden/egarden/3.png",
                    title: `<strong>Cactus</strong>`,
                    subtitle: "650 Plants",
                    money: `<strong>$640</strong>`
                },

                {
                    avatar: "/storage/brenden/egarden/2.png",
                    title: `<strong>Kalanchoe</strong>`,
                    subtitle: "760 Plants",
                    money: `<strong>$235</strong>`
                },
                {
                    avatar: "/storage/brenden/egarden/4.png",
                    title: `<strong>Madagascar Jewel</strong>`,
                    subtitle: "712 Plants",
                    money: `<strong>$638</strong>`
                },
                {
                    avatar: "/storage/brenden/egarden/5.png",
                    title: `<strong>Succulent</strong>`,
                    subtitle: "539 Plants",
                    money: `<strong>$190</strong>`
                },
                {
                    avatar: "/storage/brenden/egarden/6.png",
                    title: `<strong>Cactus mini</strong>`,
                    subtitle: "554 Plants",
                    money: `<strong>$264</strong>`
                },
                {
                    avatar: "/storage/brenden/egarden/7.png",
                    title: `<strong>Maivestus</strong>`,
                    subtitle: "690 Plants",
                    money: `<strong>$360</strong>`
                }
            ],
            files: [
                {
                    avatar: "https://cdn.vuetifyjs.com/images/lists/1.jpg",
                    action: "15 min",
                    headline: "Brunch this weekend?",
                    subtitle: `I'll be in your neighborhood doing errands this weekend. Do you want to hang out?`,
                    title: `<strong>Ali Connors (13)</strong>`
                },
                {
                    avatar: "https://cdn.vuetifyjs.com/images/lists/2.jpg",
                    action: "2 hr",
                    headline: "Summer BBQ",
                    subtitle: `Wish I could come, but I'm out of town this weekend.`,
                    title: `<strong>me, Scrott, Jennifer (19)</strong>`
                },
                {
                    avatar: "https://cdn.vuetifyjs.com/images/lists/3.jpg",
                    action: "6 hr",
                    headline: "Oui oui",
                    subtitle:
                        "Do you have Paris recommendations? Have you ever been?",
                    title: `<strong>Sandra Adams (7)</strong>`
                },
                {
                    avatar: "https://cdn.vuetifyjs.com/images/lists/4.jpg",
                    action: "12 hr",
                    headline: "Birthday gift",
                    subtitle:
                        "Have any ideas about what we should get Heidi for her birthday?",
                    title: `<strong>Trevor Hansen (12)</strong>`
                },
                {
                    avatar: "https://cdn.vuetifyjs.com/images/lists/5.jpg",
                    action: "18hr",
                    headline: "Recipe to try",
                    subtitle:
                        "We should eat this: Grate, Squash, Corn, and tomatillo Tacos.",
                    title: `<strong>Britta Holt (8)</strong>`
                }
            ]
        };
    },
    computed: {
        theme() {
      return this.$vuetify.theme.dark ? "dark" : "light";
    }
    },
    watch: {},
    methods: {}
};
</script>

<style lang="scss" scoped>
.borderLeft {
    border-radius: 50px 0px 50px 0px !important;
}
.borderRight {
    border-radius: 0px 50px 0px 50px !important;
}
.border {
    border: 2px solid white !important;
}
</style>
