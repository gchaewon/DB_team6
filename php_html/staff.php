<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../css/report.css" rel="stylesheet" />
	<title>데이터베이스 6조: 분석 보고서 의료진 통계 페이지</title>
</head>
<body>
	<div class="wrapper">
		<div class="container">
			<section class="title">
			<p>데이터베이스 (2분반) 6조</p>
			<!-- <?php echo $_GET['name']?> -->
			<p>분석 보고서</p>
			</section>
			<div id="line"></div>
			<section class="tableWrapper">
				<div id="tableTitle">의료진 통계</div>
				<table id="staffTable"> 
                    <tr>
                        <th colspan="12">의사 1인당 환자 수</th>
                    </tr>   
					<tr>
						<th colspan="3">박소현</th>
                        <th colspan="3">최상현</th>
                        <th colspan="3">남상진</th>
                        <th colspan="3">김성우</th>
					</tr>
					<tr>
						<td colspan="3">0명</td>
                        <td colspan="3">0명</td>
                        <td colspan="3">0명</td>
                        <td colspan="3">0명</td>
					</tr>
                    <tr>
                        <th colspan="12">간호사 1인당 환자 수</th>
                    </tr> 
                    <tr>
                        <th colspan="3">박주희</th>
                        <th colspan="3">최은영</th>
                        <th colspan="3">임태연</th>
                        <th colspan="3">조은혜</th>
					</tr>
					<tr>
                        <td colspan="3">0명</td>
                        <td colspan="3">0명</td>
                        <td colspan="3">0명</td>
                        <td colspan="3">0명</td>
					</tr>
                    <tr>
                        <th colspan="3">윤성우</th>
                        <th colspan="3">윤태우</th>
                        <th colspan="3">함지아</th>
                        <th colspan="3">김세연</th>
					</tr>
					<tr>
                        <td colspan="3">0명</td>
                        <td colspan="3">0명</td>
                        <td colspan="3">0명</td>
                        <td colspan="3">0명</td>
					</tr>
                    <tr>
                        <th colspan="3">함채연</th>
                        <th colspan="3"></th>
                        <th colspan="3"></th>
                        <th colspan="3"></th>
					</tr>
					<tr>
                        <td colspan="3">0명</td>
                        <td colspan="3"></td>
                        <td colspan="3"></td>
                        <td colspan="3"></td>
					</tr>
                    <tr>
                        <th colspan="12">담당업무별 간호사 수</th>
                    </tr> 
                    <tr>
                        <th colspan="4">환자관리</th>
                        <th colspan="4">진료접수</th>
                        <th colspan="4">차트관리</th>
					</tr>
                    <tr>
                        <td colspan="4">0명</td>
                        <td colspan="4">0명</td>
                        <td colspan="4">0명</td>
					</tr>
                    <tr>
                        <th colspan="12">진료과목별 간호사 수</th>
                    </tr> 
                    <tr>
                        <th colspan="4">이비인후과</th>
                        <th colspan="4">치과</th>
                        <th colspan="4">안과</th>
					</tr>
                    <tr>
                        <td colspan="4">0명</td>
                        <td colspan="4">0명</td>
                        <td colspan="4">0명</td>
					</tr>
				</table>
			</section>
		</div>
	</div>
</body>
</html>