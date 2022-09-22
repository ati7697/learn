<script setup>
import {Head, Link} from '@inertiajs/inertia-vue3';
import unityGameSetUp from '../GameViewJava';
import {onMounted} from "vue";
import * as unityComms from "../UnityCommunicationHandler";
import {Inertia} from "@inertiajs/inertia";
import {recievedJsonFromUnity} from "../UnityCommunicationHandler";
// import {updateGameJsonText} from "../UnityCommunicationHandler";
onMounted(() => {
    unityGameSetUp();


})


methods: {

}

</script>

<template>

    <Head title="GameView"/>
    Hello world

    <div class="flex flex-row justify-center items-center">
        <button type="button"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                onclick="requestLoadGame()">
            Message 1
        </button>
        <button type="button"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                onclick="gameInstance.SendMessage('GameController', 'sendMessage', 'Look a distraction!')">
            Message 2
        </button>

        <div @click="unityComms.sendJsonToUnity"
             class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
        >
            Send Json
        </div>
    </div>

    <div id="app">
    </div>
    <div class="flex">
        <div id="unity-container" class="unity-desktop" @unity="onUnity">

            <canvas ref='canvas' id="unity-canvas" width=960 height=600></canvas>
            <div id="unity-loading-bar">
                <div id="unity-logo"></div>
                <div id="unity-progress-bar-empty">
                    <div id="unity-progress-bar-full"></div>
                </div>
            </div>
<!--            <div id="unity-warning"></div>-->
<!--            <div id="unity-footer">-->
<!--                <div id="unity-webgl-logo"></div>-->
<!--                <div id="unity-fullscreen-button"></div>-->
<!--                <div id="unity-build-title">LearnLaravel</div>-->
<!--            </div>-->
        </div>
    </div>
</template>

