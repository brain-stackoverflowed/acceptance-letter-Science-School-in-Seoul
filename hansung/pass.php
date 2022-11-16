<!--http://addon.jinhakapply.com/ApplyV8/Addon/Etc/UnivPassStu914009.aspx?IDX=rGya%2bIBWTv6qB9xxgddlYQ%3d%3d-->

<?php
  $na = $_POST['txtStuKorName'];
  $no = $_POST['txtSuhumNo'];
?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<title>
		합격자발표
	</title>
	<link rel="STYLESHEET" type="text/css" href="./files/UnivPassStyle.css">
</head>

<body class="vsc-initialized">
	<div id="wrap">
		<table width="100%">
			<tbody>
				<tr>
					<td style="width:190px">
						<img id="LogoIMG" width="190" height="50" src="./files/9240.gif" alt="logo">
					</td>
					<td style="text-align:left">
						<h3>2023학년도 신입생 입학전형 소집면접 대상자 확인</h3>
					</td>
				</tr>
			</tbody>
		</table>
		<div id="cont">
			<div class="cont_in">
				<hr>
				<!--조회결과-->
				<div id="Cpage">
					<p class="only_txt" style="text-align: center">
					</p>
					<h2>
						<font color="black">한성과학고등학교 2023학년도 신입생 입학전형</font>
					</h2><br>
					<h1>소집면접 대상자 발표</h1>
					<p></p>
					<hr>
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_list">
						<tbody>
							<tr>
								<th>이름</th>
								<th>수험번호</th>
								<th>소집면접 대상자</th>
							</tr>
							<tr>
								<td><?php echo $na ?></td>
								<td><?php echo $no ?></td>
								<td>합격</td>
							</tr>
						</tbody>
					</table>
					<hr>
					<p class="only_txt" style="text-align: left">
					<span class="fc_blue_02"><span style="color: blue;">귀하는 소집면접 대상자로
									선정되었습니다.</span><br>
							<span style="color: blue;"><b>소집 면접은 2022.11.26</b> 입니다.</span><br>
							<span style="color: black;"> ※ 소집면접 대상자에 대한 안내는 2022.11.25 12시 이후 진학어플라이 로그인 후</span><br>
							&nbsp;&nbsp;&nbsp;<span style="color: black;">출력물 리스트 중 <b>[소집면접 대상자 안내]</b>를 확인 할 것</span><br><br>
							<span style="color: blue;"> 구체적인 사항은 본교 홈페이지 「입학게시판」에서 반드시 확인하시기 바랍니다.</b>
					</p>
					<hr>
					<p class="btn_bottom_center">
						<a href="home.php">
							<img src="./files/btn_search_again.gif" alt="다시 조회하기" onclick="javascript:history.back(-1);"></a>
						<span class="nbsp">
						<a href="home.php">
							<img src="./files/btn_close.gif" alt="닫기" onclick="javascript:window.close();"></a></span>
					</p>
				</div>
				<!--조회결과-->
			</div>
		</div>
	</div>
</body>

</html>