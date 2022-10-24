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
    <div class="flex items-center w-full h-screen mx-6 bg-white md:m-0 md:justify-center">
    <ul class="flex flex-col items-start space-y-4 md:flex-row md:space-y-0 md:space-x-4">
        <li class="flex text-sm leading-none text-gray-900">
            <button
                class="flex items-center px-3 py-2 space-x-2 bg-gray-200 border border-gray-400 rounded-l-md hover:bg-gray-300 focus:bg-gray-300 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <span class="font-semibold">Unstar</span>
            </button>
            <a class="flex items-center -ml-px px-3 py-2 font-semibold border border-gray-400 rounded-r-md" href="#_">124</a>
        </li>
        <li x-data="{ open: true }"
            class="flex items-stretch justify-center text-gray-900">
            <section class="relative flex text-sm leading-none">
                <button
                    class="flex items-center px-3 py-2 space-x-2 bg-gray-200 border border-gray-400 rounded-l-md hover:bg-gray-300 focus:outline-none"
                    @click="open = true" aria-haspopup="true">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd"
                            d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                            clip-rule="evenodd" />
                    </svg>
                    <span>Watch</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <aside class="absolute z-10 flex flex-col items-start w-64 mt-10 bg-white border rounded-md shadow-md"
                    role="menu" x-show="open" aria-labelledby="menu-heading" @click.away="open = false">
                    <div id="menu-heading" class="w-full p-3 text-xs border-b">
                        <span class="font-semibold">Notifications</span>
                    </div>
                    <div class="flex flex-col">
                        <button
                            class="flex px-2 py-3 space-x-2 hover:bg-blue-600 hover:text-white focus:bg-blue-600 focus:text-white focus:outline-none"
                            type="button" role="menuitem" @click="open = false">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="flex flex-col space-y-1 text-left">
                                <span class="font-semibold">Not watching</span>
                                <span class="text-xs leading-normal">Be notified only when participating or
                                    @mentioned.</span>
                            </div>
                        </button>
                        <span class="h-0 border-b border-gray-400"></span>
                        <button
                            class="flex px-8 py-3 hover:bg-blue-600 hover:text-white focus:bg-blue-600 focus:text-white focus:outline-none"
                            type="button" role="menuitem" @click="open = false">
                            <div class="flex flex-col space-y-1 text-left word-wrap">
                                <span class="font-semibold">Watching</span>
                                <span class="text-xs">Be notified of all conversations.</span>
                            </div>
                        </button>
                    </div>
                </aside>
            </section>
            <a class="flex items-center -ml-px px-3 py-2 text-sm font-semibold leading-none border border-gray-400 rounded-r-md" href="#_">4</a>
        </li>
        <li class="text-gray-900">
            <button
                class="flex items-center px-3 py-2 space-x-2 text-sm leading-none bg-gray-200 border border-gray-400 rounded-md hover:bg-gray-300 focus:outline-none focus:bg-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
                <span>Download</span>
            </button>
        </li>
    </ul>
</div>
<div class="flex flex-col items-center justify-center w-full min-h-screen space-y-10 bg-white">
    <div class="flex items-center justify-center space-x-4 text-white">
        <span class="p-2 bg-green-500 border-4 border-white rounded-full shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
            </svg>
        </span>
        <span class="p-2 bg-orange-500 border-4 border-white rounded-full shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
            </svg>
        </span>
        <span class="p-2 bg-gray-500 border-4 border-white rounded-full shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </span>
        <span class="p-2 bg-red-500 border-4 border-white rounded-full shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg>
        </span>
        <span class="p-2 bg-yellow-500 border-4 border-white rounded-full shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
            </svg>
        </span>
    </div>

    <div class="flex items-center justify-center space-x-6 text-white">
        <span class="p-2 bg-green-500 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
            </svg>
        </span>
        <span class="p-2 bg-orange-500 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
            </svg>
        </span>
        <span class="p-2 bg-gray-500 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </span>
        <span class="p-2 bg-red-500 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg>
        </span>
        <span class="p-2 bg-yellow-500 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
            </svg>
        </span>
    </div>

    <div class="flex items-center justify-center space-x-6">
        <span class="p-2 text-green-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
            </svg>
        </span>
        <span class="p-2 text-orange-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
            </svg>
        </span>
        <span class="p-2 text-gray-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </span>
        <span class="p-2 text-red-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg>
        </span>
        <span class="p-2 text-yellow-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
            </svg>
        </span>
    </div>
