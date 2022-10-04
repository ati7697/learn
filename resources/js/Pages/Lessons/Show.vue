<script setup>
import {onMounted, ref} from "vue";
import unityGameSetUp from '../../GameViewJava';
import {Head, Link} from '@inertiajs/inertia-vue3';

onMounted(() => {
    unityGameSetUp();
    window.addEventListener("stateFromUnity",(e) => recievedJsonFromUnity(e));
    window.addEventListener("requestData", (e) => requestLoadGameData(e));
    window.addEventListener("StartChallenge", (e) => recievedChallengeFromUnity(e));
})
const emit = defineEmits(['showChallenge'])
const props = defineProps({
    lesson: Object ,
    course: Object,

})
let showChallenge = ref(false);
let challengeReponse = ref("hello");
let challengeAnswer = ref(" ");
const recievedChallengeFromUnity =  async (e)=>
{
    challengeAnswer.value = e.detail.challenge;
    console.log(challengeAnswer.value);
    showChallenge.value = true;
}

const checkAnswer = (e) => {

    if(challengeReponse.value == challengeAnswer.value)
    {
        showChallenge.value = false;
        gameInstance.SendMessage('GameController','CorrectAnswer');
    }
    else {
        window.alert("what the hell kind of answer was that!!");
    }

}
const returnToGame = () => {
    showChallenge.value = false;
    gameInstance.SendMessage('GameController', "ReturnToGame")
}
const recievedJsonFromUnity = async (e) => {

    let response = await axios.post(route('courses.lessons.save',
        {course: props.course, lesson:props.lesson} ),
        {game_state: e.detail.gamestate });
    try {
    } catch (e) {
        console.log("failed to add to databse, error: ", +e);
    }
}
const  requestLoadGameData = async (e) =>
{
    try {
        const reponse = await axios.get(route('courses.lessons.load', {course:props.course, lesson: props.lesson}))
        let gameMessage = reponse.data['gameLoaded'];
        if(reponse.data['gameLoaded'] == null)
        {
            gameInstance.SendMessage('GameController','newGame');
        }
        else
        {
            gameInstance.SendMessage('GameController','loadedDataFromWeb',gameMessage);
        }
    }
    catch (e)
    {
        gameInstance.SendMessage('GameController','newGame');
        console.log("axios error: "+ e);
    }
}
</script>
<template>
    <Head title="GameView"/>
    <div class="">
        <div id="unity-container" class="unity-desktop flex flex-col" >
            <canvas ref='canvas' id="unity-canvas" width=960 height=600></canvas>
            <div id="unity-loading-bar">
                <div id="unity-logo"></div>
                <div id="unity-progress-bar-empty">
                    <div id="unity-progress-bar-full"></div>
                </div>
            </div>
            <div v-show="showChallenge" >
            <form @submit.prevent="checkAnswer" class="mb-6 flex flex-col bg-zinc-500 p-3 ">
                <label for="large-input" class=" mb-2 text-lg font-medium text-gray-900 dark:text-gray-300">Answer here </label>
                <textarea v-model="challengeReponse" type="text" id="large-input" class="block  h-40 p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                <div class="flex row-auto justify justify-center gap-5">
                <button type="submit" class=" my-4 w-20 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> Submit </button>
                <button @click.prevent="returnToGame" class=" my-4 w-30 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> Return to game </button>
                </div>
            </form>
            </div>
        </div>

    </div>

</template>

