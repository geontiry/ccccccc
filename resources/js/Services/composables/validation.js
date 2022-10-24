import { ref, reactive, toRefs } from '@vue/composition-api'

export function useValidation() {
  const state = reactive({
    rules: {
      required: v => !!v || 'Cannot be empty!',
      length: len => v => (v || '').length >= len || `Invalid character length, required ${len}`,
      min: len => v => (v || '').length >= len || `Use ${len} characters or more`,
      max: len => v => (v || '').length <= len || `Cannot exceed ${len} characters`,
      email: v => !!(v || '').match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/) || 'Please enter a valid email',
      password: v => !!(v || '').match(/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/) || 'Use 8 - 20 characters with a capital letter, small letter, a number and a special character',
      confirm: v => !!(v || '') === this.password || 'Password does not match',
    },
    passwordRules: [
      v => !!v || 'Password is required', 
      v => (v && v.length >= 5) || 'Password must have 5+ characters',
      v => /(?=.*[a-z])/.test(v) || 'Must have one lowercase character', 
      v => /(?=.*[A-Z])/.test(v) || 'Must have one uppercase character', 
      v => /(?=.*\d)/.test(v) || 'Must have one number', 
      v => /([!@$%])/.test(v) || 'Must have one special character [!@#$%]'
    ],
    specialRules: [
      v => !!v || 'Name is required',
      v => v.length >= 10 || 'Name must be less than 10 characters',
      v => /.+@.+/.test(v) || 'E-mail must be valid',
    ],
    wordsRules: [
      v => v.trim().split(' ').length <= 5 || 'Max 5 words'
    ]
  })

  // const passwordMatch =computed(() => password === password_confirmation || "Password does not match")
  
  return { ...toRefs(state) };
}