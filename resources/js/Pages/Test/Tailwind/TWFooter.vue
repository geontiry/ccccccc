<script>
//import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import { ref, reactive, computed, watch, onMounted, toRefs } from '@vue/composition-api'

export default {
  components: {},
  props: {},

  setup(props, ctx) {
    const state = reactive({
    })

    return { ...toRefs(state) }
  }
} 
</script> 

<template>
  <div>
    <div class="bg-gray-900">
  <div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
    <div class="grid row-gap-10 mb-8 lg:grid-cols-6">
      <div class="grid grid-cols-2 gap-5 row-gap-8 lg:col-span-4 md:grid-cols-4">
        <div>
          <p class="font-medium tracking-wide text-gray-300">Category</p>
          <ul class="mt-2 space-y-2">
            <li>
              <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">News</a>
            </li>
            <li>
              <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">World</a>
            </li>
            <li>
              <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Games</a>
            </li>
            <li>
              <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">References</a>
            </li>
          </ul>
        </div>
        <div>
          <p class="font-medium tracking-wide text-gray-300">Apples</p>
          <ul class="mt-2 space-y-2">
            <li>
              <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Web</a>
            </li>
            <li>
              <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">eCommerce</a>
            </li>
            <li>
              <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Business</a>
            </li>
            <li>
              <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Entertainment</a>
            </li>
            <li>
              <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Portfolio</a>
            </li>
          </ul>
        </div>
        <div>
          <p class="font-medium tracking-wide text-gray-300">Cherry</p>
          <ul class="mt-2 space-y-2">
            <li>
              <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Media</a>
            </li>
            <li>
              <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Brochure</a>
            </li>
            <li>
              <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Nonprofit</a>
            </li>
            <li>
              <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Educational</a>
            </li>
            <li>
              <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Projects</a>
            </li>
          </ul>
        </div>
        <div>
          <p class="font-medium tracking-wide text-gray-300">Business</p>
          <ul class="mt-2 space-y-2">
            <li>
              <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Infopreneur</a>
            </li>
            <li>
              <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Personal</a>
            </li>
            <li>
              <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Wiki</a>
            </li>
            <li>
              <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Forum</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="md:max-w-md lg:col-span-2">
        <span class="text-base font-medium tracking-wide text-gray-300">Subscribe for updates</span>
        <form class="flex flex-col mt-4 md:flex-row">
          <input
            placeholder="Email"
            required=""
            type="text"
            class="flex-grow w-full h-12 px-4 mb-3 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none md:mr-2 md:mb-0 focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
          />
          <button
            type="submit"
            class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
          >
            Subscribe
          </button>
        </form>
        <p class="mt-4 text-sm text-gray-500">
          Bacon ipsum dolor amet short ribs pig sausage prosciuto chicken spare ribs salami.
        </p>
      </div>
    </div>
    <div class="flex flex-col justify-between pt-5 pb-10 border-t border-gray-800 sm:flex-row">
      <p class="text-sm text-gray-500">
        © Copyright 2020 Lorem Inc. All rights reserved.
      </p>
      <div class="flex items-center mt-4 space-x-4 sm:mt-0">
        <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-teal-accent-400">
          <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
            <path
              d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"
            ></path>
          </svg>
        </a>
        <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-teal-accent-400">
          <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
            <circle cx="15" cy="15" r="4"></circle>
            <path
              d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z"
            ></path>
          </svg>
        </a>
        <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-teal-accent-400">
          <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
            <path
              d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"
            ></path>
          </svg>
        </a>
      </div>
    </div>
  </div>
</div>
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="flex flex-col mb-6 lg:flex-row md:mb-10">
    <div class="lg:w-1/2">
      <h2 class="max-w-md mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none xl:max-w-lg">
        The quick, brown fox jumps over a lazy dog
      </h2>
    </div>
    <div class="lg:w-1/2">
      <p class="text-base text-gray-700 md:text-lg">
        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam, eaque ipsa quae. Sed ut unde omnis iste natus.
      </p>
    </div>
  </div>
  <div class="grid gap-8 row-gap-10 sm:grid-cols-2 lg:grid-cols-4">
    <div class="max-w-md">
      <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50">
        <svg class="w-12 h-12 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
          <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
        </svg>
      </div>
      <h6 class="mb-2 font-semibold leading-5">The deep ocean</h6>
      <p class="mb-3 text-sm text-gray-900">
        A flower in my garden, a mystery in my panties. Heart attack never stopped old Big Bear. I didn't even know we were calling him Big Bear.
      </p>
      <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
    </div>
    <div class="max-w-md">
      <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50">
        <svg class="w-12 h-12 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
          <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
        </svg>
      </div>
      <h6 class="mb-2 font-semibold leading-5">When has justice</h6>
      <p class="mb-3 text-sm text-gray-900">
        Rough pomfret lemon shark plownose chimaera southern sandfish kokanee northern sea robin Antarctic cod.
      </p>
      <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
    </div>
    <div class="max-w-md">
      <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50">
        <svg class="w-12 h-12 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
          <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
        </svg>
      </div>
      <h6 class="mb-2 font-semibold leading-5">Organically grow</h6>
      <p class="mb-3 text-sm text-gray-900">
        A slice of heaven. O for awesome, this chocka full cuzzie is as rip-off as a cracker.
      </p>
      <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
    </div>
    <div class="max-w-md">
      <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50">
        <svg class="w-12 h-12 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
          <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
        </svg>
      </div>
      <h6 class="mb-2 font-semibold leading-5">A slice of heaven</h6>
      <p class="mb-3 text-sm text-gray-900">
        Disrupt inspire and think tank, social entrepreneur but preliminary thinking think tank compelling.
      </p>
      <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
    </div>
  </div>
