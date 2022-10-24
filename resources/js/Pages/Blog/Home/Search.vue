<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, reactive, computed, watch, onMounted, toRefs } from '@vue/composition-api' 

export default{
  components: { },
  props: {},

  setup (props, ctx) {
    const state = reactive({        
    })
    
    return { ...toRefs(state) } 
  }
} 
</script> 

<template>
  <div>
    <section class="asearch card">
    <h2>Quick Search Destinations</h2>
    <form>
        <div class="row g-1">
            <div class="col-auto">
                <label class="form-label">Destination country</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>Choose country</option>
                    <option value="1">Kenya</option>
                    <option value="2">Uganda</option>
                    <option value="3">Democratic Republic of the Congo</option>
                </select>
            </div>
            <div class="col-auto">
                <label class="form-label">Destination Category</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>All</option>
                    <option value="1">Mountains, Highlands &amp; Valleys</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>                    
            </div>
            <div class="col-auto">
                <label class="form-label">Travel Plan</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>All</option>
                    <option value="1">Family Travel</option>
                    <option value="2">Business Travel</option>
                    <option value="3">Solo Travel</option>
                    <option value="3">Explore Travel</option>
                </select>                    
            </div>
            <div class="col">
                <label class="form-label">Keywords</label>
                <input class="form-control form-control-sm" list="datalistOptions" id="exampleDataList" placeholder="Type keywords...">
                <datalist id="datalistOptions">
                    <option value="San Francisco"/>
                    <option value="New York"/>
                    <option value="Seattle"/>
                    <option value="Los Angeles"/>
                    <option value="Chicago"/>
                </datalist>

            </div>
            <div class="col-auto">
            <button type="submit" class="btn active mt-4">Search</button>
        </div>
        </div> 

    </form>
    </section>
      
  </div>
</template>

<style lang="scss" scoped>

</style>
