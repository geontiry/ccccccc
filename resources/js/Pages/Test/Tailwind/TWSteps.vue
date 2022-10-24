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
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="grid gap-6 row-gap-10 lg:grid-cols-2">
    <div class="lg:py-6 lg:pr-16">
      <div class="flex">
        <div class="flex flex-col items-center mr-4">
          <div>
            <div class="flex items-center justify-center w-10 h-10 border rounded-full">
              <svg class="w-4 text-gray-600" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
              </svg>
            </div>
          </div>
          <div class="w-px h-full bg-gray-300"></div>
        </div>
        <div class="pt-1 pb-8">
          <p class="mb-2 text-lg font-bold">Step 1</p>
          <p class="text-gray-700">
            All recipes are written using certain conventions, which define the characteristics of common ingredients. The rules vary from place to place.
          </p>
        </div>
      </div>
      <div class="flex">
        <div class="flex flex-col items-center mr-4">
          <div>
            <div class="flex items-center justify-center w-10 h-10 border rounded-full">
              <svg class="w-4 text-gray-600" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
              </svg>
            </div>
          </div>
          <div class="w-px h-full bg-gray-300"></div>
        </div>
        <div class="pt-1 pb-8">
          <p class="mb-2 text-lg font-bold">Step 2</p>
          <p class="text-gray-700">
            The first mate and his Skipper too will do their very best to make the others comfortable in their tropic island nest. Michael Knight a young loner.
          </p>
        </div>
      </div>
      <div class="flex">
        <div class="flex flex-col items-center mr-4">
          <div>
            <div class="flex items-center justify-center w-10 h-10 border rounded-full">
              <svg class="w-4 text-gray-600" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
              </svg>
            </div>
          </div>
          <div class="w-px h-full bg-gray-300"></div>
        </div>
        <div class="pt-1 pb-8">
          <p class="mb-2 text-lg font-bold">Step 3</p>
          <p class="text-gray-700">
            Tell them I hate them. Is the Space Pope reptilian!? Tell her she looks thin. Hello, little man. I will destroy you!
          </p>
        </div>
      </div>
      <div class="flex">
        <div class="flex flex-col items-center mr-4">
          <div>
            <div class="flex items-center justify-center w-10 h-10 border rounded-full">
              <svg class="w-4 text-gray-600" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
              </svg>
            </div>
          </div>
          <div class="w-px h-full bg-gray-300"></div>
        </div>
        <div class="pt-1 pb-8">
          <p class="mb-2 text-lg font-bold">Step 4</p>
          <p class="text-gray-700">
            If one examines precultural libertarianism, one is faced with a choice: either accept rationalism or conclude that context is a product.
          </p>
        </div>
      </div>
      <div class="flex">
        <div class="flex flex-col items-center mr-4">
          <div>
            <div class="flex items-center justify-center w-10 h-10 border rounded-full">
              <svg class="w-6 text-gray-600" stroke="currentColor" viewBox="0 0 24 24">
                <polyline fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="6,12 10,16 18,8"></polyline>
              </svg>
            </div>
          </div>
        </div>
        <div class="pt-1">
          <p class="mb-2 text-lg font-bold">Success</p>
          <p class="text-gray-700"></p>
        </div>
      </div>
    </div>
    <div class="relative">
      <img
        class="inset-0 object-cover object-bottom w-full rounded shadow-lg h-96 lg:absolute lg:h-full"
        src="https://images.pexels.com/photos/3184287/pexels-photo-3184287.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260"
        alt=""
      />
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
            <pattern id="b902cd03-49cc-4166-a0ae-4ca1c31cedba" x="0" y="0" width=".135" height=".30">
              <circle cx="1" cy="1" r=".7"></circle>
            </pattern>
          </defs>
          <rect fill="url(#b902cd03-49cc-4166-a0ae-4ca1c31cedba)" width="52" height="24"></rect>
        </svg>
        <span class="relative">The</span>
      </span>
      quick, brown fox jumps over a lazy dog
    </h2>
    <p class="text-base text-gray-700 md:text-lg">
      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam, eaque ipsa quae.
    </p>
  </div>
  <div class="grid gap-10 lg:grid-cols-4 sm:grid-cols-2">
    <div>
      <div class="flex items-center justify-between mb-6">
        <p class="text-2xl font-bold">Step 1</p>
        <svg class="w-6 text-gray-700 transform rotate-90 sm:rotate-0" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
          <line fill="none" stroke-miterlimit="10" x1="2" y1="12" x2="22" y2="12"></line>
          <polyline fill="none" stroke-miterlimit="10" points="15,5 22,12 15,19 "></polyline>
        </svg>
      </div>
      <p class="text-gray-600">
        If one examines precultural libertarianism, one is faced with a choice: either accept rationalism or conclude that context.
      </p>
    </div>
    <div>
      <div class="flex items-center justify-between mb-6">
        <p class="text-2xl font-bold">Step 2</p>
        <svg class="w-6 text-gray-700 transform rotate-90 sm:rotate-0" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
          <line fill="none" stroke-miterlimit="10" x1="2" y1="12" x2="22" y2="12"></line>
          <polyline fill="none" stroke-miterlimit="10" points="15,5 22,12 15,19 "></polyline>
        </svg>
      </div>
      <p class="text-gray-600">
        That is the true genius of America - a faith in simple dreams,, an insistence on small miracles.
      </p>
    </div>
    <div>
      <div class="flex items-center justify-between mb-6">
        <p class="text-2xl font-bold">Step 3</p>
        <svg class="w-6 text-gray-700 transform rotate-90 sm:rotate-0" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
          <line fill="none" stroke-miterlimit="10" x1="2" y1="12" x2="22" y2="12"></line>
          <polyline fill="none" stroke-miterlimit="10" points="15,5 22,12 15,19 "></polyline>
        </svg>
      </div>
      <p class="text-gray-600">
        Those options are already baked in with this model shoot me an email clear blue water but we need distributors.
      </p>
    </div>
    <div>
      <div class="flex items-center justify-between mb-6">
        <p class="text-2xl font-bold">Success</p>
        <svg class="w-8 text-gray-600" stroke="currentColor" viewBox="0 0 24 24">
          <polyline fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="6,12 10,16 18,8"></polyline>
        </svg>
      </div>
      <p class="text-gray-600">
        Lookout flogging bilge rat main sheet bilge water nipper fluke to go on account heave down clap of thunder.
      </p>
    </div>
  </div>
