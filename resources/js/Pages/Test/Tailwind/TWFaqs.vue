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
    <section class="dark:bg-gray-800 dark:text-gray-100">
	<div class="container flex flex-col items-center p-4 mx-auto md:p-8">
		<h1 class="text-3xl font-bold leading-none text-center sm:text-4xl">Help Center</h1>
		<div class="relative mt-6 mb-12">
			<span class="absolute inset-y-0 flex items-center pl-2 mx-auto">
				<button type="submit" title="Search" class="p-1 focus:outline-none focus:ring">
					<svg fill="currentColor" viewBox="0 0 512 512" class="w-4 h-4 dark:text-gray-100">
						<path d="M479.6,399.716l-81.084-81.084-62.368-25.767A175.014,175.014,0,0,0,368,192c0-97.047-78.953-176-176-176S16,94.953,16,192,94.953,368,192,368a175.034,175.034,0,0,0,101.619-32.377l25.7,62.2L400.4,478.911a56,56,0,1,0,79.2-79.195ZM48,192c0-79.4,64.6-144,144-144s144,64.6,144,144S271.4,336,192,336,48,271.4,48,192ZM456.971,456.284a24.028,24.028,0,0,1-33.942,0l-76.572-76.572-23.894-57.835L380.4,345.771l76.573,76.572A24.028,24.028,0,0,1,456.971,456.284Z"></path>
					</svg>
				</button>
			</span>
			<input type="search" name="Search" placeholder="Search..." class="w-full py-3 pl-12 text-sm rounded-full sm:w-96 focus:outline-none dark:bg-gray-800 dark:text-gray-100 focus:dark:bg-gray-900">
		</div>
		<div class="flex flex-col w-full divide-y sm:flex-row sm:divide-y-0 sm:divide-x sm:px-8 lg:px-12 xl:px-32 divide-gray-700">
			<div class="flex flex-col w-full divide-y divide-gray-700">
				<a rel="noopener noreferrer" href="#" class="flex items-center justify-center p-4 sm:py-8 lg:py-12">Billing</a>
				<a rel="noopener noreferrer" href="#" class="flex items-center justify-center p-4 sm:py-8 lg:py-12">Support</a>
				<a rel="noopener noreferrer" href="#" class="flex items-center justify-center p-4 sm:py-8 lg:py-12">Account</a>
			</div>
			<div class="flex flex-col w-full divide-y divide-gray-700">
				<a rel="noopener noreferrer" href="#" class="flex items-center justify-center p-4 sm:py-8 lg:py-12">Features</a>
				<a rel="noopener noreferrer" href="#" class="flex items-center justify-center p-4 sm:py-8 lg:py-12">Contact us</a>
				<a rel="noopener noreferrer" href="#" class="flex items-center justify-center p-4 sm:py-8 lg:py-12">My orders</a>
			</div>
			<div class="hidden w-full divide-y sm:flex-col sm:flex divide-gray-700">
				<a rel="noopener noreferrer" href="#" class="flex items-center justify-center p-4 sm:py-8 lg:py-12">Enterprise</a>
				<a rel="noopener noreferrer" href="#" class="flex items-center justify-center p-4 sm:py-8 lg:py-12">Privacy</a>
				<a rel="noopener noreferrer" href="#" class="flex items-center justify-center p-4 sm:py-8 lg:py-12">Developers</a>
			</div>
		</div>
	</div>
