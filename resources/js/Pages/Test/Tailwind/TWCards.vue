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
    
<div class="w-80 flex justify-center items-center">
    <div class="w-full p-4">
        <div class="card flex flex-col justify-center p-10 bg-white rounded-lg shadow-2xl">
            <div class="prod-title">
                <p class="text-2xl uppercase text-gray-900 font-bold">
                    Puma Shoes
                </p>
                <p class="uppercase text-sm text-gray-400">
                    The best shoes in the marketplace
                </p>
            </div>
            <div class="prod-img">
                <img src="/images/object/4.jpg" class="w-full object-cover object-center"/>
            </div>
            <div class="prod-info grid gap-10">
                <div>
                    <ul class="flex flex-row justify-center items-center">
                        <li class="mr-4 last:mr-0">
                            <span class="block p-1 border-2 border-gray-500 rounded-full transition ease-in duration-300">
                                <a href="#blue" class="block w-6 h-6 bg-blue-900 rounded-full">
                                </a>
                            </span>
                        </li>
                        <li class="mr-4 last:mr-0">
                            <span class="block p-1 border-2 border-white hover:border-gray-500 rounded-full transition ease-in duration-300">
                                <a href="#yellow" class="block w-6 h-6 bg-yellow-500 rounded-full">
                                </a>
                            </span>
                        </li>
                        <li class="mr-4 last:mr-0">
                            <span class="block p-1 border-2 border-white hover:border-gray-500 rounded-full transition ease-in duration-300">
                                <a href="#red" class="block w-6 h-6 bg-red-500 rounded-full">
                                </a>
                            </span>
                        </li>
                        <li class="mr-4 last:mr-0">
                            <span class="block p-1 border-2 border-white hover:border-gray-500 rounded-full transition ease-in duration-300">
                                <a href="#green" class="block w-6 h-6 bg-green-500 rounded-full">
                                </a>
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="flex flex-col md:flex-row justify-between items-center text-gray-900">
                    <p class="font-bold text-xl">
                        65 $
                    </p>
                    <button class="px-6 py-2 transition ease-in duration-200 uppercase rounded-full hover:bg-gray-800 hover:text-white border-2 border-gray-900 focus:outline-none">
                        Add to cart
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="flex bg-white dark:bg-gray-800 rounded-lg shadow">
    <div class="flex-none w-24 md:w-48  relative">
        <img src="/images/object/8.jpg" alt="shopping image" class="absolute rounded-lg inset-0 w-full h-full object-cover"/>
    </div>
    <form class="flex-auto p-6">
        <div class="flex flex-wrap">
            <h1 class="flex-auto text-xl font-semibold dark:text-gray-50">
                Classic Utility Jacket
            </h1>
            <div class="text-xl font-semibold text-gray-500 dark:text-gray-300">
                $110.00
            </div>
            <div class="w-full flex-none text-sm font-medium text-gray-500 dark:text-gray-300 mt-2">
                In stock
            </div>
        </div>
        <div class="flex items-baseline mt-4 mb-6 text-gray-700 dark:text-gray-300">
            <div class="space-x-2 flex">
                <label class="text-center">
                    <input type="radio" class="w-6 h-6 flex items-center justify-center bg-gray-100 dark:bg-gray-600 rounded-lg" name="size" value="xs"/>
                        XS
                    </label>
                    <label class="text-center">
                        <input type="radio" class="w-6 h-6 flex items-center justify-center" name="size" value="s"/>
                            S
                        </label>
                        <label class="text-center">
                            <input type="radio" class="w-6 h-6 flex items-center justify-center" name="size" value="m"/>
                                M
                            </label>
                            <label class="text-center">
                                <input type="radio" class="w-6 h-6 flex items-center justify-center" name="size" value="l"/>
                                    L
                                </label>
                                <label class="text-center">
                                    <input type="radio" class="w-6 h-6 flex items-center justify-center" name="size" value="xl"/>
                                        XL
                                    </label>
                                </div>
                                <a href="#" class="ml-auto hidden md:block text-sm text-gray-500 dark:text-gray-300 underline">
                                    Size Guide
                                </a>
                            </div>
                            <div class="flex mb-4 text-sm font-medium">
                                <button type="button" class="py-2 px-4  bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                    Buy now
                                </button>
                            </div>
                            <p class="text-sm text-gray-500 dark:text-gray-300">
                                Free shipping on all continental US orders.
                            </p>
                        </form>
                    </div>


<div class="bg-white rounded-lg shadow sm:max-w-md sm:w-full sm:mx-auto sm:overflow-hidden">
    <div class="px-4 py-8 sm:px-10">
        <div class="relative mt-6">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-300">
                </div>
            </div>
            <div class="relative flex justify-center text-sm leading-5">
                <span class="px-2 text-gray-500 bg-white">
                    Search criteria
                </span>
            </div>
        </div>
        <div class="mt-6">
            <div class="w-full space-y-6">
                <div class="w-full">
                    <div class=" relative ">
                        <input type="text" id="search-form-price" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Your price"/>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class=" relative ">
                            <input type="text" id="search-form-location" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Your location"/>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class=" relative ">
                                <input type="text" id="search-form-name" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Your name"/>
                                </div>
                            </div>
                            <div>
                                <span class="block w-full rounded-md shadow-sm">
                                    <button type="button" class="py-2 px-4  bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                        Search
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-6 border-t-2 border-gray-200 bg-gray-50 sm:px-10">
                    <p class="text-xs leading-5 text-gray-500">
                        This data are display for information and can change
                    </p>
                </div>
            </div>


<section class="h-screen bg-gray-100 bg-opacity-50">
    <form class="container max-w-2xl mx-auto shadow-md md:w-3/4">
        <div class="p-4 bg-gray-100 border-t-2 border-indigo-400 rounded-lg bg-opacity-5">
            <div class="max-w-sm mx-auto md:w-full md:mx-0">
                <div class="inline-flex items-center space-x-4">
                    <a href="#" class="block relative">
                        <img alt="profil" src="/images/person/1.jpg" class="mx-auto object-cover rounded-full h-16 w-16 "/>
                    </a>
                    <h1 class="text-gray-600">
                        Charlie
                    </h1>
                </div>
            </div>
        </div>
        <div class="space-y-6 bg-white">
            <div class="items-center w-full p-4 space-y-4 text-gray-500 md:inline-flex md:space-y-0">
                <h2 class="max-w-sm mx-auto md:w-1/3">
                    Account
                </h2>
                <div class="max-w-sm mx-auto md:w-2/3">
                    <div class=" relative ">
                        <input type="text" id="user-info-email" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Email"/>
                        </div>
                    </div>
                </div>
                <hr/>
                <div class="items-center w-full p-4 space-y-4 text-gray-500 md:inline-flex md:space-y-0">
                    <h2 class="max-w-sm mx-auto md:w-1/3">
                        Personal info
                    </h2>
                    <div class="max-w-sm mx-auto space-y-5 md:w-2/3">
                        <div>
                            <div class=" relative ">
                                <input type="text" id="user-info-name" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Name"/>
                                </div>
                            </div>
                            <div>
                                <div class=" relative ">
                                    <input type="text" id="user-info-phone" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Phone number"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <div class="items-center w-full p-8 space-y-4 text-gray-500 md:inline-flex md:space-y-0">
                            <h2 class="max-w-sm mx-auto md:w-4/12">
                                Change password
                            </h2>
                            <div class="w-full max-w-sm pl-2 mx-auto space-y-5 md:w-5/12 md:pl-9 md:inline-flex">
                                <div class=" relative ">
                                    <input type="text" id="user-info-password" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Password"/>
                                    </div>
                                </div>
                                <div class="text-center md:w-3/12 md:pl-6">
                                    <button type="button" class="py-2 px-4  bg-pink-600 hover:bg-pink-700 focus:ring-pink-500 focus:ring-offset-pink-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                        Change
                                    </button>
                                </div>
                            </div>
                            <hr/>
                            <div class="w-full px-4 pb-4 ml-auto text-gray-500 md:w-1/3">
                                <button type="submit" class="py-2 px-4  bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </section>

    
<div class="shadow-lg rounded-2xl w-80 p-4 bg-white dark:bg-gray-800">
    <div class="flex flex-row items-start gap-4">
        <img src="/images/person/1.jpg" class="w-28 h-28 rounded-lg"/>
        <div class="h-28 w-full flex flex-col justify-between">
            <div>
                <p class="text-gray-800 dark:text-white text-xl font-medium">
                    John Jackson
                </p>
                <p class="text-gray-400 text-xs">
                    FullStack dev
                </p>
            </div>
            <div class="rounded-lg bg-blue-100 dark:bg-white p-2 w-full">
                <div class="flex items-center justify-between text-xs text-gray-400 dark:text-black">
                    <p class="flex flex-col">
                        Articles
                        <span class="text-black dark:text-indigo-500 font-bold">
                            34
                        </span>
                    </p>
                    <p class="flex flex-col">
                        Followers
                        <span class="text-black dark:text-indigo-500 font-bold">
                            455
                        </span>
                    </p>
                    <p class="flex flex-col">
                        Rating
                        <span class="text-black dark:text-indigo-500 font-bold">
                            9.3
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-between gap-4 mt-6">
        <button type="button" class="w-1/2 px-4 py-2 text-base border rounded-lg text-grey-500 bg-white hover:bg-gray-200 ">
            Chat
        </button>
        <button type="button" class="w-1/2 px-4 py-2 text-base border rounded-lg text-white bg-indigo-500 hover:bg-indigo-700 ">
            Add friend
        </button>
    </div>
</div>

<div class="shadow-lg rounded-2xl w-80 bg-white dark:bg-gray-800">
    <img alt="profil" src="/images/landscape/1.jpg" class="rounded-t-lg h-28 w-full mb-4"/>
    <div class="flex flex-col items-center justify-center p-4 -mt-16">
        <a href="#" class="block relative">
            <img alt="profil" src="/images/person/1.jpg" class="mx-auto object-cover rounded-full h-16 w-16  border-2 border-white dark:border-gray-800"/>
        </a>
        <p class="text-gray-800 dark:text-white text-xl font-medium mt-2">
            Charlie
        </p>
        <p class="text-gray-400 text-xs mb-4">
            Nantes
        </p>
        <p class="text-xs p-2 bg-pink-500 text-white px-4 rounded-full">
            Professional
        </p>
        <div class="rounded-lg p-2 w-full mt-4">
            <div class="flex items-center justify-between text-sm text-gray-600 dark:text-gray-200">
                <p class="flex flex-col">
                    Articles
                    <span class="text-black dark:text-white font-bold">
                        34
                    </span>
                </p>
                <p class="flex flex-col">
                    Followers
                    <span class="text-black dark:text-white font-bold">
                        455
                    </span>
                </p>
                <p class="flex flex-col">
                    Rating
                    <span class="text-black dark:text-white font-bold">
                        9.3
                    </span>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="shadow-lg rounded-2xl p-4 bg-white dark:bg-gray-800 w-64 m-auto">
    <div class="w-full h-full text-center">
        <div class="flex h-full flex-col justify-between">
            <svg width="40" height="40" class="mt-4 w-12 h-12 m-auto text-indigo-500" fill="currentColor" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M704 1376v-704q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v704q0 14 9 23t23 9h64q14 0 23-9t9-23zm256 0v-704q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v704q0 14 9 23t23 9h64q14 0 23-9t9-23zm256 0v-704q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v704q0 14 9 23t23 9h64q14 0 23-9t9-23zm-544-992h448l-48-117q-7-9-17-11h-317q-10 2-17 11zm928 32v64q0 14-9 23t-23 9h-96v948q0 83-47 143.5t-113 60.5h-832q-66 0-113-58.5t-47-141.5v-952h-96q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h309l70-167q15-37 54-63t79-26h320q40 0 79 26t54 63l70 167h309q14 0 23 9t9 23z">
                </path>
            </svg>
            <p class="text-gray-800 dark:text-gray-200 text-xl font-bold mt-4">
                Remove card
            </p>
            <p class="text-gray-600 dark:text-gray-400 text-xs py-2 px-6">
                Are you sure you want to delete this card ?
            </p>
            <div class="flex items-center justify-between gap-4 w-full mt-8">
                <button type="button" class="py-2 px-4  bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                    Delete
                </button>
                <button type="button" class="py-2 px-4  bg-white hover:bg-gray-100 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-indigo-500 w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                    Cancel
                </button>
            </div>
        </div>
    </div>
</div>


<div class="shadow-lg rounded-2xl p-4 bg-white dark:bg-gray-800">
    <div class="flex items-center">
        <span class="rounded-xl relative p-4 bg-purple-200">
            <svg width="40" fill="currentColor" height="40" class="text-purple-500 h-4 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1362 1185q0 153-99.5 263.5t-258.5 136.5v175q0 14-9 23t-23 9h-135q-13 0-22.5-9.5t-9.5-22.5v-175q-66-9-127.5-31t-101.5-44.5-74-48-46.5-37.5-17.5-18q-17-21-2-41l103-135q7-10 23-12 15-2 24 9l2 2q113 99 243 125 37 8 74 8 81 0 142.5-43t61.5-122q0-28-15-53t-33.5-42-58.5-37.5-66-32-80-32.5q-39-16-61.5-25t-61.5-26.5-62.5-31-56.5-35.5-53.5-42.5-43.5-49-35.5-58-21-66.5-8.5-78q0-138 98-242t255-134v-180q0-13 9.5-22.5t22.5-9.5h135q14 0 23 9t9 23v176q57 6 110.5 23t87 33.5 63.5 37.5 39 29 15 14q17 18 5 38l-81 146q-8 15-23 16-14 3-27-7-3-3-14.5-12t-39-26.5-58.5-32-74.5-26-85.5-11.5q-95 0-155 43t-60 111q0 26 8.5 48t29.5 41.5 39.5 33 56 31 60.5 27 70 27.5q53 20 81 31.5t76 35 75.5 42.5 62 50 53 63.5 31.5 76.5 13 94z">
                </path>
            </svg>
        </span>
        <p class="text-md text-black dark:text-white ml-2">
            Finance
        </p>
    </div>
    <div class="flex flex-col justify-start">
        <p class="text-gray-700 dark:text-gray-100 text-4xl text-left font-bold my-4">
            34,500
            <span class="text-sm">
                $
            </span>
        </p>
        <div class="flex items-center text-green-500 text-sm">
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1408 1216q0 26-19 45t-45 19h-896q-26 0-45-19t-19-45 19-45l448-448q19-19 45-19t45 19l448 448q19 19 19 45z">
                </path>
            </svg>
            <span>
                5.5%
            </span>
            <span class="text-gray-400">
                vs last month
            </span>
        </div>
    </div>
</div>


