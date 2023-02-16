<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello php</title>

    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }

        *::-webkit-scrollbar {
            display: none;
        }

        body {
            background-color: black;
            color: white;
            padding: 1rem;
            width: 100vw;
            height: 100vh;
            font-family: monospace;
            display: flex;
            justify-content: center;
            font-size: 2em;
        }
    </style>
</head>
<body>
    <?php
        $ARG = (int)$_GET["n"];

        if(!$ARG) {
            echo "THERE IS NO ARGS";
        } else {
           if($ARG < 100) {
               for($i = 0 ; $i < $ARG ; $i++) {
                   echo "$i : I love you! <br/>";
               }
           } else {
               echo "Too long Broo";
           }
        }

    ?>
</body>
</html>

