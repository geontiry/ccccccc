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
    <div class="flex flex-col items-center justify-center">
	<div class="flex -space-x-4">
		<img alt="" class="w-12 h-12 border rounded-full dark:bg-gray-500 dark:border-gray-700" src="https://source.unsplash.com/40x40/?portrait?1">
		<img alt="" class="w-12 h-12 border rounded-full dark:bg-gray-500 dark:border-gray-700" src="https://source.unsplash.com/40x40/?portrait?2">
		<img alt="" class="w-12 h-12 border rounded-full dark:bg-gray-500 dark:border-gray-700" src="https://source.unsplash.com/40x40/?portrait?3">
		<img alt="" class="w-12 h-12 border rounded-full dark:bg-gray-500 dark:border-gray-700" src="https://source.unsplash.com/40x40/?portrait?4">
		<span class="flex items-center justify-center w-12 h-12 font-semibold border rounded-full dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700">+3</span>
	</div>
</div>
<div class="px-8 py-2 dark:bg-gray-900 dark:text-gray-100">
	<div class="flex items-center mx-auto container justify-center md:justify-between py-2">
		<div>
			<span>Get up to 50% off your first order + free shipping,&nbsp;</span>
			<a href="#" rel="noopener noreferrer" class="underline">sign up</a>today!
		</div>
		<a href="#" rel="noopener noreferrer" class="items-center gap-2 hidden md:flex">
			<svg role="img" viewBox="0 0 22 22" class="fill-current h-4 w-4">
				<path clip-rule="evenodd" d="M6.5 1.75a1.75 1.75 0 100 3.5h3.51a8.785 8.785 0 00-.605-1.389C8.762 2.691 7.833 1.75 6.5 1.75zm5.49 3.5h3.51a1.75 1.75 0 000-3.5c-1.333 0-2.262.941-2.905 2.111a8.778 8.778 0 00-.605 1.389zM1.75 6.75v3.5h18.5v-3.5H1.75zm18 5H21a.75.75 0 00.75-.75V6a.75.75 0 00-.75-.75h-2.761a3.25 3.25 0 00-2.739-5c-2.167 0-3.488 1.559-4.22 2.889a9.32 9.32 0 00-.28.553 9.32 9.32 0 00-.28-.553C9.988 1.809 8.667.25 6.5.25a3.25 3.25 0 00-2.739 5H1A.75.75 0 00.25 6v5c0 .414.336.75.75.75h1.25V21c0 .414.336.75.75.75h16a.75.75 0 00.75-.75v-9.25zm-1.5 0H3.75v8.5h14.5v-8.5z" fill-rule="evenodd"></path>
			</svg>
			<span class="hover:underline focus-visible:underline">Gift Cards</span>
		</a>
	</div>