</div>


<div>
    <label class="flex items-center space-x-3 mb-3">
        <input type="checkbox" name="checked-demo" class="form-tick appearance-none bg-white bg-check h-6 w-6 border border-gray-300 rounded-md checked:bg-blue-500 checked:border-transparent focus:outline-none"/>
            <span class="text-gray-700 dark:text-white font-normal">
                Blue
            </span>
        </label>
        <label class="flex items-center space-x-3 mb-3">
            <input type="checkbox" name="checked-demo" class="form-tick appearance-none bg-white bg-check h-6 w-6 border border-gray-300 rounded-md checked:bg-pink-500 checked:border-transparent focus:outline-none"/>
                <span class="text-gray-700 dark:text-white font-normal">
                    Pink
                </span>
            </label>
            <label class="flex items-center space-x-3 mb-3">
                <input type="checkbox" name="checked-demo" class="form-tick appearance-none bg-white bg-check h-6 w-6 border border-gray-300 rounded-md checked:bg-green-500 checked:border-transparent focus:outline-none"/>
                    <span class="text-gray-700 dark:text-white font-normal">
                        Green
                    </span>
                </label>
                <label class="flex items-center space-x-3 mb-3">
                    <input type="checkbox" name="checked-demo" class="form-tick appearance-none bg-white bg-check h-6 w-6 border border-gray-300 rounded-md checked:bg-yellow-500 checked:border-transparent focus:outline-none"/>
                        <span class="text-gray-700 dark:text-white font-normal">
                            Orange
                        </span>
                    </label>
                    <label class="flex items-center space-x-3 mb-3">
                        <input type="checkbox" name="checked-demo" class="form-tick appearance-none bg-white bg-check h-6 w-6 border border-gray-300 rounded-md checked:bg-purple-500 checked:border-transparent focus:outline-none"/>
                            <span class="text-gray-700 dark:text-white font-normal">
                                Purple
                            </span>
                        </label>
                        <label class="flex items-center space-x-3 mb-3">
                            <input type="checkbox" name="checked-demo" class="form-tick appearance-none bg-white bg-check h-6 w-6 border border-gray-300 rounded-md checked:bg-black checked:border-transparent focus:outline-none"/>
                                <span class="text-gray-700 dark:text-white font-normal">
                                    Black
                                </span>
                            </label>
                            <label class="flex items-center space-x-3 mb-3">
                                <input type="checkbox" name="checked-demo" class="form-tick appearance-none bg-white bg-check h-6 w-6 border border-gray-300 rounded-md checked:bg-indigo-500 checked:border-transparent focus:outline-none"/>
                                    <span class="text-gray-700 dark:text-white font-normal">
                                        Indigo
                                    </span>
                                </label>
                                <label class="flex items-center space-x-3 mb-3">
                                    <input type="checkbox" name="checked-demo" class="form-tick appearance-none bg-white bg-check h-6 w-6 border border-gray-300 rounded-md checked:bg-red-500 checked:border-transparent focus:outline-none"/>
                                        <span class="text-gray-700 dark:text-white font-normal">
                                            Red
                                        </span>
                                    </label>
                                    <label class="flex items-center space-x-3 mb-3">
                                        <input type="checkbox" name="checked-demo" class="form-tick appearance-none bg-white bg-check h-6 w-6 border border-gray-300 rounded-md checked:bg-gray-500 checked:border-transparent focus:outline-none"/>
                                            <span class="text-gray-700 dark:text-white font-normal">
                                                Gray
                                            </span>
                                        </label>
                                    </div>



