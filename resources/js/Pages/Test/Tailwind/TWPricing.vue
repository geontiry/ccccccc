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
            <pattern id="ace59d72-08d5-4850-b9e4-d9d0b86c0525" x="0" y="0" width=".135" height=".30">
              <circle cx="1" cy="1" r=".7"></circle>
            </pattern>
          </defs>
          <rect fill="url(#ace59d72-08d5-4850-b9e4-d9d0b86c0525)" width="52" height="24"></rect>
        </svg>
        <span class="relative">Transparent</span>
      </span>
      pricing. Pay as you grow.
    </h2>
    <p class="text-base text-gray-700 md:text-lg">
      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam, eaque ipsa quae.
    </p>
  </div>
  <div class="grid max-w-md gap-10 row-gap-5 sm:row-gap-10 lg:max-w-screen-md lg:grid-cols-2 sm:mx-auto">
    <div class="flex flex-col justify-between p-5 bg-white border rounded shadow-sm">
      <div class="mb-6">
        <div class="flex items-center justify-between pb-6 mb-6 border-b">
          <div>
            <p class="text-sm font-bold tracking-wider uppercase">
              Personal use
            </p>
            <p class="text-5xl font-extrabold">Free</p>
          </div>
          <div class="flex items-center justify-center w-24 h-24 rounded-full bg-blue-gray-50">
            <svg class="w-10 h-10 text-gray-600" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
              <path d="M12,7L12,7 c-1.657,0-3-1.343-3-3v0c0-1.657,1.343-3,3-3h0c1.657,0,3,1.343,3,3v0C15,5.657,13.657,7,12,7z" fill="none" stroke="currentColor"></path>
              <path d="M15,23H9v-5H7v-6 c0-1.105,0.895-2,2-2h6c1.105,0,2,0.895,2,2v6h-2V23z" fill="none" stroke="currentColor"></path>
            </svg>
          </div>
        </div>
        <div>
          <p class="mb-2 font-bold tracking-wide">Features</p>
          <ul class="space-y-2">
            <li class="flex items-center">
              <div class="mr-2">
                <svg class="w-4 h-4 text-deep-purple-accent-400" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
                  <polyline fill="none" stroke="currentColor" points="6,12 10,16 18,8"></polyline>
                  <circle cx="12" cy="12" fill="none" r="11" stroke="currentColor"></circle>
                </svg>
              </div>
              <p class="font-medium text-gray-800">10 deploys per day</p>
            </li>
            <li class="flex items-center">
              <div class="mr-2">
                <svg class="w-4 h-4 text-deep-purple-accent-400" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
                  <polyline fill="none" stroke="currentColor" points="6,12 10,16 18,8"></polyline>
                  <circle cx="12" cy="12" fill="none" r="11" stroke="currentColor"></circle>
                </svg>
              </div>
              <p class="font-medium text-gray-800">10 GB of storage</p>
            </li>
            <li class="flex items-center">
              <div class="mr-2">
                <svg class="w-4 h-4 text-deep-purple-accent-400" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
                  <polyline fill="none" stroke="currentColor" points="6,12 10,16 18,8"></polyline>
                  <circle cx="12" cy="12" fill="none" r="11" stroke="currentColor"></circle>
                </svg>
              </div>
              <p class="font-medium text-gray-800">Unlimited domains</p>
            </li>
            <li class="flex items-center">
              <div class="mr-2">
                <svg class="w-4 h-4 text-deep-purple-accent-400" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
                  <polyline fill="none" stroke="currentColor" points="6,12 10,16 18,8"></polyline>
                  <circle cx="12" cy="12" fill="none" r="11" stroke="currentColor"></circle>
                </svg>
              </div>
              <p class="font-medium text-gray-800">SSL Certificates</p>
            </li>
          </ul>
        </div>
      </div>
      <div>
        <a href="/" class="inline-flex items-center justify-center w-full h-12 px-6 mb-4 font-medium tracking-wide text-white transition duration-200 bg-gray-800 rounded shadow-md hover:bg-gray-900 focus:shadow-outline focus:outline-none">
          Start for free
        </a>
        <p class="text-sm text-gray-600">
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
        </p>
      </div>
    </div>
    <div class="flex flex-col justify-between p-5 bg-white border rounded shadow-sm">
      <div class="mb-6">
        <div class="flex items-center justify-between pb-6 mb-6 border-b">
          <div>
            <p class="text-sm font-bold tracking-wider uppercase">
              For your team
            </p>
            <p class="text-5xl font-extrabold">$39</p>
          </div>
          <div class="flex items-center justify-center w-24 h-24 rounded-full bg-indigo-50">
            <svg class="w-10 h-10 text-deep-purple-accent-400" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
              <path d="M4,7L4,7 C2.895,7,2,6.105,2,5v0c0-1.105,0.895-2,2-2h0c1.105,0,2,0.895,2,2v0C6,6.105,5.105,7,4,7z" fill="none" stroke="currentColor"></path>
              <path d="M6,21H3v-4 l-2,0v-5c0-1.105,0.895-2,2-2h1" fill="none" stroke="currentColor"></path>
              <path d="M20,7L20,7 c1.105,0,2-0.895,2-2v0c0-1.105-0.895-2-2-2h0c-1.105,0-2,0.895-2,2v0C18,6.105,18.895,7,20,7z" fill="none" stroke="currentColor"></path>
              <path d="M18,21h3v-4 l2,0v-5c0-1.105-0.895-2-2-2h-1" fill="none" stroke="currentColor"></path>
              <path d="M12,7L12,7 c-1.657,0-3-1.343-3-3v0c0-1.657,1.343-3,3-3h0c1.657,0,3,1.343,3,3v0C15,5.657,13.657,7,12,7z" fill="none" stroke="currentColor"></path>
              <path d="M15,23H9v-6H7v-5 c0-1.105,0.895-2,2-2h6c1.105,0,2,0.895,2,2v6h-2V23z" fill="none" stroke="currentColor"></path>
            </svg>
          </div>
        </div>
        <div>
          <p class="mb-2 font-bold tracking-wide">Features</p>
          <ul class="space-y-2">
            <li class="flex items-center">
              <div class="mr-2">
                <svg class="w-4 h-4 text-deep-purple-accent-400" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
                  <polyline fill="none" stroke="currentColor" points="6,12 10,16 18,8"></polyline>
                  <circle cx="12" cy="12" fill="none" r="11" stroke="currentColor"></circle>
                </svg>
              </div>
              <p class="font-medium text-gray-800">Unlimited deploys</p>
            </li>
            <li class="flex items-center">
              <div class="mr-2">
                <svg class="w-4 h-4 text-deep-purple-accent-400" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
                  <polyline fill="none" stroke="currentColor" points="6,12 10,16 18,8"></polyline>
                  <circle cx="12" cy="12" fill="none" r="11" stroke="currentColor"></circle>
                </svg>
              </div>
              <p class="font-medium text-gray-800">Up to 10 Team Members</p>
            </li>
            <li class="flex items-center">
              <div class="mr-2">
                <svg class="w-4 h-4 text-deep-purple-accent-400" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
                  <polyline fill="none" stroke="currentColor" points="6,12 10,16 18,8"></polyline>
                  <circle cx="12" cy="12" fill="none" r="11" stroke="currentColor"></circle>
                </svg>
              </div>
              <p class="font-medium text-gray-800">100 GB of starge</p>
            </li>
            <li class="flex items-center">
              <div class="mr-2">
                <svg class="w-4 h-4 text-deep-purple-accent-400" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
                  <polyline fill="none" stroke="currentColor" points="6,12 10,16 18,8"></polyline>
                  <circle cx="12" cy="12" fill="none" r="11" stroke="currentColor"></circle>
                </svg>
              </div>
              <p class="font-medium text-gray-800">24/7 support</p>
            </li>
            <li class="flex items-center">
              <div class="mr-2">
                <svg class="w-4 h-4 text-deep-purple-accent-400" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
                  <polyline fill="none" stroke="currentColor" points="6,12 10,16 18,8"></polyline>
                  <circle cx="12" cy="12" fill="none" r="11" stroke="currentColor"></circle>
                </svg>
              </div>
              <p class="font-medium text-gray-800">Global CDN</p>
            </li>
          </ul>
        </div>
      </div>
      <div>
        <a
          href="/"
          class="inline-flex items-center justify-center w-full h-12 px-6 mb-4 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
        >
          Get started
        </a>
        <p class="text-sm text-gray-600">
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
        </p>
      </div>
    </div>
  </div>
