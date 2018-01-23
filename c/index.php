<html>
<head>
<meta charset="utf-8">
<form action="/" method="post" enctype="multipart/form-data">
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name="viewport" content="width=1100">
<meta name="description" content="아쿠아 파티 본섭화 서버에 들어오신걸 환영합니다">
<meta name="keywords" content="아가리오, 아쿠아파티, 한국서버, 아가리오핵, 아갈, 코갈, 아갈크, 아코">
<meta name="robots" content="index, follow">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width">
<meta name="description" content="아쿠아 파티 본섭화 서버에 들어오신걸 환영합니다">
<meta property="og:type" content="website">
<meta property="og:title" content="Aqua.Party(아쿠아 파티)">
<meta property="og:description" content="Aqua.Party(아쿠아 파티) agar.io(아가리오) 서버">
<meta property="og:image" content="img.png">
<meta property="og:url" content="http://agar.kr">
<link rel='canonical' href='http://agar.kr'>
<title>Aqua.Party(아쿠아 파티) 무한 분열</title>
<canvas id="canvas"></canvas>
<link href="./assets/css/Bootstrap.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
<link href="./assets/css/main.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet" type="text/css">
</head>
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
<h2 style="font-family:'Orbitron',sans-serif;font-size:30px;color:orange" id="titleh">서버 목록</h2>
<div>
<h2 style="font-family:'Orbitron',sans-serif;font-size:13px;color:white" id="titleh">원하시는 서버모드를 선택해주세요.</h2>
</div>
</div>
<hr>
<center>
<select size=8 class="form-control" style="overflow:hidden">
<br clear="both"/>
<option value="1" onclick='connect("ws://ho.agar.kr:2900")'>무한분열 모드</option>
<option value="2" onclick='connect("ws://gk.agar.kr:2500")'>본섭화 모드</option>
</select>
<h2 style="font-family:'Orbitron',sans-serif;font-size:13px;color:white" id="titleh">아쿠아파티 V2 바로가기</h2>
<a href="./b" target="_blank"style="background-color: orange" id="cafe-btn" class="btn btn-default btn-sm" role="button">아쿠아 V2</a>
</br>
</center>
</div>
<div class="form-group">
<div style="float:left;margin-left:20px">
<h2 style="font-family:'Orbitron',sans-serif;font-size:45px;color:orange" id="titleh">Aqua.Party</h2>
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
<div role="tabpanel" class="tab-pane" id="home"></div>
<div role="tabpanel" class="tab-pane fade settings" id="settings">
<hr>
<div class="container">
<div class="settingsRow">
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
<br>
<br>
<a href="http://cafe.naver.com/diepiogame" target="_blank"style="background-color: orange" id="Sponsor-btn" class="btn btn-default btn-sm" role="button">아이오 게임즈</a>
</br>
<a href="http://veatyou.xyz/" target="_blank"style="background-color: orange" id="Sponsor-btn" class="btn btn-default btn-sm" role="button">비트유 끄투</a>
<label>
<br>
<br>
</div>
</div>
</div>
</div>
<div role="tabpanel" class="tab-pane fade" id="theming">
<label>백그라운드 맵 색깔 </label>
<br>
<input class="jscolor" id="bgColour" value="222222">
<br>
<label>MAP 테두리 색깔 &nbsp</label>
<br>
<input class="jscolor" id="borderColour" value="35B597">
<br>
<label>SECTOR Color[나도모름] &nbsp</label>
<br>
<input class="jscolor" id="sectorColour" value="313031">
<br>
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
<a href="http://cafe.naver.com/aquaparty" target="_blank"style="background-color: orange" id="cafe-btn" class="btn btn-default btn-sm" role="button">카페 방문</a>
<a href="https://goo.gl/forms/9wPabPJ3O9X79w702" target="_blank"style="background-color: orange" id="skin-btn" class="btn btn-default btn-sm" role="button">후원 하기</a>
<a href="http://ogario.ovh/skins/" target="_blank"style="background-color: orange" id="Sponsor-btn" class="btn btn-default btn-sm" role="button">SKin 갤러리</a>
</div>
<button class="shake-constant btn playButton btn-primary btn-needs-server" style="background-color:orange" id="playBtn" onclick="setNick(document.getElementById('nick').value);return false" type="submit">PLAY</button>
<button class="btn btn-warning watchButton btn-needs-server" style="background-color:orange" id="watchBtn" onclick="watch();return false">관전</button>
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
<script src="./assets/js/main.js"></script>
<script src="./assets/js/c.js"></script>
<script src="./assets/js/a.js"></script>
<script src="./assets/js/m.js"></script>
<script src="./assets/js/jscolor.js"></script>
<input id="chat" maxlength="200" placeholder="Enter를 눌러 채팅 전송!" type="text">
</body>
</html>