<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="shortcut icon" href="unityBuild/TemplateData/favicon.ico">
        <link rel="stylesheet" href="unityBuild/TemplateData/style.css">
        <!-- Scripts -->
        @routes
        @vite('resources/js/app.js')
        @inertiaHead
    </head>
    <script>

        async function recievedJsonFromUnity(text) {

            console.log("trying to add to database")

            try {
                let response = await axios.post(route('game.save'), {game_state: text});

            }
            catch (e)
            {
                console.log("failed to add to databse, error: ", + e);
            }


        }
        async function requestLoadGameData()
        {
            try {
                const reponse = await axios.get(route('game.load'))
                let testmessage = reponse.data['gameLoaded'];
                let saveStateMessage = JSON.stringify(reponse.data['gameLoaded']);
                console.log("gamestate: " + testmessage);
                if(reponse.data['gameLoaded'] == null)
                {
                    gameInstance.SendMessage('GameController','newGame');
                    console.log('database was empty');
                }
                else{
                    gameInstance.SendMessage('GameController','loadedDataFromWeb',testmessage);
                    console.log("data found and loading");
                }

            }
            catch (err)
            {
                gameInstance.SendMessage('GameController','newGame');
                console.log("no data found because: " + err);
            }

        }

    </script>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
