<template>
  <div class="flex justify-center items-center h-screen">
    <div class="flex justify-center items-center mx-4 bg-white rounded-md h-[80vh] w-[87vw]">

      <div>
        <div>
          <div class="mt-2 text-black text-center text-3xl mb-8 mr-0 md:mr-8">Manage your payment</div>
        </div>
        <div class="bg-gray-100 w-[60vw] h-[20vh] rounded-lg">
          <div class="flex items-center">
            <div class="ml-4 w-[30vw] mt-8">
              <div class>
                <div id="card-element"></div>
              </div>
            </div>
          </div>
          <div class="flex mt-10 ml-4 items-end text-black justify-start">
            <button
              class="text-white bg-green-600 hover:bg-[#24292F]/90 focus:ring-4 focus:outline-none focus:ring-[#24292F]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-500 dark:hover:bg-[#050708]/30 mr-2 mb-2"
              @click="submitPayment"
            >Add payment method</button>
          </div>
        </div>
      </div>
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
      this.elements = this.stripe.elements();
      this.card = this.elements.create("card");
      this.card.mount("#card-element");

    };
    document.head.appendChild(stripeScript);
  },
  methods: {
    async submitPayment() {
      if (!this.stripe) {
        console.error("Stripe.js has not been loaded yet.");
        return;
      }

      const { paymentMethod, error } = await this.stripe.createPaymentMethod({
        type: "card",
        card: this.card

      });

      if (error) {
        console.error(error);
      } else {
        axios
          .post(
            "/paymentMethod",
            { paymentMethod: paymentMethod.id },
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
