<!DOCTYPE html>
<html>
<head>
	<title>Serial Data Receiver</title>
	<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
	<script>
		$(function() {
			var socket = new WebSocket("wss://59.127.152.79/");
			socket.onopen = function () {
				socket.send('Hello Server!');
			}
			console.log(1);
			socket.onmessage = function(event) {
				$("#data").text(event.data);
			};
		});
		
	</script>
	 <script type="text/javascript">
        //  $(function()
        //  {
        //     if ("WebSocket" in window)
        //     {
        //        alert("您的浏览器支持 WebSocket!");
               
        //        // 打开一个 web socket
        //        var ws = new WebSocket("ws://localhost:9998/echo");
                
        //        ws.onopen = function()
        //        {
        //           // Web Socket 已连接上，使用 send() 方法发送数据
        //           ws.send("发送数据");
        //           alert("数据发送中...");
        //        };
                
        //        ws.onmessage = function (evt) 
        //        { 
        //           var received_msg = evt.data;
        //           alert("数据已接收...");
        //        };
                
        //        ws.onclose = function()
        //        { 
        //           // 关闭 websocket
        //           alert("连接已关闭..."); 
        //        };
        //     }
            
        //     else
        //     {
        //        // 浏览器不支持 WebSocket
        //        alert("您的浏览器不支持 WebSocket!");
        //     }
		//  })
      </script>
</head>
<body>
	<h1>Serial Data Receiver</h1>
	<p>Data received from Arduino:</p>
	<p id="data"></p>
</body>
</html>