<html>
<head>
<meta charset="utf-8">
<form action="/" method="post" enctype="multipart/form-data">
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name="viewport" content="width=1100">
<meta name="description" content="아쿠아파티 서버에 오신걸 환영합니다">
<meta name="keywords" content="아가리오, 아쿠아파티, 한국서버, 아가리오핵, 아갈, 코갈, 아갈크, 아코">
<meta name="robots" content="index, follow">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width">
<meta name="description" content="아쿠아파티 서버에 오신걸 환영합니다">
<meta property="og:type" content="website">
<meta property="og:title" content="Aqua.Party(아쿠아파티)">
<meta property="og:description" content="Aqua.Party(아쿠아 파티) agar.io(아가리오) 서버">
<meta property="og:url" content="http://agar.kr">
<link rel='canonical' href='http://agar.kr'>
<title>Aqua.Party(아쿠아 파티)</title>
<canvas id="canvas"></canvas>
<link href="./c/assets/css/Bootstrap.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
<link href="./c/assets/css/main.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet" type="text/css">
<body>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-105787724-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-105787724-1');
</script>
<span id="leaderboar">리더보드</span>
<span id="dpTime">오전 00:00:00</span>
<div id="overlays" style="background-color:rgba(0,0,0,0.4);position:absolute;left:0;right:0;top:0;bottom:0;z-index:200;font-family:Orbitron">
<div id="main">
<div id="serverPanel">
<div>
</br>
<a href="http://cafe.naver.com/aquaparty" target="_blank" id="cafe-btn" class="btn btn-default btn-sm" role="button">카페 방문</a>
<a href="https://goo.gl/forms/9wPabPJ3O9X79w702" target="_blank" id="cafe-btn" class="btn btn-default btn-sm" role="button">후원 하기</a>
<a href="http://ogario.ovh/skins/" target="_blank" id="cafe-btn" class="btn btn-default btn-sm" role="button">SKIN 갤러리</a>
<a href="http://agara.tk/c/" target="_blank" id="cafe-btn" class="btn btn-default btn-sm" role="button">무한분열 바로가기</a>
<a href="https://open.kakao.com/o/gcnMOJH" target="_blank" id="cafe-btn" class="btn btn-default btn-sm" role="button">오픈채팅방 바로가기</a>
<div>
</div>
</div>
<center>
</br>
</center>
</div>
<div id="serv">
<div>
</br>
<center>
<select size=8 class="form-control" style="overflow:hidden">
<br clear="both"/>
<option value="1" onclick='connect("ws://gk.agar.kr:2500")'>본섭화 모드</option>
<option value="2" onclick='connect("ws://ho.agar.kr:2900")'>무한분열 모드</option>
</select>
</br>
<font color="#ffffff">게임 조작법</font> </br>
<font color="#ffffff">W : 먹이</font> </br>
<font color="#ffffff">스페이스 (space) : 세포 분열</font> </br>
<font color="#ffffff">S : 세포 정지</font> </br>
<font color="#ffffff">d : 4분열</font> </br>
<font color="#ffffff">T,Z : 16분열</font> </br>
<div>
</div>
</div>
<center>
</br>
</center>
</div>
<div class="form-group">
<div style="float:left;margin-left:20px">
</div>
<br clear="both">
<form role="form">
<ul class="nav nav-tabs nav-justified" role="tablist">
<li role="presentation" class="active">
<a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a>
</li>
<li role="presentation">
<a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">설정</a>
</li>
<li role="presentation">
<a href="#theming" aria-controls="theming" role="tab" data-toggle="tab">색깔</a>
</li>
</ul>
<div class="tab-content">
<div role="tabpanel" class="tab-pane " id="home"></div>
<div role="tabpanel" class="tab-pane fade settings" id="settings">
<br>
<div class="container">
<div class="settingsRow" style="overflow: auto; height:150px;width: 340px;">

<span id="animationTxt">분열감 : 120</span>
<br>
<br>
<label></label>
<input type="range" id="delay" min="10" max="300">
</label>
<br>
<br>
<div style="position:relative">
<label>
<input type="checkbox" name="sqMode" id="sqMode"> 사각형 모드 &nbsp</label>
<br>
<label>
<input type="checkbox" name="sectors" id="sectors"> 백그라운드 맵 &nbsp</label>
<br>
<label>
<input type="checkbox" name="cellalpha" id="cellalpha"> 세포투명화 ON or OFF &nbsp</label>
<br>
<label>
<input type="checkbox" name="borders" id="borders"> MAP 테두리 ON or OFF &nbsp</label>
<br>
<label>
<input type="checkbox" name="food" id="food"> 먹이 보이기 On or OFF &nbsp</label>
<br>
<label>
<input type="checkbox" name="name" id="name"> 이름 보이기 ON or OFF &nbsp</label>
<br>
<label>
<input type="checkbox" name="mass" id="mass"> 메스 보이기 ON or OFF &nbsp</label>
<br>
<label>
<input type="checkbox" name="chathi" id="chathi"> 채팅 보이기 ON or OFF &nbsp</label>
<label>

</div>
</div>
</div>
</div>
<br>
<div role="tabpanel" class="tab-pane fade" id="theming">
<label>백그라운드 맵 색깔 </label>
<br>
<input class="jscolor" id="bgColour" value="222222">
<br>
<label>MAP 테두리 색깔 &nbsp</label>
<br>
<input class="jscolor" id="borderColour" value="35B597">
<br>
<label>SECTOR Color 좌표색깔 &nbsp</label>
<br>
<input class="jscolor" id="sectorColour" value="313031">
</div>
</div>
</form>
</div>
<div class="form-group">
<input class="form-control" id="nick" maxlength="15" placeholder="닉네임">
<input class="form-control" id="skinUrl" placeholder="스킨 Url">
</div>
<br>
<div class="form-group">
<button type="submit" id="playBtn" onclick="setNick(document.getElementById('nick').value); return false;" class="shake-constant btn playButton btn-primary btn-needs-server">Play</button> 
<button class="btn btn-warning watchButton btn-needs-server" id="watchBtn" onclick="watch();return false">관전</button>
<br clear="both">
<br>
</div>
</form>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.3/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.3/socket.io.slim.js"></script>
<script src="./c/assets/js/main.js"></script>
<script src="./c/assets/js/c.js"></script>
<script src="./c/assets/js/a.js"></script>
<script src="./c/assets/js/m.js"></script>
<script src="./c/assets/js/jscolor.js"></script>
<input id="chat" maxlength="200" placeholder="Enter를 눌러 채팅 전송!" type="text">
</body
</ html >