</div>
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="grid max-w-2xl mx-auto">
    <div class="flex">
      <div class="flex flex-col items-center mr-6">
        <div class="w-px h-10 opacity-0 sm:h-full"></div>
        <div>
          <div class="flex items-center justify-center w-8 h-8 text-xs font-medium border rounded-full">
            1
          </div>
        </div>
        <div class="w-px h-full bg-gray-300"></div>
      </div>
      <div class="flex flex-col pb-6 sm:items-center sm:flex-row sm:pb-0">
        <div class="sm:mr-5">
          <div class="flex items-center justify-center w-16 h-16 my-3 rounded-full bg-indigo-50 sm:w-24 sm:h-24">
            <svg class="w-12 h-12 text-deep-purple-accent-400 sm:w-16 sm:h-16" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg>
          </div>
        </div>
        <div>
          <p class="text-xl font-semibold sm:text-base">Read the recipe</p>
          <p class="text-sm text-gray-700">
            All recipes are written using certain conventions, which define the characteristics of common ingredients. The rules vary from place to place.
          </p>
        </div>
      </div>
    </div>
    <div class="flex">
      <div class="flex flex-col items-center mr-6">
        <div class="w-px h-10 bg-gray-300 sm:h-full"></div>
        <div>
          <div class="flex items-center justify-center w-8 h-8 text-xs font-medium border rounded-full">
            2
          </div>
        </div>
        <div class="w-px h-full bg-gray-300"></div>
      </div>
      <div class="flex flex-col pb-6 sm:items-center sm:flex-row sm:pb-0">
        <div class="sm:mr-5">
          <div class="flex items-center justify-center w-16 h-16 my-3 rounded-full bg-indigo-50 sm:w-24 sm:h-24">
            <svg class="w-12 h-12 text-deep-purple-accent-400 sm:w-16 sm:h-16" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg>
          </div>
        </div>
        <div>
          <p class="text-xl font-semibold sm:text-base">Heart attack</p>
          <p class="text-sm text-gray-700">
            A flower in my garden, a mystery in my panties. Heart attack never stopped old Big Bear. I didn't even know we were calling him Big Bear.
          </p>
        </div>
      </div>
    </div>
    <div class="flex">
      <div class="flex flex-col items-center mr-6">
        <div class="w-px h-10 bg-gray-300 sm:h-full"></div>
        <div>
          <div class="flex items-center justify-center w-8 h-8 text-xs font-medium border rounded-full">
            3
          </div>
        </div>
        <div class="w-px h-full opacity-0"></div>
      </div>
      <div class="flex flex-col pb-6 sm:items-center sm:flex-row sm:pb-0">
        <div class="sm:mr-5">
          <div class="flex items-center justify-center w-16 h-16 my-3 rounded-full bg-indigo-50 sm:w-24 sm:h-24">
            <svg class="w-12 h-12 text-deep-purple-accent-400 sm:w-16 sm:h-16" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg>
          </div>
        </div>
        <div>
          <p class="text-xl font-semibold sm:text-base">Never stop</p>
          <p class="text-sm text-gray-700">
            The first mate and his Skipper too will do their very best to make the others comfortable in their tropic island nest. Michael Knight a young loner.
          </p>
        </div>
      </div>
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
            <pattern id="bfcc89c7-3b4a-491a-bc7e-53e26502ff69" x="0" y="0" width=".135" height=".30">
              <circle cx="1" cy="1" r=".7"></circle>
            </pattern>
          </defs>
          <rect fill="url(#bfcc89c7-3b4a-491a-bc7e-53e26502ff69)" width="52" height="24"></rect>
        </svg>
        <span class="relative">The</span>
      </span>
      quick, brown fox jumps over a lazy dog
    </h2>
    <p class="text-base text-gray-700 md:text-lg">
      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam, eaque ipsa quae.
    </p>
  </div>
  <div class="grid gap-8 row-gap-8 lg:grid-cols-3">
    <div class="sm:text-center">
      <div class="flex items-center justify-center w-24 h-24 mb-4 text-5xl font-extrabold rounded-full text-deep-purple-accent-400 bg-indigo-50 sm:mx-auto">
        1
      </div>
      <h6 class="mb-2 font-semibold leading-5">Slugging catcher</h6>
      <p class="max-w-md mb-3 text-sm text-gray-900 sm:mx-auto">
        Lookout flogging bilge rat main sheet bilge water nipper fluke to go on account heave down clap of thunder
      </p>
      <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
    </div>
    <div class="sm:text-center">
      <div class="flex items-center justify-center w-24 h-24 mb-4 text-5xl font-extrabold rounded-full text-deep-purple-accent-400 bg-indigo-50 sm:mx-auto">
        2
      </div>
      <h6 class="mb-2 font-semibold leading-5">Do your best</h6>
      <p class="max-w-md mb-3 text-sm text-gray-900 sm:mx-auto">
        They urge you to put down your sword and come join the winners. In 22 years the only 'winners'
      </p>
      <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
    </div>
    <div class="sm:text-center">
      <div class="flex items-center justify-center w-24 h-24 mb-4 text-5xl font-extrabold rounded-full text-deep-purple-accent-400 bg-indigo-50 sm:mx-auto">
        3
      </div>
      <h6 class="mb-2 font-semibold leading-5">Be yourself</h6>
      <p class="max-w-md mb-3 text-sm text-gray-900 sm:mx-auto">
        Tell them I hate them. Is the Space Pope reptilian!? Tell her she looks thin. Hello, little man
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
            <pattern id="f51618fb-0edb-4bcb-b35a-ffc770941286" x="0" y="0" width=".135" height=".30">
              <circle cx="1" cy="1" r=".7"></circle>
            </pattern>
          </defs>
          <rect fill="url(#f51618fb-0edb-4bcb-b35a-ffc770941286)" width="52" height="24"></rect>
        </svg>
        <span class="relative">The</span>
      </span>
      quick, brown fox jumps over a lazy dog
    </h2>
    <p class="text-base text-gray-700 md:text-lg">
      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam, eaque ipsa quae.
    </p>
  </div>
  <div class="grid gap-8 row-gap-0 lg:grid-cols-3">
    <div class="relative text-center">
      <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 rounded-full bg-indigo-50 sm:w-20 sm:h-20">
        <svg class="w-12 h-12 text-deep-purple-accent-400 sm:w-16 sm:h-16" stroke="currentColor" viewBox="0 0 52 52">
          <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
        </svg>
      </div>
      <h6 class="mb-2 text-2xl font-extrabold">Step 1</h6>
      <p class="max-w-md mb-3 text-sm text-gray-900 sm:mx-auto">
        Lookout flogging bilge rat main sheet bilge water nipper fluke to go on account heave down clap
      </p>
      <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
      <div class="top-0 right-0 flex items-center justify-center h-24 lg:-mr-8 lg:absolute">
        <svg class="w-8 text-gray-700 transform rotate-90 lg:rotate-0" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
          <line fill="none" stroke-miterlimit="10" x1="2" y1="12" x2="22" y2="12"></line>
          <polyline fill="none" stroke-miterlimit="10" points="15,5 22,12 15,19 "></polyline>
        </svg>
      </div>
    </div>
    <div class="relative text-center">
      <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 rounded-full bg-indigo-50 sm:w-20 sm:h-20">
        <svg class="w-12 h-12 text-deep-purple-accent-400 sm:w-16 sm:h-16" stroke="currentColor" viewBox="0 0 52 52">
          <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
        </svg>
      </div>
      <h6 class="mb-2 text-2xl font-extrabold">Step 2</h6>
      <p class="max-w-md mb-3 text-sm text-gray-900 sm:mx-auto">
        They urge you to put down your sword and come join the winners. In 22 years the only 'winners'
      </p>
      <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
      <div class="top-0 right-0 flex items-center justify-center h-24 lg:-mr-8 lg:absolute">
        <svg class="w-8 text-gray-700 transform rotate-90 lg:rotate-0" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
          <line fill="none" stroke-miterlimit="10" x1="2" y1="12" x2="22" y2="12"></line>
          <polyline fill="none" stroke-miterlimit="10" points="15,5 22,12 15,19 "></polyline>
        </svg>
      </div>
    </div>
    <div class="relative text-center">
      <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 rounded-full bg-indigo-50 sm:w-20 sm:h-20">
        <svg class="w-12 h-12 text-deep-purple-accent-400 sm:w-16 sm:h-16" stroke="currentColor" viewBox="0 0 52 52">
          <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
        </svg>
      </div>
      <h6 class="mb-2 text-2xl font-extrabold">Step 3</h6>
      <p class="max-w-md mb-3 text-sm text-gray-900 sm:mx-auto">
        Tell them I hate them. Is the Space Pope reptilian!? Tell her she looks thin. Hello, little man
      </p>
      <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
    </div>
  </div>
