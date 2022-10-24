<template>
  <div>
    <h3>{{ postTitle }} with {{ likes }} likes</h3> 
    <p>Comments: {{ commentIds }}</p>
    <p>Author detais: {{ author }}</p>
    <p>Author Name: {{ author.name }}</p>
    <button :disabled="isPublished">Go</button>   
  </div>
</template>

<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue";
export default {
  components: {},
  props: {
    postTitle: String,
    likes: Number,
    isPublished: Boolean,
    commentIds: Array,
    author: Object,
    callback: Function,
    contactsPromise: Promise, // or any other constructo

    propA: Number,
    propB: [String, Number, Boolean, Array, Object, Date, Symbol, Function, ],
    propC: { type: Number, required: true, default: 100},
    propD: { type: Object, default: function () { return { message: 'hello' } } },
    propE: { validator: function (value) { return ['success', 'warning', 'danger'].indexOf(value) !== -1 } }
  },
  //mixins: [mixin],
  data: function () {
    return {}
  },
  computed: {},
  watch: {},
  methods: {}
};
</script>

<style lang="scss" scoped>

</style>