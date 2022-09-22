
     export function recievedJsonFromUnity(text) {
        const newMessage = JSON.parse(text);
        console.log(newMessage);
        //document.getElementById('health_title').innerText = "Health: " + newMessage.health;
        //document.getElementById('lives_title').innerText = "Lives: " + newMessage.lives;
    }

    export function sendJsonToUnity() {
        var testJson = {message: 'This is a json test from browser'};
        var jsonString = JSON.stringify(testJson);
        gameInstance.SendMessage('GameController', 'TestJson', jsonString);
    }

     export function updateGameJsonText() {
        var testJson = {message: 'Json requested from Unity'};
        var jsonString = JSON.stringify(testJson);
        gameInstance.SendMessage('GameController', 'TestJson', jsonString);
    }



