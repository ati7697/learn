<script setup>
import {onMounted} from "vue";
import unityGameSetUp from '../GameViewJava';
import {Head, Link} from '@inertiajs/inertia-vue3';

onMounted(() => {
    unityGameSetUp();
    window.addEventListener("stateFromUnity",(e) => recievedJsonFromUnity(e));
    window.addEventListener("requestData", (e) => requestLoadGameData(e));
})
const props = defineProps({
    current_lesson: Object
})
const recievedJsonFromUnity = async (e) => {
    try {
        let response = await axios.post(route('game.save'), {game_state: e.detail.gamestate, lesson: props.current_lesson});

    } catch (e) {
        console.log("failed to add to databse, error: ", +e);
    }
}
const  requestLoadGameData = async (e) =>
{
    try {
        const reponse = await axios.get(route('game.load'))
        let testmessage = reponse.data['gameLoaded'];
        console.log("gamestate: " + testmessage);
        if(reponse.data['gameLoaded'] == null)
        {
            gameInstance.SendMessage('GameController','newGame');
            //console.log('database was empty');
        }
        else{
            gameInstance.SendMessage('GameController','loadedDataFromWeb',testmessage);
            //console.log("data found and loading");
        }
    }
    catch (e)
    {
        gameInstance.SendMessage('GameController','newGame');
        //console.log("no data found because: " + e);
    }
}
</script>
<template>
    <Head title="GameView"/>
    <!--region buttons used for testing keep disabled for now-->
    <!--    <div class="flex flex-row justify-center items-center">-->
    <!--        <button type="button"-->
    <!--                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"-->
    <!--                onclick="requestLoadGame()">-->
    <!--            Message 1-->
    <!--        </button>-->
    <!--        <button type="button"-->
    <!--                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"-->
    <!--                onclick="gameInstance.SendMessage('GameController', 'sendMessage', 'Look a distraction!')">-->
    <!--            Message 2-->
    <!--        </button>-->

    <!--        <div @click="unityComms.sendJsonToUnity"-->
    <!--             class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"-->
    <!--        >-->
    <!--            Send Json-->
    <!--        </div>-->
    <!--    </div>-->
    <!--endregion-->
    <div class="flex">
        <div id="unity-container" class="unity-desktop" >

            <canvas ref='canvas' id="unity-canvas" width=960 height=600></canvas>
            <div id="unity-loading-bar">
                <div id="unity-logo"></div>
                <div id="unity-progress-bar-empty">
                    <div id="unity-progress-bar-full"></div>
                </div>
            </div>
            <!--region unity defaults-->
            <!--            <div id="unity-warning"></div>-->
<!--            <div id="unity-footer">-->
<!--                <div id="unity-webgl-logo"></div>-->
<!--                <div id="unity-fullscreen-button"></div>-->
<!--                <div id="unity-build-title">LearnLaravel</div>-->
<!--            </div>-->
            <!--endregion-->
        </div>
    </div>
</template>