<div class="shadow-lg rounded-xl w-full md:w-60 p-4 bg-white dark:bg-gray-800 relative overflow-hidden">
    <p class="text-gray-600 font-light dark:text-white text-xl mb-6">
        Popular influencor
    </p>
    <div class="grid grid-cols-3 gap-4">
        <div class="flex flex-col items-center">
            <div class="relative">
                <a href="#" class="block relative">
                    <img alt="profil" src="/images/person/1.jpg" class="mx-auto object-cover rounded-full h-10 w-10 "/>
                </a>
                <svg width="10" height="10" fill="currentColor" class="fill-current text-white bg-blue-600 rounded-full p-1 absolute bottom-0 right-0 w-4 h-4 -mx-1 -my-1" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z">
                    </path>
                </svg>
            </div>
            <span class="text-gray-600 dark:text-gray-400 text-xs mt-2">
                Charlie R
            </span>
        </div>
        <div class="flex flex-col items-center">
            <div class="relative">
                <a href="#" class="block relative">
                    <img alt="profil" src="/images/person/4.jpg" class="mx-auto object-cover rounded-full h-10 w-10 "/>
                </a>
                <svg width="10" height="10" fill="currentColor" class="fill-current text-white bg-blue-600 rounded-full p-1 absolute bottom-0 right-0 w-4 h-4 -mx-1 -my-1" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z">
                    </path>
                </svg>
            </div>
            <span class="text-gray-600 dark:text-gray-400 text-xs mt-2">
                Bilal Ouid
            </span>
        </div>
        <div class="flex flex-col items-center">
            <div class="relative">
                <a href="#" class="block relative">
                    <img alt="profil" src="/images/person/5.jpg" class="mx-auto object-cover rounded-full h-10 w-10 "/>
                </a>
                <svg width="10" height="10" fill="currentColor" class="fill-current text-white bg-blue-600 rounded-full p-1 absolute bottom-0 right-0 w-4 h-4 -mx-1 -my-1" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z">
                    </path>
                </svg>
            </div>
            <span class="text-gray-600 dark:text-gray-400 text-xs mt-2">
                Aschi Ish
            </span>
        </div>
        <div class="flex flex-col items-center">
            <div class="relative">
                <a href="#" class="block relative">
                    <img alt="profil" src="/images/person/6.jpg" class="mx-auto object-cover rounded-full h-10 w-10 "/>
                </a>
                <svg width="10" height="10" fill="currentColor" class="fill-current text-white bg-blue-600 rounded-full p-1 absolute bottom-0 right-0 w-4 h-4 -mx-1 -my-1" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z">
                    </path>
                </svg>
            </div>
            <span class="text-gray-600 dark:text-gray-400 text-xs mt-2">
                Babet Cla
            </span>
        </div>
        <div class="flex flex-col items-center">
            <div class="relative">
                <a href="#" class="block relative">
                    <img alt="profil" src="/images/person/7.jpg" class="mx-auto object-cover rounded-full h-10 w-10 "/>
                </a>
                <svg width="10" height="10" fill="currentColor" class="fill-current text-white bg-blue-600 rounded-full p-1 absolute bottom-0 right-0 w-4 h-4 -mx-1 -my-1" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z">
                    </path>
                </svg>
            </div>
            <span class="text-gray-600 dark:text-gray-400 text-xs mt-2">
                Luc Suro
            </span>
        </div>
        <div class="flex flex-col items-center">
            <div class="relative">
                <a href="#" class="block relative">
                    <img alt="profil" src="/images/person/8.jpg" class="mx-auto object-cover rounded-full h-10 w-10 "/>
                </a>
                <svg width="10" height="10" fill="currentColor" class="fill-current text-white bg-blue-600 rounded-full p-1 absolute bottom-0 right-0 w-4 h-4 -mx-1 -my-1" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z">
                    </path>
                </svg>
            </div>
            <span class="text-gray-600 dark:text-gray-400 text-xs mt-2">
                John Jan
            </span>
        </div>
    </div>
</div>



<div class="shadow-lg rounded-xl w-full md:w-72 p-4 bg-white dark:bg-gray-800 relative overflow-hidden">
    <a href="#" class="w-full h-full block">
        <div class="w-full flex items-center">
            <a href="#" class="block relative">
                <img alt="profil" src="/images/person/1.jpg" class="mx-auto object-cover rounded-full h-10 w-10 "/>
            </a>
            <div class="flex flex-col items-center ml-2">
                <span class="dark:text-white">
                    Charlie Rabiller
                </span>
                <span class="text-gray-400 text-sm dark:text-gray-300">
                    Tailwind-kit.com
                </span>
            </div>
        </div>
        <div class="flex items-center justify-between my-2">
            <p class="text-gray-300 text-sm">
                4/6 task completed
            </p>
        </div>
        <div class="w-full h-2 bg-blue-200 rounded-full">
            <div class="w-2/3 h-full text-center text-xs text-white bg-blue-600 rounded-full">
            </div>
        </div>
    </a>
</div>


<div class="shadow-lg rounded-xl max-w-xs p-4 bg-white dark:bg-gray-800 relative overflow-hidden">
    <a href="#" class="w-full h-full block">
        <div class="w-full">
            <p class="text-gray-800 dark:text-white text-xl font-medium mb-2">
                Improve css design of the carousel
            </p>
            <p class="text-gray-400 dark:text-gray-300 text-xs font-medium mb-2">
                Sunday 13 october
            </p>
            <p class="text-gray-400 dark:text-gray-300 text-sm mb-4">
                You’ve been coding for a while now and know your way around a CSS file. You’re certainly no master, but with enough fiddling you can get where you want to go.
            </p>
            <div class="flex dark:text-gray-200 items-center justify-between">
                <p>
                    Task progress
                </p>
                <p>
                    33%
                </p>
            </div>
            <div class="w-full h-2 bg-gray-400 rounded-full mt-3 mb-6">
                <div class="w-1/3 h-full text-center text-xs text-white bg-green-400 rounded-full">
                </div>
            </div>
            <div class="flex items-center">
                <div class="flex -space-x-2">
                    <a href="#" class="">
                        <img class="inline-block h-10 w-10 rounded-full object-cover ring-2 ring-white" src="/images/person/1.jpg" alt="Guy"/>
                    </a>
                    <a href="#" class="">
                        <img class="inline-block h-10 w-10 rounded-full object-cover ring-2 ring-white" src="/images/person/2.jpeg" alt="Max"/>
                    </a>
                    <a href="#" class="">
                        <img class="inline-block h-10 w-10 rounded-full object-cover ring-2 ring-white" src="/images/person/3.jpg" alt="Charles"/>
                    </a>
                    <a href="#" class="">
                        <img class="inline-block h-10 w-10 rounded-full object-cover ring-2 ring-white" src="/images/person/4.jpg" alt="Jade"/>
                    </a>
                </div>
                <span class="text-gray-500 dark:text-gray-300 ml-2">
                    + 4 more
                </span>
            </div>
        </div>
    </a>
</div>


<div class="shadow-lg rounded-2xl p-4 bg-white dark:bg-gray-700 w-full">
    <div class="flex items-center justify-between mb-6">
        <div class="flex items-center">
            <span class="rounded-xl relative p-2 bg-blue-100">
                <svg width="25" height="25" viewBox="0 0 256 262" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid">
                    <path d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027" fill="#4285F4">
                    </path>
                    <path d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1" fill="#34A853">
                    </path>
                    <path d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782" fill="#FBBC05">
                    </path>
                    <path d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251" fill="#EB4335">
                    </path>
                </svg>
            </span>
            <div class="flex flex-col">
                <span class="font-bold text-md text-black dark:text-white ml-2">
                    Google
                </span>
                <span class="text-sm text-gray-500 dark:text-white ml-2">
                    Google Inc.
                </span>
            </div>
        </div>
        <div class="flex items-center">
            <button class="border p-1 border-gray-200 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 1792 1792">
                    <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
                    </path>
                </svg>
            </button>
            <button class="text-gray-200">
                <svg width="25" height="25" fill="currentColor" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1088 1248v192q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h192q40 0 68 28t28 68zm0-512v192q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h192q40 0 68 28t28 68zm0-512v192q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h192q40 0 68 28t28 68z">
                    </path>
                </svg>
            </button>
        </div>
    </div>
    <div class="flex items-center justify-between mb-4 space-x-12">
        <span class="px-2 py-1 flex items-center font-semibold text-xs rounded-md text-gray-500 bg-gray-200">
            PROGRESS
        </span>
        <span class="px-2 py-1 flex items-center font-semibold text-xs rounded-md text-red-400 border border-red-400  bg-white">
            HIGH PRIORITY
        </span>
    </div>
    <div class="block m-auto">
        <div>
            <span class="text-sm inline-block text-gray-500 dark:text-gray-100">
                Task done :
                <span class="text-gray-700 dark:text-white font-bold">
                    25
                </span>
                /50
            </span>
        </div>
        <div class="w-full h-2 bg-gray-200 rounded-full mt-2">
            <div class="w-1/2 h-full text-center text-xs text-white bg-purple-500 rounded-full">
            </div>
        </div>
    </div>
    <div class="flex items-center justify-start my-4 space-x-4">
        <span class="px-2 py-1 flex items-center text-xs rounded-md font-semibold text-green-500 bg-green-50">
            IOS APP
        </span>
        <span class="px-2 py-1 flex items-center text-xs rounded-md text-blue-500 font-semibold bg-blue-100">
            UI/UX
        </span>
    </div>
    <div class="flex -space-x-2">
        <a href="#" class="">
            <img class="inline-block h-10 w-10 rounded-full object-cover ring-2 ring-white" src="/images/person/1.jpg" alt="Guy"/>
        </a>
        <a href="#" class="">
            <img class="inline-block h-10 w-10 rounded-full object-cover ring-2 ring-white" src="/images/person/2.jpeg" alt="Max"/>
        </a>
        <a href="#" class="">
            <img class="inline-block h-10 w-10 rounded-full object-cover ring-2 ring-white" src="/images/person/3.jpg" alt="Charles"/>
        </a>
        <a href="#" class="">
            <img class="inline-block h-10 w-10 rounded-full object-cover ring-2 ring-white" src="/images/person/4.jpg" alt="Jade"/>
        </a>
    </div>
    <span class="px-2 py-1 flex w-36 mt-4 items-center text-xs rounded-md font-semibold text-yellow-500 bg-yellow-100">
        DUE DATE : 18 JUN
    </span>
</div>


<div class="shadow-lg rounded-2xl p-4 bg-white dark:bg-gray-700 w-full">
    <div class="flex items-center justify-between mb-6">
        <div class="flex items-center">
            <span class="rounded-xl relative p-2 bg-blue-100">
                <svg width="25" height="25" viewBox="0 0 2447.6 2452.5" xmlns="http://www.w3.org/2000/svg">
                    <g clip-rule="evenodd" fill-rule="evenodd">
                        <path d="m897.4 0c-135.3.1-244.8 109.9-244.7 245.2-.1 135.3 109.5 245.1 244.8 245.2h244.8v-245.1c.1-135.3-109.5-245.1-244.9-245.3.1 0 .1 0 0 0m0 654h-652.6c-135.3.1-244.9 109.9-244.8 245.2-.2 135.3 109.4 245.1 244.7 245.3h652.7c135.3-.1 244.9-109.9 244.8-245.2.1-135.4-109.5-245.2-244.8-245.3z" fill="#36c5f0">
                        </path>
                        <path d="m2447.6 899.2c.1-135.3-109.5-245.1-244.8-245.2-135.3.1-244.9 109.9-244.8 245.2v245.3h244.8c135.3-.1 244.9-109.9 244.8-245.3zm-652.7 0v-654c.1-135.2-109.4-245-244.7-245.2-135.3.1-244.9 109.9-244.8 245.2v654c-.2 135.3 109.4 245.1 244.7 245.3 135.3-.1 244.9-109.9 244.8-245.3z" fill="#2eb67d">
                        </path>
                        <path d="m1550.1 2452.5c135.3-.1 244.9-109.9 244.8-245.2.1-135.3-109.5-245.1-244.8-245.2h-244.8v245.2c-.1 135.2 109.5 245 244.8 245.2zm0-654.1h652.7c135.3-.1 244.9-109.9 244.8-245.2.2-135.3-109.4-245.1-244.7-245.3h-652.7c-135.3.1-244.9 109.9-244.8 245.2-.1 135.4 109.4 245.2 244.7 245.3z" fill="#ecb22e">
                        </path>
                        <path d="m0 1553.2c-.1 135.3 109.5 245.1 244.8 245.2 135.3-.1 244.9-109.9 244.8-245.2v-245.2h-244.8c-135.3.1-244.9 109.9-244.8 245.2zm652.7 0v654c-.2 135.3 109.4 245.1 244.7 245.3 135.3-.1 244.9-109.9 244.8-245.2v-653.9c.2-135.3-109.4-245.1-244.7-245.3-135.4 0-244.9 109.8-244.8 245.1 0 0 0 .1 0 0" fill="#e01e5a">
                        </path>
                    </g>
                </svg>
            </span>
            <div class="flex flex-col">
                <span class="font-bold text-md text-black dark:text-white ml-2">
                    Slack
                </span>
                <span class="text-sm text-gray-500 dark:text-white ml-2">
                    Slack corporation
                </span>
            </div>
        </div>
        <div class="flex items-center">
            <button class="border p-1 border-gray-200 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 1792 1792">
                    <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
                    </path>
                </svg>
            </button>
            <button class="text-gray-200">
                <svg width="25" height="25" fill="currentColor" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1088 1248v192q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h192q40 0 68 28t28 68zm0-512v192q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h192q40 0 68 28t28 68zm0-512v192q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h192q40 0 68 28t28 68z">
                    </path>
                </svg>
            </button>
        </div>
    </div>
    <div class="flex items-center justify-between mb-4 space-x-12">
        <span class="px-2 py-1 flex items-center font-semibold text-xs rounded-md text-green-700 bg-green-50">
            COMPLETED
        </span>
        <span class="px-2 py-1 flex items-center font-semibold text-xs rounded-md text-green-600 border border-green-600 bg-white">
            MEDIUM PRIORITY
        </span>
    </div>
    <div class="block m-auto">
        <div>
            <span class="text-sm inline-block text-gray-500 dark:text-gray-100">
                Task done :
                <span class="text-gray-700 dark:text-white font-bold">
                    50
                </span>
                /50
            </span>
        </div>
        <div class="w-full h-2 bg-gray-200 rounded-full mt-2">
            <div class="w-full h-full text-center text-xs text-white bg-pink-400 rounded-full">
            </div>
        </div>
    </div>
    <div class="flex items-center justify-start my-4 space-x-4">
        <span class="px-2 py-1 flex items-center text-xs rounded-md font-semibold text-green-500 bg-green-50">
            IOS APP
        </span>
        <span class="px-2 py-1 flex items-center text-xs rounded-md text-yellow-600 font-semibold bg-yellow-200">
            ANDROID
        </span>
    </div>
    <div class="flex -space-x-2">
        <a href="#" class="">
            <img class="inline-block h-10 w-10 rounded-full object-cover ring-2 ring-white" src="/images/person/1.jpg" alt="Guy"/>
        </a>
        <a href="#" class="">
            <img class="inline-block h-10 w-10 rounded-full object-cover ring-2 ring-white" src="/images/person/2.jpeg" alt="Max"/>
        </a>
        <a href="#" class="">
            <img class="inline-block h-10 w-10 rounded-full object-cover ring-2 ring-white" src="/images/person/3.jpg" alt="Charles"/>
        </a>
        <a href="#" class="">
            <img class="inline-block h-10 w-10 rounded-full object-cover ring-2 ring-white" src="/images/person/4.jpg" alt="Jade"/>
        </a>
    </div>
    <span class="px-2 py-1 flex w-36 mt-4 items-center text-xs rounded-md font-semibold text-yellow-500 bg-yellow-100">
        DUE DATE : 18 JUN
    </span>
