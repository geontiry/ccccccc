<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, computed, watch, onMounted } from '@vue/composition-api'
  
export default { 
  components: { },
  props: {
    digital: { default: true, type: Boolean },
      binary: { default: false, type: Boolean }
  },

  setup (props, ctx) {
    const time = ref('')

    onMounted(() => window.setInterval(this.render, 1000))

    const render = ()=> {
            const d = new Date();
            const h = d.getHours();
            const m = d.getMinutes();
            const s = d.getSeconds();
            time= `${addZero(h)} : ${addZero(m)} : ${addZero(s)}`;

            this.light(convert(s), '.seconds');
            this.light(convert(m), '.minutes');
            this.light(convert(h), '.hours');
        }
    const convert = (num)=> {
            let bin = "";
            let conv = [];
            while(num > 0) {
                bin = num%2 + bin;
                num = Math.floor(num/2);
            }
            conv = bin.split('');

            while(conv.length < 6){
                conv.unshift("0");
            }

            return conv;
        }
  const light = (array, type)=>{
            //$(type+' td').attr('class','num0');
            for(var i =0; i<array.length; i++){
                $(type +' td:eq('+i+')').attr('class','num'+array[i]);
                 //document.getElementsByName(type +' td:eq('+i+')').setAttribute('class','num'+array[i]);
            }
        }
  const addZero = (i) =>{
            if (i < 10) { i = "0" + i;}
            return i;
        }
    
    return { time }
  }
} 
</script>

<template>
  <div>
    <div class="dashboard">
      <div class='dashboard-clock'>
        <div v-if="digital" class="dashboard-clock-digital">{{time}}</div>
        <table v-if="binary" class="dashboard-clock-binary">
            <tr class='hours'><td v-for='n in 6' :key="n"></td></tr>
            <tr class='minutes'><td v-for='n in 6' :key="n"></td></tr>
            <tr class='seconds'><td v-for='n in 6' :key="n"></td></tr>
        </table>
    </div>
    </div>

  </div>
</template>

<style lang="scss" scoped>
$cGood: #2eb35a;
$cAlert: #d22c32;
$orange: #ff6b23;
$blue: #54c6fb;

.dashboard { display: block;
    &-header { display: flex; align-items: center; font-family: 'Lato', sans-serif; text-transform: uppercase; }
    &-title { flex: 1; font-size: 1.5rem; }
    &-clock { display: flex; align-items: center;
        &-digital { font-weight: bold; font-size: 1.5rem; }
        &-binary { margin-left: 8px; border-collapse:separate;
            td { height: .4rem; width: .4rem; background-color: rgba(255, 255, 255, .2); border-radius:50%; }
            .num1 { background-color: $cGood; }
        }
    }
}

</style>