</div>
<div class="flex flex-col items-center justify-center min-h-screen p-10 text-gray-700 bg-gray-100 md:p-20">
	<h2 class="text-2xl font-medium">Jedi Order Membership</h2>

	<!-- Component Start -->
	<div class="flex flex-wrap items-center justify-center w-full max-w-4xl mt-8">
		<div class="flex flex-col flex-grow mt-8 overflow-hidden bg-white rounded-lg shadow-lg">
			<div class="flex flex-col items-center p-10 bg-gray-200">
				<span class="font-semibold">Padawan</span>
				<div class="flex items-center">
					<span class="text-3xl">$</span>
					<span class="text-5xl font-bold">20</span>
					<span class="text-2xl text-gray-500">/mo</span>
				</div>
			</div>
			<div class="p-10">
				<ul>
					<li class="flex items-center">
						<svg class="w-5 h-5 text-green-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
						</svg>
						<span class="ml-2">Lightsaber</span>
					</li>
					<li class="flex items-center">
						<svg class="w-5 h-5 text-green-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
						</svg>
						<span class="ml-2">Robe</span>
					</li>
					<li class="flex items-center">
						<svg class="w-5 h-5 text-green-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
						</svg>
						<span class="ml-2">Insurance</span>
					</li>
				</ul>
			</div>
			<div class="flex px-10 pb-10 justfy-center">
				<button class="flex items-center justify-center w-full h-12 px-6 text-sm uppercase bg-gray-200 rounded-lg">Join now</button>
			</div>
		</div>

		<!-- Tile 2 -->
		<div class="z-10 flex flex-col flex-grow mt-8 overflow-hidden transform bg-white rounded-lg shadow-lg md:scale-110">
			<div class="flex flex-col items-center p-10 bg-gray-200">
				<span class="font-semibold">Jedi Knight</span>
				<div class="flex items-center">
					<span class="text-3xl">$</span>
					<span class="text-6xl font-bold">50</span>
					<span class="text-2xl text-gray-500">/mo</span>
				</div>
			</div>
			<div class="p-10">
				<ul>
					<li class="flex items-center">
						<svg class="w-5 h-5 text-green-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
						</svg>
						<span class="ml-2 italic">Padawan +</span>
					</li>
					<li class="flex items-center">
						<svg class="w-5 h-5 text-green-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
						</svg>
						<span class="ml-2">Solo missions</span>
					</li>
					<li class="flex items-center">
						<svg class="w-5 h-5 text-green-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
						</svg>
						<span class="ml-2">Utility belt</span>
					</li>
				</ul>
			</div>
			<div class="flex px-10 pb-10 justfy-center">
				<button class="flex items-center justify-center w-full h-12 px-6 text-sm uppercase bg-gray-200 rounded-lg">Join now</button>
			</div>
		</div>

		<!-- Tile 3 -->
		<div class="flex flex-col flex-grow overflow-hidden bg-white rounded-lg shadow-lg mt-19">
			<div class="flex flex-col items-center p-10 bg-gray-200">
				<span class="font-semibold">Jedi Master</span>
				<div class="flex items-center">
					<span class="text-3xl">$</span>
					<span class="text-5xl font-bold">99</span>
					<span class="text-2xl text-gray-500">/mo</span>
				</div>
			</div>
			<div class="p-10">
				<ul>
					<li class="flex items-center">
						<svg class="w-5 h-5 text-green-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
						</svg>
						<span class="ml-2 italic">Jedi Knight +</span>
					</li>
					<li class="flex items-center">
						<svg class="w-5 h-5 text-green-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
						</svg>
						<span class="ml-2">Sit on council</span>
					</li>
					<li class="flex items-center">
						<svg class="w-5 h-5 text-green-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
						</svg>
						<span class="ml-2">Stock options</span>
					</li>
				</ul>
			</div>
			<div class="flex px-10 pb-10 justfy-center">
				<button class="flex items-center justify-center w-full h-12 px-6 text-sm uppercase bg-gray-200 rounded-lg">Join now</button>
			</div>
		</div>
	</div>
	<!-- Component End  -->

</div>

<a class="fixed flex items-center justify-center h-8 pr-2 pl-1 bg-blue-600 rounded-full bottom-0 right-0 mr-4 mb-4 shadow-lg text-blue-100 hover:bg-blue-600" href="https://twitter.com/lofiui" target="_top">
	<div class="flex items-center justify-center h-6 w-6 bg-blue-500 rounded-full">
		<svg viewBox="0 0 24 24" class="w-4 h-4 fill-current r-jwli3a r-4qtqp9 r-yyyyoo r-16y2uox r-1q142lx r-8kz0gk r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1srniue"><g><path d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z"></path></g></svg>
	</div>
	<span class="text-sm ml-1 leading-none">@lofiui</span>
</a>



