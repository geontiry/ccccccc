<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {
    sdb: { type: Boolean, required: true},
  },

  setup (props, ctx) {
    const items = ref([
      { 
          href: 'home', title: "Home", width: 600,
        },
        { 
          href: 'lights', title: "E-Lights", width: 600,
          cols: [
            {
              side: 1 , 
              subs: [
                {title: 'Incandescent Lights',  comps: [ 'Standard', 'Round', 'Globe', 'Candle', 'Mushroom', ' Reflector', 'GLS', 'Pygmy', 'Vintage' ]},
                {title: 'Halogen Lights',  comps: [ 'Classic', 'Candle',  'Round', 'Reflector', 'Capsule', 'Linear', 'Ultra-Violet' ]},
              ], 
            },
            {
              side: 2 , 
              subs: [
                 {title: 'Fluorescent Lights',  comps: [ 'Tubes', ' Compact (CFL)', 'Twisted (TFL)', 'Circline', 'Hi-Bay', ]},
                {title: 'Energy-Saving Lights',  comps: [ 'T-Series', 'F-Series', 'PAR-Series', 'PLK-Series', 'CFO-Series', 'LT-Series',  'LB-Series', 'RP-Series', 'CWR-Series', /*'LGT-Series', 'RTW-Series', 'HB220-Series', 'LHB-Series', 'CFF-Series',
                'THL-Series', 'WP-Series', 'DL-Series', 'BB80-Series', 'SDW-Series',*/ 'High-Bay', 'Low-Bay',  ]},
              ], 
            },
            {
              side: 3 , 
              subs: [
                {title: 'LED Lights',  comps: [ 'Tubes', 'Filament', 'Globe', 'Down', 'Batten', 'Troffer', 'Retrofit', 'Flood', 'Ceiling', 'Panel', 'Street', 'Hi-Bay', 'Canopy', 'Wall', 'Exit/Entry', 'Emergency', 'Decoration' ]},                 
              ], 
            },
            {
              side: 4 , 
              subs: [
                 {title: 'HID Lights',  comps: [ 'Metal Halide', 'HP/LP Sodium', 'Mercury Vapor', 'Ceramic MH' ]},
                {title: 'Light Accessories',  comps: [ 'Holders/Fittings', 'Starters/Ballasts', 'Drivers/Dimmers' ]},
                {title: 'Shop by Brands',  comps: [ 'Phillips', ]},
              ], 
            },
          ]
        },
        { 
          href: 'switches', title: "E-Switches", width: 600,
          cols: [
            {
              side: 1 , 
              subs: [
                {title: 'Switches',  comps: [ '1-Way Switch', '1-Way Double Switch', '1-Way Tripple Switch', '2-Way Switch', '2-Way Double Switch', 'Intermediate Switch', '2-Pole Switch', '3-Pole Switch', '2-Circuit Switch', '3-Circuit Switch'  ]},
              ], 
            },
            {
              side: 2 , 
              subs: [
                 {title: 'Fuse Switch',  comps: [ 'Component 1', ' Component 2', ]},
                {title: 'Overload Relays',  comps: [ 'Component 1', ' Component 2', ]},
                {title: 'Special Switch',  comps: [ 'Industrial Switch', 'Push Button', 'Slide Switch', 'Rotary Switch', 'Toggle Switch', 'Limit Switch' ]},
              ], 
            },
            {
              side: 3 , 
              subs: [
                {title: 'Socket Accessories',  comps: [ 'Component 1', ' Component 2', 'Component 3', 'Component 4', 'Component 5', 'Component 6' ]},                
              ], 
            },
            {
              side: 4 , 
              subs: [
                {title: 'Level 43',  comps: [ 'Component 1', ' Component 2', 'Component 3', 'Component 4', 'Component 5', 'Component 6' ]},
              ], 
            },
          ]
        },
        { 
          href: 'sockets', title: "E-Sockets", width: 600,
          cols: [
            {
              side: 1 , 
              subs: [
                {title: 'Plain Socket',  comps: [ 'Single Socket', 'Double Socket', ]},
                {title: 'Switch Socket',  comps: [ 'Single Socket', 'Double Socket', ]},
                {title: 'Fuse Socket',  comps: [ 'Single Socket', 'Double Socket', ]},
                {title: 'USB Socket',  comps: [ 'Single Socket', 'Double Socket', ]},
                {title: 'Cooker Socket',  comps: [ 'Single Socket', 'Double Socket', ]},
              ], 
            },
            {
              side: 2 , 
              subs: [                
                {title: 'Communication Socket',  comps: [ 'Speaker Socket', 'Data/Telephone Socket', 'Antena Socket',  ]},
                {title: 'Special Socket',  comps: [ 'Rotary Dimmer', 'USB Charger',  ]},
              ], 
            },
            {
              side: 3 , 
              subs: [
                {title: 'Socket Plugs',  comps: [ 'Component 1', ' Component 2', 'Component 3', 'Component 4', 'Component 5', 'Component 6' ]},
              ], 
            },
            {
              side: 4 , 
              subs: [
                {title: 'Shop by Pin',  comps: [ 'Round Pin', 'Square Pin', ]},
                {title: 'Shop by Material',  comps: [ 'Brushed & Stainless Steel', 'Satin Steel', ' Polished Chrome', 'Satin Chrome', 'Platic', 'White Metal', 'Black Nickel', 'Brass' ]},
              ], 
            },
          ]
        },
        { 
          href: 'cables', title: "E-Cables", width: 600,
          cols: [
            {
              side: 1 , 
              subs: [
                {title: 'Flat Cables',  comps: [ 'Component 1', ]},
                {title: 'Flexible Cables',  comps: [ 'Component 1',  ]},
                {title: 'Twisted Pair Cables',  comps: [ 'UTP Cable', 'STP Cable', 'Ribbon Cable']},
                {title: 'Multi-Core Cables',  comps: [ 'Foil-Shield Cable', 'Braided-Shield Cable', 'Unshieded Cable' ]},
                {title: 'Coaxial Cables',  comps: [ 'Heliax Cable', 'Radiating Cable', 'RG-6 Cable', 'Triax Cable', 'Twinax Cable', 'Semi-Rigid Cable', 'Rigid-Line Cable' ]},
              ], 
            },
            {
              side: 2 , 
              subs: [
                 {title: 'NM-Sheated Cables',  comps: [ 'Solid Cable', 'Stranded Cable',  ]},
                 {title: 'Armored Cables',  comps: [ 'Steel-wire Cable', 'Steel-wire-braid Cable', 'Steel-tape Cable' ]},                
                 {title: 'Metal-Clad Cables',  comps: [ 'Steel Cable', 'Aluminium Cable',  ]},
                 {title: 'Special Cables',  comps: [ 'Earthing Electrodes', 'Direct Buried Cable', 'Lightning Arrestors', 'Underground Cables', ' Control Cables',  'Battery  Cables', 'Fireproof Cables', 'Alarm Cables',  ]},
              ], 
            },
            {
              side: 3 , 
              subs: [
                {title: 'Telecommunication Cables',  comps: [ 'Speaker Cables', 'Telephone Cables', 'Microphone Cables', 'Aerial Cables',  ]},
                {title: 'Fibre-optic Cables',  comps: [ 'Single-Mode Cable', 'Multi-Mode Cable', ]},
                {title: 'Submersible Cables',  comps: [ 'Flat Cable', 'Round Cable',  ]}, 
                {title: 'Automotive Cables',  comps: [ 'Component 1', ' Component 2', 'Component 3', 'Component 4', ]},
              ], 
            },
            {
              side: 4 , 
              subs: [
                {title: 'Cable Conduits',  comps: [ 'Pipes', 'Trunks', 'Component 3',  ]},
                {title: 'Cable Accesories',  comps: [ 'Connectors', 'Coupler', ' Cable Lugs', 'Cable Glands', 'Cable Ties', 'Cable Clips', 'Horse Clamps', 'Pipe Clamps', ]},
              ], 
            },
          ]
        },
        { 
          href: 'panles', title: "E-Panels", width: 600,
          cols: [
             {
              side: 2 , 
              subs: [
                {title: 'Consumer Unit',  comps: [ 'Classic', 'Flush', 'IP Rated', 'Split-Load', 'Garage', ' RCBO Incomer', 'RCD Incomer',]},
                {title: 'Switch Box',  comps: [ 'Component 1', ' Component 2', 'Component 3',  ]},
                {title: 'Isolator',  comps: [ 'Component 1', ' Component 2', 'Component 3',  ]},
              ], 
            },
            {
              side: 1 , 
              subs: [
                {title: 'Distribution Boards',  comps: [ 'Component 1', ' Component 2', 'Component 3', 'Component 4', 'Component 5', 'Component 6' ]},
                {title: 'Panel Boards',  comps: [ 'Component 1', ' Component 2', 'Component 3', 'Component 4', 'Component 5', 'Component 6' ]},
              ], 
            },
            {
              side: 3 , 
              subs: [
                {title: 'Specialized Panels',  comps: [ 'PF Correction', 'Automation/Control', 'Synchronization', 'Change-over', 'Sub-Station', ]},
              ], 
            },
            {
              side: 4 , 
              subs: [
                {title: 'Level 41',  comps: [ 'Component 1', ' Component 2', 'Component 3', 'Component 4', 'Component 5', 'Component 6' ]},
                {title: 'Level 42',  comps: [ 'Component 1', ' Component 2', 'Component 3', 'Component 4', 'Component 5', 'Component 6' ]},
              ], 
            },
          ]
        },
        { 
          href: 'modules', title: "E-Modules", width: 600,
          cols: [
            {
              side: 1 , 
              subs: [
                {title: 'Circuit Breakers',  comps: [ 'MCB', 'MCCB', 'RCBO', 'RCD', ]},
                {title: 'Contactors',  comps: [ 'Component 1', ' Component 2', 'Component 3', 'Component 4', 'Component 5', 'Component 6' ]},
                {title: 'Motor Starters',  comps: [ 'Soft Starters', ' Component 2', 'Component 3', 'Component 4', 'Component 5', 'Component 6' ]},
              ], 
            },
            {
              side: 2 , 
              subs: [
                {title: 'Power',  comps: [ 'Power Supply', ' Component 2', 'Component 3', 'Component 4', 'Component 5', 'Component 6' ]},
                {title: 'Fire Safety',  comps: [ 'Component 1', ' Component 2', 'Component 3', 'Component 4', 'Component 5', 'Component 6' ]},               
                {title: 'Appliance Protection',  comps: [ 'Fridge Guard', ' TV Guard', 'AVS13/30', 'Stabilizers',  ]},
              ], 
            },
            {
              side: 3 , 
              subs: [
                {title: 'Transducers',  comps: [ 'Light Sensor', 'Motion Sensor', 'Temperature Sensor', 'Vibration Sensor', 'Smoke Sensor', 'Moisture Sensor', 'Humidity Sensor', 'Component 6' ]},
                {title: 'Conditioners',  comps: [ 'Amplifiers', ' Component 2', 'Component 3', 'Component 4', 'Component 5', 'Component 6' ]},
                {title: 'Controllers',  comps: [ 'Micro-Controllers', 'PLCs',]},
              ], 
            },
            {
              side: 4 , 
              subs: [
                {title: 'Level 41',  comps: [ 'Component 1', ' Component 2', 'Component 3', 'Component 4', 'Component 5', 'Component 6' ]},
                {title: 'Level 42',  comps: [ 'Component 1', ' Component 2', 'Component 3', 'Component 4', 'Component 5', 'Component 6' ]},
                {title: 'Level 43',  comps: [ 'Component 1', ' Component 2', 'Component 3', 'Component 4', 'Component 5', 'Component 6' ]},
              ], 
            },
          ]
        },
        { 
          href: 'tools', title: "E-Tools", width: 600,
          cols: [
            {
              side: 1 , 
              subs: [
                {title: 'Meter Tools',  comps: [ 'Multimeter', ' Clamp Meter', 'Earth-resistance Meter', 'Tachometer', 'Temperature Meter', 'Distance Meter', 'Decibel Meter', 'Lux Meter' ]},
                {title: 'Tester Tools',  comps: [ 'Phase Tester', 'Insulation Tester',  ]},
              ], 
            },
            {
              side: 2 , 
              subs: [
                {title: 'Power Tools',  comps: [ 'Percussion Drill', 'Impact Drill', 'Screw Drill', ' Hammer Drill', 'Angle Grinder', 'Heat Gun', 'Impact Wrench', 'Blower' ]},
                {title: 'Hand Tools',  comps: [ 'Pipe Wrench', 'Hack-Saw', 'Component 5', 'Component 6' ]},
              ], 
            },
            {
              side: 3 , 
              subs: [
                {title: 'PPE Tools',  comps: [ 'Safety Boots', 'Safety Glasses', 'Hand Gloves', 'Face Masks', 'Welding Jacket', 'Welding Shield' ]},
                {title: 'Chemical Tools',  comps: [ 'Adhesive', 'DOS Strength', ' Hand Cleaner', 'Hand Wipe', 'Paper Towel', ]},
              ], 
            },
            {
              side: 4 , 
              subs: [
                {title: 'Tools Set',  comps: [ 'Component 1', ' Component 2', 'Component 3', 'Component 4', 'Component 5', 'Component 6' ]},
                {title: 'Tools Kit',  comps: [ 'First Aid', 'Thread Extractor',  ]},
                {title: 'Shop by Brand',  comps: [ 'WURTH', ]},
              ], 
            },
          ]
        },
        { 
          href: 'energy', title: "E-Energy", width: 600,
          cols: [
            {
              side: 1 , 
              subs: [
                {title: 'Solar Panels',  comps: [ 'Component 1', ' Component 2', 'Component 3', 'Component 4', 'Component 5', 'Component 6' ]},
                {title: 'Batteries',  comps: [ 'Coin-Cell',  'Dura-Cell', 'Dry-Cell', 'Alkaline', 'UPS']},
              ], 
            },
            {
              side: 2 , 
              subs: [
                {title: 'Inverters',  comps: [ 'Component 1', ' Component 2', 'Component 3', 'Component 4', 'Component 5', 'Component 6' ]},                
                {title: 'Level 22',  comps: [ 'Component 1', ' Component 2',  ]},
              ], 
            },
            {
              side: 3 , 
              subs: [
                {title: 'Converters',  comps: [ 'Frequency', 'Cyclo' ]},
                {title: 'Level 32',  comps: [ 'Component 1', ' Component 2', 'Component 3', 'Component 4', 'Component 5', 'Component 6' ]},
              ], 
            },
            {
              side: 4 , 
              subs: [
                {title: 'Level 41',  comps: [ 'Component 1', ' Component 2', 'Component 3', 'Component 4', 'Component 5', 'Component 6' ]},
                {title: 'Level 42',  comps: [ 'Component 1', ' Component 2', 'Component 3', 'Component 4', 'Component 5', 'Component 6' ]},
              ], 
            },
          ]
        },
        { 
          href: 'machines', title: "E-Machines", width: 600,
          cols: [
            {
              side: 1 , 
              subs: [
                {title: 'Generators',  comps: [ 'Portable', 'Stand-by', 'Solar', 'Inverter', 'Welding',  'Industrial', ]},
                {title: 'Motors',  comps: [ '1-Phase Motor', '3-Phase Motor', 'Geared Motor', 'Component 4', 'Component 5', 'Component 6' ]},
                {title: 'Welders',  comps: [ 'Standard', 'Inverter',]},
              ], 
            },
            {
              side: 2 , 
              subs: [
                {title: 'Pumps',  comps: [ 'Water Pump', 'Fuel Pump', 'Heat Pump', 'Shower Pump']},
                {title: 'Washers',  comps: [ 'Portable', 'Front Load', 'Top Load', 'Dual Combo', 'High Pressure' ]},
                {title: 'Cleaners',  comps: [ 'Box Sweeper', 'Vacuum Cleaner', 'Vapor Cleaner', 'Scrubber', 'Polisher'  ]},
              ], 
            },
            {
              side: 3 , 
              subs: [
                {title: 'Metal-Working',  comps: [ 'Lathe', ' Pillar Drill', 'Bench Grinder', 'Band Saw', ]},
                {title: 'Wood-Working',  comps: [ 'Wood Lathe', 'Multi-Purpose Saw', ' Mitre Saw', 'Band Saw', 'Table Saw', 'Router', ]},
                {title: 'Air Compressors',  comps: [ 'Portable' ]},
              ], 
            },
            {
              side: 4 , 
              subs: [
                {title: 'Gardeners',  comps: [ 'Lawn Mowers', 'Chain Saws', 'Brush Cutter', 'Hedge Trimmer', 'Field Trimmer', 'Earth Auger']},
                {title: 'Shop by Brand',  comps: [ 'Component 1', ' Component 2', 'Component 3', 'Component 4', 'Component 5', 'Component 6' ]},
              ], 
            },
          ]
        },
        { 
          href: 'appliances', title: "E-Appliances", width: 600,
          cols: [
            {
              side: 1 , 
              subs: [
                {title: 'Fridges',  comps: [ 'Direct Cool', 'No Frost',  ]},
                {title: 'Freezers',  comps: [ 'Chest', 'Glass-top Chest',  ]},
                {title: 'Chillers',  comps: [ 'Chest', 'Glass-top Chest',  ]},
                {title: 'Heaters',  comps: [ 'Room Heater', 'Water Heater', 'Undersink Heater', 'Industrial Heater', 'Hand Dryer', 'Ironing Box', 'Instant Shower'  ]},
              ], 
            },
            {
              side: 2 , 
              subs: [
                {title: 'Air Fans',  comps: [ 'Extractor', 'Ceiling', 'Desk', 'Stand', 'Wall', 'Shower', 'Toilet', 'Bathroom', ' Kitchen', 'Inline-duct', 'Indsutrial' ]},
                {title: 'Air Ventilators',  comps: [ 'Split', 'Portable',  ]},
                {title: 'Air Conditioners',  comps: [ 'Split', 'Portable',  ]},
              ], 
            },
            {
              side: 3 , 
              subs: [
                {title: 'Kitcheners',  comps: [ 'Cooker', 'Blender', 'Mixer', 'Crusher', 'Juicer', 'Toaster', 'Kettle', 'Fryer',  'Dispenser', 'Dishwasher' ]},
              ], 
            },
            {
              side: 4 , 
              subs: [
                {title: 'Level 41',  comps: [ 'Component 1', ' Component 2', 'Component 3', 'Component 4', 'Component 5', 'Component 6' ]},
                {title: 'Shop by Brand',  comps: [ 'Ramtons', 'Phillips', 'LG', 'SamSung', ]},
              ], 
            },
          ]
        },
        { 
          href: 'services', title: "E-Services", width: 450,
          cols: [
            {
              side: 1 , 
              subs: [
                {title: 'Home Installation',  comps: [ '1-Phase Wiring', '3-Phase Wiring', 'Installation', ]},
                {title: 'Industrial Installation',  comps: [ 'Component 1', ' Component 2', 'Component 3', 'Component 4', 'Component 5', 'Component 6' ]},
              ], 
            },
            {
              side: 2 , 
              subs: [
                {title: 'Design',  comps: [ 'Feasibility', 'Drawing', 'Analysis', 'Billing', 'Documentation',  ]},
              ], 
            },
            {
              side: 3 , 
              subs: [
                {title: 'Servicing',  comps: [ 'Repair', 'Service', 'Maintenance', ]},
                 {title: 'Consultation',  comps: [ 'In-Person', 'Online', ]},
              ], 
            },
          ]
        },
        { 
          href: 'contractors', title: "E-Contractors", width: 450,
          cols: [
            {
              side: 1 , 
              subs: [
                {title: 'Tenders',  comps: [ 'Component 1', ' Component 2', 'Component 3', 'Component 4', 'Component 5', 'Component 6' ]},
              ], 
            },
            {
              side: 2 , 
              subs: [
                {title: 'Supplies',  comps: [ 'Component 1', ' Component 2', 'Component 3', 'Component 4', 'Component 5', 'Component 6' ]},
              ], 
            },
            {
              side: 3 , 
              subs: [
                {title: 'Outsource',  comps: [ 'Component 1', ' Component 2', 'Component 3', 'Component 4', 'Component 5', 'Component 6' ]},
              ], 
            },
          ]
        }])    
    return { items } 
  }
} 
</script>

