<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<meta name="viewport" content="width=1100">
	<meta name="description" content="아쿠아 파티 본섭화 서버에 들어오신걸 환영합니다">
	<meta name="keywords" content="아가리오, 아쿠아파티, 한국서버, 아가리오핵, 아갈, 코갈, 아갈크, 아코">
	<meta name="robots" content="index, follow">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Aqua.Party(아쿠아 파티)">
	<meta property="og:description" content="Aqua.Party(아쿠아 파티) agar.io(아가리오) 서버">
	<meta property="og:image" content="img.png">
	<meta property="og:url" content="http://agar.kr">
	<link rel='canonical' href='http://agar.kr'>
	<title>Aqua.Party(아쿠아 파티)</title>
	<link id="favicon" rel="icon" type="image/png" href="assets/img/favicon.png" />
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Orbitron"/>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/index.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./assets/css/Bootstrap.css"/>
  </script><script src="assets/js/m.js"></script>
	
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
	<img src="aga.png" id="img">
	<span id="dpTime">오전 00:00:00</span>
	<div id="overlays">
		<div id="helloDialog">
				<div id="seval">
						<div class="panel panel-success">
								<div class="panel-heading">
								<div class="header" align="center">
									<center>
										<span style="font-size: 14pt;">게임 색깔</span>
									  </center>
						</div>
	</div>
						<div id="backgruondco">
							</br>
							<span style="font-size: 11pt;">&nbsp MAP 테두리 색깔 </span>
						</br>
						&nbsp&nbsp<input class="jscolor" id="borderColor" placeholder="" value="35B597" style="width:180px;"></td>
						</br>
					        <span style="font-size: 11pt;">&nbspSector Color (영어)</span>
							</br>
							&nbsp&nbsp<input class="jscolor" id="sectorColor" placeholder="" value="313031" style="width:180px;"></td>
							</br>
						<span style="font-size: 11pt;">&nbsp리더보드 글자 색깔</span>
							</br>
							&nbsp&nbsp<input class="jscolor" id="lbColor" placeholder="" value="FFAAAA" style="width:180px;"></td>
						</br>
							<td><span style="font-size: 11pt;">&nbsp이름 색깔</span>
							</br>
							&nbsp&nbsp<input class="jscolor" id="nameColor" placeholder="" value="FFFFFF" style="width:180px;"></td>
					</br>
				</br>
				&nbsp&nbsp<a href="http://cafe.naver.com/diepiogame" target="_blank" id="Sponsor-btn" class="btn btn-default btn-sm" role="button">아이오 게임즈</a>
			</br>
		</br>
	
								<div style="margin: 6px;">
								<center>
								</center>
							</div>
						</div>
					</div>
				</div>
			<form role="form">
				<div class="form-group">
					    <h2 style="font-family: 'Orbitron', sans-serif;font-size: 48px;color: orange;" id="title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aqua.Party</span></h2>
				</br>
				</div>
				<div class="form-group"> <input id="nick" class="form-control" style="margin-bottom: 10px;" placeholder="닉네임" maxlength="15" />
				<select id="gamemode" class="form-control" style="margin-bottom: 10px;" onchange="setServer($(this).val())" required>
                        <option value="gk.agar.kr:2500">본섭화 모드</option>
                        <option value="ho.agar.kr:2900">무한분열 모드</option>
                    </select>
					</div>
					<div class="form-group">
						<a href="http://cafe.naver.com/aquaparty" target="_blank" id="cafe-btn" class="btn btn-default btn-sm" role="button">카페 방문</a>
						<a href="https://goo.gl/forms/9wPabPJ3O9X79w702" target="_blank" id="skin-btn" class="btn btn-default btn-sm" role="button">후원 하기</a>
						<a href="gallery" target="_blank" id="Sponsor-btn" class="btn btn-default btn-sm" role="button">SKin 갤러리</a>
						</div>
		<div class="form-group">  <button type="submit" id="play-btn" onclick="setNick(document.getElementById('nick').value); return false;" class="btn btn-play btn-primary btn-needs-server">Play</button> <button onclick="$('#settings, #instructions').toggle(); return false;" class="btn btn-info btn-settings" id="settings-btn"><i class="glyphicon glyphicon-cog"></i></button> 		<a href="http://agar.kr/rule" target="_blank" id="rule-btn" class="btn btn-default btn-sm" role="button"><font color="#ffffff">서버규칙</font></a><br clear="both" /> </div>
		<div id="settings" class="checkbox" style="display:none;">
        <div class="form-group" id="mainform">
			<hr/>
        <center>
        <span class="text-muted">
					  <span style="font-size: 11pt;"><font color="#ffffff">W , E : 먹이 매크로 T , Z : 16분열 매크로 D : 듀얼 스플릿 매크로</font></span></br>
		  <hr/>
        </div>
	</div>
        </form>
        <div id="instructions">
        <button id="spectate-btn" onclick="spectate(); return false;" style="width: 100%" class="btn btn-warning btn-spectate btn-needs-server btn-sm">관전
		</button>
		<br clear="both" />
        <br clear="both" />
    
        <div style="margin: 6px;">
        <label>
                        <label><input type="checkbox" onchange="setSkins(!$(this).is(':checked'));"><font color="#ffffff">스킨 숨기기</label>
                        <label><input type="checkbox" onchange="setNames(!$(this).is(':checked'));"><font color="#ffffff">이름 숨기기</label>
                        <label><input type="checkbox" onchange="setDarkTheme($(this).is(':checked'));"><font color="#ffffff"></font> MAP선 보이기</label>
                        <label><input type="checkbox" onchange="setColors($(this).is(':checked'));"><font color="#ffffff"></font>색갈 끄기 </label>
                        <label><input type="checkbox" onchange="setShowMass($(this).is(':checked'));" checked><font color="#ffffff"></font>메스 보이기</label>
                        <label><input type="checkbox" onchange="setSmooth($(this).is(':checked'));" ><font color="#ffffff"></font>부드러운 렌더링</label>
                        <label><input type="checkbox" onchange="setChatHide($(this).is(':checked'));"><font color="#ffffff"></font>채팅 숨기기</label>
                        <label><input type="checkbox" onchange="setCellBorder($(this).is(':checked'));"><font color="#ffffff"></font>세포 테두리 보이기</label>
                        <label><input type="checkbox" onchange="setAcid($(this).is(':checked'));"><font color="#ffffff"></font>어지러운 모드</label>
                        <label><input type="checkbox" onchange="setMapBorders($(this).is(':checked'));" checked><font color="#ffffff"></font>맵 테두리 보이기</label>
                        <label><input type="checkbox" onchange="setMapSectors($(this).is(':checked'));" checked><font color="#ffffff"></font>백그라운드 맵 보이기</label>
                        <label><input type="checkbox" onchange="setNameShadows($(this).is(':checked'));"> <font color="#ffffff"></font>닉네임 그림자없애기 </label>
			            <label><input type="checkbox" onchange="setTransparent($(this).is(':checked'));"><font color="#ffffff"></font>세포 투명화</label>
         
                        <!--NOTE: </b>You do not need to include the # in the color hex.!-->
                     
                    </div>
				</div>
			</form>
		
		</div>
	</div>
	<div id="connecting">
			<div class="alert alert-danger" style="width: 425px; margin: 205px auto; padding: 15px 15px 15px 15px;">
			<strong><span class="glyphicon glyphicon-exclamation-sign"></span> 연결 시도 중...</strong><br /> 서버가 꺼져있거나 점검중입니다 문제가 지속될경우 <a class="alert-link" href="http://cafe.naver.com/aquaparty">카페</a>를 확인해 주세요.
			</div>
	</div> <canvas id="canvas"></canvas> <input type="text" id="chat_textbox" placeholder="Enter를 눌러 채팅 전송!" maxlength="200" />
	<div style="font-family:'Ubuntu'">&nbsp;</div>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/vector.js"></script>
	<script src="assets/js/c.js"></script>
	<script src="assets/js/main_out.js"></script>
	<script src="assets/js/jscolor.js"></script>
</body>
</html>