<div class="shadow-lg rounded-2xl w-64 bg-white dark:bg-gray-800 p-4">
    <p class="text-gray-800 dark:text-gray-50 text-xl font-medium mb-4">
        Entreprise
    </p>
    <p class="text-gray-900 dark:text-white text-3xl font-bold">
        $0
        <span class="text-gray-300 text-sm">
            / month
        </span>
    </p>
    <p class="text-gray-600 dark:text-gray-100  text-xs mt-4">
        For most businesses that want to optimize web queries.
    </p>
    <ul class="text-sm text-gray-600 dark:text-gray-100 w-full mt-6 mb-6">
        <li class="mb-3 flex items-center ">
            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6" stroke="currentColor" fill="#10b981" viewBox="0 0 1792 1792">
                <path d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                </path>
            </svg>
            All illimited components
        </li>
        <li class="mb-3 flex items-center ">
            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6" stroke="currentColor" fill="#10b981" viewBox="0 0 1792 1792">
                <path d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                </path>
            </svg>
            Own custom Tailwind styles
        </li>
        <li class="mb-3 flex items-center ">
            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6" stroke="currentColor" fill="#10b981" viewBox="0 0 1792 1792">
                <path d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                </path>
            </svg>
            Unlimited Templates
        </li>
        <li class="mb-3 flex items-center ">
            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6" stroke="currentColor" fill="#10b981" viewBox="0 0 1792 1792">
                <path d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                </path>
            </svg>
            Free premium dashboard
        </li>
        <li class="mb-3 flex items-center ">
            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6" stroke="currentColor" fill="#10b981" viewBox="0 0 1792 1792">
                <path d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                </path>
            </svg>
            Best ranking
        </li>
        <li class="mb-3 flex items-center opacity-50">
            <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" class="h-6 w-6 mr-2" fill="red" viewBox="0 0 1792 1792">
                <path d="M1277 1122q0-26-19-45l-181-181 181-181q19-19 19-45 0-27-19-46l-90-90q-19-19-46-19-26 0-45 19l-181 181-181-181q-19-19-45-19-27 0-46 19l-90 90q-19 19-19 46 0 26 19 45l181 181-181 181q-19 19-19 45 0 27 19 46l90 90q19 19 46 19 26 0 45-19l181-181 181 181q19 19 45 19 27 0 46-19l90-90q19-19 19-46zm387-226q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                </path>
            </svg>
            Prenium svg
        </li>
        <li class="mb-3 flex items-center opacity-50">
            <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" class="h-6 w-6 mr-2" fill="red" viewBox="0 0 1792 1792">
                <path d="M1277 1122q0-26-19-45l-181-181 181-181q19-19 19-45 0-27-19-46l-90-90q-19-19-46-19-26 0-45 19l-181 181-181-181q-19-19-45-19-27 0-46 19l-90 90q-19 19-19 46 0 26 19 45l181 181-181 181q-19 19-19 45 0 27 19 46l90 90q19 19 46 19 26 0 45-19l181-181 181 181q19 19 45 19 27 0 46-19l90-90q19-19 19-46zm387-226q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                </path>
            </svg>
            My wife
        </li>
    </ul>
    <button type="button" class="py-2 px-4  bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
        Choose plan
    </button>
</div>



<div class="shadow-lg rounded-2xl w-64 bg-indigo-500 dark:bg-gray-800 p-4">
    <div class="flex text-white  items-center justify-between">
        <p class="text-4xl font-medium mb-4">
            Pro
        </p>
        <p class="text-3xl font-bold flex flex-col">
            $99
            <span class="font-thin text-right text-sm">
                month
            </span>
        </p>
    </div>
    <p class="text-white text-md mt-4">
        Plan include :
    </p>
    <ul class="text-sm text-white w-full mt-6 mb-6">
        <li class="mb-3 flex items-center ">
            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6" stroke="currentColor" fill="white" viewBox="0 0 1792 1792">
                <path d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                </path>
            </svg>
            All illimited components
        </li>
        <li class="mb-3 flex items-center ">
            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6" stroke="currentColor" fill="white" viewBox="0 0 1792 1792">
                <path d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                </path>
            </svg>
            Own custom Tailwind styles
        </li>
        <li class="mb-3 flex items-center ">
            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6" stroke="currentColor" fill="white" viewBox="0 0 1792 1792">
                <path d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                </path>
            </svg>
            Unlimited Templates
        </li>
        <li class="mb-3 flex items-center ">
            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6" stroke="currentColor" fill="white" viewBox="0 0 1792 1792">
                <path d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                </path>
            </svg>
            Free premium dashboard
        </li>
        <li class="mb-3 flex items-center ">
            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6" stroke="currentColor" fill="white" viewBox="0 0 1792 1792">
                <path d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                </path>
            </svg>
            Best ranking
        </li>
        <li class="mb-3 flex items-center opacity-50">
            <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" class="h-6 w-6 mr-2" fill="white" viewBox="0 0 1792 1792">
                <path d="M1277 1122q0-26-19-45l-181-181 181-181q19-19 19-45 0-27-19-46l-90-90q-19-19-46-19-26 0-45 19l-181 181-181-181q-19-19-45-19-27 0-46 19l-90 90q-19 19-19 46 0 26 19 45l181 181-181 181q-19 19-19 45 0 27 19 46l90 90q19 19 46 19 26 0 45-19l181-181 181 181q19 19 45 19 27 0 46-19l90-90q19-19 19-46zm387-226q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                </path>
            </svg>
            Prenium svg
        </li>
        <li class="mb-3 flex items-center opacity-50">
            <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" class="h-6 w-6 mr-2" fill="white" viewBox="0 0 1792 1792">
                <path d="M1277 1122q0-26-19-45l-181-181 181-181q19-19 19-45 0-27-19-46l-90-90q-19-19-46-19-26 0-45 19l-181 181-181-181q-19-19-45-19-27 0-46 19l-90 90q-19 19-19 46 0 26 19 45l181 181-181 181q-19 19-19 45 0 27 19 46l90 90q19 19 46 19 26 0 45-19l181-181 181 181q19 19 45 19 27 0 46-19l90-90q19-19 19-46zm387-226q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                </path>
            </svg>
            My wife
        </li>
    </ul>
    <button type="button" class="w-full px-3 py-3 text-sm shadow rounded-lg text-indigo-500 bg-white hover:bg-gray-100 ">
        Choose plan
    </button>
</div>



<div class="shadow-lg rounded-2xl w-64 bg-white dark:bg-gray-800 p-4">
    <p class="text-black dark:text-white text-3xl font-bold">
        Essential
    </p>
    <p class="text-gray-500 dark:text-gray-300 text-sm mb-4">
        For the basics tailwind
    </p>
    <p class="text-black dark:text-white  text-3xl font-bold">
        $99
    </p>
    <p class="text-gray-500 dark:text-gray-300 text-sm mb-4">
        Per agent per month
    </p>
    <button type="button" class="w-56 m-auto px-3 py-3 text-sm shadow border border-black rounded-lg text-black bg-white hover:bg-black hover:text-white dark:hover-text-gray-900 dark:hover:bg-gray-100 ">
        Request demo
    </button>
    <ul class="text-sm text-black dark:text-white w-full mt-6 mb-6">
        <li class="mb-3 flex items-center">
            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                </path>
            </svg>
            All illimited components Tailwind
        </li>
        <li class="mb-3 flex items-center">
            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                </path>
            </svg>
            Own analitycs templates
        </li>
        <li class="mb-3 flex items-center">
            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                </path>
            </svg>
            24/24 support link
        </li>
    </ul>
    <span class="w-56 block bg-gray-100 h-1 rounded-lg my-2">
    </span>
    <ul class="text-sm text-black dark:text-white w-full mt-6 mb-6">
        <li class="mb-3 flex items-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z">
                </path>
            </svg>
            <div>
                All free dashboard
                <a href="#" class="text-red-500 font-semibold">
                    free plan
                </a>
            </div>
        </li>
        <li class="mb-3 flex items-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z">
                </path>
            </svg>
            <div>
                Best ranking
            </div>
        </li>
        <li class="mb-3 flex items-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z">
                </path>
            </svg>
            <div>
                Chocolate and meel
            </div>
        </li>
    </ul>
