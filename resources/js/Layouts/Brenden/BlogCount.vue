<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {
    year: { type: Number, required: true, default: 2020 },
    month: { type: Number, required: true, default: 0 },
    day: { type: Number, required: true, default: 0 },
    hour: { type: Number, required: false, default: 0 },
    minute: { type: Number, required: false, default: 0 },
    second: { type: Number, required: false, default: 0 },
    milliseconds: { type: Number, required: false, default: 0 }
  },

  setup (props, ctx) {
    const displayDays =ref(0)
    const displayHours =ref(0)
    const displayMinutes =ref(0)
    const displaySeconds =ref(0)
    const loaded =ref(false) 
    const expired =ref(false) 

    const _seconds =computed( () => 1000) 
    const _minutes =computed( () =>_seconds * 60) 
    const _hours =computed( () =>_minutes * 60) 
    const _days =computed( () =>_hours * 24) 
    const END =computed( () =>new Date( year, month, day, hour, second, minute, milliseconds)) 

    onMounted(() => showRemaining())

    const formatNum = num => (num < 10 ? '0' + num : num)
    const showRemaining =()=> {
      const TIMER = setInterval(() => {
        const NOW = new Date()
        const DISTANCE = this.END.getTime() - NOW.getTime()

        if (DISTANCE < 0) {
          clearInterval(TIMER)
          expired = true
          loaded = true
          return
        }

        const DAYS = Math.floor(DISTANCE / _days)
        const HOURS = Math.floor((DISTANCE % _days) / _hours)
        const MINUTES = Math.floor((DISTANCE % _hours) / _minutes)
        // const SECONDS = Math.floor((DISTANCE % _minutes) / _seconds)
        this.displayMinutes = this.formatNum(MINUTES)
        // this.displaySeconds = this.formatNum(SECONDS)
        this.displayHours = this.formatNum(HOURS)
        this.displayDays = this.formatNum(DAYS)
        this.loaded = true
      }, 1000)
    }

    return { } 
  }
} 
</script>

<template>
  <div>
    <div class="countdown" loaded>
    <div class="countdown__num">
      <span class="countdown__num--time">{{ displayDays }}</span>
      <span class="countdown__num--unit">Days</span>
    </div>
    <span class="countdown__num--colon">:</span>
    <div class="countdown__num">
      <span class="countdown__num--time">{{ displayHours }}</span>
      <span class="countdown__num--unit">Hours</span>
    </div>
    <span class="countdown__num--colon">:</span>
    <div class="countdown__num">
      <span class="countdown__num--time">{{ displayMinutes }}</span>
      <span class="countdown__num--unit">Minutes</span>
    </div>
  </div>
  </div>
</template>

<style scoped>
/*
.countdown {
  display: flex;
  justify-content: space-evenly;
  margin-top: 20px;

  &__num {
    display: flex;
    flex-direction: column;
    padding: 0 10px;

    &--time {
      color: var(--color-primary);
      font-size: 40px;
    }
    &--unit {
      color: var(--color-gray);
      font-size: 12;
    }
    &--colon {
      color: var(--color-primary);
      font-size: 40px;
      line-height: 1.4em;
    }
  }
}
*/
</style>