<template>
  <div>
    <v-container v-if="sdb">
      <div class="my-1 d-flex justify-space-between" v-for="item in items" :key="item.title">
        <v-btn text plain small flat color="grey" v-bind="attrs"  v-on="on" :href="item.link" class="px-1 text-subtitle-2 text-capitalize" active-class="grey--text">{{ item.title }}</v-btn>
        <v-icon>mdi-chevron-right</v-icon>
      </div>
  </v-container>
  <template v-else>
    <v-menu bottom offset-y open-on-hover transition="scale-transition" origin="center center" :close-on-content-click="false" v-for="item in items" :key="item.title">
      <template v-slot:activator="{ on, attrs }">
        <v-btn text x-small flat :color="route().current(`electrical.products.division`, item.href) || route().current(`electrical.products.division.${item.href}.*`) ? 'orange' : 'grey lighten-1'" 
        v-bind="attrs"  v-on="on" :href="route(`electrical.products.division`, item.href)" class="px-1 text-subtitle-2 text-capitalize">{{ item.title }}</v-btn>
      </template>
      <v-card :width="item.width" class="pa-2" v-if="item.cols">
        <v-row no-gutters>
          <v-col cols="3"  class="px-1" v-for="col in item.cols" :key="col.side">
            <div  v-for="sub in col.subs" :key="sub.title">
              <p class="text-subtitle-2 mt-0 mb-1 orange--text">{{ sub.title }}</p>
              <v-divider></v-divider>
              <v-list-item-subtitle  v-for="comp in sub.comps" :key="comp" class="text-caption">
                <v-icon dense color="grey darken-2">mdi-chevron-double-right</v-icon>
                <a class="grey--text">{{ comp}}</a>
              </v-list-item-subtitle>
            </div>
          </v-col>
        </v-row>
      </v-card>      
    </v-menu>
    
  </template>
  </div>
</template>

<style>

</style>