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
            background: #000;
        }
        #stage{
            width: 1000px;
            height: 300px;
            margin: 100px auto;
            background: #cccccc;
            box-shadow: 0px 0px 2px 4px rgba(0,0,0,0.6);
            /*overflow: hidden;*/
            border:1px solid rgba(0,0,0,0.6);
            -webkit-perspective: 800px;
            -webkit-perspective-origin: center -20%;
        }
        #container{
            width: 128px;
            height: 100px;
            margin: 80px auto;
            position: relative;
            -webkit-transform-style: preserve-3d;
            -webkit-transition: transform 2s ease;
        }
        #container img{
            width: 128px;
            height: 100px;
            position: absolute;
            left:0;
            top:0;
            -webkit-transition:transform 2s ease;
        }
    </style>


</head>
<body>
    <div id="stage">
        <div id="container">

        </div>
    </div>

    <script>
        var oContainer = document.getElementById('container');
        var html = '';
        var x = 64/Math.tan(20*Math.PI/180) +20;


/*
         for(var i=0; i<9;i++){
         html+='<img src="img/'+(i+1)+'.jpg" style="-webkit-transform:rotateY(0deg) translateZ(0px)"/>';
         }
         oContainer.innerHTML = html;*/
        var count = 0;
        for(var i=0; i<9;i++){
            var oImg = new Image();
            oImg.onload = function(){
                count++;
                if(count == 9){
                    //9张图片都加载完了
                    var aImg = document.getElementsByTagName('img');
                    var time = 900;
                    for(var i=0; i<9;i++){
                        time-=100;
//                        time = (8-i)*100;
                        aImg[i].style.WebkitTransition= 'transform 2s ease '+time+'ms';
                        aImg[i].style.WebkitTransform = 'rotateY('+(-i*40)+'deg) translateZ('+x+'px)';
                    }
                }
            }
            oImg.src = 'img/'+(i+1)+'.jpg';
            oContainer.appendChild(oImg);
        }

        var num = 0
        oContainer.onclick = function(){
            num++;
            this.style.WebkitTransform = 'rotateY('+num*40+'deg)';
        }


    </script>


</body>
</html>