</div>


<div class="shadow-lg rounded-2xl bg-white dark:bg-gray-700 w-full">
    <div class="flex items-center p-4 justify-between">
        <p class="font-bold text-md text-black dark:text-white">
            Google
        </p>
        <button class="text-sm p-1 text-gray-400 border rounded border-gray-400 mr-4">
            <svg width="15" height="15" fill="currentColor" viewBox="0 0 20 20">
                <g fill="none">
                    <path d="M17.222 8.685a1.5 1.5 0 0 1 0 2.628l-10 5.498A1.5 1.5 0 0 1 5 15.496V4.502a1.5 1.5 0 0 1 2.223-1.314l10 5.497z" fill="currentColor">
                    </path>
                </g>
            </svg>
        </button>
    </div>
    <div class="py-2 px-4 bg-blue-100 dark:bg-gray-800 text-gray-600 border-l-4 border-blue-500 flex items-center justify-between">
        <p class="text-xs flex items-center dark:text-white">
            <svg width="20" height="20" fill="currentColor" class="text-blue-500 mr-2" viewBox="0 0 24 24">
                <g fill="none">
                    <path d="M12 5a8.5 8.5 0 1 1 0 17a8.5 8.5 0 0 1 0-17zm0 3a.75.75 0 0 0-.743.648l-.007.102v4.5l.007.102a.75.75 0 0 0 1.486 0l.007-.102v-4.5l-.007-.102A.75.75 0 0 0 12 8zm7.17-2.877l.082.061l1.149 1a.75.75 0 0 1-.904 1.193l-.081-.061l-1.149-1a.75.75 0 0 1 .903-1.193zM14.25 2.5a.75.75 0 0 1 .102 1.493L14.25 4h-4.5a.75.75 0 0 1-.102-1.493L9.75 2.5h4.5z" fill="currentColor">
                    </path>
                </g>
            </svg>
            Create wireframe
        </p>
        <div class="flex items-center">
            <span class="font-bold text-xs dark:text-gray-200 mr-2 ml-2 md:ml-4">
                25 min 20s
            </span>
            <button class="text-sm p-1 text-gray-400 border rounded bg-blue-500 mr-4">
                <svg width="17" height="17" fill="currentColor" viewBox="0 0 24 24" class="text-white">
                    <g fill="none">
                        <path d="M9 6a1 1 0 0 1 1 1v10a1 1 0 1 1-2 0V7a1 1 0 0 1 1-1zm6 0a1 1 0 0 1 1 1v10a1 1 0 1 1-2 0V7a1 1 0 0 1 1-1z" fill="currentColor">
                        </path>
                    </g>
                </svg>
            </button>
        </div>
    </div>
    <div class="flex items-center p-4 justify-between border-b-2 border-gray-100">
        <p class="font-bold text-md text-black dark:text-white">
            Slack
        </p>
        <button class="text-sm p-1 text-gray-400 border rounded border-gray-400 mr-4">
            <svg width="15" height="15" fill="currentColor" viewBox="0 0 20 20">
                <g fill="none">
                    <path d="M17.222 8.685a1.5 1.5 0 0 1 0 2.628l-10 5.498A1.5 1.5 0 0 1 5 15.496V4.502a1.5 1.5 0 0 1 2.223-1.314l10 5.497z" fill="currentColor">
                    </path>
                </g>
            </svg>
        </button>
    </div>
    <div class="py-2 px-4 text-gray-600 flex items-center justify-between border-b-2 border-gray-100">
        <p class="text-xs flex items-center dark:text-white">
            <svg width="20" height="20" fill="currentColor" class="mr-2" viewBox="0 0 24 24">
                <g fill="none">
                    <path d="M12 5a8.5 8.5 0 1 1 0 17a8.5 8.5 0 0 1 0-17zm0 3a.75.75 0 0 0-.743.648l-.007.102v4.5l.007.102a.75.75 0 0 0 1.486 0l.007-.102v-4.5l-.007-.102A.75.75 0 0 0 12 8zm7.17-2.877l.082.061l1.149 1a.75.75 0 0 1-.904 1.193l-.081-.061l-1.149-1a.75.75 0 0 1 .903-1.193zM14.25 2.5a.75.75 0 0 1 .102 1.493L14.25 4h-4.5a.75.75 0 0 1-.102-1.493L9.75 2.5h4.5z" fill="currentColor">
                    </path>
                </g>
            </svg>
            International
        </p>
        <div class="flex items-center">
            <span class="text-xs text-gray-400 mr-2 ml-2 md:ml-4">
                30 min
            </span>
            <button class="text-sm p-1 text-gray-400 border rounded border-gray-400 mr-4">
                <svg width="15" height="15" fill="currentColor" viewBox="0 0 20 20">
                    <g fill="none">
                        <path d="M17.222 8.685a1.5 1.5 0 0 1 0 2.628l-10 5.498A1.5 1.5 0 0 1 5 15.496V4.502a1.5 1.5 0 0 1 2.223-1.314l10 5.497z" fill="currentColor">
                        </path>
                    </g>
                </svg>
            </button>
        </div>
    </div>
    <div class="py-2 px-4 text-gray-600 flex items-center justify-between border-b-2 border-gray-100">
        <p class="text-xs flex items-center dark:text-white">
            <svg width="20" height="20" fill="currentColor" class="mr-2" viewBox="0 0 24 24">
                <g fill="none">
                    <path d="M12 5a8.5 8.5 0 1 1 0 17a8.5 8.5 0 0 1 0-17zm0 3a.75.75 0 0 0-.743.648l-.007.102v4.5l.007.102a.75.75 0 0 0 1.486 0l.007-.102v-4.5l-.007-.102A.75.75 0 0 0 12 8zm7.17-2.877l.082.061l1.149 1a.75.75 0 0 1-.904 1.193l-.081-.061l-1.149-1a.75.75 0 0 1 .903-1.193zM14.25 2.5a.75.75 0 0 1 .102 1.493L14.25 4h-4.5a.75.75 0 0 1-.102-1.493L9.75 2.5h4.5z" fill="currentColor">
                    </path>
                </g>
            </svg>
            Slack logo design
        </p>
        <div class="flex items-center">
            <span class="text-xs text-gray-400 mr-2 ml-2 md:ml-4">
                30 min
            </span>
            <button class="text-sm p-1 text-gray-400 border rounded border-gray-400 mr-4">
                <svg width="15" height="15" fill="currentColor" viewBox="0 0 20 20">
                    <g fill="none">
                        <path d="M17.222 8.685a1.5 1.5 0 0 1 0 2.628l-10 5.498A1.5 1.5 0 0 1 5 15.496V4.502a1.5 1.5 0 0 1 2.223-1.314l10 5.497z" fill="currentColor">
                        </path>
                    </g>
                </svg>
            </button>
        </div>
    </div>
    <div class="py-2 px-4 text-gray-600 flex items-center justify-between">
        <p class="text-xs flex items-center dark:text-white">
            <svg width="20" height="20" fill="currentColor" class="mr-2" viewBox="0 0 24 24">
                <g fill="none">
                    <path d="M12 5a8.5 8.5 0 1 1 0 17a8.5 8.5 0 0 1 0-17zm0 3a.75.75 0 0 0-.743.648l-.007.102v4.5l.007.102a.75.75 0 0 0 1.486 0l.007-.102v-4.5l-.007-.102A.75.75 0 0 0 12 8zm7.17-2.877l.082.061l1.149 1a.75.75 0 0 1-.904 1.193l-.081-.061l-1.149-1a.75.75 0 0 1 .903-1.193zM14.25 2.5a.75.75 0 0 1 .102 1.493L14.25 4h-4.5a.75.75 0 0 1-.102-1.493L9.75 2.5h4.5z" fill="currentColor">
                    </path>
                </g>
            </svg>
            Dahboard template
        </p>
        <div class="flex items-center">
            <span class="text-xs text-gray-400 mr-2 ml-2 md:ml-4">
                30 min
            </span>
            <button class="text-sm p-1 text-gray-400 border rounded border-gray-400 mr-4">
                <svg width="15" height="15" fill="currentColor" viewBox="0 0 20 20">
                    <g fill="none">
                        <path d="M17.222 8.685a1.5 1.5 0 0 1 0 2.628l-10 5.498A1.5 1.5 0 0 1 5 15.496V4.502a1.5 1.5 0 0 1 2.223-1.314l10 5.497z" fill="currentColor">
                        </path>
                    </g>
                </svg>
            </button>
        </div>
    </div>
</div>


