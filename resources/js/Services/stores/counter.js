import { defineStore } from 'pinia'

export const counterStore = defineStore('counter', () => {
  const count = ref(8)

  function increment() {
    count.value++
  }

  return { count, increment }
})