</section>
    <section class="px-4 pt-20 pb-24 mx-auto max-w-7xl md:px-2">
  <h1 class="mb-6 text-xl font-bold md:text-3xl">Frequently Asked Questions</h1>
  <div class="text-sm border-t border-b border-gray-200 divide-y divide-gray-200">
    <div x-data="collapse()">
      <button
        x-spread="trigger"
        class="flex items-center justify-between w-full py-4 pr-1 font-semibold text-left text-gray-800 outline-none hover:text-primary focus:text-primary focus:outline-none"
        role="button"
        aria-controls="faq1"
        aria-expanded="false"
      >
        Why doesn't my CSS, which is valid, render correctly?
        <svg
          :class="{ 'rotate-45': open }"
          class="flex-none w-4 h-4 ml-4 transition transform"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          aria-hidden="true"
        >
          <line x1="12" y1="5" x2="12" y2="19"></line>
          <line x1="5" y1="12" x2="19" y2="12"></line>
        </svg>
      </button>
      <div x-spread="collapse" x-cloak class="pb-5 pr-0 text-gray-700 md:pr-40" id="faq1">
        Browsers use the DOCTYPE declaration to choose whether to show the document using a mode that is more compatible with Web standards or with old browser bugs. Using a correct and modern DOCTYPE
        declaration at the start of your HTML will improve browser standards compliance.
      </div>
    </div>
    <div x-data="collapse()">
      <button
        x-spread="trigger"
        class="flex items-center justify-between w-full py-4 pr-1 font-semibold text-left text-gray-800 outline-none hover:text-primary focus:text-primary focus:outline-none"
        role="button"
        aria-controls="faq2"
        aria-expanded="false"
      >
        What is the difference between id and class?
        <svg
          :class="{ 'rotate-45': open }"
          class="flex-none w-4 h-4 ml-4 transition transform"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          aria-hidden="true"
        >
          <line x1="12" y1="5" x2="12" y2="19"></line>
          <line x1="5" y1="12" x2="19" y2="12"></line>
        </svg>
      </button>
      <div x-spread="collapse" x-cloak class="pb-5 pr-0 text-gray-700 md:pr-40" id="faq2">
        HTML elements can have an id and/or class attribute. The id attribute assigns a name to the element it is applied to, and for valid markup, there can be only one element with that name. The
        class attribute assigns a class name to the element, and that name can be used on many elements within the page. CSS allows you to apply styles to particular id and/or class names.
      </div>
    </div>
    <div x-data="collapse()">
      <button
        x-spread="trigger"
        class="flex items-center justify-between w-full py-4 pr-1 font-semibold text-left text-gray-800 outline-none hover:text-primary focus:text-primary focus:outline-none"
        role="button"
        aria-controls="faq3"
        aria-expanded="false"
      >
        What do the -moz-*, -ms-*, -webkit-*, -o-* and -khtml-* properties do?
        <svg
          :class="{ 'rotate-45': open }"
          class="flex-none w-4 h-4 ml-4 transition transform"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          aria-hidden="true"
        >
          <line x1="12" y1="5" x2="12" y2="19"></line>
          <line x1="5" y1="12" x2="19" y2="12"></line>
        </svg>
      </button>
      <div x-spread="collapse" x-cloak class="pb-5 pr-0 text-gray-700 md:pr-40" id="faq3">
        The use of such properties on production websites is not recommended — they have already created a huge web compatibility mess. For example, many developers only using the -webkit- prefixed
        version of a property when the non-prefixed version is supported across all browsers meant that a feature relying on that property would break in non-webkit-based browsers, completely
        needlessly. This problem got so bad that other browsers started to implement -webkit- prefixed aliases to improve web compatibility, as specified in the Compatibility Living Standard.
      </div>
    </div>
  </div>
