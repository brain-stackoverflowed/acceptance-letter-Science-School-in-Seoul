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
	<form method="post" action="process.php">
		<div id="wrap">
			<table width="100%">
				<tbody>
					<tr>
						<td style="width:190px">
							<img id="LogoIMG" width="190" height="50" src="./files/9240.gif" alt="logo">
						</td>
						<td style="text-align:left">
							<h3>2023학년도 한성과학고등학교 소집면접 대상자 확인</h3>
						</td>
					</tr>
				</tbody>
			</table>
			<div id="cont">
				<div class="cont_in">
					<hr>
					<div id="Ipage">
						<p class="only_txt" style="text-align: center">
						</p>
						<h2>
							<font color="black">2023학년도 한성과학고등학교</font>
						</h2><br>
						<h1>신입생 소집 면접 대상자 발표</h1>
						<p></p>
						<hr>
						<hr>
						<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_list">
							<colgroup>
								<col width="150px">
								<col>
							</colgroup>

							<tbody>
								<tr id="TRName">
									<th>성&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;명</th>
									<td class="al_left"><input type="text" id="txtStuKorName" name="txtStuKorName"
											size="20" maxlength="20" class="in_gray" style="ime-mode: active"></td>
								</tr>

								<tr id="TRSuhum">
									<th>수험번호</th>
									<td class="al_left"><input type="text" id="txtSuhumNo" name="txtSuhumNo" size="20"
											maxlength="20" class="in_gray"></td>
								</tr>

							</tbody>
						</table>
						<hr>
						<p class="only_txt" style="text-align: left">
							성명, 수험번호 로그인 후에 확인 가능합니다.
						</p>
						<hr>
						<hr>
						<p class="btn_bottom_center">
							<input type="image" src="./files/btn_search.gif" alt="조회하기">
						</p>
					</div>
					<!--로그인-->
					<!--조회결과-->

					<!--조회결과-->
				</div>
			</div>
		</div>
		<div style="display: none">
			<input onclick="__doPostBack(&#39;srvSearch&#39;,&#39;&#39;)" name="srvSearch" type="button" id="srvSearch"
				size="1">
		</div>
	</form>



</body>

</html>