</div>
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
    <div>
      <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
        Brand new
      </p>
    </div>
    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
      <span class="relative inline-block">
        <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
          <defs>
            <pattern id="07690130-d013-42bc-83f4-90de7ac68f76" x="0" y="0" width=".135" height=".30">
              <circle cx="1" cy="1" r=".7"></circle>
            </pattern>
          </defs>
          <rect fill="url(#07690130-d013-42bc-83f4-90de7ac68f76)" width="52" height="24"></rect>
        </svg>
        <span class="relative">The</span>
      </span>
      quick, brown fox jumps over a lazy dog
    </h2>
    <p class="text-base text-gray-700 md:text-lg">
      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam, eaque ipsa quae.
    </p>
  </div>
  <div class="grid max-w-screen-lg mx-auto space-y-6 lg:grid-cols-2 lg:space-y-0 lg:divide-x">
    <div class="space-y-6 sm:px-16">
      <div class="flex flex-col max-w-md sm:flex-row">
        <div class="mb-4 mr-4">
          <div class="flex items-center justify-center w-12 h-12 rounded-full bg-indigo-50">
            <svg class="w-8 h-8 text-deep-purple-accent-400 sm:w-10 sm:h-10" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg>
          </div>
        </div>
        <div>
          <h6 class="mb-3 text-xl font-bold leading-5">The deep ocean</h6>
          <p class="text-sm text-gray-900">
            Webtwo ipsum orkut reddit meebo skype vimeo jajah spock empressr zimbra, mobly napster.
          </p>
        </div>
      </div>
      <div class="flex flex-col max-w-md sm:flex-row">
        <div class="mb-4 mr-4">
          <div class="flex items-center justify-center w-12 h-12 rounded-full bg-indigo-50">
            <svg class="w-8 h-8 text-deep-purple-accent-400 sm:w-10 sm:h-10" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg>
          </div>
        </div>
        <div>
          <h6 class="mb-3 text-xl font-bold leading-5">When has justice</h6>
          <p class="text-sm text-gray-900">
            Lookout flogging bilge rat main sheet bilge water nipper fluke to go on account heave down clap of thunder.
          </p>
        </div>
      </div>
      <div class="flex flex-col max-w-md sm:flex-row">
        <div class="mb-4 mr-4">
          <div class="flex items-center justify-center w-12 h-12 rounded-full bg-indigo-50">
            <svg class="w-8 h-8 text-deep-purple-accent-400 sm:w-10 sm:h-10" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg>
          </div>
        </div>
        <div>
          <h6 class="mb-3 text-xl font-bold leading-5">Leverage agile</h6>
          <p class="text-sm text-gray-900">
            The first mate and his Skipper too will do their very best to make the others comfortable.
          </p>
        </div>
      </div>
    </div>
    <div class="space-y-6 sm:px-16">
      <div class="flex flex-col max-w-md sm:flex-row">
        <div class="mb-4 mr-4">
          <div class="flex items-center justify-center w-12 h-12 rounded-full bg-indigo-50">
            <svg class="w-8 h-8 text-deep-purple-accent-400 sm:w-10 sm:h-10" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg>
          </div>
        </div>
        <div>
          <h6 class="mb-3 text-xl font-bold leading-5">Organically grow</h6>
          <p class="text-sm text-gray-900">
            Skate ipsum dolor sit amet, alley oop vert mute-air Colby Carter flail 180 berm over the sea.
          </p>
        </div>
      </div>
      <div class="flex flex-col max-w-md sm:flex-row">
        <div class="mb-4 mr-4">
          <div class="flex items-center justify-center w-12 h-12 rounded-full bg-indigo-50">
            <svg class="w-8 h-8 text-deep-purple-accent-400 sm:w-10 sm:h-10" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg>
          </div>
        </div>
        <div>
          <h6 class="mb-3 text-xl font-bold leading-5">Have a good one</h6>
          <p class="text-sm text-gray-900">
            Cheese on toast airedale the big cheese. Danish fontina cheesy grin airedale danish fontina.
          </p>
        </div>
      </div>
      <div class="flex flex-col max-w-md sm:flex-row">
        <div class="mb-4 mr-4">
          <div class="flex items-center justify-center w-12 h-12 rounded-full bg-indigo-50">
            <svg class="w-8 h-8 text-deep-purple-accent-400 sm:w-10 sm:h-10" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg>
          </div>
        </div>
        <div>
          <h6 class="mb-3 text-xl font-bold leading-5">A slice of heaven</h6>
          <p class="text-sm text-gray-900">
            A flower in my garden, a mystery in my panties. Heart attack never stopped old Big Bear.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
    


  </div>
</template>

<style lang="scss" scoped>
</style>
