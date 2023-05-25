<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../css/report.css" rel="stylesheet" />
	<title>데이터베이스 6조: 분석 보고서 환자 통계 페이지</title>
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
				<div id="tableTitle">환자 통계</div>
				<table id="patient2Table"> 
                    <tr>
                        <th colspan="15">진료과목별 환자 수</th>
                    </tr>
                    <tr>
                        <th colspan="5">이비인후과</th>
                        <th colspan="5">치과</th>
                        <th colspan="5">안과</th>
                    </tr>
                    <tr>
                        <td colspan="5">0명</td>
                        <td colspan="5">0명</td>
                        <td colspan="5">0명</td>
                    </tr>
                    <tr>
                        <th colspan="15">연령대별 환자 수</th>
                    </tr>
                    <tr>
						<th colspan="3">30세</th>
                        <th colspan="3">31세</th>
                        <th colspan="3">32세</th>
                        <th colspan="3">33세</th>
                        <th colspan="3">34세</th>
					</tr>
                    <tr>
                        <td colspan="3">0명</td>
                        <td colspan="3">0명</td>
                        <td colspan="3">0명</td>
                        <td colspan="3">0명</td>
                        <td colspan="3">0명</td>
					</tr>
                    <tr>
                        <th colspan="15">의사소견별 환자 수</th>
                    </tr>
                    <tr>
						<th colspan="3">양호</th>
                        <th colspan="3">재내원</th>
                        <th colspan="3">입원요망</th>
                        <th colspan="3">응급</th>
                        <th colspan="3">심각</th>
					</tr>
                    <tr>
                        <td colspan="3">0명</td>
                        <td colspan="3">0명</td>
                        <td colspan="3">0명</td>
                        <td colspan="3">0명</td>
                        <td colspan="3">0명</td>
					</tr>
                    <tr>
                        <th colspan="15">거주지별 환자 수</th>
                    </tr>
                    <tr>
						<th colspan="3">공덕동</th>
                        <th colspan="3">대현동</th>
                        <th colspan="3">망원동</th>
                        <th colspan="3">봉원동</th>
                        <th colspan="3">상수동</th>
					</tr>
                    <tr>
                        <td colspan="3">0명</td>
                        <td colspan="3">0명</td>
                        <td colspan="3">0명</td>
                        <td colspan="3">0명</td>
                        <td colspan="3">0명</td>
					</tr>
                    <tr>
						<th colspan="3">서교동</th>
                        <th colspan="3">신림동</th>
                        <th colspan="3">연남동</th>
                        <th colspan="3">연희동</th>
                        <th colspan="3">창천동</th>
					</tr>
                    <tr>
                        <td colspan="3">0명</td>
                        <td colspan="3">0명</td>
                        <td colspan="3">0명</td>
                        <td colspan="3">0명</td>
                        <td colspan="3">0명</td>
					</tr>
                    <tr>
						<th colspan="3">홍은동</th>
                        <th colspan="3">홍제동</th>
                        <th colspan="3"></th>
                        <th colspan="3"></th>
                        <th colspan="3"></th>
					</tr>
                    <tr>
                        <td colspan="3">0명</td>
                        <td colspan="3">0명</td>
                        <td colspan="3"></td>
                        <td colspan="3"></td>
                        <td colspan="3"></td>
					</tr>
				</table>
			</section>
		</div>
	</div>
</body>
</html>