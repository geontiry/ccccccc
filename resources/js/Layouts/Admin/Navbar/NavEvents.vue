<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {},

  setup (props, ctx) {
    const breadcrumbitems = ref([
        { text: "Dashboard", disabled: false, href: route("admin.dashboard") },
        { text: "Link 1", disabled: false, href: "breadcrumbs_link_1" },
        { text: "Link 2", disabled: true, href: "breadcrumbs_link_2" },
      ])
    const focus = ref("")
    const type = ref("month")
    const typeToLabel = ref({ month: "Month", week: "Week", day: "Day", "4day": "4 Days" })
    const selectedEvent = ref({})
    const selectedElement = ref(null)
    const selectedOpen = ref(false)
    const events = ref([])
    const colors = ref([ "blue", "indigo", "deep-purple", "cyan", "green", "orange", "grey darken-1" ])
    const names = ref([ "Meeting", "Holiday", "PTO", "Travel", "Event", "Birthday", "Conference", "Party" ])

    onMounted(() => $refs.calendar.checkChange())

    const viewDay= ({ date })=> { focus = date; type = "day"; }
    const getEventColor=(event)=>event.color
    const setToday = ()=>focus = ""
    const prev =()=> $refs.calendar.prev()
    const next = ()=>$refs.calendar.next()
    const rnd=(a, b)=> Math.floor((b - a + 1) * Math.random()) + a

    const showEvent = ({ nativeEvent, event }) =>{
      const open = () => {
        selectedEvent = event;
        selectedElement = nativeEvent.target;
        setTimeout(() => { selectedOpen = true}, 10);
        };
      if (selectedOpen) { selectedOpen = false; setTimeout(open, 10);
      } else {
        open();
      }
      nativeEvent.stopPropagation();
    }

    const updateRange = ({ start, end })=> {
      const events = [];
      const min = new Date(`${start.date}T00:00:00`);
      const max = new Date(`${end.date}T23:59:59`);
      const days = (max.getTime() - min.getTime()) / 86400000;
      const eventCount = rnd(days, days + 20);

      for (let i = 0; i < eventCount; i++) {
        const allDay = rnd(0, 3) === 0;
        const firstTimestamp = rnd(min.getTime(), max.getTime());
        const first = new Date(firstTimestamp - (firstTimestamp % 900000));
        const secondTimestamp = rnd(2, allDay ? 288 : 8) * 900000;
        const second = new Date(first.getTime() + secondTimestamp);

        events.push({
          name: names[rnd(0, names.length - 1)],
          start: first,
          end: second,
          color: colors[rnd(0, colors.length - 1)],
          timed: !allDay,
        });
      }

      events = events;
    }
    
    return { breadcrumbitems, focus, type, typeToLabel, selectedEvent, selectedElement } 
  }
} 
</script>

<template>
  <div>
    <v-sheet height="64">
                  <v-toolbar flat>
                    <v-btn
                      outlined
                      class="mr-4"
                      color="grey darken-2"
                      @click="setToday"
                    >
                      Today
                    </v-btn>
                    <v-btn fab text small color="grey darken-2" @click="prev">
                      <v-icon small> mdi-chevron-left </v-icon>
                    </v-btn>
                    <v-btn fab text small color="grey darken-2" @click="next">
                      <v-icon small> mdi-chevron-right </v-icon>
                    </v-btn>
                    <v-toolbar-title v-if="$refs.calendar">
                      {{ $refs.calendar.title }}
                    </v-toolbar-title>
                    <v-spacer></v-spacer>
                    <v-menu bottom right>
                      <template v-slot:activator="{ on, attrs }">
                        <v-btn
                          outlined
                          color="grey darken-2"
                          v-bind="attrs"
                          v-on="on"
                        >
                          <span>{{ typeToLabel[type] }}</span>
                          <v-icon right> mdi-menu-down </v-icon>
                        </v-btn>
                      </template>
                      <v-list>
                        <v-list-item @click="type = 'day'">
                          <v-list-item-title>Day</v-list-item-title>
                        </v-list-item>
                        <v-list-item @click="type = 'week'">
                          <v-list-item-title>Week</v-list-item-title>
                        </v-list-item>
                        <v-list-item @click="type = 'month'">
                          <v-list-item-title>Month</v-list-item-title>
                        </v-list-item>
                        <v-list-item @click="type = '4day'">
                          <v-list-item-title>4 days</v-list-item-title>
                        </v-list-item>
                      </v-list>
                    </v-menu>
                  </v-toolbar>
                </v-sheet>
                <v-sheet height="600">
                  <v-calendar
                    ref="calendar"
                    v-model="focus"
                    color="primary"
                    :events="events"
                    :event-color="getEventColor"
                    :type="type"
                    @click:event="showEvent"
                    @click:more="viewDay"
                    @click:date="viewDay"
                    @change="updateRange"
                  ></v-calendar>
                  <v-menu
                    v-model="selectedOpen"
                    :close-on-content-click="false"
                    :activator="selectedElement"
                    offset-x
                  >
                    <v-card color="grey lighten-4" min-width="350px" flat>
                      <v-toolbar :color="selectedEvent.color" dark>
                        <v-btn icon>
                          <v-icon>mdi-pencil</v-icon>
                        </v-btn>
                        <v-toolbar-title
                          v-html="selectedEvent.name"
                        ></v-toolbar-title>
                        <v-spacer></v-spacer>
                        <v-btn icon>
                          <v-icon>mdi-heart</v-icon>
                        </v-btn>
                        <v-btn icon>
                          <v-icon>mdi-dots-vertical</v-icon>
                        </v-btn>
                      </v-toolbar>
                      <v-card-text>
                        <span v-html="selectedEvent.details"></span>
                      </v-card-text>
                      <v-card-actions>
                        <v-btn
                          text
                          color="secondary"
                          @click="selectedOpen = false"
                        >
                          Cancel
                        </v-btn>
                      </v-card-actions>
                    </v-card>
                  </v-menu>
                </v-sheet>
    
    
    
    
  </div>
</template>

<style scoped>
 
</style>