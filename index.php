<!doctype html>
 <head>
  <meta charset="euc-kr">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=yes" />
  <title>초대합니다</title>
  <script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>
  <style>
  * {
  		margin: 0;
		padding: 0;
		-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
		-moz-tap-highlight-color: rgba(0, 0, 0, 0);
		-webkit-text-size-adjust: 100%;
}

html,body {
	height: 100%;
}

body {
	background-color: #eee;
}
#wrap {
	max-width: 500px;
	margin: 0 auto;
	background-color: #fff;
	height: auto;
}

.img100 {
	max-wadth: 100%;
	width: auto;
	width: 100%;
}

.content_wrap {
	font-size: 14px;
	text-align: center;
	padding-top: 15px;
	margin: 0 15px;
	color: #8d968c;
	line-height: 20px;
}

h3 {
	text-align: center;
	color: rgba(181, 230, 29, 50);
}
p {
	text-align: center;
}

.contact_wrap {
	text-align: center;
}

.slide_wrap {
	text-align: center;
}



  </style>
  
 </head>
 <body>
 	<div id="wrap">
		<div class="slide_wrap">
			<img src="https://user-images.githubusercontent.com/41117380/42576449-5d5eacc0-855d-11e8-8226-ef43063fdea1.png" class="img100"/>
		</div>
		<div class="content_wrap">
		<h3>우리 아가의 돌잔치에 초대합니다</h3><br>
			<p>항상 저희를 아껴주시고, 응원해 주시는 분들께</p><br>
			<p>감사의 말씀을 드립니다.</p><br>
			<p>우리 아가의 첫번째 돌잔치에 초대장을 드리오니</p><br>
			<p>아무쪼록 오셔서 함께 자리를 빛내주시기 바랍니다</p><br>
		</div>
<?
		//echo "<div class="map_wrap">지도(location)</div>";
?>
		<div class="contact_wrap">
			<a href="location.php" class="bg3"><img src="https://user-images.githubusercontent.com/41117380/42576448-5d324036-855d-11e8-9d76-76840af5edf8.png"/></a>&nbsp&nbsp&nbsp&nbsp
			<a href="gallery.php" class="bg4"><img src="https://user-images.githubusercontent.com/41117380/42576447-5d025e8e-855d-11e8-9013-22089c94c775.png"/></a>&nbsp&nbsp&nbsp&nbsp
			<a id="kakao-link-btn" href="javascript:;">
				<img src="//developers.kakao.com/assets/img/about/logos/kakaolink/kakaolink_btn_medium.png"/>
			</a>



<script type='text/javascript'>
  //<![CDATA[
    // // 사용할 앱의 JavaScript 키를 설정해 주세요.
    Kakao.init('65b2f0ac0942c0cd2dac3c8ff94da471');
    // // 카카오링크 버튼을 생성합니다. 처음 한번만 호출하면 됩니다.
    Kakao.Link.createDefaultButton({
      container: '#kakao-link-btn',
      objectType: 'feed',
      content: {
        title: '돌잔치 초대장',
        description: '우리 아가의 첫번째 돌잔치에 초대장을 드리오니 아무쪼록 오셔서 함께 자리를 빛내주시기 바랍니다',
        imageUrl: 'https://postfiles.pstatic.net/MjAxODA3MTFfMjgg/MDAxNTMxMjcwNzIyNzQ0.fjT6y5CuLLkITZp_vTM4XQyzdl1eaQFBwsTEzZy_ieMg.klXpf2c9G2VNw6Vk1nYY8LL2NqfPcF6JiXjKstvSjRIg.JPEG.fhgkak1994/main.jpg?type=w580',
        link: {
          mobileWebUrl: 'localhost/main_m.php',
          webUrl: 'localhost/main_m.php'
        }
      },
      buttons: [
        {
          title: '웹으로 보기',
          link: {
            mobileWebUrl: 'http://localhost/main_m.php',
            webUrl: 'http://localhost/main_m.php'
          }
        }
      ]
    });
  //]]>
</script>
			<?
			/*<a herf="kakaotalk.php" class="bg5">KakaoTalk</a>*/
			?>


		</div>


		<div class="contact_wrap">
			<a href="tel:010-1234-5678" class="bg1"><img src="https://user-images.githubusercontent.com/41117380/42576446-5ccef364-855d-11e8-8e56-d0f46be31c34.png"/></a>&nbsp&nbsp&nbsp&nbsp
			<a href="tel:010-1234-5678" class="bg2"><img src="https://user-images.githubusercontent.com/41117380/42576450-5d930056-855d-11e8-9b11-2e44f25c4e3c.png"/></a>
		</div>
		
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.0/jquery.min.js">
	</script>

 
 </body>
</html>
