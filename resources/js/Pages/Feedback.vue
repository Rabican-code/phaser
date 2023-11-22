<script setup>

import { ref } from 'vue'

const feedback = ref('');

const postFeedback = () => {
    console.log("Form is being submitted");
    axios.post('/postfeedback', {
        feedback: feedback.value,
        user_id: '1'
    })
        .then(function (response) {
            console.log(response);
        })
        .catch(function (error) {
            console.log(error);
        });
}
</script>
<template>
    <div class="flex flex-col justify-center items-center h-[100vh] ">
        <div class="mb-20 text-4xl">

            <p>Give us your feedback.</p>
        </div>
        <form @submit.prevent="postFeedback">
            <div class="flex justify-center">
                <div class="text-center">
                    <div class="relative mt-2 rounded-md shadow-sm">
                        <textarea type="feedback" v-model="feedback" name="feedback" id="feedback" required autofocus
                            class="block resize sm-m:w-[75vw] lg-m:w-[40vw] xl:w-[24vw] xl-m:w-[30vw] rounded-2xl  border-0 px py-6 pl-4 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                    </div>
                </div>
            </div>
            <div class="flex justify-center my-4">
                <button type="submit" class="px-8 p-2 rounded-full bg-[#b30059] hover:bg-[#7a204d]">Send</button>
            </div>
        </form>
    </div>
</template>