</div>
<div class="max-w-xl p-8 mx-auto dark:bg-gray-800 dark:text-gray-100">
	<ul class="space-y-12">
		<li class="flex items-start space-x-3">
			<a rel="noopener noreferrer" href="#" class="flex items-center h-8 text-sm hover:underline">v3.2.0</a>
			<div class="flex-1 space-y-2">
				<div class="flex items-center justify-between space-x-4 dark:text-gray-400">
					<a rel="noopener noreferrer" href="#" class="inline-flex items-center px-3 py-1 my-1 space-x-2 text-sm border rounded-full group dark:border-gray-700">
						<span aria-hidden="true" class="h-1.5 w-1.5 rounded-full dark:bg-violet-400"></span>
						<span class="group-hover:underline dark:text-gray-100">Feature</span>
					</a>
					<span class="text-xs whitespace-nowrap">10h ago</span>
				</div>
				<div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt nunc ipsum tempor purus vitae id. Morbi in vestibulum nec varius. Et diam cursus quis sed purus nam. Scelerisque amet elit non sit ut tincidunt condimentum. Nisl ultrices eu venenatis diam.</p>
				</div>
			</div>
		</li>
		<li class="flex items-start space-x-3">
			<a rel="noopener noreferrer" href="#" class="flex items-center h-8 text-sm hover:underline">v3.1.9</a>
			<div class="flex-1 space-y-2">
				<div class="flex items-center justify-between space-x-4 dark:text-gray-400">
					<a rel="noopener noreferrer" href="#" class="inline-flex items-center px-3 py-1 my-1 space-x-2 text-sm border rounded-full group dark:border-gray-700">
						<span aria-hidden="true" class="h-1.5 w-1.5 rounded-full dark:bg-violet-400"></span>
						<span class="group-hover:underline dark:text-gray-100">Bugfix</span>
					</a>
					<span class="text-xs whitespace-nowrap">2 weeks ago</span>
				</div>
				<div class="space-y-2">
					<p>Scelerisque amet elit non sit ut tincidunt condimentum. Nisi ultrices eu venenatis diam.</p>
					<p>Illum quaerat ab inventore, eveniet repudiandae saepe, iste sed molestias laborum atque, quos reprehenderit fugit cumo!</p>
				</div>
			</div>
		</li>
	</ul>
</div>


  </div>
</template>

<style lang="scss" scoped>
</style>
