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
    <v-app>

      <!-- <v-app-bar app></v-app-bar> -->

      <v-main>
        <v-container fluid>
          <nav class="navbar fixed-top">
            <div class="container sm:px-4 lg:px-8 flex flex-wrap items-center justify-between lg:flex-nowrap">
                <a class="text-gray-800 font-semibold text-3xl leading-4 no-underline page-scroll" href="index.html">Pavo</a>

                <!-- Image Logo -->
                <a class="inline-block mr-4 py-0.5 text-xl whitespace-nowrap hover:no-underline focus:no-underline" href="index.html">
                    <img src="/storage/test/sgb/logo.svg" alt="alternative" class="h-8" />
                </a>

                <button class="background-transparent rounded text-xl leading-none hover:no-underline focus:no-underline lg:hidden lg:text-gray-400" type="button" data-toggle="offcanvas">
                    <span class="navbar-toggler-icon inline-block w-8 h-8 align-middle"></span>
                </button>

                <div class="navbar-collapse offcanvas-collapse lg:flex lg:flex-grow lg:items-center" id="navbarsExampleDefault">
                    <ul class="pl-0 mt-3 mb-2 ml-auto flex flex-col list-none lg:mt-0 lg:mb-0 lg:flex-row">
                        <li>
                            <a class="nav-link page-scroll active" href="#header">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="#features">Features</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="#details">Details</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="#pricing">Pricing</a>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Drop</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                <a class="dropdown-item page-scroll" href="article.html">Article Details</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item page-scroll" href="terms.html">Terms Conditions</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item page-scroll" href="privacy.html">Privacy Policy</a>
                            </div>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="#download">Download</a>
                        </li>
                    </ul>
                    <span class="block lg:ml-3.5">
                        <a class="no-underline" href="#your-link">
                            <i class="fab fa-apple text-indigo-600 hover:text-pink-500 text-xl transition-all duration-200 mr-1.5"></i>
                        </a>
                        <a class="no-underline" href="#your-link">
                            <i class="fab fa-android text-indigo-600 hover:text-pink-500 text-xl transition-all duration-200"></i>
                        </a>
                    </span>
                </div> <!-- end of navbar-collapse -->
            </div> <!-- end of container -->
        </nav> <!-- end of navbar -->

        <!-- Header -->
        <header id="header" class="header py-28 text-center md:pt-36 lg:text-left xl:pt-44 xl:pb-32">
            <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-2 lg:gap-x-8">
                <div class="mb-16 lg:mt-32 xl:mt-40 xl:mr-12">
                    <h1 class="h1-large mb-5">Team management mobile application</h1>
                    <p class="p-large mb-8">Start getting things done together with your team based on Pavo's revolutionary team management features</p>
                    <a class="btn-solid-lg" href="#your-link"><i class="fab fa-apple"></i>Download</a>
                    <a class="btn-solid-lg secondary" href="#your-link"><i class="fab fa-google-play"></i>Download</a>
                </div>
                <div class="xl:text-right">
                    <img class="inline" src="/storage/test/sgb/header-smartphone.png" alt="alternative" />
                </div>
            </div> <!-- end of container -->
        </header> <!-- end of header -->
        <!-- end of header -->


        <!-- Introduction -->
        <div class="pt-4 pb-14 text-center">
            <div class="container px-4 sm:px-8 xl:px-4">
                <p class="mb-4 text-gray-800 text-3xl leading-10 lg:max-w-5xl lg:mx-auto"> Team management mobile apps don’t get better than Pavo. It’s probably the best app in the world for this purpose. Don’t hesitate to give it a try today and you will fall in love with it</p>
            </div> <!-- end of container -->
        </div>
        <!-- end of introduction -->


        <!-- Features -->
        <div id="features" class="cards-1">
            <div class="container px-4 sm:px-8 xl:px-4">

                <!-- Card -->
                <div class="card">
                    <div class="card-image">
                        <img src="/storage/test/sgb/features-icon-1.svg" alt="alternative" />
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Platform Integration</h5>
                        <p class="mb-4">You sales force can use the app on any smartphone platform without compatibility issues</p>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <div class="card-image">
                        <img src="/storage/test/sgb/features-icon-2.svg" alt="alternative" />
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Easy On Resources</h5>
                        <p class="mb-4">Works smoothly even on older generation hardware due to our optimization efforts</p>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <div class="card-image">
                        <img src="/storage/test/sgb/features-icon-3.svg" alt="alternative" />
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Great Performance</h5>
                        <p class="mb-4">Optimized code and innovative technology insure no delays and ultra-fast responsiveness</p>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <div class="card-image">
                        <img src="/storage/test/sgb/features-icon-4.svg" alt="alternative" />
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Multiple Languages</h5>
                        <p class="mb-4">Choose from one of the 40 languages that come pre-installed and start selling smarter</p>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <div class="card-image">
                        <img src="/storage/test/sgb/features-icon-5.svg" alt="alternative" />
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Free Updates</h5>
                        <p class="mb-4">Don't worry about future costs, pay once and receive all future updates at no extra cost</p>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <div class="card-image">
                        <img src="/storage/test/sgb/features-icon-6.svg" alt="alternative" />
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Community Support</h5>
                        <p class="mb-4">Register the app and get acces to knowledge and ideas from the Pavo online community</p>
                    </div>
                </div>
                <!-- end of card -->

            </div> <!-- end of container -->
        </div> <!-- end of cards-1 -->
        <!-- end of features -->


        <!-- Details 1 -->
        <div id="details" class="pt-12 pb-16 lg:pt-16">
            <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">
                <div class="lg:col-span-5">
                    <div class="mb-16 lg:mb-0 xl:mt-16">
                        <h2 class="mb-6">Results driven ground breaking technology</h2>
                        <p class="mb-4">Based on our team's extensive experience in developing line of business applications and constructive customer feedback we reached a new level of revenue.</p>
                        <p class="mb-4">We enjoy helping small and medium sized tech businesses take a shot at established Fortune 500 companies</p>
                    </div>
                </div> <!-- end of col -->
                <div class="lg:col-span-7">
                    <div class="xl:ml-14">
                        <img class="inline" src="/storage/test/sgb/details-1.jpg" alt="alternative" />
                    </div>
                </div> <!-- end of col -->
            </div> <!-- end of container -->
        </div>
        <!-- end of details 1 -->


        <!-- Details 2 -->
        <div class="py-24">
            <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">
                <div class="lg:col-span-7">
                    <div class="mb-12 lg:mb-0 xl:mr-14">
                        <img class="inline" src="/storage/test/sgb/details-2.jpg" alt="alternative" />
                    </div>
                </div> <!-- end of col -->
                <div class="lg:col-span-5">
                    <div class="xl:mt-12">
                        <h2 class="mb-6">Instant results for the marketing department</h2>
                        <ul class="list mb-7 space-y-2">
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Features that will help you and your marketers</div>
                            </li>
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Smooth learning curve due to the knowledge base</div>
                            </li>
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Ready out-of-the-box with minor setup settings</div>
                            </li>
                        </ul>
                        <a class="btn-solid-reg popup-with-move-anim mr-1.5" href="#details-lightbox">Lightbox</a>
                        <a class="btn-outline-reg" href="article.html">Details</a>
                    </div>
                </div> <!-- end of col -->
            </div> <!-- end of container -->
        </div>
        <!-- end of details 2 -->


        <!-- Details Lightbox -->
        <!-- Lightbox -->
        <div id="details-lightbox" class="lightbox-basic zoom-anim-dialog mfp-hide">
            <div class="lg:grid lg:grid-cols-12 lg:gap-x-8">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="lg:col-span-8">
                    <div class="mb-12 text-center lg:mb-0 lg:text-left xl:mr-6">
                        <img class="inline rounded-lg" src="/storage/test/sgb/details-lightbox.jpg" alt="alternative" />
                    </div>
                </div> <!-- end of col -->
                <div class="lg:col-span-4">
                    <h3 class="mb-2">Goals Setting</h3>
                    <hr class="w-11 h-0.5 mt-0.5 mb-4 ml-0 border-none bg-indigo-600" />
                    <p>The app can easily help you track your personal development evolution if you take the time to set it up.</p>
                    <h4 class="mt-7 mb-2.5">User Feedback</h4>
                    <p class="mb-4">This is a great app which can help you save time and make your live easier. And it will help improve your productivity.</p>
                    <ul class="list mb-6 space-y-2">
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Splash screen panel</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Statistics graph report</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Events calendar layout</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Location details screen</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Onboarding steps interface</div>
                        </li>
                    </ul>
                    <a class="btn-solid-reg mfp-close page-scroll" href="#download">Download</a>
                    <button class="btn-outline-reg mfp-close as-button" type="button">Back</button>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of lightbox-basic -->
        <!-- end of lightbox -->
        <!-- end of details lightbox -->


        <!-- Details 3 -->
        <div class="pt-16 pb-12">
            <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">
                <div class="lg:col-span-5">
                    <div class="mb-16 lg:mb-0 xl:mt-16">
                        <h2 class="mb-6">Platform integration and life time free updates</h2>
                        <p class="mb-4">Get a glimpse of what this app can do for your marketing automation and understand why current users are so excited when using Pavo
                            together with their teams.</p>
                        <p class="mb-4">We will promptly answer any questions and honor your requests based on the service level agreement</p>
                    </div>
                </div> <!-- end of col -->
                <div class="lg:col-span-7">
                    <div class="ml-14">
                        <img class="inline" src="/storage/test/sgb/details-3.jpg" alt="alternative" />
                    </div>
                </div> <!-- end of col -->
            </div> <!-- end of container -->
        </div>
        <!-- end of details 3 -->


        <!-- Statistics -->
        <div class="counter">
            <div class="container px-4 sm:px-8">
                
                <!-- Counter -->
                <div id="counter">
                    <div class="cell">
                        <div class="counter-value number-count" data-count="231">1</div>
                        <p class="counter-info">Happy Users</p>
                    </div>
                    <div class="cell">
                        <div class="counter-value number-count" data-count="385">1</div>
                        <p class="counter-info">Issues Solved</p>
                    </div>
                    <div class="cell">
                        <div class="counter-value number-count" data-count="159">1</div>
                        <p class="counter-info">Good Reviews</p>
                    </div>
                    <div class="cell">
                        <div class="counter-value number-count" data-count="127">1</div>
                        <p class="counter-info">Case Studies</p>
                    </div>
                    <div class="cell">
                        <div class="counter-value number-count" data-count="211">1</div>
                        <p class="counter-info">Orders Received</p>
                    </div>
                </div>
                <!-- end of counter -->

            </div> <!-- end of container -->
        </div> <!-- end of counter -->
        <!-- end of statistics -->


        <!-- Testimonials -->
        <div class="slider-1 py-32 bg-gray">
            <div class="container px-4 sm:px-8">
                <h2 class="mb-12 text-center lg:max-w-xl lg:mx-auto">What do users think about Pavo</h2>

                <!-- Card Slider -->
                <div class="slider-container">
                    <div class="swiper-container card-slider">
                        <div class="swiper-wrapper">
                            
                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-image" src="/storage/test/sgb/testimonial-1.jpg" alt="alternative" />
                                    <div class="card-body">
                                        <p class="italic mb-3">It's been so fun to work with Pavo, I've managed to integrate it properly into my business flow and it's great</p>
                                        <p class="testimonial-author">Jude Thorn - Designer</p>
                                    </div>
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-image" src="/storage/test/sgb/testimonial-2.jpg" alt="alternative" />
                                    <div class="card-body">
                                        <p class="italic mb-3">We were so focused on launching as many campaigns as possible that we've forgotten to target our loyal customers</p>
                                        <p class="testimonial-author">Roy Smith - Developer</p>
                                    </div>
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-image" src="/storage/test/sgb/testimonial-3.jpg" alt="alternative" />
                                    <div class="card-body">
                                        <p class="italic mb-3">I've been searching for a tool like Pavo for so long. I love the reports it generates and the amazing high accuracy</p>
                                        <p class="testimonial-author">Marsha Singer - Marketer</p>
                                    </div>
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-image" src="/storage/test/sgb/testimonial-4.jpg" alt="alternative" />
                                    <div class="card-body">
                                        <p class="italic mb-3">We've been waiting for a powerful piece of software that can help businesses manage their marketing projects</p>
                                        <p class="testimonial-author">Tim Shaw - Designer</p>
                                    </div>
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-image" src="/storage/test/sgb/testimonial-5.jpg" alt="alternative" />
                                    <div class="card-body">
                                        <p class="italic mb-3">Searching for a great prototyping and layout design app was difficult but thankfully I found app suite quickly</p>
                                        <p class="testimonial-author">Lindsay Spice - Marketer</p>
                                    </div>
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-image" src="/storage/test/sgb/testimonial-6.jpg" alt="alternative" />
                                    <div class="card-body">
                                        <p class="italic mb-3">The app support team is amazing. They've helped me with some issues and I am so grateful to the entire team</p>
                                        <p class="testimonial-author">Ann Blake - Developer</p>
                                    </div>
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                        </div> <!-- end of swiper-wrapper -->

                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <!-- end of add arrows -->

                    </div> <!-- end of swiper-container -->
                </div> <!-- end of slider-container -->
                <!-- end of card slider -->

            </div> <!-- end of container -->
        </div> <!-- end of slider-1 -->
        <!-- end of testimonials -->


        <!-- Pricing -->
        <div id="pricing" class="cards-2">
            <div class="absolute bottom-0 h-40 w-full bg-white"></div>
            <div class="container px-4 pb-px sm:px-8">
                <h2 class="mb-2.5 text-white lg:max-w-xl lg:mx-auto">Pricing options for all budgets</h2>
                <p class="mb-16 text-white lg:max-w-3xl lg:mx-auto"> Our pricing plans are setup in such a way that any user can start enjoying Pavo without worrying so much about costs. They are flexible and work for any type of industry </p>

                <!-- Card-->
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">STANDARD</div>
                        <div class="price"><span class="currency">$</span><span class="value">29</span></div>
                        <div class="frequency">monthly</div>
                        <p>This basic package covers the marketing needs of small startups</p>
                        <ul class="list mb-7 space-y-2 text-left">
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>List building and relations</div>
                            </li>
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Seamless platform integration</div>
                            </li>
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Great performance on devices</div>
                            </li>
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Community support and videos</div>
                            </li>
                        </ul>
                        <div class="button-wrapper">
                            <a class="btn-solid-reg page-scroll" href="#download">Download</a>
                        </div>
                    </div>
                </div> <!-- end of card -->
                <!-- end of card -->

                <!-- Card-->
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">ADVANCED</div>
                        <div class="price"><span class="currency">$</span><span class="value">39</span></div>
                        <div class="frequency">monthly</div>
                        <p>This is a more advanced package suited for medium companies</p>
                        <ul class="list mb-7 space-y-2 text-left">
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>List building and relations</div>
                            </li>
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Seamless platform integration</div>
                            </li>
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Great performance on devices</div>
                            </li>
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Community support and videos</div>
                            </li>
                        </ul>
                        <div class="button-wrapper">
                            <a class="btn-solid-reg page-scroll" href="#download">Download</a>
                        </div>
                    </div>
                </div> <!-- end of card -->
                <!-- end of card -->

                <!-- Card-->
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">COMPLETE</div>
                        <div class="price"><span class="currency">$</span><span class="value">49</span></div>
                        <div class="frequency">monthly</div>
                        <p>This is a comprehensive package designed for big organizations</p>
                        <ul class="list mb-7 text-left space-y-2">
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>List building and relations</div>
                            </li>
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Seamless platform integration</div>
                            </li>
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Great performance on devices</div>
                            </li>
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Community support and videos</div>
                            </li>
                        </ul>
                        <div class="button-wrapper">
                            <a class="btn-solid-reg page-scroll" href="#download">Download</a>
                        </div>
                    </div>
                </div> <!-- end of card -->
                <!-- end of card -->

            </div> <!-- end of container -->
        </div> <!-- end of cards-2 -->
        <!-- end of pricing -->


        <!-- Conclusion -->
        <div id="download" class="basic-5">
            <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-2">
                <div class="mb-16 lg:mb-0">
                    <img src="/storage/test/sgb/conclusion-smartphone.png" alt="alternative" />
                </div>
                <div class="lg:mt-24 xl:mt-44 xl:ml-12">
                    <p class="mb-9 text-gray-800 text-3xl leading-10">Team management mobile applications don’t get much better than Pavo. Download it today</p>
                    <a class="btn-solid-lg" href="#your-link"><i class="fab fa-apple"></i>Download</a>
                    <a class="btn-solid-lg secondary" href="#your-link"><i class="fab fa-google-play"></i>Download</a>
                </div>
            </div> <!-- end of container -->
        </div> <!-- end of basic-5 -->
        <!-- end of conclusion -->


        <!-- Footer -->
        <div class="footer">
            <div class="container px-4 sm:px-8">
                <h4 class="mb-8 lg:max-w-3xl lg:mx-auto">Pavo is a mobile application for marketing automation and you can reach the team at <a class="text-indigo-600 hover:text-gray-500" href="mailto:email@domain.com">email@domain.com</a></h4>
                <div class="social-container">
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-twitter fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-pinterest-p fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-instagram fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-youtube fa-stack-1x"></i>
                        </a>
                    </span>
                </div> <!-- end of social-container -->
            </div> <!-- end of container -->
        </div> <!-- end of footer -->
        <!-- end of footer -->


        <!-- Copyright -->
        <div class="copyright">
            <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-3">
                <ul class="mb-4 list-unstyled p-small">
                    <li class="mb-2"><a href="article.html">Article Details</a></li>
                    <li class="mb-2"><a href="terms.html">Terms & Conditions</a></li>
                    <li class="mb-2"><a href="privacy.html">Privacy Policy</a></li>
                </ul>
                <p class="pb-2 p-small statement">Copyright © <a href="#your-link" class="no-underline">Your name</a></p>

                <p class="pb-2 p-small statement">Distributed by :<a href="https://themewagon.com/" class="no-underline">Themewagon</a></p>
            </div> 

        <!-- end of container -->
        </div> <!-- end of copyright -->
        <!-- end of copyright -->
          
        </v-container>
      </v-main>

      <v-footer app>
      </v-footer>
    </v-app>


  </div>