</section>
<section class="px-4 pt-20 pb-24 mx-auto max-w-7xl md:px-2">
  <h1 class="mb-12 text-xl font-bold text-left md:text-3xl md:text-center">Frequently Asked Questions</h1>
  <div class="flex items-start justify-start mb-12">
    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-none w-6 h-6 mr-4 text-gray-700" aria-hidden="true">
      <path
        stroke-linecap="round"
        stroke-linejoin="round"
        stroke-width="2"
        d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
      ></path>
    </svg>
    <div>
      <p class="mt-0 mb-3 font-semibold text-gray-900">What is accessibility?</p>
      <p class="text-gray-600">
        This article starts off the module with a good look at what accessibility is — this includes what groups of people we need to consider and why, what tools different people use to interact with
        the web, and how we can make accessibility part of our web development workflow.
      </p>
    </div>
  </div>
  <div class="flex items-start justify-start mb-12">
    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-none w-6 h-6 mr-4 text-gray-700" aria-hidden="true">
      <path
        stroke-linecap="round"
        stroke-linejoin="round"
        stroke-width="2"
        d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
      ></path>
    </svg>
    <div>
      <p class="mt-0 mb-3 font-semibold text-gray-900">CSS and JavaScript accessibility best practices?</p>
      <p class="text-gray-600">
        CSS and JavaScript, when used properly, also have the potential to allow for accessible web experiences, but if misused they can significantly harm accessibility. This article outlines some
        CSS and JavaScript best practices that should be considered to ensure that even complex content is as accessible as possible.
      </p>
    </div>
  </div>
  <div class="flex items-start justify-start mb-12">
    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-none w-6 h-6 mr-4 text-gray-700" aria-hidden="true">
      <path
        stroke-linecap="round"
        stroke-linejoin="round"
        stroke-width="2"
        d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
      ></path>
    </svg>
    <div>
      <p class="mt-0 mb-3 font-semibold text-gray-900">WAI-ARIA basics, WAI-ARIA basics, WAI-ARIA basics, WAI-ARIA basics?</p>
      <p class="text-gray-600">
        Following on from the previous article, sometimes making complex UI controls that involve unsemantic HTML and dynamic JavaScript-updated content can be difficult. WAI-ARIA is a technology that
        can help with such problems by adding in further semantics that browsers and assistive technologies can recognize and use to let users know what is going on. Here we'll show how to use it at a
        basic level to improve accessibility.
      </p>
    </div>
  </div>
  <div class="text-center">
    <a href="https://developer.mozilla.org/en-US/docs/Learn/CSS/Howto/CSS_FAQ" target="_blank" class="btn btn-light btn-lg btn-icon">
      <span>Learn more on the MDN docs</span>
      <svg viewBox="0 0 20 20" fill="currentColor" class="ml-3">
        <path
          fill-rule="evenodd"
          d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
          clip-rule="evenodd"
        ></path>
      </svg>
    </a>
  </div>
