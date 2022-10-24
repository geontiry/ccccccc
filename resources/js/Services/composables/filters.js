import { ref, reactive, toRefs } from '@vue/composition-api'

export function useTextCase() {

  const uppercase = (text)=>text.toUpperCase()
  const lowercase = (text)=>text.toLowerCase()
  const capitalcase = (text)=>text.capitalize()
  
  return {uppercase, lowercase, capitalcase };
}