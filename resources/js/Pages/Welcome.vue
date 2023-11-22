<script setup>
import { Head, Link } from "@inertiajs/vue3";

defineProps({
  canLogin: Boolean,
  canRegister: Boolean,
  laravelVersion: String,
  phpVersion: String
});
</script>

<template>
  <div class>
    <header class="absolute inset-x-0 top-0 z-50">
      <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <img class="h-8 w-auto" src="../../../public/img/brain-ai.png" alt />
          </a>
        </div>
        <div class="flex lg:hidden">
          <button
            type="button"
            class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-400"
          >
            <span class="sr-only">Open main menu</span>
            <svg
              class="h-6 w-6"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              aria-hidden="true"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
              />
            </svg>
          </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
          <a href="#" class="text-sm font-semibold leading-6 text-white">Product</a>
          <a href="#" class="text-sm font-semibold leading-6 text-white">Features</a>
          <a href="#" class="text-sm font-semibold leading-6 text-white">Marketplace</a>
          <a href="#" class="text-sm font-semibold leading-6 text-white">Company</a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
          <a href="/login" class="text-sm font-semibold leading-6 text-white">
            Log in
            <span aria-hidden="true">&rarr;</span>
          </a>
        </div>
      </nav>
    </header>

    <div class="relative isolate overflow-hidden bg-gray-900">
      <svg
        class="absolute inset-0 -z-10 h-full w-full stroke-white/10 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]"
        aria-hidden="true"
      >
        <defs>
          <pattern
            id="983e3e4c-de6d-4c3f-8d64-b9761d1534cc"
            width="200"
            height="200"
            x="50%"
            y="-1"
            patternUnits="userSpaceOnUse"
          >
            <path d="M.5 200V.5H200" fill="none" />
          </pattern>
        </defs>
        <svg x="50%" y="-1" class="overflow-visible fill-gray-800/20">
          <path
            d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z"
            stroke-width="0"
          />
        </svg>
        <rect
          width="100%"
          height="100%"
          stroke-width="0"
          fill="url(#983e3e4c-de6d-4c3f-8d64-b9761d1534cc)"
        />
      </svg>
      <div
        class="absolute left-[calc(50%-4rem)] top-10 -z-10 transform-gpu blur-3xl sm:left-[calc(50%-18rem)] lg:left-48 lg:top-[calc(50%-30rem)] xl:left-[calc(50%-24rem)]"
        aria-hidden="true"
      >
        <div
          class="aspect-[1108/632] w-[69.25rem] bg-gradient-to-r from-[#80caff] to-[#4f46e5] opacity-20"
          style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)"
        ></div>
      </div>
      <div class="md:flex justify-center mx-auto px-6 pb-24 pt-10 sm:pb-32 lg:flex lg:py-40">
        <div class>
          <div class></div>
          <div class="mx-auto max-w-2xl flex-shrink-0 lg:mx-0 lg:max-w-xl">
            <!-- <img class="h-11" src="../../../public/img/brain-ai.png" alt="Your Company"> -->

            <h1
              class="mt-10 lg-m:text-2xl text-4xl font-bold tracking-tight text-white sm:text-6xl"
            >
              Phasor -
              Australian
              electrical & construction standards AI chatbot
            </h1>
            <p class="mt-6 lg-m:text-lg text-lg leading-8 text-gray-300">
              Welcome to our AI-powered Chatbot: your
              virtual
              companion for navigating the intricacies of Australian Electrical Standards. Whether you're an
              electrician, an engineer, a business owner, or simply someone interested in understanding
              electrical
              regulations, our chatbot is here to provide you with accurate and up-to-date information.
            </p>
          </div>
          <div class="hidden lg:flex lg:flex-1 mt-4">
            <a href="/login" class="text-lg font-semibold leading-6 text-white">
              Log in
              <span aria-hidden="true">&rarr;</span>
            </a>
          </div>
        </div>
        <div>
          <div
            class="mx-auto mt-16 flex justify-center max-w-2xl sm:mt-24 lg:ml-10 lg:mr-0 lg:mt-0 lg:max-w-none lg:flex-none xl:ml-32"
          >
            <div class="max-w-3xl flex-none sm:max-w-5xl lg:max-w-none">
              <img
                src="../../../public/img/brainAiBgRemoved.png"
                alt="App screenshot"
                class="w-[46rem] lg-m:w-[30rem] rounded-md shadow-2xl"
              />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="flex bg-gray-900 flex-col justify-center items-center md:h-[100vh]">
      <div class="mb-20 md-m:mt-20 text-center text-4xl">
        <p class="font-black text-white text-bold">Choose your assistant...</p>
      </div>

      <div class="md:flex">
        <div class="lg-m:mt-4 drop-shadow-lg md:mr-4">
          <div class="bg-white pt-1 pb-3 shadow px-2 rounded-3xl  w-[320px]">
            <div class="absolute top-5 left-2 pointer-events-none inset-y-0 pl-3">
              <img
                src="../../../public/img/bolt.png"
                class="h-6 w-7 text-green-400"
                aria-hidden="true"
              />
            </div>
            <div class="pt-4 flex justify-center">
              <p class="text-black text-lg text-center">House-basher</p>
            </div>

            <div class="h-[14rem] w-[16rem]">
              <ul class="text-gray-500 text-sm">
                <li class="py-2 px-1 my-0.5 rounded-md cursor-pointer hover:bg-gray-200">
                  Unlimited
                  usage
                </li>
                <li class="py-2 px-1 my-0.5 rounded-md cursor-pointer hover:bg-gray-200">
                  Three
                  login
                  devices
                </li>

                <li
                  class="py-2 w-[16rem] px-1 my-0.5 rounded-md cursor-pointer hover:bg-gray-200"
                >Trained on the AS/NZ 3000:2018 with all amendments</li>
              </ul>
            </div>
            <div class="flex justify-between items-end">
              <div>
                <div class="flex">
                  <p class="text-red-600 mr-1 text-sm">Comes with</p>
                  <p class="text-red-800 font-extrabold text-sm">free trial</p>
                </div>
                <div
                  class="bg-gray-300 flex justify-between py-1 px-2 w-[9rem] text-sm rounded-full items-center"
                >
                  <p class="text-black">$8.99</p>
                  <p class="text-gray-600">Per Month</p>
                </div>
              </div>
              <a href="register">
                <button
                  class="py-1 px-4 text-white text-sm rounded-2xl bg-[#b30059] hover:bg-[#7a204d]"
                >Choose</button>
              </a>
            </div>
          </div>
        </div>

        <div class="lg-m:mt-4 drop-shadow-lg">
          <div class="bg-white pb-3 pt-1 md:w-auto md:h-auto shadow px-2 rounded-3xl">
            <div class="absolute top-5 h-6 left-2 pointer-events-none inset-y-0 pl-3">
              <img
                src="../../../public/img/workersetting.png"
                class="h-7 w-7 text-green-400"
                aria-hidden="true"
              />
            </div>
            <div class="pt-4 flex justify-center">
              <p class="text-black text-lg text-center">Business</p>
            </div>

            <div class="h-[14.4rem] w-[16rem]">
              <ul class="text-gray-500 text-sm">
                <li
                  class="py-2 px-1 my-0.5 rounded-md cursor-pointer hover:bg-gray-200"
                >Everything a house-basher gets +</li>
                <li
                  class="py-2 px-1 my-0.5 rounded-md cursor-pointer hover:bg-gray-200"
                >Fifteen accounts and login devices</li>

                <li class="py-2 w-[16rem] px-1 my-0.5 rounded-md cursor-pointer hover:bg-gray-200">
                  Trained on 7+ Australian electrical
                  standards, including: AS3008: Cable selection, AS3017, AS3786, AS3012,
                  3009, AS/NZS 5033
                  AS 4509, AS/NZS 3084:2017
                  AS/NZS 3004.2:2014 Amd 1:2015 and more.
                </li>
              </ul>
            </div>
            <div class="flex justify-between">
              <div>
                <div
                  class="mt-3 bg-gray-300 flex justify-between py-1 px-2 w-[9rem] text-sm rounded-full items-center"
                >
                  <p class="text-black">$34.99</p>
                  <p class="text-gray-600">Per Month</p>
                </div>
              </div>
              <a href="register">
                <button
                  class="py-1 px-4 mt-3 text-white text-sm rounded-2xl bg-[#b30059] hover:bg-[#7a204d]"
                >Choose</button>
              </a>
            </div>
          </div>
        </div>
        <div class="lg-m:my-4 drop-shadow-lg md:ml-4">
          <div class="bg-white pb-3 pt-1 md:w-auto md:h-auto shadow px-2 rounded-3xl">
            <div class="absolute top-5 left-2 pointer-events-none inset-y-0 pl-3">
              <img
                src="../../../public/img/crown.png"
                class="h-5 w-7 text-green-400"
                aria-hidden="true"
              />
            </div>
            <div class="pt-4 flex justify-center">
              <p class="text-black text-lg text-center">Enterprise</p>
            </div>

            <div class="h-[15rem] w-[16rem]">
              <ul class="text-gray-500 text-sm">
                <li class="py-2 px-1 my-0.5 rounded-md cursor-pointer hover:bg-gray-200">
                  Unlimited
                  usage
                </li>
                <li
                  class="py-2 w-[16rem] xs px-1 my-0.5 rounded-md cursor-pointer hover:bg-gray-200"
                >
                  Everything
                  included in business edition + custom number of accounts
                </li>
              </ul>
            </div>
            <div>
              <div class="flex justify-between items-end">
                <div
                  class="bg-gray-300 flex justify-center items-center py-1 px-4 text-sm rounded-full"
                >
                  <p class="text-black">Contact Sales</p>
                </div>

                <a href="register">
                  <button
                    class="py-1 px-4 text-sm rounded-2xl bg-[#b30059] hover:bg-[#7a204d] text-white"
                  >Contact</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="bg-gray-900">
      <div class>
        <h1
          class="mb-4 text-center text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white"
        >We invest in the world’s potential</h1>
        <p
          class="mb-6 text-lg text-center font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400"
        >Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
      </div>

      <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
        <carousel :items-to-show="1.5" wrapAround="true">
          <slide v-for="person in people" :key="person">
            <figure class="max-w-screen-md mx-4">
              <svg0
                class="h-12 mx-auto mb-3 text-gray-600"
                viewBox="0 0 24 27"
                fill="none"
                mlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z"
                  fill="currentColor"
                />
              </svg0>
              <blockquote>
                <p class="lg:text-2xl sm:text-xl font-medium text-white">{{ person.text }}</p>
              </blockquote>
              <figcaption class="flex items-center justify-center mt-6 space-x-3">
                <img
                  class="w-6 h-6 rounded-full"
                  src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png"
                  alt="profile picture"
                />
                <div class="flex items-center divide-x-2 divide-gray-700">
                  <div class="pr-3 font-medium text-white">{{person.name}}</div>
                  <div class="pl-3 text-sm font-light text-gray-400">CEO at Google</div>
                </div>
              </figcaption>
            </figure>
          </slide>
        </carousel>
      </div>
    </section>
    <div class="bg-gray-900 py-24 sm:py-32">
      <div class="relative isolate">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div
            class="mx-auto flex max-w-2xl flex-col gap-16 bg-white/5 px-6 py-16 ring-1 ring-white/10 sm:rounded-3xl sm:p-8 lg:mx-0 lg:max-w-none lg:flex-row lg:items-center lg:py-20 xl:gap-x-20 xl:px-20"
          >
            <img
              class="h-96 w-full flex-none rounded-2xl object-cover shadow-xl lg:aspect-square lg:h-auto lg:max-w-sm"
              src="../../../public/img/brainAiBig.png"
              alt
            />
            <div class="w-full flex-auto">
              <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Join us now</h2>
              <p class="mt-6 text-lg leading-8 text-gray-100">
                Lorem ipsum dolor sit amet consect adipisicing
                elit. Possimus magnam voluptatum cupiditate veritatis in accusamus quisquam.
              </p>
              <ul
                role="list"
                class="mt-10 grid grid-cols-1 gap-x-8 gap-y-3 text-base leading-7 text-white sm:grid-cols-2"
              >
                <li class="flex gap-x-3">
                  <svg
                    class="h-7 w-5 flex-none"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  Unlimited usage
                </li>
                <li class="flex gap-x-3">
                  <svg
                    class="h-7 w-5 flex-none"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  Three login devices
                </li>
                <li class="flex gap-x-3">
                  <svg
                    class="h-7 w-5 flex-none"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  Trained on the AS/NZ 3000:2018 with all amendments
                </li>
                <li class="flex gap-x-3">
                  <svg
                    class="h-7 w-5 flex-none"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  Comes with free trial
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div
          class="absolute inset-x-0 -top-16 -z-10 flex transform-gpu justify-center overflow-hidden blur-3xl"
          aria-hidden="true"
        >
          <div
            class="aspect-[1318/752] w-[82.375rem] flex-none bg-gradient-to-r from-[#80caff] to-[#4f46e5] opacity-25"
            style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)"
          ></div>
        </div>
      </div>
    </div>

    <footer class="bg-gray-900">
      <div class="mx-auto max-w-7xl px-6 py-12 md:flex md:items-center md:justify-between lg:px-8">
        <div class="flex justify-center space-x-6 md:order-2">
          <a href="#" class="text-gray-400 hover:text-gray-500">
            <span class="sr-only">Facebook</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path
                fill-rule="evenodd"
                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                clip-rule="evenodd"
              />
            </svg>
          </a>
          <a href="#" class="text-gray-400 hover:text-gray-500">
            <span class="sr-only">Instagram</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path
                fill-rule="evenodd"
                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                clip-rule="evenodd"
              />
            </svg>
          </a>
          <a href="#" class="text-gray-400 hover:text-gray-500">
            <span class="sr-only">Twitter</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path
                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"
              />
            </svg>
          </a>
          <a href="#" class="text-gray-400 hover:text-gray-500">
            <span class="sr-only">GitHub</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path
                fill-rule="evenodd"
                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                clip-rule="evenodd"
              />
            </svg>
          </a>
          <a href="#" class="text-gray-400 hover:text-gray-500">
            <span class="sr-only">YouTube</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path
                fill-rule="evenodd"
                d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z"
                clip-rule="evenodd"
              />
            </svg>
          </a>
        </div>
        <div class="mt-8 md:order-1 md:mt-0">
          <p class="text-center text-xs leading-5 text-gray-500">
            &copy; 2020 Your Company, Inc. All rights
            reserved.
          </p>
        </div>
      </div>
    </footer>
  </div>
</template>

<style>
.bg-dots-darker {
  background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}

@media (prefers-color-scheme: dark) {
  .dark\:bg-dots-lighter {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
  }
}
</style>

<script>
// If you are using PurgeCSS, make sure to whitelist the carousel CSS classes
import "vue3-carousel/dist/carousel.css";
import { Carousel, Slide, Pagination, Navigation } from "vue3-carousel";

export default {
  name: "App",
  components: {
    Carousel,
    Slide,
    Pagination,
    Navigation
  },
  data() {
    return {
      people: [
        {
          name: "Vishal Singh",
          text:
            "Phasor has code in one place and I'm not joking when I say it took me a matter of minutes to copy the code, customise it and integrate within a Laravel + Vue application."
        },
        {
          name: "John Smith",
          text:
            "As someone who mainly designs in the browser, I've been a casual user of Figma, but as soon as I saw and started playing with FlowBite my mind was blown and became so productive."
        },
        {
          name: "John Doe",
          text:
            "This is a very complex and beautiful set of elements. Under the hood it comes with the best things from 2 different worlds: Figma and Tailwind."
        }
      ]
    };
  }
};
</script>
