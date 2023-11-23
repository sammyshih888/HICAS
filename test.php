<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <title>中文斷詞示例</title>
</head>
<body>
    <h1>中文斷詞示例</h1>
    <input type="text" id="text">
    <button onclick="doCut()">斷詞</button>
    <div id="result"></div>
    <script>
        function doCut() {
            var text = $("#text").val();
            $.ajax({
                type: "POST",
                url: "cut.php",
                data: {text: text},
                success: function(result) {
                    $("#result").html(result);
                }
            });
        }
    </script>
</body>
</html>