<div class="shadow-lg rounded-2xl bg-white dark:bg-gray-700 w-full">
    <p class="font-bold text-md p-4 text-black dark:text-white">
        My Tasks
        <span class="text-sm text-gray-500 dark:text-gray-300 dark:text-white ml-2">
            (05)
        </span>
    </p>
    <ul>
        <li class="flex items-center text-gray-600 dark:text-gray-200 justify-between py-3 border-b-2 border-gray-100 dark:border-gray-800">
            <div class="flex items-center justify-start text-sm">
                <span class="mx-4">
                    01
                </span>
                <span>
                    Create wireframe
                </span>
            </div>
            <svg width="20" height="20" fill="currentColor" class="mx-4 text-gray-400 dark:text-gray-300" viewBox="0 0 1024 1024">
                <path d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z" fill="currentColor">
                </path>
                <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372z" fill="currentColor">
                </path>
            </svg>
        </li>
        <li class="flex items-center text-gray-600 dark:text-gray-200 justify-between py-3 border-b-2 border-gray-100 dark:border-gray-800">
            <div class="flex items-center justify-start text-sm">
                <span class="mx-4">
                    02
                </span>
                <span>
                    Dashboard design
                </span>
                <span class="lg:ml-6 ml-2 flex items-center text-gray-400 dark:text-gray-300">
                    3
                    <svg width="15" height="15" fill="currentColor" class="ml-1" viewBox="0 0 512 512">
                        <path d="M256 32C114.6 32 0 125.1 0 240c0 47.6 19.9 91.2 52.9 126.3C38 405.7 7 439.1 6.5 439.5c-6.6 7-8.4 17.2-4.6 26S14.4 480 24 480c61.5 0 110-25.7 139.1-46.3C192 442.8 223.2 448 256 448c141.4 0 256-93.1 256-208S397.4 32 256 32zm0 368c-26.7 0-53.1-4.1-78.4-12.1l-22.7-7.2l-19.5 13.8c-14.3 10.1-33.9 21.4-57.5 29c7.3-12.1 14.4-25.7 19.9-40.2l10.6-28.1l-20.6-21.8C69.7 314.1 48 282.2 48 240c0-88.2 93.3-160 208-160s208 71.8 208 160s-93.3 160-208 160z" fill="currentColor">
                        </path>
                    </svg>
                </span>
                <span class="mx-4 flex items-center text-gray-400 dark:text-gray-300">
                    3
                    <svg width="15" height="15" class="ml-1" fill="currentColor" viewBox="0 0 384 512">
                        <path d="M384 144c0-44.2-35.8-80-80-80s-80 35.8-80 80c0 36.4 24.3 67.1 57.5 76.8c-.6 16.1-4.2 28.5-11 36.9c-15.4 19.2-49.3 22.4-85.2 25.7c-28.2 2.6-57.4 5.4-81.3 16.9v-144c32.5-10.2 56-40.5 56-76.3c0-44.2-35.8-80-80-80S0 35.8 0 80c0 35.8 23.5 66.1 56 76.3v199.3C23.5 365.9 0 396.2 0 432c0 44.2 35.8 80 80 80s80-35.8 80-80c0-34-21.2-63.1-51.2-74.6c3.1-5.2 7.8-9.8 14.9-13.4c16.2-8.2 40.4-10.4 66.1-12.8c42.2-3.9 90-8.4 118.2-43.4c14-17.4 21.1-39.8 21.6-67.9c31.6-10.8 54.4-40.7 54.4-75.9zM80 64c8.8 0 16 7.2 16 16s-7.2 16-16 16s-16-7.2-16-16s7.2-16 16-16zm0 384c-8.8 0-16-7.2-16-16s7.2-16 16-16s16 7.2 16 16s-7.2 16-16 16zm224-320c8.8 0 16 7.2 16 16s-7.2 16-16 16s-16-7.2-16-16s7.2-16 16-16z" fill="currentColor">
                        </path>
                    </svg>
                </span>
            </div>
            <svg width="20" height="20" fill="currentColor" class="mx-4 text-gray-400 dark:text-gray-300" viewBox="0 0 1024 1024">
                <path d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z" fill="currentColor">
                </path>
                <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372z" fill="currentColor">
                </path>
            </svg>
        </li>
        <li class="flex items-center text-gray-600 dark:text-gray-200 justify-between py-3 border-b-2 border-gray-100 dark:border-gray-800">
            <div class="flex items-center justify-start text-sm">
                <span class="mx-4">
                    03
                </span>
                <span>
                    Components card
                </span>
                <span class="lg:ml-6 ml-2 flex items-center text-gray-400 dark:text-gray-300">
                    3
                    <svg width="15" height="15" fill="currentColor" class="ml-1" viewBox="0 0 512 512">
                        <path d="M256 32C114.6 32 0 125.1 0 240c0 47.6 19.9 91.2 52.9 126.3C38 405.7 7 439.1 6.5 439.5c-6.6 7-8.4 17.2-4.6 26S14.4 480 24 480c61.5 0 110-25.7 139.1-46.3C192 442.8 223.2 448 256 448c141.4 0 256-93.1 256-208S397.4 32 256 32zm0 368c-26.7 0-53.1-4.1-78.4-12.1l-22.7-7.2l-19.5 13.8c-14.3 10.1-33.9 21.4-57.5 29c7.3-12.1 14.4-25.7 19.9-40.2l10.6-28.1l-20.6-21.8C69.7 314.1 48 282.2 48 240c0-88.2 93.3-160 208-160s208 71.8 208 160s-93.3 160-208 160z" fill="currentColor">
                        </path>
                    </svg>
                </span>
            </div>
            <svg width="20" height="20" fill="currentColor" class="mx-4 text-gray-400 dark:text-gray-300" viewBox="0 0 1024 1024">
                <path d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z" fill="currentColor">
                </path>
                <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372z" fill="currentColor">
                </path>
            </svg>
        </li>
        <li class="flex items-center text-gray-400 justify-between py-3 border-b-2 border-gray-100 dark:border-gray-800">
            <div class="flex items-center justify-start text-sm">
                <span class="mx-4">
                    04
                </span>
                <span class="line-through">
                    Google logo design
                </span>
            </div>
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 1024 1024" class="text-green-500 mx-4">
                <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm193.5 301.7l-210.6 292a31.8 31.8 0 0 1-51.7 0L318.5 484.9c-3.8-5.3 0-12.7 6.5-12.7h46.9c10.2 0 19.9 4.9 25.9 13.3l71.2 98.8l157.2-218c6-8.3 15.6-13.3 25.9-13.3H699c6.5 0 10.3 7.4 6.5 12.7z" fill="currentColor">
                </path>
            </svg>
        </li>
        <li class="flex items-center text-gray-400  justify-between py-3 border-b-2 border-gray-100 dark:border-gray-800">
            <div class="flex items-center justify-start text-sm">
                <span class="mx-4">
                    05
                </span>
                <span class="line-through">
                    Header navigation
                </span>
            </div>
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 1024 1024" class="text-green-500 mx-4">
                <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm193.5 301.7l-210.6 292a31.8 31.8 0 0 1-51.7 0L318.5 484.9c-3.8-5.3 0-12.7 6.5-12.7h46.9c10.2 0 19.9 4.9 25.9 13.3l71.2 98.8l157.2-218c6-8.3 15.6-13.3 25.9-13.3H699c6.5 0 10.3 7.4 6.5 12.7z" fill="currentColor">
                </path>
            </svg>
        </li>
        <li class="flex items-center text-gray-600 dark:text-gray-200 justify-between py-3 border-b-2 border-gray-100 dark:border-gray-800">
            <div class="flex items-center justify-start text-sm">
                <span class="mx-4">
                    06
                </span>
                <span>
                    International
                </span>
                <span class="lg:ml-6 ml-2 flex items-center text-gray-400 dark:text-gray-300">
                    3
                    <svg width="15" height="15" fill="currentColor" class="ml-1" viewBox="0 0 512 512">
                        <path d="M256 32C114.6 32 0 125.1 0 240c0 47.6 19.9 91.2 52.9 126.3C38 405.7 7 439.1 6.5 439.5c-6.6 7-8.4 17.2-4.6 26S14.4 480 24 480c61.5 0 110-25.7 139.1-46.3C192 442.8 223.2 448 256 448c141.4 0 256-93.1 256-208S397.4 32 256 32zm0 368c-26.7 0-53.1-4.1-78.4-12.1l-22.7-7.2l-19.5 13.8c-14.3 10.1-33.9 21.4-57.5 29c7.3-12.1 14.4-25.7 19.9-40.2l10.6-28.1l-20.6-21.8C69.7 314.1 48 282.2 48 240c0-88.2 93.3-160 208-160s208 71.8 208 160s-93.3 160-208 160z" fill="currentColor">
                        </path>
                    </svg>
                </span>
                <span class="mx-4 flex items-center text-gray-400 dark:text-gray-300">
                    3
                    <svg width="15" height="15" class="ml-1" fill="currentColor" viewBox="0 0 384 512">
                        <path d="M384 144c0-44.2-35.8-80-80-80s-80 35.8-80 80c0 36.4 24.3 67.1 57.5 76.8c-.6 16.1-4.2 28.5-11 36.9c-15.4 19.2-49.3 22.4-85.2 25.7c-28.2 2.6-57.4 5.4-81.3 16.9v-144c32.5-10.2 56-40.5 56-76.3c0-44.2-35.8-80-80-80S0 35.8 0 80c0 35.8 23.5 66.1 56 76.3v199.3C23.5 365.9 0 396.2 0 432c0 44.2 35.8 80 80 80s80-35.8 80-80c0-34-21.2-63.1-51.2-74.6c3.1-5.2 7.8-9.8 14.9-13.4c16.2-8.2 40.4-10.4 66.1-12.8c42.2-3.9 90-8.4 118.2-43.4c14-17.4 21.1-39.8 21.6-67.9c31.6-10.8 54.4-40.7 54.4-75.9zM80 64c8.8 0 16 7.2 16 16s-7.2 16-16 16s-16-7.2-16-16s7.2-16 16-16zm0 384c-8.8 0-16-7.2-16-16s7.2-16 16-16s16 7.2 16 16s-7.2 16-16 16zm224-320c8.8 0 16 7.2 16 16s-7.2 16-16 16s-16-7.2-16-16s7.2-16 16-16z" fill="currentColor">
                        </path>
                    </svg>
                </span>
            </div>
            <svg width="20" height="20" fill="currentColor" class="mx-4 text-gray-400 dark:text-gray-300" viewBox="0 0 1024 1024">
                <path d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z" fill="currentColor">
                </path>
                <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372z" fill="currentColor">
                </path>
            </svg>
        </li>
        <li class="flex items-center text-gray-600 dark:text-gray-200 justify-between py-3">
            <div class="flex items-center justify-start text-sm">
                <span class="mx-4">
                    07
                </span>
                <span>
                    Production data
                </span>
            </div>
            <svg width="20" height="20" fill="currentColor" class="mx-4 text-gray-400 dark:text-gray-300" viewBox="0 0 1024 1024">
                <path d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z" fill="currentColor">
                </path>
                <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372z" fill="currentColor">
                </path>
            </svg>
        </li>
    </ul>
</div>



<div class="shadow-lg rounded-2xl p-4 bg-white dark:bg-gray-700 w-full">
    <p class="font-bold text-md text-black dark:text-white">
        Messages
    </p>
    <ul>
        <li class="flex items-center my-6 space-x-2">
            <a href="#" class="block relative">
                <img alt="profil" src="/images/person/1.jpg" class="mx-auto object-cover rounded-full h-10 w-10 "/>
            </a>
            <div class="flex flex-col">
                <span class="text-sm text-gray-900 font-semibold dark:text-white ml-2">
                    Charlie Rabiller
                </span>
                <span class="text-sm text-gray-400 dark:text-gray-300 ml-2">
                    Hey John ! Do you read the NextJS doc ?
                </span>
            </div>
        </li>
        <li class="flex items-center my-6 space-x-2">
            <a href="#" class="block relative">
                <img alt="profil" src="/images/person/5.jpg" class="mx-auto object-cover rounded-full h-10 w-10 "/>
            </a>
            <div class="flex flex-col">
                <span class="text-sm text-gray-900 font-semibold dark:text-white ml-2">
                    Marie Lou
                </span>
                <span class="text-sm text-gray-400 dark:text-gray-300 ml-2">
                    No I think the dog is better...
                </span>
            </div>
        </li>
        <li class="flex items-center my-6 space-x-2">
            <a href="#" class="block relative">
                <img alt="profil" src="/images/person/6.jpg" class="mx-auto object-cover rounded-full h-10 w-10 "/>
            </a>
            <div class="flex flex-col">
                <span class="text-sm text-gray-900 font-semibold dark:text-white ml-2">
                    Ivan Buck
                </span>
                <span class="text-sm text-gray-400 dark:text-gray-300 ml-2">
                    Seriously ? haha Bob is not a child !
                </span>
            </div>
        </li>
        <li class="flex items-center my-6 space-x-2">
            <a href="#" class="block relative">
                <img alt="profil" src="/images/person/7.jpg" class="mx-auto object-cover rounded-full h-10 w-10 "/>
            </a>
            <div class="flex flex-col">
                <span class="text-sm text-gray-900 font-semibold dark:text-white ml-2">
                    Marina Farga
                </span>
                <span class="text-sm text-gray-400 dark:text-gray-300 ml-2">
                    Do you need that design ?
                </span>
            </div>
        </li>
    </ul>
</div>


<div class="shadow-lg rounded-xl w-full md:w-80 p-4 bg-white dark:bg-gray-800 relative overflow-hidden">
    <div class="w-full flex items-center justify-between mb-8">
        <p class="text-gray-800 dark:text-white text-xl font-normal">
            Activity
        </p>
        <a href="#" class="flex items-center text-sm hover:text-gray-600 dark:text-gray-50 dark:hover:text-white text-gray-300 border-0 focus:outline-none">
            VIEW ALL
        </a>
    </div>
    <div class="flex items-start mb-6 rounded justify-between">
        <span class="rounded-full text-white dark:text-gray-800 p-2 bg-yellow-300">
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1596 380q28 28 48 76t20 88v1152q0 40-28 68t-68 28h-1344q-40 0-68-28t-28-68v-1600q0-40 28-68t68-28h896q40 0 88 20t76 48zm-444-244v376h376q-10-29-22-41l-313-313q-12-12-41-22zm384 1528v-1024h-416q-40 0-68-28t-28-68v-416h-768v1536h1280zm-128-448v320h-1024v-192l192-192 128 128 384-384zm-832-192q-80 0-136-56t-56-136 56-136 136-56 136 56 56 136-56 136-136 56z">
                </path>
            </svg>
        </span>
        <div class="flex items-center w-full justify-between">
            <div class="flex text-sm flex-col w-full ml-2 items-start justify-between">
                <p class="text-gray-700 dark:text-white">
                    <span class="font-bold mr-1">
                        Andrea
                    </span>
                    uploaded 3 documents on concept deisgn home page
                </p>
                <p class="text-gray-300">
                    Aug 10
                </p>
            </div>
        </div>
    </div>
    <div class="flex items-start mb-6 rounded justify-between">
        <span class="rounded-full text-white dark:text-gray-800 p-2 bg-green-400">
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1520 1216q0-40-28-68l-208-208q-28-28-68-28-42 0-72 32 3 3 19 18.5t21.5 21.5 15 19 13 25.5 3.5 27.5q0 40-28 68t-68 28q-15 0-27.5-3.5t-25.5-13-19-15-21.5-21.5-18.5-19q-33 31-33 73 0 40 28 68l206 207q27 27 68 27 40 0 68-26l147-146q28-28 28-67zm-703-705q0-40-28-68l-206-207q-28-28-68-28-39 0-68 27l-147 146q-28 28-28 67 0 40 28 68l208 208q27 27 68 27 42 0 72-31-3-3-19-18.5t-21.5-21.5-15-19-13-25.5-3.5-27.5q0-40 28-68t68-28q15 0 27.5 3.5t25.5 13 19 15 21.5 21.5 18.5 19q33-31 33-73zm895 705q0 120-85 203l-147 146q-83 83-203 83-121 0-204-85l-206-207q-83-83-83-203 0-123 88-209l-88-88q-86 88-208 88-120 0-204-84l-208-208q-84-84-84-204t85-203l147-146q83-83 203-83 121 0 204 85l206 207q83 83 83 203 0 123-88 209l88 88q86-88 208-88 120 0 204 84l208 208q84 84 84 204z">
                </path>
            </svg>
        </span>
        <div class="flex items-center w-full justify-between">
            <div class="flex text-sm flex-col w-full ml-2 items-start justify-between">
                <p class="text-gray-700 dark:text-white">
                    <span class="font-bold mr-1">
                        Karen
                    </span>
                    leave some comments on concept deisgn support page
                </p>
                <p class="text-gray-300">
                    Aug 10
                </p>
            </div>
        </div>
    </div>
    <div class="flex items-start mb-6 rounded justify-between">
        <span class="rounded-full text-white dark:text-gray-800 p-2 bg-indigo-400">
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1520 1216q0-40-28-68l-208-208q-28-28-68-28-42 0-72 32 3 3 19 18.5t21.5 21.5 15 19 13 25.5 3.5 27.5q0 40-28 68t-68 28q-15 0-27.5-3.5t-25.5-13-19-15-21.5-21.5-18.5-19q-33 31-33 73 0 40 28 68l206 207q27 27 68 27 40 0 68-26l147-146q28-28 28-67zm-703-705q0-40-28-68l-206-207q-28-28-68-28-39 0-68 27l-147 146q-28 28-28 67 0 40 28 68l208 208q27 27 68 27 42 0 72-31-3-3-19-18.5t-21.5-21.5-15-19-13-25.5-3.5-27.5q0-40 28-68t68-28q15 0 27.5 3.5t25.5 13 19 15 21.5 21.5 18.5 19q33-31 33-73zm895 705q0 120-85 203l-147 146q-83 83-203 83-121 0-204-85l-206-207q-83-83-83-203 0-123 88-209l-88-88q-86 88-208 88-120 0-204-84l-208-208q-84-84-84-204t85-203l147-146q83-83 203-83 121 0 204 85l206 207q83 83 83 203 0 123-88 209l88 88q86-88 208-88 120 0 204 84l208 208q84 84 84 204z">
                </path>
            </svg>
        </span>
        <div class="flex items-center w-full justify-between">
            <div class="flex text-sm flex-col w-full ml-2 items-start justify-between">
                <p class="text-gray-700 dark:text-white">
                    <span class="font-bold mr-1">
                        Karen
                    </span>
                    change project description to &quot;SubMarine protection project&quot;
                </p>
                <p class="text-gray-300">
                    Aug 09
                </p>
            </div>
        </div>
    </div>
    <div class="flex items-start rounded justify-between">
        <span class="rounded-full text-white dark:text-gray-800 p-2 bg-yellow-300">
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1596 380q28 28 48 76t20 88v1152q0 40-28 68t-68 28h-1344q-40 0-68-28t-28-68v-1600q0-40 28-68t68-28h896q40 0 88 20t76 48zm-444-244v376h376q-10-29-22-41l-313-313q-12-12-41-22zm384 1528v-1024h-416q-40 0-68-28t-28-68v-416h-768v1536h1280zm-128-448v320h-1024v-192l192-192 128 128 384-384zm-832-192q-80 0-136-56t-56-136 56-136 136-56 136 56 56 136-56 136-136 56z">
                </path>
            </svg>
        </span>
        <div class="flex items-center w-full justify-between">
            <div class="flex text-sm flex-col w-full ml-2 items-start justify-between">
                <p class="text-gray-700 dark:text-white">
                    <span class="font-bold mr-1">
                        John
                    </span>
                    uploaded 17 pictures on concept deisgn galery page
                </p>
                <p class="text-gray-300">
                    Aug 1
                </p>
            </div>
        </div>
    </div>
