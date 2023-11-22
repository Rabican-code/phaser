<script setup>
import { Head, useForm } from "@inertiajs/vue3";
import { ref } from "vue";
import {
  Listbox,
  ListboxButton,
  ListboxLabel,
  ListboxOption,
  ListboxOptions
} from "@headlessui/vue";
import {
  CheckIcon,
  ChevronUpDownIcon,
  ArrowRightIcon
} from "@heroicons/vue/20/solid";

const locations = [
  { id: 1, place: "Select your location" },
  { id: 2, place: "WA" },
  { id: 3, place: "ACT" },
  { id: 4, place: "NSW" },
  { id: 5, place: "VIC" },
  { id: 6, place: "TAS" },
  { id: 7, place: "NT (Northern territory): Darwin" },
  { id: 8, place: "Sydney" },
  { id: 9, place: "Newcastle" },
  { id: 10, place: "Wollongong" },
  { id: 11, place: "South Coast and Regional" },
  { id: 12, place: "Alice Springs" },
  { id: 13, place: "QLD (Queensland): Brisbane" },
  { id: 14, place: "Gold Coast" },
  { id: 15, place: "Cairns" },
  { id: 16, place: "SA (South Australia)" },
  { id: 17, place: "Adelaide" },
  { id: 18, place: "TAS (Tasmania) Hobart" },
  { id: 19, place: "Launceston" },
  { id: 20, place: "WA (western australia) Perth" },
  { id: 21, place: "VIC (victoria):Melbourne" },
  { id: 22, place: "geelong" },
  { id: 23, place: "Outside Australia" },
  { id: 24, place: "New Zealand" },
  { id: 25, place: "Other Please Specify" }
];

const jobs = [
  { id: 1, job: "Select your job" },
  { id: 2, job: "Apprentice Electrician" },
  { id: 3, job: "Electrical supervisor " },
  { id: 4, job: "Safety representative" },
  { id: 5, job: "Software developer" },
  { id: 6, job: "Control Systems Engineer" },
  { id: 7, job: "Electronics Engineer" },
  { id: 8, job: "Communications Engineer" },
  { id: 9, job: "Owner/Operator," },
  { id: 10, job: "Project Manager" },
  { id: 11, job: "Estimator" },
  { id: 12, job: "Inspector & Regulator" },
  { id: 13, job: "Wholesalers & Retailers" },
  { id: 14, job: "Electrical Design Consultant " },
  { id: 15, job: "Other Please Specify" }
];

const jobsType = [
  { id: 1, jobType: "Select your job type" },
  { id: 2, jobType: "Residential" },
  { id: 3, jobType: "Commercial" },
  { id: 4, jobType: "Industrial" },
  { id: 5, jobType: "Infrastructure" },
  { id: 6, jobType: "Other… Please Specify." }
];

const informationSource = [
  { id: 1, source: "Facebook" },
  { id: 2, source: "Friend" },
  { id: 3, source: "Colleague" },
  { id: 4, source: "Trade seminar" },
  { id: 5, source: "Instagram" },
  { id: 6, source: "LinkedIn" },
  { id: 7, source: "Twitter" },
  { id: 8, source: "Search Engine" },
  { id: 9, source: "Online forums or discussion groups, " },
  { id: 10, source: "Promotion" },
  { id: 11, source: "Other Please Specify" }
];

const selectedLocation = ref(locations[0]);
const selectedJob = ref(jobs[0]);
const selectedJobType = ref(jobsType[0]);
const selectedSource = ref(informationSource[0]);
const showMessage = ref(false);

const toggleMessage = () => {
  showMessage.value = !showMessage.value;
};

const form = useForm({
  name: "",
  lastName: "",
  email: "",
  password: "",
  location: "india",
  job: "Web Developer",
  jobType: "Industrial",
  source: "Facebook",
  terms: false
});

const submit = () => {
  console.log("Please enter everything");
  form.post("/signup", {
    onFinish: res => {
      form.reset("password");
      toggleMessage();
    }
  });
};
</script>