</div>
<div class="inline-flex" id="main_menu">
            <ul class="flex flex-wrap p-1 md:p-2 sm:bg-gray-300 sm:rounded-full text-sm md:text-base" id="menu_nav">
                <li class="relative mx-1 px-1 py-2 group bg-gray-300 rounded-full mb-1 md:mb-0" id="button_home">
                    <a class="font-semibold whitespace-no-wrap text-blue-600 hover:text-blue-800" href="http://www.italiansubs.local:8081/forum/index.php">
                        <span class="last firstlevel">Indice</span>
                    </a>
                </li>
                <li class="relative mx-1 px-1 py-2 group bg-gray-300 rounded-full mb-1 md:mb-0" id="button_admin">
                    <a class="font-semibold whitespace-no-wrap text-gray-600 hover:text-blue-800" href="http://www.italiansubs.local:8081/forum/index.php?action=admin">
                        <span class="firstlevel">Amministra</span>
                    </a>
                    <ul class="absolute left-0 top-0 mt-10 p-2 rounded-lg shadow-lg bg-white z-10 hidden group-hover:block">
                        <svg class="block fill-current text-white w-4 h-4 absolute left-0 top-0 ml-3 -mt-3 z-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path></svg>
                        <li class="p-1 whitespace-no-wrap rounded-full text-sm md:text-base text-gray-600 hover:text-gray-800 hover:bg-gray-100">
                            <a class="px-2 py-1" href="http://www.italiansubs.local:8081/forum/index.php?action=admin;area=featuresettings">
                                <span class="">Funzioni ed opzioni</span>
                            </a>
                        </li>
                        <li class="p-1 whitespace-no-wrap rounded-full text-sm md:text-base text-gray-600 hover:text-gray-800 hover:bg-gray-100">
                            <a class="px-2 py-1" href="http://www.italiansubs.local:8081/forum/index.php?action=admin;area=packages">
                                <span class="">Gestore Pacchetti</span>
                            </a>
                        </li>
                        <li class="p-1 whitespace-no-wrap rounded-full text-sm md:text-base text-gray-600 hover:text-gray-800 hover:bg-gray-100">
                            <a class="px-2 py-1" href="http://www.italiansubs.local:8081/forum/index.php?action=admin;area=permissions">
                                <span class="">Permessi</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="relative mx-1 px-1 py-2 group bg-gray-300 rounded-full mb-1 md:mb-0" id="button_moderate">
                    <a class="font-semibold whitespace-no-wrap text-gray-600 hover:text-blue-800" href="http://www.italiansubs.local:8081/forum/moderate/">
                        <span class="firstlevel">Modera</span>
                    </a>
                    <ul class="absolute left-0 top-0 mt-10 p-2 rounded-lg shadow-lg bg-white z-10 hidden group-hover:block">
                        <svg class="block fill-current text-white w-4 h-4 absolute left-0 top-0 ml-3 -mt-3 z-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path></svg>
                        <li class="p-1 whitespace-no-wrap rounded-full text-sm md:text-base text-gray-600 hover:text-gray-800 hover:bg-gray-100">
                            <a class="px-2 py-1" href="http://www.italiansubs.local:8081/forum/moderate/?area=modlog">
                                <span class="">Registro moderazione</span>
                            </a>
                        </li>
                        <li class="p-1 whitespace-no-wrap rounded-full text-sm md:text-base text-gray-600 hover:text-gray-800 hover:bg-gray-100">
                            <a class="px-2 py-1" href="http://www.italiansubs.local:8081/forum/moderate/?area=reports">
                                <span class="">Post segnalati</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="relative mx-1 px-1 py-2 group bg-gray-300 rounded-full mb-1 md:mb-0" id="button_profile">
                    <a class="font-semibold whitespace-no-wrap text-gray-600 hover:text-blue-800" href="http://www.italiansubs.local:8081/forum/profile/">
                        <span class="firstlevel">Profilo</span>
                    </a>
                    <ul class="absolute left-0 top-0 mt-10 p-2 rounded-lg shadow-lg bg-white z-10 hidden group-hover:block">
                        <svg class="block fill-current text-white w-4 h-4 absolute left-0 top-0 ml-3 -mt-3 z-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path></svg>
                        <li class="p-1 whitespace-no-wrap rounded-full text-sm md:text-base text-gray-600 hover:text-gray-800 hover:bg-gray-100">
                            <a class="px-2 py-1" href="http://www.italiansubs.local:8081/forum/profile/">
                                <span class="">Sommario</span>
                            </a>
                        </li>
                        <li class="p-1 whitespace-no-wrap rounded-full text-sm md:text-base text-gray-600 hover:text-gray-800 hover:bg-gray-100">
                            <a class="px-2 py-1" href="http://www.italiansubs.local:8081/forum/profile/?area=account">
                                <span class="">Impostazioni account</span>
                            </a>
                        </li>
                        <li class="p-1 whitespace-no-wrap rounded-full text-sm md:text-base text-gray-600 hover:text-gray-800 hover:bg-gray-100">
                            <a class="px-2 py-1" href="http://www.italiansubs.local:8081/forum/profile/?area=forumprofile">
                                <span class="">Profilo forum</span>
                            </a>
                        </li>
                        <li class="p-1 whitespace-no-wrap rounded-full text-sm md:text-base text-gray-600 hover:text-gray-800 hover:bg-gray-100">
                            <a class="px-2 py-1" href="http://www.italiansubs.local:8081/forum/profile/?area=mentions">
                                <span class="">Tag</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="relative mx-1 px-1 py-2 group bg-gray-300 rounded-full mb-1 md:mb-0" id="button_pm">
                    <a class="font-semibold whitespace-no-wrap text-gray-600 hover:text-blue-800" href="http://www.italiansubs.local:8081/forum/pm/">
                        <span class="firstlevel">Messaggi privati</span>
                    </a>
                    <ul class="absolute left-0 top-0 mt-10 p-2 rounded-lg shadow-lg bg-white z-10 hidden group-hover:block">
                        <svg class="block fill-current text-white w-4 h-4 absolute left-0 top-0 ml-3 -mt-3 z-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path></svg>
                        <li class="p-1 whitespace-no-wrap rounded-full text-sm md:text-base text-gray-600 hover:text-gray-800 hover:bg-gray-100">
                            <a class="px-2 py-1" href="http://www.italiansubs.local:8081/forum/pm/">
                                <span class="">Leggi i tuoi messaggi</span>
                            </a>
                        </li>
                        <li class="p-1 whitespace-no-wrap rounded-full text-sm md:text-base text-gray-600 hover:text-gray-800 hover:bg-gray-100">
                            <a class="px-2 py-1" href="http://www.italiansubs.local:8081/forum/pm/?sa=send">
                                <span class="">Invia un messaggio privato</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="relative mx-1 px-1 py-2 group bg-gray-300 rounded-full mb-1 md:mb-0" id="button_like">
                    <a class="font-semibold whitespace-no-wrap text-gray-600 hover:text-blue-800" href="http://www.italiansubs.local:8081/forum/profile/?area=showposts;sa=liked">
                        <span class="firstlevel">Like Ricevuti</span>
                    </a>
                </li>
                <li class="relative mx-1 px-1 py-2 group bg-gray-300 rounded-full mb-1 md:mb-0" id="button_mlist">
                    <a class="font-semibold whitespace-no-wrap text-gray-600 hover:text-blue-800" href="http://www.italiansubs.local:8081/forum/mlist/">
                        <span class="firstlevel">Utenti</span>
                    </a>
                    <ul class="absolute left-0 top-0 mt-10 p-2 rounded-lg shadow-lg bg-white z-10 hidden group-hover:block">
                        <svg class="block fill-current text-white w-4 h-4 absolute left-0 top-0 ml-3 -mt-3 z-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path></svg>
                        <li class="p-1 whitespace-no-wrap rounded-full text-sm md:text-base text-gray-600 hover:text-gray-800 hover:bg-gray-100">
                            <a class="px-2 py-1" href="http://www.italiansubs.local:8081/forum/mlist/">
                                <span class="">Visualizza la lista degli utenti</span>
                            </a>
                        </li>
                        <li class="p-1 whitespace-no-wrap rounded-full text-sm md:text-base text-gray-600 hover:text-gray-800 hover:bg-gray-100">
                            <a class="px-2 py-1" href="http://www.italiansubs.local:8081/forum/mlist/?sa=search">
                                <span class="">Cerca utente</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

    <!-- <header class="z-30 w-full px-2 py-4 bg-white sm:px-4">
  <div class="flex items-center justify-between mx-auto max-w-7xl">
    <a href="/" title="Kutty Home Page" class="flex items-center">
      <svg class="w-auto h-6" width="86" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 335 93">
        <path
          d="M134.71 45.7599c1.32-1.44 2.67-2.94 4.05-4.5 1.44-1.56 2.82-3.09 4.14-4.59 1.32-1.56 2.55-3.03 3.69-4.41 1.2-1.38 2.22-2.58 3.06-3.6h15.93c-3.18 3.66-6.3 7.17-9.36 10.53-3 3.3-6.3 6.72-9.9 10.26 1.8 1.62 3.66 3.57 5.58 5.85 1.92 2.22 3.78 4.53 5.58 6.93 1.8 2.4 3.45 4.8 4.95 7.2 1.5 2.4 2.76 4.59 3.78 6.57h-15.39c-.96-1.56-2.07-3.27-3.33-5.13-1.2-1.92-2.49-3.81-3.87-5.67-1.38-1.92-2.85-3.75-4.41-5.49-1.5-1.74-3-3.21-4.5-4.41v20.7H121.3V8.31991l13.41-2.16V45.7599zM209.35 74.3799c-2.28.66-5.22 1.26-8.82 1.8-3.6.6-7.38.9-11.34.9-4.02 0-7.38-.54-10.08-1.62-2.64-1.08-4.74-2.58-6.3-4.5-1.56-1.98-2.67-4.32-3.33-7.02-.66-2.7-.99-5.67-.99-8.91v-26.37h13.41v24.75c0 4.32.57 7.44 1.71 9.36 1.14 1.92 3.27 2.88 6.39 2.88.96 0 1.98-.03 3.06-.09 1.08-.12 2.04-.24 2.88-.36v-36.54h13.41v45.72zM217.888 16.8699l13.41-2.16v13.95h16.11v11.16h-16.11v16.65c0 2.82.48 5.07 1.44 6.75 1.02 1.68 3.03 2.52 6.03 2.52 1.44 0 2.91-.12 4.41-.36 1.56-.3 2.97-.69 4.23-1.17l1.89 10.44c-1.62.66-3.42 1.23-5.4 1.71-1.98.48-4.41.72-7.29.72-3.66 0-6.69-.48-9.09-1.44-2.4-1.02-4.32-2.4-5.76-4.14-1.44-1.8-2.46-3.96-3.06-6.48-.54-2.52-.81-5.31-.81-8.37v-39.78zM254.279 16.8699l13.409-2.16v13.95h16.11v11.16h-16.11v16.65c0 2.82.48 5.07 1.44 6.75 1.02 1.68 3.03 2.52 6.03 2.52 1.44 0 2.91-.12 4.41-.36 1.56-.3 2.97-.69 4.23-1.17l1.891 10.44c-1.62.66-3.421 1.23-5.401 1.71s-4.409.72-7.289.72c-3.66 0-6.691-.48-9.091-1.44-2.4-1.02-4.32-2.4-5.76-4.14-1.44-1.8-2.459-3.96-3.059-6.48-.54-2.52-.81-5.31-.81-8.37v-39.78zM334.028 28.6599c-2.7 9.12-5.52 17.67-8.46 25.65-2.94 7.98-6.15 15.72-9.63 23.22-1.26 2.7-2.52 4.98-3.78 6.84-1.26 1.92-2.64 3.48-4.14 4.68-1.5 1.26-3.21 2.16-5.13 2.7-1.86.6-4.05.9-6.57.9-2.1 0-4.05-.21-5.85-.63-1.74-.36-3.18-.78-4.32-1.26l2.34-10.71c1.38.48 2.61.81 3.69.99 1.08.18 2.22.27 3.42.27 2.4 0 4.23-.66 5.49-1.98 1.32-1.26 2.43-3.03 3.33-5.31-3.06-6-6.12-12.72-9.18-20.16-3.06-7.5-5.94-15.9-8.64-25.2h14.22c.6 2.34 1.29 4.89 2.07 7.65.84 2.7 1.71 5.46 2.61 8.28.9 2.76 1.8 5.46 2.7 8.1.96 2.64 1.86 5.04 2.7 7.2.78-2.16 1.59-4.56 2.43-7.2.84-2.64 1.65-5.34 2.43-8.1.84-2.82 1.62-5.58 2.34-8.28.78-2.76 1.47-5.31 2.07-7.65h13.86z"
          fill="#1A202C"
        />
        <path
          d="M5.61825.4114C24.3953-2.95442 43.4551 21.1695 51.21 34.8757v29.6906c-4.8347 14.2497-12.952 19.1401-20.8473 19.362-12.7347.358-22.758-14.27-17.6881-25.9574 2.926-6.7451 8.905-10.1655 13.0016-11.2189C5.61473 45.9161.32294 23.2628.01461 7.98884-.05756 4.41366 2.09844 1.04233 5.61825.4114z"
          fill="#9E58E9"
        />
        <path
          d="M96.8018.4114C78.0247-2.95442 58.9649 21.1695 51.21 34.8757v29.6906c4.8347 14.2497 12.952 19.1401 20.8474 19.362 12.7346.358 22.7579-14.27 17.688-25.9574-2.9259-6.7451-8.905-10.1655-13.0015-11.2189 20.0614-.8359 25.3531-23.4892 25.6611-38.76316.073-3.57518-2.083-6.94651-5.6032-7.57744z"
          fill="#7629C8"
        />
      </svg>
      <span class="sr-only">Kutty</span>
    </a>
    <div class="relative hidden space-x-1 md:inline-flex" x-data="{ one: false, two: false }">
      <div class="relative">
        <button class="flex items-center rounded-full btn btn-sm btn-white" @click="one = true">
          Features
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            aria-hidden="true"
            class="flex-none w-4 h-4 ml-1 -mr-1 transition duration-200 ease-out transform"
            :class="{ 'rotate-180': one }"
          >
            <polyline points="6 9 12 15 18 9"></polyline>
          </svg>
        </button>
        <div
          class="absolute top-0 z-50 w-screen max-w-md p-2 mx-0 my-12 text-sm text-gray-800 transform bg-white rounded shadow lg:left-1/2 lg:-translate-x-1/2"
          x-show.transition.in.opacity.out.opacity="one"
          @click.away="one = false"
          x-cloak
        >
          <div class="grid grid-cols-2 gap-2 mb-2">
            <a href="#" class="px-3 py-2 transition rounded hover:bg-gray-200 hover:text-primary">
              <p class="font-semibold">Shared Inbox</p>
              Manage conversations at scale
            </a>
            <a href="#" class="px-3 py-2 transition rounded hover:bg-gray-200 hover:text-primary">
              <p class="font-semibold">Reporting</p>
              Real-time data at your fingertips
            </a>
            <a href="#" class="px-3 py-2 transition rounded hover:bg-gray-200 hover:text-primary">
              <p class="font-semibold">Knowledge Base</p>
              Instant answers for customers
            </a>
            <a href="#" class="px-3 py-2 transition rounded hover:bg-gray-200 hover:text-primary">
              <p class="font-semibold">Live Chat</p>
              Make your website more useful
            </a>
            <a href="#" class="px-3 py-2 transition rounded hover:bg-gray-200 hover:text-primary">
              <p class="font-semibold">In-app Messaging</p>
              Engage people on your website
            </a>
          </div>
          <a href="#" class="flex items-center justify-center p-3 font-medium transition bg-gray-200 rounded text-primary hover:bg-gray-300">
            View all features
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              aria-hidden="true"
              class="w-4 h-4 ml-1"
            >
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
        </div>
      </div>
      <div class="relative">
        <button class="flex items-center rounded-full btn btn-sm btn-white" @click="two = true">
          Blog
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            aria-hidden="true"
            class="flex-none w-4 h-4 ml-1 -mr-1 transition duration-200 ease-out transform"
            :class="{ 'rotate-180': two }"
          >
            <polyline points="6 9 12 15 18 9"></polyline>
          </svg>
        </button>
        <div
          class="absolute top-0 z-50 w-screen max-w-md p-2 mx-0 my-12 text-sm text-gray-800 transform bg-white rounded shadow lg:left-1/2 lg:-translate-x-1/2"
          x-show.transition.in.opacity.out.opacity="two"
          @click.away="two = false"
          x-cloak
        >
          <p class="pt-2 pl-3 mb-1 text-xs font-semibold tracking-wide text-gray-500 uppercase">Our popular posts</p>
          <div class="flex flex-col space-y-1 font-medium text-gray-800">
            <a href="#" class="px-3 py-2 transition rounded hover:bg-gray-200 hover:text-primary"> Enable suspect commits, unminify JS, and track releases with Vercel and Sentry </a>
            <a href="#" class="px-3 py-2 transition rounded hover:bg-gray-200 hover:text-primary">Asynchronous CSV Exports with Discover</a>
            <a href="#" class="px-3 py-2 transition rounded hover:bg-gray-200 hover:text-primary"> Automate Release Management with the Sentry Release GitHub Action </a>
            <a href="#" class="flex items-center justify-center p-3 transition bg-gray-200 rounded text-primary hover:bg-gray-300">
              View all blog posts
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                aria-hidden="true"
                class="w-4 h-4 ml-1"
              >
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </a>
          </div>
        </div>
      </div>
      <a href="#" class="rounded-full btn btn-sm btn-white">Pricing</a>
    </div>
    <div class="flex items-center space-x-1">
      <a href="#" class="hidden rounded-full btn btn-sm btn-white md:inline-flex">Sign in</a>
      <a href="#" class="rounded-full btn btn-sm btn-dark">Sign up</a>
      <div class="inline-flex md:hidden" x-data="{ open: false }">
        <button class="flex-none px-2 btn btn-white btn-sm" @click="open = true">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            aria-hidden="true"
            class="w-5 h-5"
          >
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
          </svg>
          <span class="sr-only">Open Menu</span>
        </button>
        <div class="absolute top-0 left-0 right-0 z-50 flex flex-col p-2 m-2 space-y-1 bg-white rounded shadow" x-show.transition="open" @click.away="open = false" x-cloak>
          <button class="self-end flex-none px-2 btn btn-link btn-icon" @click="open = false">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              aria-hidden="true"
            >
              <line x1="18" y1="6" x2="6" y2="18"></line>
              <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
            <span class="sr-only">Close Menu</span>
          </button>
          <div class="grid grid-cols-2 gap-1">
            <a href="#" class="px-3 py-2 transition rounded hover:bg-gray-200 hover:text-primary">Pricing</a>
            <a href="#" class="px-3 py-2 transition rounded hover:bg-gray-200 hover:text-primary">Blog</a>
            <a href="#" class="px-3 py-2 transition rounded hover:bg-gray-200 hover:text-primary">Sign in</a>
          </div>
          <p class="pt-2 pl-3 text-xs font-semibold tracking-wide text-gray-500 uppercase">Features</p>
          <div class="grid grid-cols-2 gap-1">
            <a href="#" class="px-3 py-2 transition rounded hover:bg-gray-200 hover:text-primary">Shared Inbox</a>
            <a href="#" class="px-3 py-2 transition rounded hover:bg-gray-200 hover:text-primary">Reporting</a>
            <a href="#" class="px-3 py-2 transition rounded hover:bg-gray-200 hover:text-primary">Knowledge Base</a>
            <a href="#" class="px-3 py-2 transition rounded hover:bg-gray-200 hover:text-primary">Live Chat</a>
            <a href="#" class="px-3 py-2 transition rounded hover:bg-gray-200 hover:text-primary">In-app Messaging</a>
          </div>
          <a href="#" class="flex items-center justify-center p-3 font-medium transition bg-gray-200 rounded text-primary hover:bg-gray-300">
            View all features
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              aria-hidden="true"
              class="w-4 h-4 ml-1"
            >
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</header> -->

<!-- Remove the div below -->
<div class="py-48 bg-gray-400"></div>



  </div>
</template>

<style lang="scss" scoped>
.group:hover .group-hover\:block {
  display: block !important;
}
</style>