<div>
    <div class="mb-3">
        <div class="relative inline-block w-10 mr-2 align-middle select-none">
            <input type="checkbox" name="toggle" id="Blue" class="checked:bg-blue-500 outline-none focus:outline-none right-4 checked:right-0 duration-200 ease-in absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
                <label for="Blue" class="block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer">
                </label>
            </div>
            <span class="text-gray-400 font-medium">
                Blue
            </span>
        </div>
        <div class="mb-3">
            <div class="relative inline-block w-10 mr-2 align-middle select-none">
                <input type="checkbox" name="toggle" id="Pink" class="checked:bg-pink-500 outline-none focus:outline-none right-4 checked:right-0 duration-200 ease-in absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
                    <label for="Pink" class="block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer">
                    </label>
                </div>
                <span class="text-gray-400 font-medium">
                    Pink
                </span>
            </div>
            <div class="mb-3">
                <div class="relative inline-block w-10 mr-2 align-middle select-none">
                    <input type="checkbox" name="toggle" id="Green" class="checked:bg-green-500 outline-none focus:outline-none right-4 checked:right-0 duration-200 ease-in absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
                        <label for="Green" class="block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer">
                        </label>
                    </div>
                    <span class="text-gray-400 font-medium">
                        Green
                    </span>
                </div>
                <div class="mb-3">
                    <div class="relative inline-block w-10 mr-2 align-middle select-none">
                        <input type="checkbox" name="toggle" id="Orange" class="checked:bg-yellow-500 outline-none focus:outline-none right-4 checked:right-0 duration-200 ease-in absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
                            <label for="Orange" class="block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer">
                            </label>
                        </div>
                        <span class="text-gray-400 font-medium">
                            Orange
                        </span>
                    </div>
                    <div class="mb-3">
                        <div class="relative inline-block w-10 mr-2 align-middle select-none">
                            <input type="checkbox" name="toggle" id="Purple" class="checked:bg-purple-500 outline-none focus:outline-none right-4 checked:right-0 duration-200 ease-in absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
                                <label for="Purple" class="block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer">
                                </label>
                            </div>
                            <span class="text-gray-400 font-medium">
                                Purple
                            </span>
                        </div>
                        <div class="mb-3">
                            <div class="relative inline-block w-10 mr-2 align-middle select-none">
                                <input type="checkbox" name="toggle" id="Black" class="checked:bg-black outline-none focus:outline-none right-4 checked:right-0 duration-200 ease-in absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
                                    <label for="Black" class="block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer">
                                    </label>
                                </div>
                                <span class="text-gray-400 font-medium">
                                    Black
                                </span>
                            </div>
                            <div class="mb-3">
                                <div class="relative inline-block w-10 mr-2 align-middle select-none">
                                    <input type="checkbox" name="toggle" id="Indigo" class="checked:bg-indigo-500 outline-none focus:outline-none right-4 checked:right-0 duration-200 ease-in absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
                                        <label for="Indigo" class="block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer">
                                        </label>
                                    </div>
                                    <span class="text-gray-400 font-medium">
                                        Indigo
                                    </span>
                                </div>
                                <div class="mb-3">
                                    <div class="relative inline-block w-10 mr-2 align-middle select-none">
                                        <input type="checkbox" name="toggle" id="Red" class="checked:bg-red-500 outline-none focus:outline-none right-4 checked:right-0 duration-200 ease-in absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
                                            <label for="Red" class="block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer">
                                            </label>
                                        </div>
                                        <span class="text-gray-400 font-medium">
                                            Red
                                        </span>
                                    </div>
                                    <div class="mb-3">
                                        <div class="relative inline-block w-10 mr-2 align-middle select-none">
                                            <input type="checkbox" name="toggle" id="Gray" class="checked:bg-gray-500 outline-none focus:outline-none right-4 checked:right-0 duration-200 ease-in absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
                                                <label for="Gray" class="block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer">
                                                </label>
                                            </div>
                                            <span class="text-gray-400 font-medium">
                                                Gray
                                            </span>
                                        </div>
                                    </div>


