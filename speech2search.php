<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <title>speech2text</title>
</head>
<style>
    ._img{
        width:auto;
        height:auto;
        max-height:calc((100vh - 125px) / 2);
        max-width: 100%;
    }
    .highlight{
        color: #86b4fd;
        line-height:24px;
    }
    #show_origin{
        color:green;
        font-weight:600;
        font-family: Microsoft JhengHei;
    }
    .header{
        width:80%;
        height:50px;
        margin-top:-15px;
        margin-left:10%;
    }
    .header_line{
        height:37px;
        border-bottom:1px solid #ddd;
        position:absolute;
        width:80%;
        z-index: -1;
    }
    .date_time{
        color:white;
        font-weight:600;
        font-family: Microsoft JhengHei;
        background-color:#252525;
        z-index:100;
        line-height:74px;
        width:160px;
        margin-left:calc(50% - 80px);
    }
    body,div,p{
        margin:0;
    }
    .content{
        width:80%;
        height:calc(100vh - 65px);
        margin:0 10%;
    }
    .img_name{
        font-weight: 600;
        text-align: left;
        margin-left: 10px;
    }
    .footer{
        height:50px;
        width:80%;
        margin-left:10%;
        background-color:rgb(98 98 98);;
        border-radius:15px;
        color:rgb(134 180 253);
        display:flex;
        margin-top: -35px;
        
    }
    @keyframes fadeIn {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }

    @keyframes fadeOut {
        0% {
            opacity: 1;
        }
        100% {
            opacity: 0;
        }
    }
    ._img_div{
        background-color: #f0f8ff99;
        margin: 6px 0;
        border-radius: 15px;
    }
    .language_type{
        font-size:20px;
        font-weight:600;
        line-height:50px;
        position: absolute;
        margin-left: 35%;
        font-family: Microsoft JhengHei;
    }
    .show_area{
        text-align:left;
        padding:10px;
        display:flex;
    }
    #show_img{
        width:40%;
        padding:0 5px;
        height:calc(100vh - 75px);
        text-align:center;
        overflow-y: scroll;
    }
    #show{
        color:white;
        font-weight:600;
        font-family: Microsoft JhengHei;
        height:calc(100vh - 75px);
        overflow-y: scroll;
        flex-wrap: wrap;
        width:60%;
    }
    .mid{
        font-size:24px;
    }
    .large{
        font-size:36px;
    }
    .small{
        font-size:16px;
    }
    /* 隱藏 scrollbar */
::-webkit-scrollbar {
  display: none;
}

/* 調整滾動條樣式 */
::-webkit-scrollbar-track {
  background-color: #f5f5f5;
  border-radius: 4px;
}

::-webkit-scrollbar-thumb {
  background-color: #555;
  border-radius: 4px;
}

::-webkit-scrollbar-thumb:hover {
  background-color: #888;
}

    .setting_area{
        width: 200px;
        bottom: 56px;
        border-radius: 10px;
        position:absolute;
        box-shadow: 4px 2px 2px 0px #b9b9b9;
        background-color:#ffffffd1;
        display:none;
        text-align:left;
        font-weight:600;
        font-family: Microsoft JhengHei;
        color:black;
        font-size:16px;
    }
    #setting.rotate {
        transform: rotate(-90deg);
    }
    #setting{
        transition: transform 0.6s ease;
    }
    
    .setting_item{
        
        display:flex;
    }
    .setting_area_block{
        border: 2px solid #adadad;
        margin: 4px;
        border-radius: 5px;
        background-color: #afafaf;
    }
    .font_size_p{
        width:33%;
        text-align:center;
        border-radius:5px;
        background-color:#d5d5d5;
        margin:2px;
        padding:2px;
    }
    .language_p{
        width:50%;
        text-align:center;
        border-radius:5px;
        background-color:#d5d5d5;
        margin:2px;
        line-height:24px;
    }
    .select{
        background-color:#86b4fd;
    }
    .back{
        position: absolute;
        top: 5px;
        left: 28px;
        font-size: 5vw;
        color: white;
    }
    .circle{
        background-color: rgb(134 180 253);
        width: 6%;
        height: 6vw;
        position: absolute;
        right: 0;
        top: 0;
        border-radius: 0 0 0 100px;
    }
    .is_detect_or_not{
        background-color: rgb(194 215 247 / 60%);
        width: 8%;
        height: 8vw;
        position: absolute;
        right: 0;
        top: 0;
        border-radius: 0 0 0 100px;
        display:none;
    }

