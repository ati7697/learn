<script setup>
import {onMounted} from "vue";
import unityGameSetUp from '../../GameViewJava';
import {Head, Link} from '@inertiajs/inertia-vue3';

onMounted(() => {
    unityGameSetUp();
    window.addEventListener("stateFromUnity",(e) => recievedJsonFromUnity(e));
    window.addEventListener("requestData", (e) => requestLoadGameData(e));
})
const props = defineProps({
    current_lesson: Object ,
    current_course: Object
})
const recievedJsonFromUnity = async (e) => {
    let response = await axios.post(route('courses.lessons.save',
        {course: props.current_course, lesson:props.current_lesson} ),
        {game_state: e.detail.gamestate });
    try {
    } catch (e) {
        console.log("failed to add to databse, error: ", +e);
    }
}
const  requestLoadGameData = async (e) =>
{
    try {
        const reponse = await axios.get(route('courses.lessons.load', {course:props.current_course, lesson: props.current_lesson}))
        let gameMessage = reponse.data['gameLoaded'];
        //console.log("gamestate: " + gameMessage);
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
    <div class="flex">
        <div id="unity-container" class="unity-desktop" >

            <canvas ref='canvas' id="unity-canvas" width=960 height=600></canvas>
            <div id="unity-loading-bar">
                <div id="unity-logo"></div>
                <div id="unity-progress-bar-empty">
                    <div id="unity-progress-bar-full"></div>
                </div>
            </div>
        </div>
    </div>
</template>

