<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="<?php echo site_url();?>">
    <title>王建的个人网站</title>
    <style>
        *{
            margin:0;
            padding: 0;
        }
        body{
            background: #000000;
            -webkit-perspective: 800px;
        }
        #container{
            margin:100px auto;
            width: 200px;
            height: 200px;
            position:relative;
            -webkit-transform-style: preserve-3d;
            -webkit-animation: run 2s linear infinite;
        }
        @-webkit-keyframes run {
            100%{
                -webkit-transform: rotateY(360deg);
            }
        }
        #container div{
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.6);
            border-radius: 10px;
            font-size: 50px;
            text-align: center;
            line-height: 200px;
            position: absolute;
            left:0;
            top:0;
        }
        #one{
            -webkit-transform: rotateX(90deg) translateZ(100px);
        }
        #two{
            -webkit-transform: translateZ(100px);
        }
        #three{
            -webkit-transform: rotateY(90deg) translateZ(100px);
        }
        #four{
            -webkit-transform: rotateY(180deg) translateZ(100px);
        }
        #five{
            -webkit-transform: rotateY(-90deg) translateZ(100px);
        }
        #six{
            -webkit-transform: rotateX(-90deg) translateZ(100px);
        }
    </style>
</head>
<body>
    <div id="container">
        <div id="one">1</div>
        <div id="two">2</div>
        <div id="three">3</div>
        <div id="four">4</div>
        <div id="five">5</div>
        <div id="six">6</div>
    </div>

</body>
</html>