</style>
<body style="background-color: #252525;text-align: center;">
    <div class="is_detect_or_not">
        
    </div>
    <div class="circle">

    </div>
    <div class="back">
        <i class="fa-solid fa-caret-left"></i>
    </div>
    <div class="header">
        <div class="header_line">
            
        </div>
        <p class="date_time">
    
        </p>
    </div>
    <div class="content">
        <div class="show_area">
            <!-- <p id="show_origin" class="mid">
                
            </p> -->
            <div id="show" class="mid">

            </div>
            <div id="show_img">

            </div>
        </div>
    </div>
    <div class="footer">
        <div class="setting_area">
            <div class="font_size setting_area_block">
                <p class="setting_item_title">字體大小</p>
                <div class="setting_item" style="line-height:36px;">
                    <p class="small font_size_p">小</p>
                    <p class="mid font_size_p select">中</p>
                    <p class="large font_size_p">大</p>
                </div>
            </div>
            <div class="language setting_area_block">
                <p class="setting_item_title">選擇語言</p>   
                <div class="setting_item">
                    <p class="ch language_p select">繁體中文</p>
                    <p class="en language_p">English</p>
                </div> 
                
            </div>
        </div>
        <i id="setting" class="fa-solid fa-gear" style="line-height:50px;font-size:30px;margin: 0 4% 0 3%;"></i>
        <i id="pause" class="fa-solid fa-pause" style="line-height:50px;font-size:35px;"></i>
        <i id="start" class="fa-solid fa-play" style="line-height:50px;font-size:30px;display:none"></i>
        <p class="language_type">繁體中文</p>
    </div>