</div>



<div class="shadow-lg rounded-xl w-full max-w-xs p-6 bg-white dark:bg-gray-800 overflow-hidden">
    <div class="flex flex-col md:flex-row items-center justify-between">
        <div class="flex items-center justify-start w-full flex-grow">
            <a href="#" class="block relative">
                <img alt="profil" src="/images/person/1.jpg" class="mx-auto object-cover rounded-full h-10 w-10 "/>
            </a>
            <div class="flex flex-col items-start ml-4">
                <span class="dark:text-white text-gray-700">
                    Charlie Rabiller
                </span>
                <span class="text-gray-400 font-light text-sm dark:text-gray-300">
                    Updated 3 min ago
                </span>
            </div>
        </div>
        <div class="flex-none hidden md:block ">
            <span class="w-full px-3 py-1 text-sm rounded-full text-white bg-blue-500">
                Design
            </span>
        </div>
    </div>
    <p class="text-gray-800 dark:text-white text-lg mt-4 mb-2">
        Need a designer to form branding for my business.
    </p>
    <p class="text-gray-400 font-normal text-sm">
        Looking for a talented brand designer to create all the branding materials for my new startup. This should be a long term project and my hope I hight on the person whom I would like to hire.
    </p>
    <div class="flex items-center rounded justify-between p-2 bg-blue-100 my-6">
        <div class="flex items-start w-full justify-between">
            <p class="flex-grow w-full text-2xl text-gray-700">
                <span class="text-gray-400 font-light text-md">
                    $
                </span>
                4,500
                <span class="text-sm font-light text-gray-400">
                    /Month
                </span>
            </p>
            <span class="px-3 py-1 flex-none text-sm rounded-full text-indigo-500 border border-indigo-500">
                Full time
            </span>
        </div>
    </div>
    <button type="button" class="py-2 px-4  bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
        Apply for this Job
    </button>
</div>


<div class="p-4 bg-white shadow-xl max-w-xl rounded-xl flex justify-start dark:bg-gray-800 md:flex-row flex-col gap-4">
    <div class="relative">
        <img src="/images/landscape/1.jpg" class="rounded-xl w-full md:w-auto md:max-h-40"/>
        <span class="px-2 py-1 text-white bg-gray-700 text-xs rounded absolute right-2 bottom-2 bg-opacity-50">
            7 min
        </span>
    </div>
    <div class="flex flex-col justify-between">
        <div class="flex items-start justify-between text-gray-700 dark:text-white my-2 md:m-0">
            <p class="text-xl leading-5">
                How to travel arround the world without any money
            </p>
            <button class="text-red-400 hover:text-red-600">
                <svg width="25" height="25" fill="currentColor" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1664 596q0-81-21.5-143t-55-98.5-81.5-59.5-94-31-98-8-112 25.5-110.5 64-86.5 72-60 61.5q-18 22-49 22t-49-22q-24-28-60-61.5t-86.5-72-110.5-64-112-25.5-98 8-94 31-81.5 59.5-55 98.5-21.5 143q0 168 187 355l581 560 580-559q188-188 188-356zm128 0q0 221-229 450l-623 600q-18 18-44 18t-44-18l-624-602q-10-8-27.5-26t-55.5-65.5-68-97.5-53.5-121-23.5-138q0-220 127-344t351-124q62 0 126.5 21.5t120 58 95.5 68.5 76 68q36-36 76-68t95.5-68.5 120-58 126.5-21.5q224 0 351 124t127 344z">
                    </path>
                </svg>
            </button>
        </div>
        <div class="flex items-center text-gray-500 dark:text-gray-400 text-xs my-2 md:m-0">
            <svg width="10" height="10" fill="currentColor" class="mr-2" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1664 960q-152-236-381-353 61 104 61 225 0 185-131.5 316.5t-316.5 131.5-316.5-131.5-131.5-316.5q0-121 61-225-229 117-381 353 133 205 333.5 326.5t434.5 121.5 434.5-121.5 333.5-326.5zm-720-384q0-20-14-34t-34-14q-125 0-214.5 89.5t-89.5 214.5q0 20 14 34t34 14 34-14 14-34q0-86 61-147t147-61q20 0 34-14t14-34zm848 384q0 34-20 69-140 230-376.5 368.5t-499.5 138.5-499.5-139-376.5-368q-20-35-20-69t20-69q140-229 376.5-368t499.5-139 499.5 139 376.5 368q20 35 20 69z">
                </path>
            </svg>
            123,344,893 views
            <svg width="10" height="10" fill="currentColor" class="ml-6 mr-2" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M896 1664q-26 0-44-18l-624-602q-10-8-27.5-26t-55.5-65.5-68-97.5-53.5-121-23.5-138q0-220 127-344t351-124q62 0 126.5 21.5t120 58 95.5 68.5 76 68q36-36 76-68t95.5-68.5 120-58 126.5-21.5q224 0 351 124t127 344q0 221-229 450l-623 600q-18 18-44 18z">
                </path>
            </svg>
            45 876 likes
        </div>
        <div class="flex items-start my-2 md:m-0">
            <div class="relative">
                <a href="#" class="block relative">
                    <img alt="profil" src="/images/person/1.jpg" class="mx-auto object-cover rounded-full h-10 w-10 "/>
                </a>
                <svg width="10" height="10" fill="currentColor" class="fill-current text-white bg-blue-600 rounded-full p-1 absolute bottom-0 right-0 w-4 h-4 -mx-1 -my-1" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z">
                    </path>
                </svg>
            </div>
            <div class="flex flex-col items-start justify-center ml-2">
                <span class="text-gray-600 dark:text-gray-200 text-sm flex items-center">
                    Charlie Rabiller
                    <span class="w-2 h-2 block bg-green-500 rounded-full ml-1">
                    </span>
                </span>
                <span class="text-gray-400 text-xs">
                    1 week ago
                </span>
            </div>
        </div>
    </div>
</div>



<div class="overflow-hidden shadow-lg rounded-2xl h-90 w-64  m-auto">
    <img alt="eggs" src="/images/car/1.jpg" class="rounded-t-lg"/>
    <div class="bg-white w-full p-4 relative">
        <button aria-label="Go to article" type="button" class="absolute rounded-full bg-indigo-500 text-white w-12 h-12 right-8 -top-6">
            <svg width="20" height="20" fill="currentColor" class="h-6 w-6 text-white mx-auto" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M491 1536l91-91-235-235-91 91v107h128v128h107zm523-928q0-22-22-22-10 0-17 7l-542 542q-7 7-7 17 0 22 22 22 10 0 17-7l542-542q7-7 7-17zm-54-192l416 416-832 832h-416v-416zm683 96q0 53-37 90l-166 166-416-416 166-165q36-38 90-38 53 0 91 38l235 234q37 39 37 91z">
                </path>
            </svg>
        </button>
        <p class="text-gray-800 text-xl font-medium mb-2">
            Templates
        </p>
        <p class="text-gray-600 text-xs">
            Improve UI with beautiful templates and components for Tailwind css.
        </p>
        <div class="flex flex-wrap justify-starts items-center mt-6">
            <div class="text-xs mb-2 mr-2 py-1.5 px-4 text-gray-600 bg-purple-200 rounded-2xl">
                #css
            </div>
            <div class="text-xs mb-2 mr-2 py-1.5 px-4 text-gray-600 bg-purple-200 rounded-2xl">
                #tailwind
            </div>
            <div class="text-xs mb-2 py-1.5 px-4 text-gray-600 bg-purple-200 rounded-2xl">
                #components
            </div>
        </div>
    </div>
</div>



<div class="shadow-lg rounded-2xl p-4 bg-gray-900 w-64 m-auto relative">
    <div class="w-full h-full text-center">
        <div class="flex h-full flex-col justify-between">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="mt-4 w-20 h-20 m-auto text-white dark:text-white" viewBox="0 0 2048 1792">
                <path d="M1920 768q53 0 90.5 37.5t37.5 90.5-37.5 90.5-90.5 37.5h-15l-115 662q-8 46-44 76t-82 30h-1280q-46 0-82-30t-44-76l-115-662h-15q-53 0-90.5-37.5t-37.5-90.5 37.5-90.5 90.5-37.5h1792zm-1435 800q26-2 43.5-22.5t15.5-46.5l-32-416q-2-26-22.5-43.5t-46.5-15.5-43.5 22.5-15.5 46.5l32 416q2 25 20.5 42t43.5 17h5zm411-64v-416q0-26-19-45t-45-19-45 19-19 45v416q0 26 19 45t45 19 45-19 19-45zm384 0v-416q0-26-19-45t-45-19-45 19-19 45v416q0 26 19 45t45 19 45-19 19-45zm352 5l32-416q2-26-15.5-46.5t-43.5-22.5-46.5 15.5-22.5 43.5l-32 416q-2 26 15.5 46.5t43.5 22.5h5q25 0 43.5-17t20.5-42zm-1156-1217l-93 412h-132l101-441q19-88 89-143.5t160-55.5h167q0-26 19-45t45-19h384q26 0 45 19t19 45h167q90 0 160 55.5t89 143.5l101 441h-132l-93-412q-11-44-45.5-72t-79.5-28h-167q0 26-19 45t-45 19h-384q-26 0-45-19t-19-45h-167q-45 0-79.5 28t-45.5 72z">
                </path>
            </svg>
            <p class="absolute text-sm italic text-white top-2 right-2">
                by express
            </p>
            <p class="text-white text-lg mt-4">
                Package delivered
            </p>
            <p class="text-gray-50 text-xs font-thin py-2 px-6">
                Your package was delivered in 1 day and 4 hours by our postal partner
            </p>
        </div>
    </div>
</div>



<div class="shadow-lg rounded-2xl w-64 p-4 bg-white flex justify-between items-center">
    <div class="w-2/6">
        <img src="/images/person/2.jpeg" alt="person" class="h-12 w-12 rounded-full"/>
    </div>
    <div class="w-3/6">
        <p class="text-gray-500 text-sm">
            You have
            <span class="text-indigo-500 font-bold">
                2
            </span>
            new messages
        </p>
    </div>
    <div class="w-1/6 text-right">
        <svg width="20" height="20" fill="currentColor" viewBox="0 0 1792 1792" class="text-indigo-500 h-6 w-6" xmlns="http://www.w3.org/2000/svg">
            <path d="M1792 710v794q0 66-47 113t-113 47h-1472q-66 0-113-47t-47-113v-794q44 49 101 87 362 246 497 345 57 42 92.5 65.5t94.5 48 110 24.5h2q51 0 110-24.5t94.5-48 92.5-65.5q170-123 498-345 57-39 100-87zm0-294q0 79-49 151t-122 123q-376 261-468 325-10 7-42.5 30.5t-54 38-52 32.5-57.5 27-50 9h-2q-23 0-50-9t-57.5-27-52-32.5-54-38-42.5-30.5q-91-64-262-182.5t-205-142.5q-62-42-117-115.5t-55-136.5q0-78 41.5-130t118.5-52h1472q65 0 112.5 47t47.5 113z">
            </path>
        </svg>
    </div>
</div>



    <div class="flex flex-col max-w-lg p-6 space-y-6 overflow-hidden rounded-lg shadow-md dark:bg-gray-900 dark:text-gray-100">
	<div class="flex space-x-4">
		<img alt="" src="https://source.unsplash.com/100x100/?portrait" class="object-cover w-12 h-12 rounded-full shadow dark:bg-gray-500">
		<div class="flex flex-col space-y-1">
			<a rel="noopener noreferrer" href="#" class="text-sm font-semibold">Leroy Jenkins</a>
			<span class="text-xs dark:text-gray-400">4 hours ago</span>
		</div>
	</div>
	<div>
		<img src="https://source.unsplash.com/random/100x100/?5" alt="" class="object-cover w-full mb-4 h-60 sm:h-96 dark:bg-gray-500">
		<h2 class="mb-1 text-xl font-semibold">Nam cu platonem posidonium sanctus debitis te</h2>
		<p class="text-sm dark:text-gray-400">Eu qualisque aliquando mel, id lorem detraxit nec, ad elit minimum pri. Illum ipsum detracto ne cum. Mundi nemore te ius, vim ad illud atqui apeirian...</p>
	</div>
	<div class="flex flex-wrap justify-between">
		<div class="space-x-2">
			<button aria-label="Share this post" type="button" class="p-2 text-center">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4 fill-current dark:text-violet-400">
					<path d="M404,344a75.9,75.9,0,0,0-60.208,29.7L179.869,280.664a75.693,75.693,0,0,0,0-49.328L343.792,138.3a75.937,75.937,0,1,0-13.776-28.976L163.3,203.946a76,76,0,1,0,0,104.108l166.717,94.623A75.991,75.991,0,1,0,404,344Zm0-296a44,44,0,1,1-44,44A44.049,44.049,0,0,1,404,48ZM108,300a44,44,0,1,1,44-44A44.049,44.049,0,0,1,108,300ZM404,464a44,44,0,1,1,44-44A44.049,44.049,0,0,1,404,464Z"></path>
				</svg>
			</button>
			<button aria-label="Bookmark this post" type="button" class="p-2">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4 fill-current dark:text-violet-400">
					<path d="M424,496H388.75L256.008,381.19,123.467,496H88V16H424ZM120,48V456.667l135.992-117.8L392,456.5V48Z"></path>
				</svg>
			</button>
		</div>
		<div class="flex space-x-2 text-sm dark:text-gray-400">
			<button type="button" class="flex items-center p-1 space-x-1.5">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" aria-label="Number of comments" class="w-4 h-4 fill-current dark:text-violet-400">
					<path d="M448.205,392.507c30.519-27.2,47.8-63.455,47.8-101.078,0-39.984-18.718-77.378-52.707-105.3C410.218,158.963,366.432,144,320,144s-90.218,14.963-123.293,42.131C162.718,214.051,144,251.445,144,291.429s18.718,77.378,52.707,105.3c33.075,27.168,76.861,42.13,123.293,42.13,6.187,0,12.412-.273,18.585-.816l10.546,9.141A199.849,199.849,0,0,0,480,496h16V461.943l-4.686-4.685A199.17,199.17,0,0,1,448.205,392.507ZM370.089,423l-21.161-18.341-7.056.865A180.275,180.275,0,0,1,320,406.857c-79.4,0-144-51.781-144-115.428S240.6,176,320,176s144,51.781,144,115.429c0,31.71-15.82,61.314-44.546,83.358l-9.215,7.071,4.252,12.035a231.287,231.287,0,0,0,37.882,67.817A167.839,167.839,0,0,1,370.089,423Z"></path>
					<path d="M60.185,317.476a220.491,220.491,0,0,0,34.808-63.023l4.22-11.975-9.207-7.066C62.918,214.626,48,186.728,48,156.857,48,96.833,109.009,48,184,48c55.168,0,102.767,26.43,124.077,64.3,3.957-.192,7.931-.3,11.923-.3q12.027,0,23.834,1.167c-8.235-21.335-22.537-40.811-42.2-56.961C270.072,30.279,228.3,16,184,16S97.928,30.279,66.364,56.206C33.886,82.885,16,118.63,16,156.857c0,35.8,16.352,70.295,45.25,96.243a188.4,188.4,0,0,1-40.563,60.729L16,318.515V352H32a190.643,190.643,0,0,0,85.231-20.125,157.3,157.3,0,0,1-5.071-33.645A158.729,158.729,0,0,1,60.185,317.476Z"></path>
				</svg>
				<span>30</span>
			</button>
			<button type="button" class="flex items-center p-1 space-x-1.5">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" aria-label="Number of likes" class="w-4 h-4 fill-current dark:text-violet-400">
					<path d="M126.638,202.672H51.986a24.692,24.692,0,0,0-24.242,19.434,487.088,487.088,0,0,0-1.466,206.535l1.5,7.189a24.94,24.94,0,0,0,24.318,19.78h74.547a24.866,24.866,0,0,0,24.837-24.838V227.509A24.865,24.865,0,0,0,126.638,202.672ZM119.475,423.61H57.916l-.309-1.487a455.085,455.085,0,0,1,.158-187.451h61.71Z"></path>
					<path d="M494.459,277.284l-22.09-58.906a24.315,24.315,0,0,0-22.662-15.706H332V173.137l9.573-21.2A88.117,88.117,0,0,0,296.772,35.025a24.3,24.3,0,0,0-31.767,12.1L184.693,222.937V248h23.731L290.7,67.882a56.141,56.141,0,0,1,21.711,70.885l-10.991,24.341L300,169.692v48.98l16,16H444.3L464,287.2v9.272L396.012,415.962H271.07l-86.377-50.67v37.1L256.7,444.633a24.222,24.222,0,0,0,12.25,3.329h131.6a24.246,24.246,0,0,0,21.035-12.234L492.835,310.5A24.26,24.26,0,0,0,496,298.531V285.783A24.144,24.144,0,0,0,494.459,277.284Z"></path>
				</svg>
				<span>283</span>
			</button>
		</div>
	</div>