</template>

<style lang="scss" scoped>
/**********************/
/*     Navigation     */
/**********************/

.navbar {
    position: relative;
    background-color: #f1f9fc;
    padding: 0.5rem 1rem;
    flex-flow: row wrap;
    justify-content: space-between;
    align-items: center;
    font-weight: 600;
    font-size: 0.875rem;
    line-height: 0.75rem;
    transition: all 0.2s ease;
}

.fixed-top {
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1030;
}

.navbar-toggler-icon {
    content: "";
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: center center;
    background-size: 100% 100%;
}

.navbar-collapse {
    flex-basis: 100%;
}

.offcanvas-collapse {
    position: fixed;
    top: 3.25rem; /* adjusts the height between the top of the page and the offcanvas menu */
    bottom: 0;
    left: 100%;
    width: 100%;
    padding-right: 1rem;
    padding-left: 1rem;
    overflow-y: auto;
    visibility: hidden;
    background-color: #f1f9fc;
    transition: visibility 0.3s ease-in-out, -webkit-transform 0.3s ease-in-out;
    transition: transform 0.3s ease-in-out, visibility 0.3s ease-in-out;
    transition: transform 0.3s ease-in-out, visibility 0.3s ease-in-out, -webkit-transform 0.3s ease-in-out;
}

