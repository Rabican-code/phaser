
<template>
  <div>
    <div class="flex items-center ml-[2vw] justify-between">
      <img class="h-16 w-16 ml-4" src="../../../public/img/ai-skeleton.png" alt />

      <div class="flex mr-4">
        <p class="text-3xl font-bold mx-4">Phasor</p>

        <div class="relative ml-3">
          <div>
            <button
              type="button"
              class="relative flex rounded-full bg-gray-400 text-sm focus:outline-none focus:ring-2"
              id="user-menu-button"
              aria-expanded="false"
              aria-haspopup="true"
              @click="showMenu = !showMenu"
            >
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">Open user menu</span>
              <img
                class="h-8 w-8 rounded-full"
                src="https://ui-avatars.com/api/?name=user"
                alt
              />
            </button>
          </div>

          <div
            class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
            role="menu"
            aria-orientation="vertical"
            aria-labelledby="user-menu-button"
            tabindex="-1"
            v-show="showMenu"
          >
            <a
              href="#"
              class="block px-4 py-2 text-sm text-gray-700"
              role="menuitem"
              tabindex="-1"
              id="user-menu-item-0"
            >Your Profile</a>
            <a
              href="/paymentForm"
              class="block px-4 py-2 text-sm text-gray-700"
              role="menuitem"
              tabindex="-1"
              id="user-menu-item-1"
            >Billing</a>
            <a
            href="/payment"
            class="block px-4 py-2 text-sm text-gray-700"
            role="menuitem"
            tabindex="-1"
            id="user-menu-item-2"
          >Plans</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      showMenu: false
    };
  }
};
</script>
