<template>
    <div>
        <AppSynvast>
            <!-- Page Slot Header -->
            <template #header></template>

            <!-- Page Slot Home-->
            <template #page>
                <v-form ref="form1" v-model="form1" class="pa-2">
                    <v-text-field outlined dense required clearable v-model="formdata.name" :hint="formdata.errors.name" :persistent-hint ="formdata.errors.name"
                        label="Username" clear-icon="mdi-close-circle" prepend-icon="mdi-account" class="mx-auto my-1">
                    </v-text-field>
                    <v-text-field outlined dense required clearable v-model="formdata.email" type="email" validate-on-blur
                        label="Email" clear-icon="mdi-close-circle" prepend-icon="mdi-email" class="mx-auto my-1">
                    </v-text-field>
                    <v-text-field outlined dense required clearable v-model="formdata.password" :type="show ? 'text' : 'password'"  counter="20"
                        label="Password" clear-icon="mdi-close-circle" @click:append="show = !show" :append-icon="show ? 'mdi-eye' : 'mdi-eye-off'" prepend-icon="mdi-lock"
                        class="mx-auto my-1">
                    </v-text-field>
                    <v-text-field outlined dense required clearable v-model="formdata.password_confirmation" type="password" counter="20"
                        label="Confirm Password" clear-icon="mdi-close-circle" prepend-icon="mdi-lock"  class="mx-auto my-1">
                    </v-text-field>
                    <v-file-input chips multiple label="File input" v-model="formdata.file"></v-file-input>
                    <v-progress-linear :value="formdata.progress.percentage" v-if="formdata.progress"></v-progress-linear>
                    <div class="d-flex justify-space-between">
                      <v-checkbox dense v-model="formdata.terms" color="primary" class=" d-flex mt-0 mb-0 ml-1 pa-0">
                        <template v-slot:label><span class="text-caption"> I agree to the Terms of Service</span></template>
                      </v-checkbox>
                      <v-btn small :loading="formdata.processing" class="white--text" color="orange darken-4" @click.prevent="submit()">Submit</v-btn>
                    </div>
                </v-form>
            </template>

            <!-- Page Slot Supp -->
            <template #supp></template>

            <!-- Page Slot Footer -->
            <template #footer></template>
        </AppSynvast>
    </div>
</template>

<script>
import AppSynvast from "@/Layouts/AppSynvast.vue";
export default {
    components: {
        AppSynvast
    },
    props: {
      //errors: { type: Object, required: true},

  },
  data: function () {
    return {
        loading: false,
        dialogterms: false,
        dialogprivacy: false,
        form1: false,
        formdata: this.$inertia.form({ name: null, email: null, password: null, password_confirmation: null, file: null, terms: null, }),
        show: false,
        guide: false,
        color: '',
        message: '',
        }
    },
  computed: {},
  watch: {},
  methods: {
      submit(){
          this.formdata.post('/users', this.formdata, {
              //onSuccess: () => this.form.reset(),
          } )
      }
  }
};
</script>