</section>

    
    
    <section class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-12 mx-auto">
            <h1 class="text-2xl font-semibold text-gray-800 lg:text-4xl dark:text-white">Frequently asked questions.</h1>
            
            <div class="grid grid-cols-1 gap-8 mt-8 lg:mt-16 md:grid-cols-2 xl:grid-cols-3">
                <div>
                    <div class="inline-block p-3 text-white bg-blue-600 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>

                    <div>
                        <h1 class="text-xl font-semibold text-gray-700 dark:text-white">What can i expect at my first consultation?</h1>

                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-300">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident placeat, consequatur eveniet veritatis quos dignissimos beatae dolores exercitationem laboriosam officia magnam atque blanditiis illum doloremque magni ex corrupti tempora quis.
                        </p>
                    </div>
                </div>

                <div>
                    <div class="inline-block p-3 text-white bg-blue-600 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>

                    <div>
                        <h1 class="text-xl font-semibold text-gray-700 dark:text-white">What are your opening house?</h1>

                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-300">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident placeat, consequatur eveniet veritatis quos dignissimos beatae dolores exercitationem laboriosam officia magnam atque blanditiis illum doloremque magni ex corrupti tempora quis.
                        </p>
                    </div>
                </div>

                <div>
                    <div class="inline-block p-3 text-white bg-blue-600 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>

                    <div>
                        <h1 class="text-xl font-semibold text-gray-700 dark:text-white">Do i need a referral?</h1>

                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-300">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident placeat, consequatur eveniet veritatis quos dignissimos beatae dolores exercitationem laboriosam officia magnam atque blanditiis illum doloremque magni ex corrupti tempora quis.
                        </p>
                    </div>
                </div>

                <div>
                    <div class="inline-block p-3 text-white bg-blue-600 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>

                    <div>
                        <h1 class="text-xl font-semibold text-gray-700 dark:text-white">Is the cost of the appoinment covered by private health insurance?</h1>

                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-300">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident placeat, consequatur eveniet veritatis quos dignissimos beatae dolores exercitationem laboriosam officia magnam atque blanditiis illum doloremque magni ex corrupti tempora quis.
                        </p>
                    </div>
                </div>

                <div>
                    <div class="inline-block p-3 text-white bg-blue-600 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>

                    <div>
                        <h1 class="text-xl font-semibold text-gray-700 dark:text-white">What is your cancellation policy?</h1>

                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-300">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident placeat, consequatur eveniet veritatis quos dignissimos beatae dolores exercitationem laboriosam officia magnam atque blanditiis illum doloremque magni ex corrupti tempora quis.
                        </p>
                    </div>
                </div>

                <div>
                    <div class="inline-block p-3 text-white bg-blue-600 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>

                    <div>
                        <h1 class="text-xl font-semibold text-gray-700 dark:text-white">What are the parking and public transport options?</h1>

                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-300">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident placeat, consequatur eveniet veritatis quos dignissimos beatae dolores exercitationem laboriosam officia magnam atque blanditiis illum doloremque magni ex corrupti tempora quis.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-12 mx-auto">
            <h1 class="text-2xl font-semibold text-center text-gray-800 lg:text-4xl dark:text-white">Have any Questions?</h1>

            <div class="mt-8 xl:mt-16 lg:flex lg:-mx-12">
                <div class="lg:mx-12">
                    <h1 class="text-xl font-semibold text-gray-800 dark:text-white">Table of Content</h1>
                    
                    <div class="mt-4 space-y-4 lg:mt-8">
                        <a href="#" class="block text-blue-500 dark:text-blue-400 hover:underline">General</a>
                        <a href="#" class="block text-gray-500 dark:text-gray-300 hover:underline">Trust & Safety</a>
                        <a href="#" class="block text-gray-500 dark:text-gray-300 hover:underline">Services</a>
                        <a href="#" class="block text-gray-500 dark:text-gray-300 hover:underline">Billing</a>
                        <a href="#" class="block text-gray-500 dark:text-gray-300 hover:underline">Office Cleaning</a>
                    </div>
                </div>
                
                <div class="flex-1 mt-8 lg:mx-12 lg:mt-0">
                    <div>
                        <button class="flex items-center focus:outline-none">
                            <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path></svg>

                            <h1 class="mx-4 text-xl text-gray-700 dark:text-white">How i can play for my appoinment ?</h1>
                        </button>

                        <div class="flex mt-8 md:mx-10">
                            <span class="border border-blue-500"></span>

                            <p class="max-w-3xl px-4 text-gray-500 dark:text-gray-300">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, eum quae. Harum officiis reprehenderit ex quia ducimus minima id provident molestias optio nam vel, quidem iure voluptatem, repellat et ipsa.
                            </p>
                        </div>
                    </div>
                    
                    <hr class="my-8 border-gray-200 dark:border-gray-700">

                    <div>
                        <button class="flex items-center focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>

                            <h1 class="mx-4 text-xl text-gray-700 dark:text-white">What can i expect at my first consultation ?</h1>
                        </button>
                    </div>

                    <hr class="my-8 border-gray-200 dark:border-gray-700">

                    <div>
                        <button class="flex items-center focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>

                            <h1 class="mx-4 text-xl text-gray-700 dark:text-white">What are your opening house ?</h1>
                        </button>
                    </div>

                    <hr class="my-8 border-gray-200 dark:border-gray-700">

                    <div>
                        <button class="flex items-center focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>

                            <h1 class="mx-4 text-xl text-gray-700 dark:text-white">Do i need a referral ?</h1>
                        </button>
                    </div>

                    <hr class="my-8 border-gray-200 dark:border-gray-700">

                    <div>
                        <button class="flex items-center focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>

                            <h1 class="mx-4 text-xl text-gray-700 dark:text-white">Is the cost of the appoinment covered by private health insurance ?</h1>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="h-screen bg-gray-100 flex items-start lg:items-center justify-center">

    <div class="container mx-auto px-4 h-full">
        <h2 class="text-gray-800 font-semibold tracking-tight leading-loose text-center text-3xl lg:text-5xl my-2 lg:my-8">
            Frequently Asked Questions
        </h2>

        <section x-data="{ selectedItem: 1 }" class="shadow-md bg-gray-200 overflow-hidden rounded-lg mt-6 sm:shadow-lg lg:mt-16 lg:mx-auto lg:max-w-4xl">
            <article class="border-gray-400 border-b hover:bg-gray-300">
                <div>
                    <header @click="selectedItem === 1 ? selectedItem = 0 : selectedItem = 1" x-bind:class="{ 'bg-gray-300': selectedItem === 1 }" class="flex justify-between items-center p-5 pl-8 pr-8 cursor-pointer select-none">
                        <h3 class="font-semibold text-xl text-gray-800">
                            Do you offer team pricing?
                        </h3>
                        <div class="rounded-full border w-7 h-7 flex items-center justify-center hover:bg-gray-200">
                            <div x-show="selectedItem !== 1" class="rounded-full text-gray-500 w-7 h-7 flex items-center justify-center">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </div>
                            <div x-show="selectedItem === 1" class="rounded-full text-gray-500 w-7 h-7 flex items-center justify-center">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            </div>
                        </div>
                    </header>
                    <div x-show="selectedItem === 1">
                        <div class="pl-8 pr-8 py-5 bg-gray-100 text-gray-700">
                            <p>
                                Yes, we do! Team pricing is available for any plan. You can take advantage of 30% off for signing up for team pricing of 10 users or more.
                            </p>
                        </div>
                    </div>
                </div>
            </article>

            <article class="border-gray-400 border-b hover:bg-gray-300">
                <div>
                    <header @click="selectedItem === 2 ? selectedItem = 0 : selectedItem = 2" x-bind:class="{ 'bg-gray-300': selectedItem === 2 }" class="flex justify-between items-center p-5 pl-8 pr-8 cursor-pointer select-none">
                        <h3 class="font-semibold text-xl text-gray-800">
                            How do I add a custom domain?
                        </h3>
                        <div class="rounded-full border w-7 h-7 flex items-center justify-center hover:bg-gray-200">
                            <div x-show="selectedItem !== 2" class="rounded-full text-gray-500 w-7 h-7 flex items-center justify-center">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </div>
                            <div x-show="selectedItem === 2" class="rounded-full text-gray-500 w-7 h-7 flex items-center justify-center">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            </div>
                        </div>
                    </header>
                    <div x-show="selectedItem === 2">
                        <div class="pl-8 pr-8 py-5 bg-gray-100 text-gray-700">
                            <p>
                                You can easily change your site settings inside of your site dashboard by clicking the top right menu and clicking the settings button.
                            </p>
                        </div>
                    </div>
                </div>
            </article>

            <article class="border-gray-400 border-b hover:bg-gray-300">
                <div>
                    <header @click="selectedItem === 3 ? selectedItem = 0 : selectedItem = 3" x-bind:class="{ 'bg-gray-300': selectedItem === 3 }" class="flex justify-between items-center p-5 pl-8 pr-8 cursor-pointer select-none">
                        <h3 class="font-semibold text-xl text-gray-800">
                            How does it work?
                        </h3>
                        <div class="rounded-full border w-7 h-7 flex items-center justify-center hover:bg-gray-200">
                            <div x-show="selectedItem !== 3" class="rounded-full text-gray-500 w-7 h-7 flex items-center justify-center">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </div>
                            <div x-show="selectedItem === 3" class="rounded-full text-gray-500 w-7 h-7 flex items-center justify-center">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            </div>
                        </div>
                    </header>
                    <div x-show="selectedItem === 3">
                        <div class="pl-8 pr-8 py-5 bg-gray-100 text-gray-700">
                            <p>
                                Our platform works with your content to provides insights and metrics on how you can grow your business and scale your infastructure.
                            </p>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </div>

</div>




  </div>
</template>

<style lang="scss" scoped>
</style>