</div>
<div class="rounded-md shadow-md sm:w-96 dark:bg-gray-900 dark:text-gray-100">
	<div class="flex items-center justify-between p-3">
		<div class="flex items-center space-x-2">
			<img src="https://source.unsplash.com/50x50/?portrait" alt="" class="object-cover object-center w-8 h-8 rounded-full shadow-sm dark:bg-gray-500 dark:border-gray-700">
			<div class="-space-y-1">
				<h2 class="text-sm font-semibold leading-none">leroy_jenkins72</h2>
				<span class="inline-block text-xs leading-none dark:text-gray-400">Somewhere</span>
			</div>
		</div>
		<button title="Open options" type="button">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5 fill-current">
				<path d="M256,144a64,64,0,1,0-64-64A64.072,64.072,0,0,0,256,144Zm0-96a32,32,0,1,1-32,32A32.036,32.036,0,0,1,256,48Z"></path>
				<path d="M256,368a64,64,0,1,0,64,64A64.072,64.072,0,0,0,256,368Zm0,96a32,32,0,1,1,32-32A32.036,32.036,0,0,1,256,464Z"></path>
				<path d="M256,192a64,64,0,1,0,64,64A64.072,64.072,0,0,0,256,192Zm0,96a32,32,0,1,1,32-32A32.036,32.036,0,0,1,256,288Z"></path>
			</svg>
		</button>
	</div>
	<img src="https://source.unsplash.com/301x301/?random" alt="" class="object-cover object-center w-full h-72 dark:bg-gray-500">
	<div class="p-3">
		<div class="flex items-center justify-between">
			<div class="flex items-center space-x-3">
				<button type="button" title="Like post" class="flex items-center justify-center">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5 fill-current">
						<path d="M453.122,79.012a128,128,0,0,0-181.087.068l-15.511,15.7L241.142,79.114l-.1-.1a128,128,0,0,0-181.02,0l-6.91,6.91a128,128,0,0,0,0,181.019L235.485,449.314l20.595,21.578.491-.492.533.533L276.4,450.574,460.032,266.94a128.147,128.147,0,0,0,0-181.019ZM437.4,244.313,256.571,425.146,75.738,244.313a96,96,0,0,1,0-135.764l6.911-6.91a96,96,0,0,1,135.713-.051l38.093,38.787,38.274-38.736a96,96,0,0,1,135.765,0l6.91,6.909A96.11,96.11,0,0,1,437.4,244.313Z"></path>
					</svg>
				</button>
				<button type="button" title="Add a comment" class="flex items-center justify-center">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5 fill-current">
						<path d="M496,496H480a273.39,273.39,0,0,1-179.025-66.782l-16.827-14.584C274.814,415.542,265.376,416,256,416c-63.527,0-123.385-20.431-168.548-57.529C41.375,320.623,16,270.025,16,216S41.375,111.377,87.452,73.529C132.615,36.431,192.473,16,256,16S379.385,36.431,424.548,73.529C470.625,111.377,496,161.975,496,216a171.161,171.161,0,0,1-21.077,82.151,201.505,201.505,0,0,1-47.065,57.537,285.22,285.22,0,0,0,63.455,97L496,457.373ZM294.456,381.222l27.477,23.814a241.379,241.379,0,0,0,135,57.86,317.5,317.5,0,0,1-62.617-105.583v0l-4.395-12.463,9.209-7.068C440.963,305.678,464,262.429,464,216c0-92.636-93.309-168-208-168S48,123.364,48,216s93.309,168,208,168a259.114,259.114,0,0,0,31.4-1.913Z"></path>
					</svg>
				</button>
				<button type="button" title="Share post" class="flex items-center justify-center">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5 fill-current">
						<path d="M474.444,19.857a20.336,20.336,0,0,0-21.592-2.781L33.737,213.8v38.066l176.037,70.414L322.69,496h38.074l120.3-455.4A20.342,20.342,0,0,0,474.444,19.857ZM337.257,459.693,240.2,310.37,389.553,146.788l-23.631-21.576L215.4,290.069,70.257,232.012,443.7,56.72Z"></path>
					</svg>
				</button>
			</div>
			<button type="button" title="Bookmark post" class="flex items-center justify-center">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5 fill-current">
					<path d="M424,496H388.75L256.008,381.19,123.467,496H88V16H424ZM120,48V456.667l135.992-117.8L392,456.5V48Z"></path>
				</svg>
			</button>
		</div>
		<div class="flex flex-wrap items-center pt-3 pb-1">
			<div class="flex items-center space-x-2">
				<div class="flex -space-x-1">
					<img alt="" class="w-5 h-5 border rounded-full dark:bg-gray-500 dark:border-gray-800" src="https://source.unsplash.com/40x40/?portrait?1">
					<img alt="" class="w-5 h-5 border rounded-full dark:bg-gray-500 dark:border-gray-800" src="https://source.unsplash.com/40x40/?portrait?2">
					<img alt="" class="w-5 h-5 border rounded-full dark:bg-gray-500 dark:border-gray-800" src="https://source.unsplash.com/40x40/?portrait?3">
				</div>
				<span class="text-sm">Liked by
					<span class="font-semibold">Mamba UI</span>and
					<span class="font-semibold">86 others</span>
				</span>
			</div>
		</div>
		<div class="space-y-3">
			<p class="text-sm">
				<span class="text-base font-semibold">leroy_jenkins72</span>Nemo ea quasi debitis impedit!
			</p>
			<input type="text" placeholder="Add a comment..." class="w-full py-0.5 dark:bg-transparent border-none rounded text-sm pl-0 dark:text-gray-100">
		</div>
	</div>
</div>
<div class="flex flex-col items-center justify-center h-screen bg-gray-100 sm:flex-row">
    <div class="p-4 sm:w-1/2 lg:w-1/3">
        <div class="flex flex-col overflow-hidden transition duration-500 ease-in-out transform bg-white rounded-lg shadow-2xl hover:scale-105">
            <img class="h-56 rounded-t-lg" alt="article image"
                src="https://images.unsplash.com/photo-1472437774355-71ab6752b434?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=967&amp;q=80">
            <div class="px-6 pt-4 mb-2 text-xl font-bold">
                <span>Introduction to HTML</span>
            </div>
            <div class="px-6 pt-2">
                <small>John Doe | 2020-10-06</small>
                <div class="overflow-hidden h-16 ...">HTML Introduction for beginner.</div>
            </div>
            <div class="px-6 pb-4">
                <a href="#"
                    class="inline-block px-3 py-1 my-1 mr-2 text-sm font-semibold text-white bg-teal-400 rounded-full">#HTML</a>
                <a href="#"
                    class="inline-block px-3 py-1 my-1 mr-2 text-sm font-semibold text-white bg-teal-400 rounded-full">#CSS</a>
                <a href="#"
                    class="inline-block px-3 py-1 my-1 mr-2 text-sm font-semibold text-white bg-teal-400 rounded-full">#Web</a>
            </div>
        </div>
    </div>
    <div class="p-4 sm:w-1/2 lg:w-1/3">
        <div class="flex flex-col overflow-hidden transition duration-500 ease-in-out transform bg-white rounded-lg shadow-2xl hover:scale-105">
            <img class="h-56 rounded-t-lg" alt="article image"
                src="https://images.unsplash.com/photo-1593720219276-0b1eacd0aef4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1343&q=80">
            <div class="px-6 pt-4 mb-2 text-xl font-bold">
                <span>Introduction to HTML</span>
            </div>
            <div class="px-6 pt-2">
                <small>John Doe | 2020-10-06</small>
                <div class="overflow-hidden h-16 ...">HTML Introduction for beginner.</div>
            </div>
            <div class="px-6 pb-4">
                <a href="#"
                    class="inline-block px-3 py-1 my-1 mr-2 text-sm font-semibold text-white bg-teal-400 rounded-full">#HTML</a>
                <a href="#"
                    class="inline-block px-3 py-1 my-1 mr-2 text-sm font-semibold text-white bg-teal-400 rounded-full">#CSS</a>
                <a href="#"
                    class="inline-block px-3 py-1 my-1 mr-2 text-sm font-semibold text-white bg-teal-400 rounded-full">#Web</a>
            </div>
        </div>
    </div>
</div>
<div class="min-h-screen bg-white">
    <div class="p-12 text-center">
        <h1 class="text-2xl font-bold text-pink-700 ">Our featured blogs</h1>
        <p class="text-sm text-purple-700">have a look at our most popular blogs specially picked up for you</p>
    </div>
    <div class="lg:flex lg:justify-around lg:items-center">
        <div class="m-6">
            <div class="max-w-xl m-auto bg-gray-100 rounded-lg shadow-sm ">

                <div>
                    <div class="py-4 mx-8 text-3xl sm:flex sm:items-center">
                        <svg class="" xmlns="http://www.w3.org/2000/svg" width="64" height="64">
                            <defs>
                                <linearGradient x1="0" y1="-21.333" y2="85.333" id="A" x2="64"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#6b46c1" offset="0%" />
                                    <stop stop-color="#b83280" offset="100%" />
                                </linearGradient>
                            </defs>
                            <path
                                d="M16 25.6c2.133-8.533 7.467-12.8 16-12.8 12.8 0 14.4 9.6 20.8 11.2 4.267 1.067 8-.533 11.2-4.8C61.867 27.733 56.533 32 48 32c-12.8 0-14.4-9.6-20.8-11.2-4.267-1.067-8 .533-11.2 4.8zM0 44.8C2.133 36.267 7.467 32 16 32c12.8 0 14.4 9.6 20.8 11.2 4.267 1.067 8-.533 11.2-4.8-2.133 8.533-7.467 12.8-16 12.8-12.8 0-14.4-9.6-20.8-11.2-4.267-1.067-8 .533-11.2 4.8z"
                                fill="url(#A)" fill-rule="evenodd" />
                        </svg>
                        <h1 class="p-4 text-pink-700">Getting Started with Tailwindcss</h1>
                    </div>
                    <div>
                        <p class="px-8 pb-4 text-justify text-purple-700">Lorem ipsum dolor sit amet, consectetur
                            adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim
                            veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.
                            Duis
                            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur.</p>
                    </div>
                </div>
                <div class="relative">
                    <div class="relative h-16 bg-gray-100">
                        <h1
                            class="absolute bottom-0 right-0 m-8 text-purple-700 cursor-pointer text-md hover:text-pink-700 hover:underline">
                            Read full article</h1>
                        <h1 class="absolute bottom-0 right-0 mx-8 my-3 text-sm text-gray-500">posted on 1st Oct.
                            2020 |
                            5
                            min. read</h1>
                    </div>
                    <div
                        class="absolute bottom-0 left-0 w-16 h-16 mb-8 ml-8 border-2 border-gray-200 rounded-full bg-gradient-to-r from-purple-700 to-pink-700">
                        <svg class="pl-1 m-2 text-gray-100 fill-current" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="black" width="40px" height="40px">
                            <path d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                        </svg>
                    </div>
                    <div class="h-16 text-gray-100 rounded-b-lg bg-gradient-to-r from-purple-700 to-pink-700">
                        <h1
                            class="absolute bottom-0 left-0 pb-4 pl-32 text-xl font-semibold cursor-pointer hover:underline sm:hover:no-underline sm:cursor-default">
                            Nitish Kumar Sharma</h1>
                        <div
                            class="absolute bottom-0 right-0 hidden px-2 py-1 mx-8 my-4 text-sm text-gray-100 border-2 border-gray-100 border-solid rounded opacity-100 cursor-pointer sm:flex hover:opacity-75">
                            <h2>view profile</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="m-6">
            <div class="max-w-xl m-auto bg-gray-100 rounded-lg shadow-sm">
                <div>
                    <div class="py-4 mx-8 text-3xl sm:flex sm:items-center">
                        <svg class="" xmlns="http://www.w3.org/2000/svg" width="64" height="64">
                            <defs>
                                <linearGradient x1="0" y1="-21.333" y2="85.333" id="A" x2="64"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#6b46c1" offset="0%" />
                                    <stop stop-color="#b83280" offset="100%" />
                                </linearGradient>
                            </defs>
                            <path
                                d="M16 25.6c2.133-8.533 7.467-12.8 16-12.8 12.8 0 14.4 9.6 20.8 11.2 4.267 1.067 8-.533 11.2-4.8C61.867 27.733 56.533 32 48 32c-12.8 0-14.4-9.6-20.8-11.2-4.267-1.067-8 .533-11.2 4.8zM0 44.8C2.133 36.267 7.467 32 16 32c12.8 0 14.4 9.6 20.8 11.2 4.267 1.067 8-.533 11.2-4.8-2.133 8.533-7.467 12.8-16 12.8-12.8 0-14.4-9.6-20.8-11.2-4.267-1.067-8 .533-11.2 4.8z"
                                fill="url(#A)" fill-rule="evenodd" />
                        </svg>
                        <h1 class="p-4 text-pink-700">Getting Started with Tailwindcss</h1>
                    </div>
                    <div>
                        <p class="px-8 pb-4 text-justify text-purple-700">Lorem ipsum dolor sit amet, consectetur
                            adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim
                            veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.
                            Duis
                            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur.</p>
                    </div>
                </div>
                <div class="relative">
                    <div class="relative h-16 bg-gray-100">
                        <h1
                            class="absolute bottom-0 right-0 m-8 text-purple-700 cursor-pointer text-md hover:text-pink-700 hover:underline">
                            Read full article</h1>
                        <h1 class="absolute bottom-0 right-0 mx-8 my-3 text-sm text-gray-500">posted on 1st Oct.
                            2020 |
                            5
                            min. read</h1>
                    </div>
                    <div
                        class="absolute bottom-0 left-0 w-16 h-16 mb-8 ml-8 border-2 border-gray-200 rounded-full bg-gradient-to-r from-purple-700 to-pink-700">
                        <svg class="pl-1 m-2 text-gray-100 fill-current" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="black" width="40px" height="40px">
                            <path d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                        </svg>
                    </div>
                    <div class="h-16 text-gray-100 rounded-b-lg bg-gradient-to-r from-purple-700 to-pink-700">
                        <h1
                            class="absolute bottom-0 left-0 pb-4 pl-32 text-xl font-semibold cursor-pointer hover:underline sm:hover:no-underline sm:cursor-default">
                            Nitish Kumar Sharma</h1>
                        <div
                            class="absolute bottom-0 right-0 hidden px-2 py-1 mx-8 my-4 text-sm text-gray-100 border-2 border-gray-100 border-solid rounded opacity-100 cursor-pointer sm:flex hover:opacity-75">
                            <h2>view profile</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <p class="m-12 text-center text-gray-500 cursor-pointer txt-sm hover:underline hover:text-gray-700">view all
        </p>
    </div>
