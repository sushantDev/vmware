<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>VMware Desktop Console</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/wmks-all.css') }}" />

    </head>
    <body>
    <script	type="text/javascript" src="{{ asset("js/jquery.min.js") }}"></script>
    <script	type="text/javascript" src="{{ asset("js/jquery-ui.min.js") }}"></script>
    <script	type="text/javascript" src="{{ asset('js/wmks.min.js') }}" type="text/javascript"></script>
    <script>
        var	wmks = WMKS.createWMKS("wmksContainer",{})
            .register(WMKS.CONST.Events.CONNECTION_STATE_CHANGE,
                function(event,data){
                    if(data.state == cons.ConnectionState.CONNECTED)
                    {
                        console.log("connection	state change : connected");
                    }
                });
        wmks.connect("ws://127.0.0.1:8080");
    </script>

    <div id=”wmksContainer”	style="position:absolute;width:100%;height:100%;" ></div>


    </body>
</html>
