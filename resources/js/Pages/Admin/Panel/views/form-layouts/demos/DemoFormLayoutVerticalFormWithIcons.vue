<template>
  <v-form>
    <v-text-field
      v-model="firstname"
      prepend-inner-icon="mdi-account-outline"
      label="First Name"
      outlined
      dense
      placeholder="First Name"
    ></v-text-field>

    <v-text-field
      v-model="email"
      prepend-inner-icon="mdi-email-outline"
      label="Email"
      type="email"
      outlined
      dense
      placeholder="Email"
    ></v-text-field>

    <v-text-field
      v-model="mobile"
      prepend-inner-icon="mdi-cellphone"
      label="Mobile"
      outlined
      dense
      type="number"
      placeholder="Number"
    ></v-text-field>

    <v-text-field
      v-model="password"
      prepend-inner-icon="mdi-lock-outline"
      label="Password"
      outlined
      dense
      type="password"
      placeholder="password"
    ></v-text-field>

    <v-checkbox
      v-model="checkbox"
      label="Remember me"
      class="mt-0"
    ></v-checkbox>

    <v-btn color="primary">
      Submit
    </v-btn>
    <v-btn
      type="reset"
      outlined
      class="mx-2"
    >
      Reset
    </v-btn>
  </v-form>
</template>

<script>
// eslint-disable-next-line object-curly-newline
import { ref } from '@vue/composition-api'

export default {
  setup() {
    const firstname = ref('')
    const email = ref('')
    const mobile = ref()
    const password = ref()
    const checkbox = ref(false)

    return {
      firstname,
      email,
      mobile,
      password,
      checkbox,
    }
  },
}
</script>