</div>



<div class="relative max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="pricing-box max-w-lg mx-auto rounded-lg shadow-lg overflow-hidden lg:max-w-none lg:flex">
        <div class="bg-white dark:bg-gray-800 px-6 py-8 lg:flex-shrink-1 lg:p-12">
            <h3 class="text-2xl leading-8 font-extrabold text-gray-900 sm:text-3xl sm:leading-9 dark:text-white">
                Zero Commission
            </h3>
            <p class="mt-6 text-base leading-6 text-gray-500 dark:text-gray-200">
                Start selling online for free with all the features you need to launch your local delivery and pick-up service, nothing more. We don&#x27;t charge commission or monthly fees, keep all your margin.
            </p>
            <div class="mt-8">
                <div class="flex items-center">
                    <h4 class="flex-shrink-0 pr-4 bg-white dark:bg-gray-800 text-sm leading-5 tracking-wider font-semibold uppercase text-indigo-600">
                        What&#x27;s included
                    </h4>
                    <div class="flex-1 border-t-2 border-gray-200">
                    </div>
                </div>
                <ul class="mt-8 lg:grid lg:grid-cols-2 lg:col-gap-8 lg:row-gap-5">
                    <li class="flex items-start lg:col-span-1">
                        <div class="flex-shrink-0">
                            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6" stroke="currentColor" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                        </div>
                        <p class="ml-3 text-sm leading-5 text-gray-700 dark:text-gray-200">
                            All illimited components
                        </p>
                    </li>
                    <li class="flex items-start lg:col-span-1">
                        <div class="flex-shrink-0">
                            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6" stroke="currentColor" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                        </div>
                        <p class="ml-3 text-sm leading-5 text-gray-700 dark:text-gray-200">
                            Own custom Tailwind styles
                        </p>
                    </li>
                    <li class="flex items-start lg:col-span-1">
                        <div class="flex-shrink-0">
                            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6" stroke="currentColor" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                        </div>
                        <p class="ml-3 text-sm leading-5 text-gray-700 dark:text-gray-200">
                            Unlimited Templates
                        </p>
                    </li>
                    <li class="flex items-start lg:col-span-1">
                        <div class="flex-shrink-0">
                            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6" stroke="currentColor" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                        </div>
                        <p class="ml-3 text-sm leading-5 text-gray-700 dark:text-gray-200">
                            Free premium dashboard
                        </p>
                    </li>
                    <li class="flex items-start lg:col-span-1">
                        <div class="flex-shrink-0">
                            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6" stroke="currentColor" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                        </div>
                        <p class="ml-3 text-sm leading-5 text-gray-700 dark:text-gray-200">
                            Best ranking
                        </p>
                    </li>
                    <li class="flex items-start lg:col-span-1">
                        <div class="flex-shrink-0">
                            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6" stroke="currentColor" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                        </div>
                        <p class="ml-3 text-sm leading-5 text-gray-700 dark:text-gray-200">
                            Prenium svg
                        </p>
                    </li>
                    <li class="flex items-start lg:col-span-1">
                        <div class="flex-shrink-0">
                            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6" stroke="currentColor" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                        </div>
                        <p class="ml-3 text-sm leading-5 text-gray-700 dark:text-gray-200">
                            My wife
                        </p>
                    </li>
                </ul>
            </div>
            <div class="mt-8">
                <div class="flex items-center">
                    <h4 class="flex-shrink-0 pr-4 bg-white text-sm dark:bg-gray-800 leading-5 tracking-wider font-semibold uppercase text-indigo-600">
                        &amp; What&#x27;s not
                    </h4>
                </div>
                <ul class="mt-8 lg:grid lg:grid-cols-2 lg:col-gap-8 lg:row-gap-5">
                    <li class="flex items-start lg:col-span-1">
                        <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" class="h-6 w-6 mr-2" fill="red" viewBox="0 0 1792 1792">
                                <path d="M1277 1122q0-26-19-45l-181-181 181-181q19-19 19-45 0-27-19-46l-90-90q-19-19-46-19-26 0-45 19l-181 181-181-181q-19-19-45-19-27 0-46 19l-90 90q-19 19-19 46 0 26 19 45l181 181-181 181q-19 19-19 45 0 27 19 46l90 90q19 19 46 19 26 0 45-19l181-181 181 181q19 19 45 19 27 0 46-19l90-90q19-19 19-46zm387-226q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                        </div>
                        <p class="ml-3 text-sm leading-5 text-gray-700 dark:text-gray-200">
                            No Contracts. No monthly, setup, or additional payment processor fees
                        </p>
                    </li>
                    <li class="flex items-start lg:col-span-1">
                        <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" class="h-6 w-6 mr-2" fill="red" viewBox="0 0 1792 1792">
                                <path d="M1277 1122q0-26-19-45l-181-181 181-181q19-19 19-45 0-27-19-46l-90-90q-19-19-46-19-26 0-45 19l-181 181-181-181q-19-19-45-19-27 0-46 19l-90 90q-19 19-19 46 0 26 19 45l181 181-181 181q-19 19-19 45 0 27 19 46l90 90q19 19 46 19 26 0 45-19l181-181 181 181q19 19 45 19 27 0 46-19l90-90q19-19 19-46zm387-226q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                        </div>
                        <p class="ml-3 text-sm leading-5 text-gray-700 dark:text-gray-200">
                            No 2-week on-boarding, it takes 20 minutes!
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="py-8 px-6 text-center bg-gray-50 dark:bg-gray-700 lg:flex-shrink-0 lg:flex lg:flex-col lg:justify-center lg:p-12">
            <p class="text-lg leading-6 font-bold text-gray-900 dark:text-white">
                Free
            </p>
            <div class="mt-4 flex items-center justify-center text-5xl leading-none font-extrabold text-gray-900 dark:text-white">
                <span>
                    $0/mo
                </span>
            </div>
            <p class="mt-4 text-sm leading-5">
                <span class="block font-medium text-gray-500 dark:text-gray-400">
                    Card payments:
                </span>
                <span class=" inline-block font-medium text-gray-500 dark:text-gray-400">
                    2.9% + 20p per transaction
                </span>
            </p>
            <div class="mt-6">
                <div class="rounded-md shadow">
                    <button type="button" class="py-2 px-4  bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                        Create your store
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


    
    
  
        <div class="bg-white dark:bg-gray-900">
            <div class="container px-6 py-8 mx-auto">
                <p class="text-xl text-center text-gray-500 dark:text-gray-300">
                    Choose your plan
                </p>

                <h1 class="mt-4 text-3xl font-semibold text-center text-gray-800 capitalize lg:text-4xl dark:text-white">Pricing Plan</h1>
            
                
                <div class="mt-6 space-y-8 xl:mt-12">
                    <div class="flex items-center justify-between max-w-2xl px-8 py-4 mx-auto border cursor-pointer rounded-xl dark:border-gray-700">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 sm:h-9 sm:w-9" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>

                            <div class="flex flex-col items-center mx-5 space-y-1">
                                <h2 class="text-lg font-medium text-gray-700 sm:text-2xl dark:text-gray-200">Basic</h2>
                                <div class="px-2 text-xs text-blue-500 bg-gray-100 rounded-full sm:px-4 sm:py-1 dark:bg-gray-700 ">
                                    Save 20%
                                </div>
                            </div>
                        </div>
                        
                        <h2 class="text-2xl font-semibold text-gray-500 sm:text-4xl dark:text-gray-300">$49 <span class="text-base font-medium">/Month</span></h2>
                    </div>

                    <div class="flex items-center justify-between max-w-2xl px-8 py-4 mx-auto border border-blue-500 cursor-pointer rounded-xl">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-600 sm:h-9 sm:w-9" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>

                            <div class="flex flex-col items-center mx-5 space-y-1">
                                <h2 class="text-lg font-medium text-gray-700 sm:text-2xl dark:text-gray-200">Popular</h2>
                                <div class="px-2 text-xs text-blue-500 bg-gray-100 rounded-full sm:px-4 sm:py-1 dark:bg-gray-700 ">
                                    Save 20%
                                </div>
                            </div>
                        </div>
                        
                        <h2 class="text-2xl font-semibold text-blue-600 sm:text-4xl">$99 <span class="text-base font-medium">/Month</span></h2>
                    </div>

                    <div class="flex items-center justify-between max-w-2xl px-8 py-4 mx-auto border cursor-pointer rounded-xl dark:border-gray-700">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 sm:h-9 sm:w-9" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>

                            <div class="flex flex-col items-center mx-5 space-y-1">
                                <h2 class="text-lg font-medium text-gray-700 sm:text-2xl dark:text-gray-200">Enterprise</h2>
                                <div class="px-2 text-xs text-blue-500 bg-gray-100 rounded-full sm:px-4 sm:py-1 dark:bg-gray-700 ">
                                    Save 20%
                                </div>
                            </div>
                        </div>
                        
                        <h2 class="text-2xl font-semibold text-gray-500 sm:text-4xl dark:text-gray-300">$149 <span class="text-base font-medium">/Month</span></h2>
                    </div>

                    <div class="flex justify-center">
                        <button class="px-8 py-2 tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                            Choose Plan
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="bg-white dark:bg-gray-900">
            <div class="container px-6 py-8 mx-auto">
                <h1 class="text-3xl font-semibold text-center text-gray-800 capitalize lg:text-4xl dark:text-white">Simple pricing plan</h1>
                
                <p class="max-w-2xl mx-auto mt-4 text-center text-gray-500 xl:mt-6 dark:text-gray-300">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias quas magni libero consequuntur voluptatum velit amet id repudiandae ea, deleniti laborum in neque eveniet.
                </p>
                
                <div class="grid grid-cols-1 gap-8 mt-6 lg:grid-cols-3 xl:mt-12">
                    <div class="flex items-center justify-between px-8 py-4 border cursor-pointer rounded-xl dark:border-gray-700">
                        <div class="flex flex-col items-center space-y-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 sm:h-7 sm:w-7" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>

                            <h2 class="text-lg font-medium text-gray-700 sm:text-xl dark:text-gray-200">Basic</h2>
                        </div>
                        
                        <h2 class="text-2xl font-semibold text-gray-500 sm:text-3xl dark:text-gray-300">Free</h2>
                    </div>

                    <div class="flex items-center justify-between px-8 py-4 border border-blue-500 cursor-pointer rounded-xl">
                        <div class="flex flex-col items-center space-y-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-600 dark:text-blue-500 sm:h-7 sm:w-7" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>

                            <h2 class="text-lg font-medium text-gray-700 sm:text-xl dark:text-gray-200">Standard</h2>
                        </div>
                        
                        
                        <div class="flex flex-col items-center space-y-1">
                            <div class="px-2 text-xs text-blue-500 bg-gray-100 rounded-full dark:text-blue-400 sm:px-4 sm:py-1 dark:bg-gray-700 ">
                                Save 30%
                            </div>

                            <h2 class="text-2xl font-semibold text-blue-600 dark:text-blue-500 sm:text-3xl">$99 <span class="text-base font-medium">/Yearly</span></h2>
                        </div>
                    </div>

                    <div class="flex items-center justify-between px-8 py-4 border cursor-pointer rounded-xl dark:border-gray-700">
                        <div class="flex flex-col items-center space-y-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 sm:h-7 sm:w-7" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>

                            <h2 class="text-lg font-medium text-gray-700 sm:text-xl dark:text-gray-200">Pro</h2>
                        </div>

                        <div class="flex flex-col items-center space-y-1">
                                <div class="px-2 text-xs text-blue-500 bg-gray-100 rounded-full dark:text-blue-400 sm:px-4 sm:py-1 dark:bg-gray-700 ">
                                    Save 20%
                                </div>

                                <h2 class="text-2xl font-semibold text-gray-500 sm:text-3xl dark:text-gray-300">$149 <span class="text-base font-medium">/Month</span></h2>
                            </div>
                    </div>
                </div>

                <div class="p-8 mt-8 space-y-8 bg-gray-100 dark:bg-gray-800 rounded-xl">
                    <div class="flex items-center justify-between text-gray-800 dark:text-gray-200">
                        <p class="textlg sm:text-xl">Unlimited Links</p>

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500 sm:h-7 sm:w-7" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                    </div>

                    <div class="flex items-center justify-between text-gray-800 dark:text-gray-200">
                        <p class="textlg sm:text-xl">Own analytics platfrom</p>

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500 sm:h-7 sm:w-7" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                    </div>

                    <div class="flex items-center justify-between text-gray-800 dark:text-gray-200">
                        <p class="textlg sm:text-xl">Full Support with discussion</p>

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500 sm:h-7 sm:w-7" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                    </div>

                    <div class="flex items-center justify-between text-gray-800 dark:text-gray-200">
                        <p class="textlg sm:text-xl">Optimize hashtags</p>

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-400 sm:h-7 sm:w-7" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd" />
                        </svg>
                    </div>

                    <div class="flex items-center justify-between text-gray-800 dark:text-gray-200">
                        <p class="textlg sm:text-xl">Mobile app</p>

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500 sm:h-7 sm:w-7" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                    </div>

                    <div class="flex items-center justify-between text-gray-800 dark:text-gray-200">
                        <p class="textlg sm:text-xl">Unlimited users</p>

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-400 sm:h-7 sm:w-7" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
                
                <div class="flex justify-center mt-8">
                    <button class="px-8 py-2 tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                        Choose Plan
                    </button>
                </div>
            </div>
        </div>
        
        <div class="bg-white dark:bg-gray-900">
            <div class="container px-6 py-8 mx-auto">
                <div class="xl:items-center xl:-mx-8 xl:flex">
                    <div class="flex flex-col items-center xl:items-start xl:mx-8">
                        <h1 class="text-3xl font-medium text-gray-800 capitalize lg:text-4xl dark:text-white">Our Pricing Plan</h1>

                        <div class="mt-4">
                            <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
                            <span class="inline-block w-3 h-1 mx-1 bg-blue-500 rounded-full"></span>
                            <span class="inline-block w-1 h-1 bg-blue-500 rounded-full"></span>
                        </div>

                        <p class="mt-4 font-medium text-gray-500 dark:text-gray-300">
                            You can get All Access by selecting your plan!
                        </p>

                        <a href="#" class="flex items-center mt-4 -mx-1 text-sm text-gray-700 capitalize dark:text-blue-400 hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                            <span class="mx-1">read more</span>
                            <svg class="w-4 h-4 mx-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>

                    <div class="flex-1 xl:mx-8">
                        <div class="mt-8 space-y-8 md:-mx-4 md:flex md:items-center md:justify-center md:space-y-0 xl:mt-0">
                            <div class="max-w-sm mx-auto border rounded-lg md:mx-4 dark:border-gray-700">
                                <div class="p-6">
                                    <h1 class="text-xl font-medium text-gray-700 capitalize lg:text-3xl dark:text-white">Essential</h1>

                                    <p class="mt-4 text-gray-500 dark:text-gray-300">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum quam voluptatibus
                                    </p>

                                    <h2 class="mt-4 text-2xl font-medium text-gray-700 sm:text-4xl dark:text-gray-300">$3.00 <span class="text-base font-medium">/Month</span></h2>

                                    <p class="mt-1 text-gray-500 dark:text-gray-300">
                                        Yearly payment
                                    </p>

                                    <button class="w-full px-4 py-2 mt-6 tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                                        Start Now
                                    </button>
                                </div>

                                <hr class="border-gray-200 dark:border-gray-700">

                                <div class="p-6">
                                    <h1 class="text-lg font-medium text-gray-700 capitalize lg:text-xl dark:text-white">What’s included:</h1>

                                    <div class="mt-8 space-y-4">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>

                                            <span class="mx-4 text-gray-700 dark:text-gray-300">All limited links</span>
                                        </div>

                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>

                                            <span class="mx-4 text-gray-700 dark:text-gray-300">Own analytics platform</span>
                                        </div>

                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>

                                            <span class="mx-4 text-gray-700 dark:text-gray-300">Chat support</span>
                                        </div>

                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>

                                            <span class="mx-4 text-gray-700 dark:text-gray-300">Optimize hashtags</span>
                                        </div>

                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd" />
                                            </svg>

                                            <span class="mx-4 text-gray-700 dark:text-gray-300">Mobile app</span>
                                        </div>

                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd" />
                                            </svg>

                                            <span class="mx-4 text-gray-700 dark:text-gray-300">Unlimited users</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="max-w-sm mx-auto border rounded-lg md:mx-4 dark:border-gray-700">
                                <div class="p-6">
                                    <h1 class="text-xl font-medium text-gray-700 capitalize lg:text-3xl dark:text-white">Premium</h1>

                                    <p class="mt-4 text-gray-500 dark:text-gray-300">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum quam voluptatibus
                                    </p>

                                    <h2 class="mt-4 text-2xl font-medium text-gray-700 sm:text-4xl dark:text-gray-300">$50.00 <span class="text-base font-medium">/life time</span></h2>

                                    <p class="mt-1 text-gray-500 dark:text-gray-300">
                                        One time payment
                                    </p>

                                    <button class="w-full px-4 py-2 mt-6 tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                                        Start Now
                                    </button>
                                </div>

                                <hr class="border-gray-200 dark:border-gray-700">

                                <div class="p-6">
                                    <h1 class="text-lg font-medium text-gray-700 capitalize lg:text-xl dark:text-white">What’s included:</h1>

                                    <div class="mt-8 space-y-4">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>

                                            <span class="mx-4 text-gray-700 dark:text-gray-300">All limited links</span>
                                        </div>

                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>

                                            <span class="mx-4 text-gray-700 dark:text-gray-300">Own analytics platform</span>
                                        </div>

                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>

                                            <span class="mx-4 text-gray-700 dark:text-gray-300">Chat support</span>
                                        </div>

                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>

                                            <span class="mx-4 text-gray-700 dark:text-gray-300">Optimize hashtags</span>
                                        </div>

                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>

                                            <span class="mx-4 text-gray-700 dark:text-gray-300">Mobile app</span>
                                        </div>

                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>

                                            <span class="mx-4 text-gray-700 dark:text-gray-300">Unlimited users</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    <div class="bg-white dark:bg-gray-800">
        <div class="container px-6 py-8 mx-auto">
            <div class="flex flex-col items-center justify-center space-y-8 lg:-mx-4 lg:flex-row lg:items-stretch lg:space-y-0">
                <div class="flex flex-col w-full max-w-sm p-8 space-y-8 text-center bg-white border-2 border-gray-200 rounded-lg lg:mx-4 dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex-shrink-0">
                        <h2 class="inline-flex items-center justify-center px-2 font-semibold tracking-tight text-blue-400 uppercase rounded-lg bg-gray-50 dark:bg-gray-700">
                            Casual
                        </h2>
                    </div>
                    <div class="flex-shrink-0">
                        <span
                            class="pt-2 text-4xl font-bold text-gray-800 uppercase dark:text-gray-100"
                        >
                            Free
                        </span>
                    </div>
                    <ul class="flex-1 space-y-4">
                        <li class="text-gray-500 dark:text-gray-400">
                            Up to 5 projects
                        </li>
                        <li class="text-gray-500 dark:text-gray-400">
                            Up to 10 collaborators
                        </li>
                        <li class="text-gray-500 dark:text-gray-400">
                            2Gb of storage
                        </li>
                    </ul>

                    <button
                        class="inline-flex items-center justify-center px-4 py-2 font-medium text-white uppercase transition-colors bg-blue-500 rounded-lg hover:bg-blue-700 focus:outline-none"
                    >
                        Start free
                    </button>
                </div>

                <div class="flex flex-col w-full max-w-sm p-8 space-y-8 text-center bg-white border-2 border-gray-200 rounded-lg lg:mx-4 dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex-shrink-0">
                        <h2
                            class="inline-flex items-center justify-center px-2 font-semibold tracking-tight text-blue-400 uppercase rounded-lg bg-gray-50 dark:bg-gray-700"
                        >
                            Professional
                        </h2>
                    </div>
                    <div class="flex-shrink-0">
                        <span
                            class="pt-2 text-4xl font-bold text-gray-800 uppercase dark:text-gray-100"
                        >
                            $24.90
                        </span>
                        <span class="text-gray-500 dark:text-gray-400">
                            /month
                        </span>
                    </div>
                    <ul class="flex-1 space-y-4">
                        <li class="text-gray-500 dark:text-gray-400">
                            Up to 10 projects
                        </li>
                        <li class="text-gray-500 dark:text-gray-400">
                            Up to 20 collaborators
                        </li>
                        <li class="text-gray-500 dark:text-gray-400">
                            10Gb of storage
                        </li>
                        <li class="text-gray-500 dark:text-gray-400">
                            Real-time collaborations
                        </li>
                    </ul>

                    <button
                        class="inline-flex items-center justify-center px-4 py-2 font-medium text-white uppercase transition-colors bg-blue-500 rounded-lg hover:bg-blue-700 focus:outline-none"
                    >
                        Start free trial
                    </button>
                </div>

                <div class="flex flex-col w-full max-w-sm p-8 space-y-8 text-center bg-white border-2 border-gray-200 rounded-lg lg:mx-4 dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex-shrink-0">
                        <h2
                            class="inline-flex items-center justify-center px-2 font-semibold tracking-tight text-blue-400 uppercase rounded-lg bg-gray-50 dark:bg-gray-700"
                        >
                            Expert
                        </h2>
                    </div>
                    <div class="flex-shrink-0">
                        <span
                            class="pt-2 text-4xl font-bold text-gray-800 uppercase dark:text-gray-100"
                        >
                            $49.90
                        </span>
                        <span class="text-gray-500 dark:text-gray-400">
                            /month
                        </span>
                    </div>
                    <ul class="flex-1 space-y-4">
                        <li class="text-gray-500 dark:text-gray-400">
                            Unlimited projects
                        </li>
                        <li class="text-gray-500 dark:text-gray-400">
                            Unlimited collaborators
                        </li>
                        <li class="text-gray-500 dark:text-gray-400">
                            Unlimited storage
                        </li>
                        <li class="text-gray-500 dark:text-gray-400">
                            Real-time collaborations
                        </li>
                        <li class="text-gray-500 dark:text-gray-400">
                            24x7 Support
                        </li>
                    </ul>

                    <button
                        class="inline-flex items-center justify-center px-4 py-2 font-medium text-white uppercase transition-colors bg-blue-500 rounded-lg hover:bg-blue-700 focus:outline-none"
                    >
                        Start free trial
                    </button>
                </div>
            </div>
        </div>
    </div>
    
        <section class="bg-white dark:bg-gray-800">
            <div class="container px-6 py-8 mx-auto">
                <div class="max-w-2xl p-1.5 mx-auto overflow-hidden bg-gray-100 rounded-lg dark:bg-gray-700">
                    <div class="grid gap-3 md:grid-cols-3">
                        <button class="px-3 py-2 font-medium text-gray-800 uppercase transition-colors duration-200 transform bg-transparent rounded-lg focus:outline-none dark:text-gray-200 dark:hover:bg-gray-600 hover:bg-gray-200">Monthly</button>
                        
                        <button class="flex items-center justify-center px-3 py-2 font-medium text-gray-800 uppercase transition-colors duration-200 transform bg-gray-200 rounded-lg dark:bg-gray-600 focus:outline-none dark:text-gray-200">
                            <span class="mx-1">Biannually</span>
                            <span class="text-xs mx-1 font-normal text-white bg-blue-500 rounded-full py-0.5 px-1.5">save 10%</span>
                        </button>

                        <button class="flex items-center justify-center px-3 py-2 font-medium text-gray-800 uppercase transition-colors duration-200 transform bg-transparent rounded-lg focus:outline-none dark:text-gray-200 dark:hover:bg-gray-600 hover:bg-gray-200">
                            <span class="mx-1">Annually</span>
                            <span class="text-xs mx-1 font-normal text-white bg-blue-500 rounded-full py-0.5 px-1.5">save 20%</span>
                        </button>
                    </div>
                </div>

                <div class="flex flex-col items-center justify-center mt-16 space-y-6 md:items-end md:-mx-5 md:space-y-0 md:flex-row">
                    <div class="w-full px-6 py-4 transition-colors duration-200 transform rounded-lg md:mx-5 md:w-96 bg-gray-50 dark:bg-gray-700">
                        <div class="text-center">
                            <p class="text-4xl font-semibold text-gray-800 dark:text-gray-100">Basic</p>
                            <p class="mt-4 text-gray-500 dark:text-gray-300">Essentail Features</p>
                            <h4 class="mt-2 text-gray-600 line-through dark:text-gray-400">$59.99</h4>
                            <h4 class="mt-2 text-5xl font-semibold text-gray-800 dark:text-gray-100">$53.99</h4>
                            <p class="mt-4 text-gray-500 dark:text-gray-300">/pre month</p>
                            <p class="mt-4 text-gray-500 dark:text-gray-300">Bill all 6 months</p>

                        </div>

                        <div class="mt-8 space-y-8">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>

                                <span class="mx-4 text-gray-700 dark:text-gray-300">Access all features</span>
                            </div>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>

                                <span class="mx-4 text-gray-700 dark:text-gray-300">5 wathclists included</span>
                            </div>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>

                                <span class="mx-4 text-gray-700 dark:text-gray-300">Chat support</span>
                            </div>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>

                                <span class="mx-4 text-gray-700 dark:text-gray-300">Optimize hashtags</span>
                            </div>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>

                                <span class="mx-4 text-gray-700 dark:text-gray-300">5 exclusive widgets</span>
                            </div>
                        </div>

                        <button class="w-full px-4 py-2 mt-10 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                            Choose Basic
                        </button>
                    </div>

                    <div class="w-full overflow-hidden transition-colors duration-200 transform rounded-lg md:mx-5 md:w-96 bg-gray-50 dark:bg-gray-700">
                        <p class="py-2 text-sm text-center text-white uppercase bg-blue-500">Recommended by experts</p>
                        <div class="px-6 py-4">
                            <div class="text-center">
                                <p class="text-4xl font-semibold text-gray-800 dark:text-gray-100">Pro</p>
                                <p class="mt-4 text-gray-500 dark:text-gray-300">Advance Features</p>
                                <h4 class="mt-2 text-gray-600 line-through dark:text-gray-400">$89.99</h4>
                                <h4 class="mt-2 text-5xl font-semibold text-gray-800 dark:text-gray-100">$80.99</h4>
                                <p class="mt-4 text-gray-500 dark:text-gray-300">/pre month</p>
                                <p class="mt-4 text-gray-500 dark:text-gray-300">Bill all 6 months</p>

                            </div>

                            <div class="mt-8 space-y-8">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4 text-gray-700 dark:text-gray-300">Access all features</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4 text-gray-700 dark:text-gray-300">Unlimited wathclists</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4 text-gray-700 dark:text-gray-300">Chat support</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4 text-gray-700 dark:text-gray-300">Optimize hashtags</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4 text-gray-700 dark:text-gray-300">10+ exclusive pro widgets</span>
                                </div>
                            </div>

                            <button class="w-full px-4 py-2 mt-10 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                                Choose Pro
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    <section class="bg-white dark:bg-gray-800">
        <div class="container px-6 py-8 mx-auto">
            <div class="sm:flex sm:items-center sm:justify-between">
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100">Simple, transparent pricing</h2>
                    <p class="mt-4 text-gray-500 dark:text-gray-400">No Contracts. No surorise fees.</p>
                </div>

                <div class="overflow-hidden p-0.5 mt-6 border rounded-lg dark:border-gray-700">
                    <div class="sm:-mx-0.5 flex">
                        <button class=" focus:outline-none px-3 w-1/2 sm:w-auto py-1 sm:mx-0.5 text-white bg-blue-500 rounded-lg">Monthly</button>
                        <button class=" focus:outline-none px-3 w-1/2 sm:w-auto py-1 sm:mx-0.5 text-gray-800 dark:text-gray-200 dark:hover:bg-gray-700 bg-transparent rounded-lg hover:bg-gray-200">Yearly</button>
                    </div>
                </div>
            </div>

            <div class="grid gap-6 mt-16 -mx-6 sm:gap-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                <div class="px-6 py-4 transition-colors duration-200 transform rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700">
                    <p class="text-lg font-medium text-gray-800 dark:text-gray-100">Intro</p>
                    <h4 class="mt-2 text-4xl font-semibold text-gray-800 dark:text-gray-100">$19 <span class="text-base font-normal text-gray-600 dark:text-gray-400">/ Month</span></h4>
                    <p class="mt-4 text-gray-500 dark:text-gray-300">For most businesses that want to optimaize web queries.</p>

                    <div class="mt-8 space-y-8">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>

                            <span class="mx-4 text-gray-700 dark:text-gray-300">All limited links</span>
                        </div>

                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>

                            <span class="mx-4 text-gray-700 dark:text-gray-300">Own analytics platform</span>
                        </div>

                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>

                            <span class="mx-4 text-gray-700 dark:text-gray-300">Chat support</span>
                        </div>

                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>

                            <span class="mx-4 text-gray-700 dark:text-gray-300">Optimize hashtags</span>
                        </div>

                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>

                            <span class="mx-4 text-gray-700 dark:text-gray-300">Unlimited users</span>
                        </div>
                    </div>

                    <button class="w-full px-4 py-2 mt-10 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                        Choose plan
                    </button>
                </div>

                <div class="px-6 py-4 transition-colors duration-200 transform rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700">
                    <p class="text-lg font-medium text-gray-800 dark:text-gray-100">Base</p>
                    <h4 class="mt-2 text-4xl font-semibold text-gray-800 dark:text-gray-100">$39 <span class="text-base font-normal text-gray-600 dark:text-gray-400">/ Month</span></h4>
                    <p class="mt-4 text-gray-500 dark:text-gray-300">For most businesses that want to optimaize web queries.</p>

                    <div class="mt-8 space-y-8">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>

                            <span class="mx-4 text-gray-700 dark:text-gray-300">All limited links</span>
                        </div>

                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>

                            <span class="mx-4 text-gray-700 dark:text-gray-300">Own analytics platform</span>
                        </div>

                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>

                            <span class="mx-4 text-gray-700 dark:text-gray-300">Chat support</span>
                        </div>

                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>

                            <span class="mx-4 text-gray-700 dark:text-gray-300">Optimize hashtags</span>
                        </div>

                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>

                            <span class="mx-4 text-gray-700 dark:text-gray-300">Unlimited users</span>
                        </div>
                    </div>

                    <button class="w-full px-4 py-2 mt-10 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                        Choose plan
                    </button>
                </div>

                <div class="px-6 py-4 transition-colors duration-200 transform bg-gray-700 rounded-lg dark:bg-gray-600">
                    <p class="text-lg font-medium text-gray-100">Popular</p>
                    <h4 class="mt-2 text-4xl font-semibold text-gray-100">$99 <span class="text-base font-normal text-gray-400">/ Month</span></h4>
                    <p class="mt-4 text-gray-300">For most businesses that want to optimaize web queries.</p>

                    <div class="mt-8 space-y-8">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>

                            <span class="mx-4 text-gray-300">All limited links</span>
                        </div>

                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>

                            <span class="mx-4 text-gray-300">Own analytics platform</span>
                        </div>

                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>

                            <span class="mx-4 text-gray-300">Chat support</span>
                        </div>

                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>

                            <span class="mx-4 text-gray-300">Optimize hashtags</span>
                        </div>

                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>

                            <span class="mx-4 text-gray-300">Unlimited users</span>
                        </div>
                    </div>

                    <button class="w-full px-4 py-2 mt-10 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                        Choose plan
                    </button>
                </div>

                <div class="px-6 py-4 transition-colors duration-200 transform rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700">
                    <p class="text-lg font-medium text-gray-800 dark:text-gray-100">Exterprise</p>
                    <h4 class="mt-2 text-4xl font-semibold text-gray-800 dark:text-gray-100">$199 <span class="text-base font-normal text-gray-600 dark:text-gray-400">/ Month</span></h4>
                    <p class="mt-4 text-gray-500 dark:text-gray-300">For most businesses that want to optimaize web queries.</p>

                    <div class="mt-8 space-y-8">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>

                            <span class="mx-4 text-gray-700 dark:text-gray-300">All limited links</span>
                        </div>

                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>

                            <span class="mx-4 text-gray-700 dark:text-gray-300">Own analytics platform</span>
                        </div>

                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>

                            <span class="mx-4 text-gray-700 dark:text-gray-300">Chat support</span>
                        </div>

                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>

                            <span class="mx-4 text-gray-700 dark:text-gray-300">Optimize hashtags</span>
                        </div>

                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>

                            <span class="mx-4 text-gray-700 dark:text-gray-300">Unlimited users</span>
                        </div>
                    </div>

                    <button class="w-full px-4 py-2 mt-10 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                        Choose plan
                    </button>
                </div>
            </div>
        </div>
    </section>
    


  </div>
</template>

<style lang="scss" scoped>
</style>