<script>
export default {
  data: () => {
    return {
      form: {
        name: "",
        lastName: "",
        email: "",
        password: ""
      },
      step: 0
    };
  },

  methods: {
    nextStep() {
      if (this.step < "7") {
        this.step += 1;
      }
    },
    prevStep() {
      if (this.step < "7") {
        this.step -= 1;
      }
    }
  },

  mounted() {}
};
</script>

<template>
  <div>
    <Head title="Register" />
    <div class="flex flex-col justify-center items-center h-[100vh]">
      <form @submit.prevent="submit" class>
        <div v-if="step == 0">
          <div class="mb-20 text-4xl">
            <p class="font-black">Let's get to know you...</p>
          </div>

          <div class="flex justify-center">
            <div class="w-[18rem] text-center">
              <div class="my-6">
                <label for="name" class="font-semibold">What's your first name?</label>
              </div>

              <div class="relative mt-2 rounded-md shadow-sm">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                  <img
                    src="../../../../public/img/user.png"
                    class="h-5 w-5 text-green-400"
                    aria-hidden="true"
                  />
                </div>
                <input
                  type="text"
                  name="name"
                  v-model="form.name"
                  id="name"
                  required
                  autofocus
                  class="block w-full rounded-full border-0 py-3 pl-9 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                  placeholder="      Your first name..."
                />
              </div>
            </div>
            <div>
              <img
                class="sm-m:hidden absolute left-[2%] top-20"
                src="../../../../public/img/cloud2.png"
                alt
              />
              <img
                class="sm-m:hidden absolute right-[4%] top-0"
                src="../../../../public/img/sun.png"
                alt
              />
              <img
                class="sm-m:hidden absolute left-[10%] bottom-20"
                src="../../../../public/img/cloud3.png"
                alt
              />
              <img
                class="sm-m:hidden absolute right-[12%] bottom-10"
                src="../../../../public/img/cloud4.png"
                alt
              />
              <img
                class="sm-m:hidden absolute right-[2%] bottom-60"
                src="../../../../public/img/person.png"
                alt
              />
            </div>
          </div>
        </div>
        <div v-if="step == 1">
          <div class="mb-20 text-4xl">
            <p class="font-black">What's your last name?</p>
          </div>

          <div class="flex justify-center">
            <div class="w-[18rem] text-center">
              <!-- <label for="lastName" class="">What's your last name?</label> -->
              <div class="relative mt-2 rounded-md shadow-sm">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                  <img
                    src="../../../../public/img/user.png"
                    class="h-5 w-5 text-green-400"
                    aria-hidden="true"
                  />
                </div>
                <input
                  type="text"
                  name="firstName"
                  v-model="form.lastName"
                  id="firstName"
                  required
                  autofocus
                  class="block w-full rounded-full border-0 py-3 pl-9 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                  placeholder="      Your last name..."
                />
              </div>
            </div>
          </div>
          <div>
            <img
              class="sm-m:hidden absolute left-[2%] top-20"
              src="../../../../public/img/cloud2.png"
              alt
            />
            <img
              class="sm-m:hidden absolute right-[4%] top-0"
              src="../../../../public/img/sun.png"
              alt
            />
            <img
              class="sm-m:hidden absolute left-[10%] bottom-20"
              src="../../../../public/img/cloud3.png"
              alt
            />
            <img
              class="sm-m:hidden absolute right-[12%] bottom-10"
              src="../../../../public/img/cloud4.png"
              alt
            />
            <img
              class="sm-m:hidden absolute right-[2%] bottom-60"
              src="../../../../public/img/person.png"
              alt
            />
          </div>
        </div>

        <div v-if="step == 2">
          <div class="mb-20 text-4xl">
            <p class="font-black sm-m:text-center">What's your email address?</p>
          </div>

          <div class="flex justify-center">
            <div class="w-[18rem] text-center">
              <!-- <label for="email" class="">What's your email address</label> -->
              <div class="relative mt-2 rounded-md shadow-sm">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                  <img
                    src="../../../../public/img/mail.png"
                    class="h-5 w-5 text-green-400"
                    aria-hidden="true"
                  />
                </div>
                <input
                  type="email"
                  name="email"
                  v-model="form.email"
                  id="email"
                  required
                  autofocus
                  class="block w-full rounded-full border-0 py-3 pl-9 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                  placeholder="      Your email address..."
                />
              </div>
            </div>
          </div>
          <div>
            <img
              class="sm-m:hidden absolute left-[2%] top-10"
              src="../../../../public/img/hand.png"
              alt
            />
            <img
              class="sm-m:hidden absolute right-[2%] bottom-20"
              src="../../../../public/img/phone.png"
              alt
            />
          </div>
        </div>

        <div v-if="step == 3">
          <div class="mb-20 text-4xl">
            <p class="font-black">Enter your password</p>
          </div>

          <div class="flex justify-center">
            <div class="w-[18rem] text-center">
              <!-- <label for="password" class="">Enter your password</label> -->
              <div class="relative mt-2 rounded-md shadow-sm">
                <input
                  type="password"
                  name="password"
                  v-model="form.password"
                  id="password"
                  required
                  autofocus
                  class="block w-full rounded-full border-0 py-3 pl-4 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                  placeholder="Enter your password..."
                />
              </div>
            </div>
          </div>
        </div>

        <div v-if="step == 4">
          <div class="mb-20 text-4xl">
            <p class="font-black sm-m:text-center">Where are you located?</p>
          </div>
          <div>
            <img
              class="sm-m:hidden absolute left-[4%] bottom-10"
              src="../../../../public/img/map.png"
              alt
            />
            <img
              class="sm-m:hidden absolute right-[2%] top-20"
              src="../../../../public/img/location.png"
              alt
            />
          </div>

          <div class="flex justify-center">
            <div class="w-[18rem] text-center">
              <Listbox as="div" v-model="selectedLocation">
                <ListboxLabel class="block text-sm font-medium leading-6 text-gray-100"></ListboxLabel>
                <div class="relative mt-2">
                  <input
                    v-if="selectedLocation.place === 'Other Please Specify'"
                    type="text"
                    class="rounded-lg text-black"
                    placeholder="Other Please Specify"
                  />
                  <ListboxButton
                    v-else
                    class="relative w-full cursor-default rounded-md bg-white py-1.5 pl-3 pr-10 text-left text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6"
                  >
                    <span class="block truncate">{{ selectedLocation.place }}</span>

                    <span
                      class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2"
                    >
                      <ChevronUpDownIcon class="h-5 w-5 text-gray-400" aria-hidden="true" />
                    </span>
                  </ListboxButton>

                  <transition
                    leave-active-class="transition ease-in duration-100"
                    leave-from-class="opacity-100"
                    leave-to-class="opacity-0"
                  >
                    <ListboxOptions
                      class="absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm"
                    >
                      <ListboxOption
                        as="template"
                        v-for="location in locations"
                        :key="location.id"
                        :value="location"
                        v-slot="{ active, selectedLocation }"
                      >
                        <li
                          :class="[active ? 'bg-indigo-600 text-white' : 'text-gray-900', 'relative cursor-default select-none py-2 pl-3 pr-9']"
                        >
                          <span
                            :class="[selectedLocation ? 'font-semibold' : 'font-normal', 'block truncate']"
                          >
                            {{
                            location.place }}
                          </span>

                          <span
                            v-if="selectedLocation"
                            :class="[active ? 'text-white' : 'text-indigo-600', 'absolute inset-y-0 right-0 flex items-center pr-4']"
                          >
                            <CheckIcon class="h-5 w-5" aria-hidden="true" />
                          </span>
                        </li>
                      </ListboxOption>
                    </ListboxOptions>
                  </transition>
                </div>
              </Listbox>
            </div>
          </div>
        </div>

        <div v-if="step == 5">
          <div class="mb-20 text-4xl">
            <p class="font-black">What's your job title?</p>
          </div>
          <div>
            <img
              class="sm-m:hidden absolute left-[2%] top-10"
              src="../../../../public/img/settings.png"
              alt
            />
            <img
              class="sm-m:hidden absolute right-[2%] bottom-20"
              src="../../../../public/img/note.png"
              alt
            />
          </div>

          <div class="flex justify-center">
            <div class="w-[18rem] text-center">
              <Listbox as="div" v-model="selectedJob">
                <ListboxLabel class="block text-sm font-medium leading-6 text-gray-100"></ListboxLabel>
                <div class="relative mt-2">
                  <input
                    v-if="selectedJob.job === 'Other Please Specify'"
                    type="text"
                    class="rounded-lg text-black"
                    placeholder="Other Please Specify"
                  />
                  <ListboxButton
                    v-else
                    v-model="form.job"
                    class="relative w-full cursor-default rounded-md bg-white py-1.5 pl-3 pr-10 text-left text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6"
                  >
                    <span class="block truncate">{{ selectedJob.job }}</span>
                    <span
                      class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2"
                    >
                      <ChevronUpDownIcon class="h-5 w-5 text-gray-400" aria-hidden="true" />
                    </span>
                  </ListboxButton>

                  <transition
                    leave-active-class="transition ease-in duration-100"
                    leave-from-class="opacity-100"
                    leave-to-class="opacity-0"
                  >
                    <ListboxOptions
                      class="absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm"
                    >
                      <ListboxOption
                        as="template"
                        v-for="job in jobs"
                        :key="job.id"
                        :value="job"
                        v-slot="{ active, selectedJob }"
                      >
                        <li
                          :class="[active ? 'bg-indigo-600 text-white' : 'text-gray-900', 'relative cursor-default select-none py-2 pl-3 pr-9']"
                        >
                          <span
                            :class="[selectedJob ? 'font-semibold' : 'font-normal', 'block truncate']"
                          >
                            {{
                            job.job }}
                          </span>

                          <span
                            v-if="selectedJob"
                            :class="[active ? 'text-white' : 'text-indigo-600', 'absolute inset-y-0 right-0 flex items-center pr-4']"
                          >
                            <CheckIcon class="h-5 w-5" aria-hidden="true" />
                          </span>
                        </li>
                      </ListboxOption>
                    </ListboxOptions>
                  </transition>
                </div>
              </Listbox>
            </div>
          </div>
        </div>

        <div v-if="step == 6">
          <div class="mb-20 text-4xl">
            <p class="font-black sm-m:text-center">
              What construction & building
              <br />sector do you primarily work in?
            </p>
          </div>
          <div>
            <img
              class="sm-m:hidden absolute left-[2%] bottom-10"
              src="../../../../public/img/worker.png"
              alt
            />
            <img
              class="sm-m:hidden absolute right-[2%] top-20"
              src="../../../../public/img/crane.png"
              alt
            />
          </div>
          <div class="flex justify-center">
            <div class="w-[18rem] text-center">
              <Listbox as="div" v-model="selectedJobType">
                <ListboxLabel class="block text-sm font-medium leading-6 text-gray-100"></ListboxLabel>
                <div class="relative mt-2">
                  <input
                    v-if="selectedJobType.jobType === 'Other… Please Specify.'"
                    type="text"
                    class="rounded-lg text-black"
                    placeholder="Other Please Specify"
                  />
                  <ListboxButton
                    v-else
                    class="relative w-full cursor-default rounded-md bg-white py-1.5 pl-3 pr-10 text-left text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6"
                  >
                    <span class="block truncate">{{ selectedJobType.jobType }}</span>
                    <span
                      class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2"
                    >
                      <ChevronUpDownIcon class="h-5 w-5 text-gray-400" aria-hidden="true" />
                    </span>
                  </ListboxButton>

                  <transition
                    leave-active-class="transition ease-in duration-100"
                    leave-from-class="opacity-100"
                    leave-to-class="opacity-0"
                  >
                    <ListboxOptions
                      class="absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm"
                    >
                      <ListboxOption
                        as="template"
                        v-for="jobType in jobsType"
                        :key="jobType.id"
                        :value="jobType"
                        v-slot="{ active, selectedJobType }"
                      >
                        <li
                          :class="[active ? 'bg-indigo-600 text-white' : 'text-gray-900', 'relative cursor-default select-none py-2 pl-3 pr-9']"
                        >
                          <span
                            :class="[selectedJobType ? 'font-semibold' : 'font-normal', 'block truncate']"
                          >
                            {{
                            jobType.jobType }}
                          </span>

                          <span
                            v-if="selectedJobType"
                            :class="[active ? 'text-white' : 'text-indigo-600', 'absolute inset-y-0 right-0 flex items-center pr-4']"
                          >
                            <CheckIcon class="h-5 w-5" aria-hidden="true" />
                          </span>
                        </li>
                      </ListboxOption>
                    </ListboxOptions>
                  </transition>
                </div>
              </Listbox>
            </div>
          </div>
        </div>

        <div v-if="step == 7">
          <div class="mb-20 text-4xl">
            <p class="font-black sm-m:text-center">How did you hear about us?</p>
          </div>
          <div>
            <img
              class="sm-m:hidden absolute left-[2%] bottom-10"
              src="../../../../public/img/chat.png"
              alt
            />
            <img
              class="sm-m:hidden absolute right-[2%] top-20"
              src="../../../../public/img/light.png"
              alt
            />
          </div>
          <div class="flex justify-center">
            <div class="w-[18rem] text-center">
              <Listbox as="div" v-model="selectedSource">
                <ListboxLabel class="block text-sm font-medium leading-6 text-gray-100"></ListboxLabel>
                <div class="relative mt-2">
                  <input
                    v-if="selectedSource.source === 'Other Please Specify'"
                    type="text"
                    class="rounded-lg text-black"
                    placeholder="Other Please Specify"
                  />
                  <ListboxButton
                    v-else
                    v-model="form.source"
                    class="relative w-full cursor-default rounded-md bg-white py-1.5 pl-3 pr-10 text-left text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6"
                  >
                    <span class="block truncate">{{ selectedSource.source }}</span>
                    <span
                      class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2"
                    >
                      <ChevronUpDownIcon class="h-5 w-5 text-gray-400" aria-hidden="true" />
                    </span>
                  </ListboxButton>

                  <transition
                    leave-active-class="transition ease-in duration-100"
                    leave-from-class="opacity-100"
                    leave-to-class="opacity-0"
                  >
                    <ListboxOptions
                      class="absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm"
                    >
                      <ListboxOption
                        as="template"
                        v-for="source in informationSource"
                        :key="source.id"
                        :value="source"
                        v-slot="{ active, selectedSource }"
                      >
                        <li
                          :class="[active ? 'bg-indigo-600 text-white' : 'text-gray-900', 'relative cursor-default select-none py-2 pl-3 pr-9']"
                        >
                          <span
                            :class="[selectedSource ? 'font-semibold' : 'font-normal', 'block truncate']"
                          >
                            {{
                            source.source }}
                          </span>

                          <span
                            v-if="selectedSource"
                            :class="[active ? 'text-white' : 'text-indigo-600', 'absolute inset-y-0 right-0 flex items-center pr-4']"
                          >
                            <CheckIcon class="h-5 w-5" aria-hidden="true" />
                          </span>
                        </li>
                      </ListboxOption>
                    </ListboxOptions>
                  </transition>
                </div>
              </Listbox>
            </div>
          </div>
        </div>

        <div
          v-if="showMessage"
          class="absolute top-0 left-0 h-[100vh] w-[100vw] bg-gradient-to-r from-[#03b503] to-[#1fff1f] flex items-center justify-center"
        >
          <div class="text-center">
            <p class="text-6xl font-bold my-8">Thank you!</p>
            <a class="text-sm text-black hover:underline" href="/login">Click here to login</a>
          </div>
        </div>

        <div class="mt-10 text-center">
          <button
            type="submit"
            v-if="step == '7'"
            class="px-8 p-2 rounded-full bg-[#b30059] hover:bg-[#7a204d]"
          >Submit</button>
        </div>
      </form>
      <div class="flex gap-4">
        <!-- <button v-if="step > '0' && step < '7'" @click="prevStep" class="px-8 p-2 rounded-full bg-[#b30059] hover:bg-[#7a204d]">prev</button> -->
        <button
          v-if="step < '7'"
          @click="nextStep"
          class="px-8 p-2 rounded-full bg-[#b30059] hover:bg-[#7a204d]"
        >Next</button>
      </div>
    </div>
  </div>
</template>