</body>
<script>
    let timeoutId;
    $(".back").click(function(){
        location.href="index.php";
    })
    $(document).ready(function(){
        ShowTime();
        let timeout;

        function startTimer() {
            clearTimeout(timeout);
            timeout = setTimeout(function() {
                $('.footer').css('animation', 'fadeOut 1s forwards');
            }, 2000);
        }

        function resetTimer() {
            clearTimeout(timeout);
            $('.footer').css('animation', 'fadeIn 1s forwards');
            startTimer();
        }

        startTimer();

        $('body').on('click', function() {
            resetTimer();
        });
    })
    
    function ShowTime(){
        var NowDate=new Date();
        var y=NowDate.getFullYear();
        var mon=(NowDate.getMonth()+1).toString();
        var d=NowDate.getDate().toString();
        var h=NowDate.getHours().toString();
        var m=NowDate.getMinutes().toString();
        if(mon.length==1){
            mon="0"+mon;
        }
        if(d.length==1){
            d="0"+d;
        }
        if(h.length==1){
            h="0"+h;
        }
        if(m.length==1){
            m="0"+m;
        }
        $('.date_time').html(y+'.'+mon+'.'+d+'　'+h + ':' + m);

        setTimeout('ShowTime()',10000);
    }
    var stop2start=false;
    var scrollableDiv_img = document.getElementById("show_img");
    var scrollableDiv = document.getElementById("show");
    var show = $('#show');
    var show_img = $('#show_img');
    var recognition = new webkitSpeechRecognition();

    recognition.continuous=true;
    recognition.interimResults=true;
    recognition.lang="cmn-Hant-TW";

    var keyword_img=[];
    var keywords=[<?php include("classical.php");?>];
    recognition.onresult=function(event){
        var i = event.resultIndex;
        var j = event.results[i].length-1;
        // $("#show_origin").html(event.results[i][j].transcript);
        var answer="";
        $(".is_detect_or_not").css("display","block");
        if(answer=event.results[i][j].transcript){
            clearTimeout(timeoutId);
            var result=answer;
            setTimeout(() => { 
                $(".is_detect_or_not").css("display","none");
                // timeoutId = setTimeout(function () {
                //     $.ajax({
                //         type: "POST",
                //         url: "cut.php",
                //         data: {text: answer},
                //         success: function(result) { 
                //             show.html(result);
                //         },
                //         error: function(e){
                //             console.log(e);
                //         }
                //     });
                // }, 600);
            }, 50);
            // 找關鍵字
            var img="";
            var k;
            keywords.forEach(keyword => {
                if (answer.includes(keyword.name)) {
                    const highlightedKeyword = `<span class="highlight">$&</span>`;
                    const regex = new RegExp(keyword.name, 'g');
                    result = result.replace(regex, highlightedKeyword);
                    // img+="<div class='_img_div'><div class='img_name'>"+keyword.name+"</div><img class='_img' src='"+keyword.image+"'></div>";
                    k=0;
                    keyword_img.forEach(ki=>{
                        if(ki==keyword.name){
                            k=1;
                        }
                    })
                    if(k==0){
                        keyword_img.push(keyword.name);
                    }
                    
                }
            });
            keyword_img.forEach(ki=>{
                if (answer.includes(ki)) {
                    img+="<div class='_img_div'><div class='img_name'>"+ki+"</div><img class='_img' src='./img/"+ki+".jpg'></div>";
                }
            })
            // if(k==0){
            //     keyword_img.remove(keyword.name);
            // }
            // keyword_img.forEach(ki=>{
            //     img+="<div class='_img_div'><div class='img_name'>"+ki+"</div><img class='_img' src='"+ki+"'></div>";
            // })
            show.html(result);
            show_img.html(img);

            
        }
        
        scrollableDiv.scrollTop = scrollableDiv.scrollHeight;
        scrollableDiv_img.scrollTop = scrollableDiv_img.scrollHeight;
       
    };
    recognition.start();
    $("#pause").click(function(){
        $("#start").css("display","block");
        stop2start=false;
        recognition.stop();
        console.log('停止辨識!');
        $("#pause").css("display","none");
    })
    $("#start").click(function(){
        $("#pause").css("display","block");
        recognition.start();
        console.log('開始辨識...');
        $("#start").css("display","none");
    })
    $("#setting").click(function(){
        $(".setting_area").toggle();
        $("#setting").toggleClass("rotate");
    })
    $(".mid.font_size_p").click(function(){
       removec();
       $("#show").addClass("mid");
       $(".mid.font_size_p").addClass("select");
    })
    $(".small.font_size_p").click(function(){
       removec();
       $("#show").addClass("small");
       $(".small.font_size_p").addClass("select");
    })
    $(".large.font_size_p").click(function(){
       removec();
       $("#show").addClass("large");
       $(".large.font_size_p").addClass("select");
    })
    function removec(){
        if($("#show").hasClass("small")){
            $("#show").removeClass("small");
            $(".small").removeClass("select");
        }else if($("#show").hasClass("large")){
            $("#show").removeClass("large");
            $(".large").removeClass("select");
        }else{
            $("#show").removeClass("mid");
            $(".mid").removeClass("select");
        }
    }
    $(".ch").click(function(){
        recognition.lang="cmn-Hant-TW";
        console.log("change to ch");
        reload_d();
        if($(".en").hasClass("select")){
            $(".en").removeClass("select");
            $(".ch").addClass("select");
            $(".language_type").html("繁體中文");
        }
    })
    $(".en").click(function(){
        recognition.lang="en-US";
        console.log("change to en");
        reload_d();
        if($(".ch").hasClass("select")){
            $(".ch").removeClass("select");
            $(".en").addClass("select");
            $(".language_type").html("English");
        }
    })
    function reload_d(){
        if($("#pause").css("display")!="none"){
            recognition.stop();
            stop2start=true;
            console.log("stop"); 
        }
    }
    recognition.onend = () => { 
        if(stop2start){
            recognition.start();
        console.log("start"); 
        }
    }
  </script>
</html>