</div>
<div class="h-screen font-sans text-gray-900 bg-gray-300 border-box">
    <div class="flex justify-center max-w-sm mx-auto">
        <div
            class="flex flex-col items-start justify-between w-4/5 h-auto my-20 overflow-hidden bg-white rounded-lg shadow-xl">
            <div class="flex flex-row items-baseline justify-around w-full p-4 pb-0 mb-3">
                <h2 class="mr-auto text-lg font-semibold tracking-wide">Who to follow</h2>
                <div class="flex flex-row">
                    <a href="#" class="text-xs text-blue-700 ">Refresh</a>
                    <span class="self-center w-1 h-1 mx-2 bg-gray-500 rounded-full"></span>
                    <a href="#" class="text-xs text-blue-700 ">See all</a>
                </div>
            </div>
            <div class="w-full p-4 pt-0 text-gray-800 bg-gray-100 divide-y divide-gray-400">
                <div class="flex flex-row items-center justify-between py-4">
                    <img src="https://uifaces.co/our-content/donated/BMGfa1yq.png" alt="user-1"
                        class="w-12 h-12 rounded-full">
                    <div class="text-sm">
                        <span class="block font-semibold">Deltondo Matthew</span>
                        <span class="block text-xs font-light text-gray-700">8 mutual friends</span>
                    </div>
                    <a href="#"
                        class="self-start block px-2 py-px mt-1 text-xs font-semibold tracking-wide uppercase border border-gray-400 rounded-full hover:bg-blue-500 hover:text-white hover:border-transparent">follow</a>
                </div>
                <div class="flex flex-row items-center justify-between py-4">
                    <img src="https://uifaces.co/our-content/donated/AVQ0V28X.jpg" alt="user-1"
                        class="w-12 h-12 rounded-full">
                    <div class="text-sm">
                        <span class="block font-semibold">Adriana Cardoson</span>
                        <span class="block text-xs font-light text-gray-700">6 mutual friends</span>
                    </div>
                    <a href="#"
                        class="self-start block px-2 py-px mt-1 text-xs font-semibold tracking-wide uppercase border border-gray-400 rounded-full hover:bg-blue-500 hover:text-white hover:border-transparent">follow</a>
                </div>
                <div class="flex flex-row items-center justify-between pt-4">
                    <img src="https://uifaces.co/our-content/donated/UZ0VIIh3.png" alt="user-1"
                        class="w-12 h-12 rounded-full">
                    <div class="text-sm">
                        <span class="block font-semibold">Daniela Moreauno</span>
                        <span class="block text-xs font-light text-gray-700">2 mutual friends</span>
                    </div>
                    <a href="#" class="self-start block px-2 py-px mt-1 text-xs font-semibold tracking-wide uppercase border border-gray-400 rounded-full hover:bg-blue-500 hover:text-white hover:border-transparent">follow</a>
                </div>
            </div>
        </div>
    </div>
</div>

    
    <section class="bg-white dark:bg-gray-900">
        <div class="container flex flex-col items-center px-4 py-12 mx-auto xl:flex-row">
            <div class="flex justify-center xl:w-1/2">
                <img class="h-80 w-80 sm:w-[28rem] sm:h-[28rem] flex-shrink-0 object-cover rounded-full" src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1974&q=80" alt="">
            </div>
            
            <div class="flex flex-col items-center mt-6 xl:items-start xl:w-1/2 xl:mt-0">
                <h2 class="text-3xl font-bold tracking-tight text-gray-800 xl:text-4xl dark:text-white">
                    Download our free mobile app
                </h2>

                <p class="block max-w-2xl mt-4 text-xl text-gray-500 dark:text-gray-300">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto recusandae tenetur iste quaerat voluptatibus quibusdam nam repudiandae </p>
                
                <div class="mt-6 sm:-mx-2">
                    <div class="inline-flex w-full overflow-hidden rounded-lg shadow sm:w-auto sm:mx-2">
                        <a href="#" class="inline-flex items-center justify-center w-full px-5 py-3 text-base font-medium text-white bg-gradient-to-r from-gray-700 to-gray-900 hover:from-gray-600 hover:to-gray-600 sm:w-auto">
                            <svg class="w-6 h-6 mx-2 fill-current" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M407,0H105C47.103,0,0,47.103,0,105v302c0,57.897,47.103,105,105,105h302c57.897,0,105-47.103,105-105V105
                                            C512,47.103,464.897,0,407,0z M482,407c0,41.355-33.645,75-75,75H105c-41.355,0-75-33.645-75-75V105c0-41.355,33.645-75,75-75h302
                                            c41.355,0,75,33.645,75,75V407z"></path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M305.646,123.531c-1.729-6.45-5.865-11.842-11.648-15.18c-11.936-6.892-27.256-2.789-34.15,9.151L256,124.166
                                            l-3.848-6.665c-6.893-11.937-22.212-16.042-34.15-9.151h-0.001c-11.938,6.893-16.042,22.212-9.15,34.151l18.281,31.664
                                            L159.678,291H110.5c-13.785,0-25,11.215-25,25c0,13.785,11.215,25,25,25h189.86l-28.868-50h-54.079l85.735-148.498
                                            C306.487,136.719,307.375,129.981,305.646,123.531z"></path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M401.5,291h-49.178l-55.907-96.834l-28.867,50l86.804,150.348c3.339,5.784,8.729,9.921,15.181,11.65
                                            c2.154,0.577,4.339,0.863,6.511,0.863c4.332,0,8.608-1.136,12.461-3.361c11.938-6.893,16.042-22.213,9.149-34.15L381.189,341
                                            H401.5c13.785,0,25-11.215,25-25C426.5,302.215,415.285,291,401.5,291z"></path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M119.264,361l-4.917,8.516c-6.892,11.938-2.787,27.258,9.151,34.15c3.927,2.267,8.219,3.345,12.458,3.344
                                            c8.646,0,17.067-4.484,21.693-12.495L176.999,361H119.264z"></path>
                                    </g>
                                </g>
                            </svg>
                            <span class="mx-2">
                                Get it on the App Store
                            </span>
                        </a>
                    </div>

                    <div class="inline-flex w-full mt-4 overflow-hidden rounded-lg shadow sm:w-auto sm:mx-2 sm:mt-0">
                        <a href="#" class="inline-flex items-center justify-center w-full px-5 py-3 text-base font-medium text-white transition-colors duration-150 transform sm:w-auto bg-gradient-to-r from-blue-700 to-blue-900 hover:from-blue-600 hover:to-blue-600">
                            <svg class="w-6 h-6 mx-2 fill-current" viewBox="-28 0 512 512.00075" xmlns="http://www.w3.org/2000/svg"><path d="m432.320312 215.121094-361.515624-208.722656c-14.777344-8.53125-32.421876-8.53125-47.203126 0-.121093.070312-.230468.148437-.351562.21875-.210938.125-.421875.253906-.628906.390624-14.175782 8.636719-22.621094 23.59375-22.621094 40.269532v417.445312c0 17.066406 8.824219 32.347656 23.601562 40.878906 7.390626 4.265626 15.496094 6.398438 23.601563 6.398438s16.214844-2.132812 23.601563-6.398438l361.519531-208.722656c14.777343-8.53125 23.601562-23.8125 23.601562-40.878906s-8.824219-32.347656-23.605469-40.878906zm-401.941406 253.152344c-.21875-1.097657-.351562-2.273438-.351562-3.550782v-417.445312c0-2.246094.378906-4.203125.984375-5.90625l204.324219 213.121094zm43.824219-425.242188 234.21875 135.226562-52.285156 54.539063zm-6.480469 429.679688 188.410156-196.527344 54.152344 56.484375zm349.585938-201.835938-80.25 46.332031-60.125-62.714843 58.261718-60.773438 82.113282 47.40625c7.75 4.476562 8.589844 11.894531 8.589844 14.875s-.839844 10.398438-8.589844 14.875zm0 0"></path></svg>
                            <span class="mx-2">
                                Get it on Google Play
                            </span> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="fixed inset-0 z-10 overflow-y-auto bg-white">
  <div class="flex items-center justify-center min-h-screen text-center">

    <div class="fixed inset-0 transition-opacity">
      <div class="absolute inset-0 bg-gray-900 opacity-50"></div>
    </div>

    <div
      class="inline-block px-2 py-6 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl lg:w-2xl sm:my-8 sm:align-middle sm:max-w-sm sm:w-full"
      role="dialog" aria-modal="true" aria-labelledby="modal-headline">
      <div class="pb-2 bg-white">
        <div class="flex-col items-center sm:flex">
          <div
            class="flex items-center justify-center flex-shrink-0 w-12 h-12 p-4 mx-auto bg-red-100 rounded-full sm:mx-0 sm:h-16 sm:w-16">
            <svg class="w-full h-full text-red-600" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="19" y1="5" x2="5" y2="19"></line>
              <circle cx="6.5" cy="6.5" r="2.5"></circle>
              <circle cx="17.5" cy="17.5" r="2.5"></circle>
            </svg>
          </div>
          <div class="mt-3 mb-1 text-center sm:ml-4 sm:text-left">
            <h3 class="pt-1 text-3xl font-black leading-6 text-gray-900" id="modal-headline">
              Discount
            </h3>
          </div>
        </div>
      </div>
      <div class="w-full text-base text-center text-gray-600">
        use the coupon code below
      </div>
      <div class="px-4 pt-1 text-xs bg-gray-50 sm:px-6 sm:flex sm:flex-row-reverse">
        <div
          class="w-full p-4 my-3 font-mono text-lg text-center text-gray-600 border-4 border-red-400 border-dashed rounded select-all">
          XXXX-XXXX-XXXXX</div>
      </div>
      <div class="justify-center w-full px-4 mt-2 font-sans text-xs leading-6 text-center text-gray-500">
        <a href="#_">Terms and conditions apply</a>
      </div>
    </div>
  </div>