<div class="flex items-center gap-8">
    <label class="inline-flex items-center">
        <input type="radio" name="vehicle" class="h-5 w-5 text-red-600"/>
            <span class="ml-2 text-gray-700">
                Car
            </span>
        </label>
        <label class="inline-flex items-center">
            <input type="radio" name="vehicle" class="h-5 w-5 text-red-600"/>
                <span class="ml-2 text-gray-700">
                    Cycle
                </span>
            </label>
        </div>



    
    
   
    <div class="flex items-center">
        <button class="px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">Download</button>
        
        <span class="border border-transparent"></span>

        <div class="relative">
            <!-- Menu toggle button --> 
            <button class="relative z-10 block p-2 transition-colors duration-200 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                </svg>
            </button>

            <!-- Menu list -->
            <div class="absolute right-0 z-20 w-48 mt-2 overflow-hidden bg-white rounded-md shadow-xl dark:bg-gray-700">
                <a href="#" class="block px-4 py-2 text-sm text-gray-800 transition-colors duration-200 transform border-b dark:text-gray-200 dark:border-gray-500 hover:bg-gray-200 dark:hover:bg-gray-600">small <span class="text-gray-600 dark:text-gray-400">(640x426)</span></a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-800 transition-colors duration-200 transform border-b dark:text-gray-200 dark:border-gray-500 hover:bg-gray-200 dark:hover:bg-gray-600">medium <span class="text-gray-600 dark:text-gray-400">(1920x1280)</span></a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-800 transition-colors duration-200 transform dark:text-gray-200 hover:bg-gray-200 dark:hover:bg-gray-600">large <span class="text-gray-600 dark:text-gray-400">(2400x1600)</span></a>
            </div>
        </div>
    </div>
    
    <div class="p-1.5 w-full sm:w-auto overflow-hidden bg-white border rounded-lg dark:bg-gray-800 dark:border-gray-700">
        <div class="space-y-2 sm:space-y-0 sm:flex sm:-mx-1">
            <button class="flex items-center justify-center w-full px-2 py-1 text-white transition-colors duration-200 transform bg-blue-600 rounded-md focus:outline-none sm:w-auto sm:mx-1 hover:bg-blue-500 focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-40">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                </svg>
                <span class="mx-1">
                    Upload
                </span>
            </button>
            
            <button class="flex items-center justify-center w-full px-2 py-1 text-white transition-colors duration-200 transform bg-blue-600 rounded-md focus:outline-none sm:w-auto sm:mx-1 hover:bg-blue-500 focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-40">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" />
                </svg>
                <span class="mx-1">
                    Drift
                </span>
            </button>

            <button class="flex items-center justify-center w-full px-2 py-1 text-white transition-colors duration-200 transform bg-blue-600 rounded-md focus:outline-none sm:w-auto sm:mx-1 hover:bg-blue-500 focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-40">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>
                <span class="mx-1">
                    View
                </span>
            </button>
        </div>
    </div>
    
    <div class="flex">
        <button class="flex items-center h-12 px-2 py-2 text-center text-gray-700 border border-b-0 border-gray-300 sm:px-4 dark:border-gray-500 rounded-t-md -px-1 dark:text-white whitespace-nowrap focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mx-1 sm:w-6 sm:h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
            </svg>

            <span class="mx-1 text-sm sm:text-base">
                Profile
            </span>
        </button>

        <button class="flex items-center h-12 px-2 py-2 text-center text-gray-700 bg-transparent border-b border-gray-300 sm:px-4 dark:border-gray-500 -px-1 dark:text-white whitespace-nowrap cursor-base focus:outline-none hover:border-gray-400 dark:hover:border-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mx-1 sm:w-6 sm:h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
            </svg>

            <span class="mx-1 text-sm sm:text-base">
                Account
            </span>
        </button>

        <button class="flex items-center h-12 px-2 py-2 text-center text-gray-700 bg-transparent border-b border-gray-300 sm:px-4 dark:border-gray-500 -px-1 dark:text-white whitespace-nowrap cursor-base focus:outline-none hover:border-gray-400 dark:hover:border-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mx-1 sm:w-6 sm:h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>

            <span class="mx-1 text-sm sm:text-base">
                Notification
            </span>
        </button>
    </div>
    


  </div>
</template>

<style lang="scss" scoped>
</style>
