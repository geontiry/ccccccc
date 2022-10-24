<template>
  <div id="icons-container">
    <div class="d-flex align-center flex-wrap">
      <v-tooltip
        v-for="item in iconsList"
        :key="item.icon"
        top
      >
        <template v-slot:activator="{ on, attrs }">
          <v-card
            v-bind="attrs"
            class="icons-card mb-6 me-6"
            v-on="on"
          >
            <v-card-text class="py-3 px-4">
              <v-icon size="30">
                {{ item.icon }}
              </v-icon>
            </v-card-text>
          </v-card>
        </template>
        <span>{{ item.name }}</span>
      </v-tooltip>
    </div>

    <!-- more icons -->
    <div class="text-center">
      <v-btn
        href="https://materialdesignicons.com/"
        target="_blank"
        rel="nofollow"
        color="primary"
      >
        View All Material Design Icons
      </v-btn>
    </div>
  </div>
</template>

<script>

export default {
  setup() {
    // icons list
    const iconsList = [
      { icon: 'mdiFlaskEmptyOutline', name: 'mdiFlaskEmptyOutline' },
    ]

    return {
      iconsList,
    }
  },
}
</script>
