<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../css/result.css" rel="stylesheet" />
	<title>데이터베이스 6조: 환자 정보 상세페이지</title>
</head>
<body>
	<div class="wrapper">
		<div class="container">
			<section class="title">
			<p>데이터베이스 (2분반) 6조</p>
			<p>환자 정보 조회</p>
			</section>
			<div id="line"></div>
			<section class="tableWrapper">
				<div id="tableTitle">환자 정보</div>
				<table id="patientTable">
					<tr>
						<th>환자 ID</th>
						<td>51001a</td>
						<th>성명/성별</th>
						<td><?php echo $_GET['name']?> / 여</td>
					</tr>
					<tr>
						<th>주민번호</th>
						<td>920630-2899007</td>
						<th>직업</th>
						<td>변호사</td>
					</tr>
					<tr>
						<th>담당 의사</th>
						<td>김의사</td>
						<th>담당 간호사</th>
						<td>김간호사</td>
					</tr>
					<tr>
						<th>연락처</th>
						<td colspan="3">0502-6102</td>
					</tr>
					<tr>
						<th>이메일</th>
						<td colspan="3">vhaoe@naver.com</td>
					</tr>
					<tr>
						<th>주소</th>
						<td colspan="3">홍제동</td>
					</tr>
				</table>
				<div id="tableTitle">진료 정보</div>
				<table  id="diganoseTable">
					<tr>
						<th>진료 ID</th>
						<td>51001a</td>
						<th>담당 의사 ID</th>
						<td>51001a</td>
					</tr>
					<tr>
						<th>환자 ID</th>
						<td>51001a</td>
						<th>진료 날짜</th>
						<td>51001a</td>
					</tr>
					<tr>
						<th colspan="4">진료 내용</th>
						<tr>
							<td colspan="4"  id='ltd'>고구마를 너무 많이먹음</td>
						</tr>
					</tr>
				</table>
				<div id="tableTitle">차트 정보</div>
				<table id="chartTable">
					<tr>
						<th>환자 ID</th>
						<td>51001a</td>
						<th>진료 ID</th>
						<td>51001a</td>
					</tr>
					<tr>
						<th>담당 의사 ID</th>
						<td>51001a</td>
						<th>담당 간호사 ID</th>
						<td>51001a</td>
					</tr>
					<tr>
						<th colspan="4">의사 소견</th>
					</tr>
					<tr>
						<td colspan="4"  id='ltd'>고구마를 너무 많이먹음</td>
					</tr>
				</table>
			</section>
		</div>
	</div>
</body>
</html>