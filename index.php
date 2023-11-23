<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <title>一圖勝千言</title>
</head>
<style>
    ._title{
        
    }
    ._title_p{
        color: white;
        font-size: 8vmax;
        font-weight: 700;
        margin: 13vh;
    }
    ._button{
        background-color: #4d4d4d;
        border-radius: 100px;
        width: 50%;
        margin: 2% 25%;
        border: 3px solid #a0d3ffe8;
    }
    ._button_p{
        font-size: 3vmax;
        color: white;
        font-weight: 700;
        margin: 1vh;
    }

</style>
<body style="background-color: #252525;text-align: center;">
    <div class="_title">
        <p class="_title_p">
            一圖勝千言
        </p>
    </div>
    <div class="_button" id="speech2text">
        <p class="_button_p">出口成章</p>
    </div>
    <div class="_button" id="speech2search">
        <p class="_button_p">圖圖示到</p>
    </div>
</body>
<script>
    $("#speech2text").click(function(){
        location.href="speech2text.php";
    })
    $("#speech2search").click(function(){
        location.href="speech2search.php";
    })
</script>
</html>
