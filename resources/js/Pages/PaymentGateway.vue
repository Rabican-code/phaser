<template>
  <div class="flex flex-col justify-center items-center md:h-[100vh]">
    <div class="mb-20 md-m:mt-20 text-center text-4xl">
      <p class="font-black text-bold">Choose your assistant...</p>
    </div>
    <div class>
      <div
        class="absolute md-m:hidden w-[110px] pointer-events-none inset-y-0 pl-3 2xl:top-[23%] 2xl:right-[30%] xl-m:top-[18%] xl-m:right-[21%] lg-m:top-[6%] lg-m:right-[14%]"
      >
        <img src="../../../public/img/workersetting.png" class="text-green-400" aria-hidden="true" />
      </div>
    </div>

    <div class="md:flex">
      <div class="lg-m:mt-4 drop-shadow-lg md:mr-4">
        <div class="bg-white pt-1 pb-3 w-full relative shadow px-2 rounded-3xl">
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
            <button
              @click="setupSubscription('price_1O9i2gSJc5Qd3A1zEUydC27l')"
              class="py-1 px-4 text-sm rounded-2xl bg-[#b30059] hover:bg-[#7a204d]"
            >Choose</button>
          </div>
        </div>
      </div>

      <div class="lg-m:mt-4 drop-shadow-lg">
        <div class="bg-white pb-3 pt-1 w-full relative shadow px-2 rounded-3xl">
          <div class="absolute top-5 left-2 pointer-events-none inset-y-0 pl-3">
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
            <button
              @click="setupSubscription('price_1O9i3dSJc5Qd3A1z7iQB3uKT')"
              class="py-1 px-4 mt-3 text-sm rounded-2xl bg-[#b30059] hover:bg-[#7a204d]"
            >Choose</button>
          </div>
        </div>
      </div>
      <div class="lg-m:my-4 drop-shadow-lg md:ml-4">
        <div class="bg-white pt-1 pb-3 w-full shadow relative px-2 rounded-3xl">
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
              <li class="py-2 w-[16rem] xs px-1 my-0.5 rounded-md cursor-pointer hover:bg-gray-200">
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

              <button
                @click="setupSubscription('price_1O9i1FSJc5Qd3A1zROw2haPS')"
                class="py-1 px-4 text-sm rounded-2xl bg-[#b30059] hover:bg-[#7a204d]"
              >Contact</button>
            </div>
          </div>
        </div>
      </div>
      <div id="card-element"></div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
window.csrf_token = "{{ csrf_token() }}";

export default {
  data() {
    return {
      stripe: null,
      elements: null,
      card: null
    };
  },
  mounted() {
    const stripeScript = document.createElement("script");
    stripeScript.src = "https://js.stripe.com/v3/";
    stripeScript.onload = () => {
      this.stripe = Stripe(
        "pk_test_51O9NLZSJc5Qd3A1zvWzkezaP5FuVqJMfQmNkN4Mohge2jg0cLGov1G1GRazwqJprClN5F3QT1B6tRAePzXMK6brl00PviHhymp"
      );
    };
    document.head.appendChild(stripeScript);
  },
  methods: {
    async setupSubscription(plan) {
      if (!this.stripe) {
        console.error("Stripe.js has not been loaded yet.");
        return;
      }

      // Define error here
      let error = null;

      // Uncomment the following line when you have the clientIntent
      // const { setupIntent, error } = await this.stripe.handleCardSetup(clientIntent);

      if (error) {
        console.error(error);
      } else {
        axios
          .post(
            "/setupSubscription",
            { plan: plan},
            {
              csrf_token: window.csrf_token
            }
          )
          .then(response => {})
          .catch(error => {
            console.error(error);
          });
      }
    }
  }
};
</script>