</div>
<div class="relative flex flex-col items-center justify-center min-h-screen pt-4 bg-gray-300 min-w-screen"
    x-data="{ open: false }">

    <button
        class="px-8 py-3 mb-1 mr-1 font-bold text-blue-600 uppercase transition-all duration-300 ease-in-out bg-transparent border border-blue-600 border-solid rounded-md outline-none hover:bg-blue-600 hover:text-white active:bg-blue-600 focus:outline-none"
        type="button" @click="open = true">
        Rate me !
    </button>

    <div x-show="open" class="absolute max-w-sm p-4 overflow-x-auto bg-white rounded-lg shadow-lg"
        @click.away="open = false" role="dialog" aria-modal="true" aria-labelledby="modal-headline">

        <div class="mt-2 text-center">
            <h3 class="text-xl font-semibold leading-6 text-blue-600" id="modal-headline">Rate your experience</h3>
            <div class="mt-2">
                <p class="px-3 text-sm leading-5 text-gray-600">
                    We would love to know what you think of our service! Please take a moment to rate us.
                </p>
            </div>
            <div class="flex flex-wrap items-center justify-center mt-2">
                <div class="flex-initial">
                    <svg class="w-12 text-gray-600 transition-all duration-300 ease-out transform fill-current stroke-current hover:text-blue-600 hover:scale-110"
                        viewBox="0 0 72 72" xmlns="http://www.w3.org/2000/svg">
                        <title>Very Disappointed</title>
                        <g id="line">
                            <circle cx="36" cy="36" r="23" fill="none" stroke-miterlimit="10" stroke-width="2" />
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                stroke-width="2"
                                d="M28,46c1.5805-2.5575,4.9043-4.1349,8.4211-4.0038C39.6499,42.1166,42.5622,43.6595,44,46" />
                            <path
                                d="M30,32.9252c0,1.6567-1.3448,3-3,3c-1.6553,0-3-1.3433-3-3c0-1.6553,1.3447-3,3-3C28.6552,29.9252,30,31.27,30,32.9252" />
                            <path
                                d="M48,32.9252c0,1.6567-1.3447,3-3,3s-3-1.3433-3-3c0-1.6553,1.3447-3,3-3S48,31.27,48,32.9252" />
                            <line x1="23" x2="30" y1="24" y2="28" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" />
                            <line x1="49" x2="42" y1="24" y2="28" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" />
                        </g>
                    </svg>

                </div>
                <div class="flex-initial">
                    <svg class="w-12 text-gray-600 transition-all duration-300 ease-out transform fill-current stroke-current hover:text-blue-600 hover:scale-110"
                        viewBox="0 0 72 72" xmlns="http://www.w3.org/2000/svg">
                        <title>Disappointed</title>
                        <g id="line">
                            <circle cx="36" cy="36" r="23" fill="none" stroke-miterlimit="10" stroke-width="2" />
                            <path
                                d="M30,31c0,1.6568-1.3448,3-3,3c-1.6553,0-3-1.3433-3-3c0-1.6552,1.3447-3,3-3C28.6552,28,30,29.3448,30,31" />
                            <path
                                d="M48,31c0,1.6568-1.3447,3-3,3s-3-1.3433-3-3c0-1.6552,1.3447-3,3-3S48,29.3448,48,31" />
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                stroke-width="2"
                                d="M28,46c1.5805-2.5575,4.9043-4.1349,8.4211-4.0038C39.6499,42.1166,42.5622,43.6595,44,46" />
                        </g>
                    </svg>

                </div>
                <div class="flex-initial">
                    <svg class="w-12 text-gray-600 transition-all duration-300 ease-out transform fill-current stroke-current hover:text-blue-600 hover:scale-110"
                        viewBox="0 0 72 72" xmlns="http://www.w3.org/2000/svg">
                        <title>Neutral</title>
                        <g id="line">
                            <circle cx="36" cy="36" r="23" fill="none" stroke-miterlimit="10" stroke-width="2" />
                            <line x1="27" x2="45" y1="43" y2="43" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" />
                            <path
                                d="M30,31c0,1.6568-1.3448,3-3,3c-1.6553,0-3-1.3433-3-3c0-1.6552,1.3447-3,3-3C28.6552,28,30,29.3448,30,31" />
                            <path
                                d="M48,31c0,1.6568-1.3447,3-3,3s-3-1.3433-3-3c0-1.6552,1.3447-3,3-3S48,29.3448,48,31" />
                        </g>
                    </svg>
                </div>
                <div class="flex-initial">
                    <svg class="w-12 text-gray-600 transition-all duration-300 ease-out transform fill-current stroke-current hover:text-blue-600 hover:scale-110"
                        viewBox="0 0 72 72" xmlns="http://www.w3.org/2000/svg">
                        <title>Happy</title>
                        <g id="line">
                            <circle cx="36" cy="36" r="23" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" />
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M45.8147,45.2268a15.4294,15.4294,0,0,1-19.6294,0" />
                            <path fill="none" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"
                                d="M31.6941,33.4036a4.7262,4.7262,0,0,0-8.6382,0" />
                            <path fill="none" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"
                                d="M48.9441,33.4036a4.7262,4.7262,0,0,0-8.6382,0" />
                        </g>
                    </svg>

                </div>
                <div class="flex-initial">
                    <svg class="w-12 text-gray-600 transition-all duration-300 ease-out transform fill-current stroke-current hover:text-blue-600 hover:scale-110"
                        viewBox="0 0 72 72" xmlns="http://www.w3.org/2000/svg">
                        <title>Very Happy</title>
                        <g id="line">
                            <circle cx="36" cy="36" r="23" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" />
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M50.595,41.64a11.5554,11.5554,0,0,1-.87,4.49c-12.49,3.03-25.43.34-27.49-.13a11.4347,11.4347,0,0,1-.83-4.36h.11s14.8,3.59,28.89.07Z" />
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M49.7251,46.13c-1.79,4.27-6.35,7.23-13.69,7.23-7.41,0-12.03-3.03-13.8-7.36C24.2951,46.47,37.235,49.16,49.7251,46.13Z" />
                            <path fill="none" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"
                                d="M31.6941,32.4036a4.7262,4.7262,0,0,0-8.6382,0" />
                            <path fill="none" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"
                                d="M48.9441,32.4036a4.7262,4.7262,0,0,0-8.6382,0" />
                        </g>
                    </svg>

                </div>
            </div>
        </div>
        <div class="px-4 py-3 sm:px-6 sm:flex sm:justify-center sm:flex-row-reverse">
            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                <button type="button"
                    class="inline-flex justify-center w-full px-4 py-2 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-500 focus:outline-none focus:border-blue-900 focus:shadow-outline-blue sm:text-sm sm:leading-5"
                    @click="open = false">
                    Submit Rating
                </button>
            </span>
            <span class="flex w-full mt-3 rounded-md shadow-sm sm:mt-0 sm:w-auto">
                <button type="button"
                    class="inline-flex justify-center w-full px-4 py-2 text-base font-medium leading-6 text-gray-600 transition duration-150 ease-in-out bg-white border border-gray-600 rounded-md shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-600 focus:shadow-outline-blue sm:text-sm sm:leading-5"
                    @click="open = false">
                    No, Thanks
                </button>
            </span>
        </div>
    </div>
</div> 

<div class="bg-gray-100 min-h-screen antialiased text-gray-900 p-6">
  <div class="max-w-sm mx-auto">
    <div class="">
      <form action="#" method="POST">
        <div class="rounded-md shadow overflow-hidden">
          <div class="p-6 bg-white">
            <h3 class="text-lg font-medium leading-tight text-gray-900">Notifications</h3>
            <p class="mt-1 text-sm text-gray-600">
              Decide which communications you'd like to receive and how.
            </p>
            <div class="mt-4">
              <div>
                <div class="flex items-start text-sm">
                  <div class="flex items-center">
                    <!-- Zero-width space character, used to align checkbox properly -->
                    &#8203;
                    <input id="comments" type="checkbox" class="form-checkbox border-gray-400 h-4 w-4 text-indigo-600" />
                  </div>
                  <label for="comments" class="ml-3 font-medium text-gray-700">Short item</label>
                </div>
                <p class="mt-1 ml-4 pl-3 block text-sm text-gray-600">
                  Some helpful text about this checkbox item, in case you need it.
                </p>
              </div>
              <div class="mt-4">
                <div class="flex items-start text-sm">
                  <div class="flex items-center">
                    <!-- Zero-width space character, used to align checkbox properly -->
                    &#8203;
                    <input id="comments" type="checkbox" class="form-checkbox border-gray-400 h-4 w-4 text-indigo-600" />
                  </div>
                  <label for="comments" class="ml-3 font-medium text-gray-700">Longer checkbox item that unfortunately wraps on to two separate lines</label>
                </div>
                <p class="mt-1 ml-4 pl-3 block text-sm text-gray-600">
                  Some helpful text about this checkbox item, in case you need it.
                </p>
              </div>
              <div class="mt-4">
                <div class="flex items-start text-sm">
                  <div class="flex items-center">
                    <!-- Zero-width space character, used to align checkbox properly -->
                    &#8203;
                    <input id="comments" type="checkbox" class="form-checkbox border-gray-400 h-4 w-4 text-indigo-600" />
                  </div>
                  <label for="comments" class="ml-3 font-medium text-gray-700">Extremely long item that actually wraps on to not just two, but three completely separate lines in the browser</label>
                </div>
                <p class="mt-1 ml-4 pl-3 block text-sm text-gray-600">
                  Some helpful text about this checkbox item, in case you need it.
                </p>
              </div>
            </div>
          </div>
          <div class="px-6 py-4 bg-gray-50 text-right">
            <button class="py-1 px-3 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 shadow-sm hover:bg-indigo-500 focus:outline-none focus:shadow-outline focus:bg-indigo-500 active:bg-indigo-600">
                Save
              </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<section class="relative flex items-center justify-center min-h-screen antialiased bg-gray-100 min-w-screen">
    <div class="container px-0 mx-auto sm:px-5">

        <div
            class="flex-col w-full py-4 mx-auto bg-white border-b-2 border-r-2 border-gray-200 sm:px-4 sm:py-4 md:px-4 sm:rounded-lg sm:shadow-sm md:w-2/3">
            <div class="flex flex-row">
                <img class="object-cover w-12 h-12 border-2 border-gray-300 rounded-full" alt="Noob master's avatar"
                    src="https://images.unsplash.com/photo-1517070208541-6ddc4d3efbcb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&faces=1&faceindex=1&facepad=2.5&w=500&h=500&q=80">
                <div class="flex-col mt-1">
                    <div class="flex items-center flex-1 px-4 font-bold leading-tight">Noob master
                        <span class="ml-2 text-xs font-normal text-gray-500">2 weeks ago</span>
                    </div>
                    <div class="flex-1 px-2 ml-2 text-sm font-medium leading-loose text-gray-600">Wow!!! how you did you
                        create this?
                    </div>
                    <button class="inline-flex items-center px-1 pt-2 ml-1 flex-column">
                        <svg class="w-5 h-5 ml-2 text-gray-600 cursor-pointer fill-current hover:text-gray-900"
                            viewBox="0 0 95 78" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M29.58 0c1.53.064 2.88 1.47 2.879 3v11.31c19.841.769 34.384 8.902 41.247 20.464 7.212 12.15 5.505 27.83-6.384 40.273-.987 1.088-2.82 1.274-4.005.405-1.186-.868-1.559-2.67-.814-3.936 4.986-9.075 2.985-18.092-3.13-24.214-5.775-5.78-15.377-8.782-26.914-5.53V53.99c-.01 1.167-.769 2.294-1.848 2.744-1.08.45-2.416.195-3.253-.62L.85 30.119c-1.146-1.124-1.131-3.205.032-4.312L27.389.812c.703-.579 1.49-.703 2.19-.812zm-3.13 9.935L7.297 27.994l19.153 18.84v-7.342c-.002-1.244.856-2.442 2.034-2.844 14.307-4.882 27.323-1.394 35.145 6.437 3.985 3.989 6.581 9.143 7.355 14.715 2.14-6.959 1.157-13.902-2.441-19.964-5.89-9.92-19.251-17.684-39.089-17.684-1.573 0-3.004-1.429-3.004-3V9.936z"
                                fill-rule="nonzero" />
                        </svg>
                    </button>
                    <button class="inline-flex items-center px-1 -ml-1 flex-column">
                        <svg class="w-5 h-5 text-gray-600 cursor-pointer hover:text-gray-700" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
            <hr class="my-2 ml-16 border-gray-200">
            <div class="flex flex-row pt-1 md-10 md:ml-16">
                <img class="w-12 h-12 border-2 border-gray-300 rounded-full" alt="Emily's avatar"
                    src="https://images.unsplash.com/photo-1581624657276-5807462d0a3a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&fit=facearea&faces=1&faceindex=1&facepad=2.5&w=500&h=500&q=80">
                <div class="flex-col mt-1">
                    <div class="flex items-center flex-1 px-4 font-bold leading-tight">Emily
                        <span class="ml-2 text-xs font-normal text-gray-500">5 days ago</span>
                    </div>
                    <div class="flex-1 px-2 ml-2 text-sm font-medium leading-loose text-gray-600">I created it using
                        TailwindCSS
                    </div>
                    <button class="inline-flex items-center px-1 pt-2 ml-1 flex-column">
                        <svg class="w-5 h-5 ml-2 text-gray-600 cursor-pointer fill-current hover:text-gray-900"
                            viewBox="0 0 95 78" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M29.58 0c1.53.064 2.88 1.47 2.879 3v11.31c19.841.769 34.384 8.902 41.247 20.464 7.212 12.15 5.505 27.83-6.384 40.273-.987 1.088-2.82 1.274-4.005.405-1.186-.868-1.559-2.67-.814-3.936 4.986-9.075 2.985-18.092-3.13-24.214-5.775-5.78-15.377-8.782-26.914-5.53V53.99c-.01 1.167-.769 2.294-1.848 2.744-1.08.45-2.416.195-3.253-.62L.85 30.119c-1.146-1.124-1.131-3.205.032-4.312L27.389.812c.703-.579 1.49-.703 2.19-.812zm-3.13 9.935L7.297 27.994l19.153 18.84v-7.342c-.002-1.244.856-2.442 2.034-2.844 14.307-4.882 27.323-1.394 35.145 6.437 3.985 3.989 6.581 9.143 7.355 14.715 2.14-6.959 1.157-13.902-2.441-19.964-5.89-9.92-19.251-17.684-39.089-17.684-1.573 0-3.004-1.429-3.004-3V9.936z"
                                fill-rule="nonzero" />
                        </svg>
                    </button>
                    <button class="inline-flex items-center px-1 -ml-1 flex-column">
                        <svg class="w-5 h-5 text-gray-600 cursor-pointer hover:text-gray-700"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div
            class="flex-col w-full py-4 mx-auto mt-3 bg-white border-b-2 border-r-2 border-gray-200 sm:px-4 sm:py-4 md:px-4 sm:rounded-lg sm:shadow-sm md:w-2/3">
            <div class="flex flex-row md-10">
                <img class="w-12 h-12 border-2 border-gray-300 rounded-full" alt="Anonymous's avatar"
                    src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&faces=1&faceindex=1&facepad=2.5&w=500&h=500&q=80">
                <div class="flex-col mt-1">
                    <div class="flex items-center flex-1 px-4 font-bold leading-tight">Anonymous
                        <span class="ml-2 text-xs font-normal text-gray-500">3 days ago</span>
                    </div>
                    <div class="flex-1 px-2 ml-2 text-sm font-medium leading-loose text-gray-600">Very cool! I'll have
                        to learn more about Tailwind.
                    </div>
                    <button class="inline-flex items-center px-1 pt-2 ml-1 flex-column">
                        <svg class="w-5 h-5 ml-2 text-gray-600 cursor-pointer fill-current hover:text-gray-900"
                            viewBox="0 0 95 78" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M29.58 0c1.53.064 2.88 1.47 2.879 3v11.31c19.841.769 34.384 8.902 41.247 20.464 7.212 12.15 5.505 27.83-6.384 40.273-.987 1.088-2.82 1.274-4.005.405-1.186-.868-1.559-2.67-.814-3.936 4.986-9.075 2.985-18.092-3.13-24.214-5.775-5.78-15.377-8.782-26.914-5.53V53.99c-.01 1.167-.769 2.294-1.848 2.744-1.08.45-2.416.195-3.253-.62L.85 30.119c-1.146-1.124-1.131-3.205.032-4.312L27.389.812c.703-.579 1.49-.703 2.19-.812zm-3.13 9.935L7.297 27.994l19.153 18.84v-7.342c-.002-1.244.856-2.442 2.034-2.844 14.307-4.882 27.323-1.394 35.145 6.437 3.985 3.989 6.581 9.143 7.355 14.715 2.14-6.959 1.157-13.902-2.441-19.964-5.89-9.92-19.251-17.684-39.089-17.684-1.573 0-3.004-1.429-3.004-3V9.936z"
                                fill-rule="nonzero" />
                        </svg>
                    </button>
                    <button class="inline-flex items-center px-1 -ml-1 flex-column">
                        <svg class="w-5 h-5 text-gray-600 cursor-pointer hover:text-gray-700" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

    </div>
</section>





  </div>
</template>

<style lang="scss" scoped>
</style>