.offcanvas-collapse.open {
    visibility: visible;
    -webkit-transform: translateX(-100%);
    transform: translateX(-100%);
}

.nav-link {
    display: block;
    padding-top: 0.625rem;
    padding-bottom: 0.625rem;
    color: #6b747b;
    text-decoration: none;
    line-height: 0.875rem;
    transition: all 0.2s ease;
}

.dropdown-toggle {
    white-space: nowrap;
}

.dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0.3em solid;
    border-right: 0.3em solid transparent;
    border-bottom: 0;
    border-left: 0.3em solid transparent;
}

.dropdown-toggle:empty::after {
    margin-left: 0;
}

.dropdown.show > a,
.nav-link:hover,
.nav-link.active {
    color: #ff6e84;
    text-decoration: none;
}

.dropdown-menu {
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    min-width: 10rem;
    padding: 0.5rem 0;
    margin: 0.5rem 0;
    font-size: 1rem;
    color: #212529;
    list-style: none;
    background-color: #f1f9fc;
    background-clip: padding-box;
    border-radius: 0.25rem;
    animation: fadeDropdown 0.2s; /* required for the fade animation */
}

@keyframes fadeDropdown {
    0% {
        opacity: 0;
    }

    100% {
        opacity: 1;
    }
}

.dropdown-menu.show {
    display: block;
    top: 90%;
    left: auto;
}

.dropdown-item {
    display: block;
    width: 100%;
    padding: 0.5rem 1.5rem;
    clear: both;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    color: #6b747b;
    font-weight: 600;
    font-size: 0.875rem;
    line-height: 0.875rem;
    text-decoration: none;
}

.dropdown-item:hover,
.dropdown-item:focus {
    text-decoration: none;
    background-color: #f1f9fc;
    color: #ff6e84;
}

.dropdown-divider {
    overflow: hidden;
    width: 100%;
    height: 1px;
    margin: 0.5rem auto 0.5rem auto;
    background-color: #d4dce2;
}
/* end of dropdown menu */

</style>
