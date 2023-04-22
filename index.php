<!DOCTYPE html>
<html>
    <head>
       <title>Jeux De L'Archet</title>
           <meta name="viewport" content="width=device-width, initial-scale=1" >
       <meta charset="utf-8">
       <style>
                        body {
                    margin: 0;
                    font-family:monospace;
                    text-align:center;
                    height: 100vh;
                    width: 100vw;
                }

                #mainContainer {
                    transform-origin:0% 0%;
                    position:absolute;
                    width:100%;
                    top:0;
                    left:0;
                }

                #score {
                    position:absolute;
                    top:0;
                    left:0;
                    width:100%;
                    text-align:center;
                    font-size:60px;
                    font-weight:900;
                    color:#45f;
                }

                #showPoint {
                    position:absolute;
                    top:0;
                    left:0;
                    background:transparent;
                    margin:0;
                }

                #showPoint .u{
                    position:absolute;
                    display:inline-block;
                    top:50%;
                    left:70%;
                    font-size:30px;
                    font-family:arial;
                    opacity:0;
                    transition:top 0.1s linear,left 0.1s linear
                }

                #animCanvas {
                    position:absolute;
                    top:0;
                    left:0;
                    z-index:100;
                    border-bottom:1px solid blue;
                }

                #arrs {
                    font-size:30px;
                    text-align:left;
                    position:absolute;
                    margin:0;
                    top:0;
                    padding-left:10px;
                }

                #startMenu {
                    position:absolute;
                    top:0;
                    left:0;
                    background:#fff;
                    z-index:1000;
                    width:100%;
                    height:100%;
                }

                #startMenu h1 {
                    font-size:50px;
                    text-shadow:2px 3px #aaa;
                    font-weight:900;
                }

                #startMenu button {
                    font-size:22px;
                    background:none;
                    border:none;
                    border-top:3px solid #000;
                    border-bottom:3px solid #000;
                    padding:10px 30px 5px;
                    line-height:20px;
                    outline:none;
                }

                #startMenu h2 {
                    font-size:25px;
                }

                #timerDiv {
                height:8px;
                padding:0px;
                border:2px solid blue;
                width:50%;
                position:absolute;
                bottom:20px;
                left:25%;
                border-radius:20px;
                }
                        
                .timer {
                height:8px;
                width:0%;
                background:red;
                animation: countTime 4.5s linear 1;
                animation-delay:0.5s;
                border-radius:20px;
                }
                        
                @keyframes countTime {
                0% {
                    width: 100%;
                    background-color: lime;
                }
                50% {
                    background-color:yellow;
                }
                100% {
                    width: 0%;
                    background-color: red;
                }
                }
       </style>
    </head>
    <body>
        <div id="mainContainer">
        <canvas id="myCanvas"></canvas>
        <canvas id="animCanvas"></canvas>
        <h1 id="score">0</h1>
        <div id="showPoint">
            <div id="timerDiv"></div>
            <p id="arrs">&uarr;</p><span class="u">&uarr; +4</span>
           
        </div>
        <div id="startMenu">
            <h1 id="title"><span style="font-size:60px">A</span>RCHERY<br><span style="font-size:60px">G</span>AME</h1>
            <button>COMMANCER</button>
            <h2><span id="best">0</span><br>Meilleur</h2>
        </div>
    </div>
    </body>
   <?php require_once "./js.php" ?>
</html>