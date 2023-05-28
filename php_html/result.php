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
	<?php
		$conn = mysqli_connect("localhost", "root", "", "hospital");
		if(mysqli_connect_errno()){
			echo "Could not connect: ".mysqli_connect_error();
			exit();
		}
		// 입력 받은 이름으로 환자 정보 가져오기
		$name = $_GET['name'];
		$query1 = "SELECT * FROM PATIENT WHERE PNAME = '$name'";
		$result1 = mysqli_query($conn, $query1);
		$result2 = mysqli_query($conn, $query1);
		// 환자의 진료 차트 정보 가져오기
		$query2 = 
		"SELECT CONCAT(REPLACE(REPLACE(C.DIAGDATE, '월', ''), '일', ''), LPAD(C.CHARTNUM, 2, '0')) AS DIAGID, 
			C.DIAGDATE, C.DID, D.DNAME,  C.NID, N.NNAME, C.DIAGCONTENT, C.DOCOPINION FROM CHART AS C
			JOIN PATIENT AS P ON C.PID = P.PID
			LEFT JOIN DOCTOR AS D ON C.DID = D.DID
			LEFT JOIN NURSE AS N ON C.NID = N.NID
		WHERE P.PNAME = '$name'";
		$result3 = mysqli_query($conn, $query2);
		$result4 = mysqli_query($conn, $query2);
	?>
	<div class="wrapper">
		<div class="container">
			<section class="title">
			<p>데이터베이스 (2분반) 6조</p>
			<p>환자 검색 조회</p>
			</section>
			<div id="line"></div>
			<?php
				if (!mysqli_fetch_array($result1)) {
					echo '<div id="noneTitle">검색한 <?=$name?> 환자 정보가 없습니다</div>';
				}
			?>
			<?php while($row = mysqli_fetch_array($result2)) {?>
			<section class="tableWrapper">
				<div id="tableTitle">환자 정보</div>
				<table id="patientTable">
					<tr>
						<th>환자 ID</th>
						<td><?=$row['PID']?></td>
						<th>성명/성별</th>
						<td><?=$name?> / <?=$row['PSEX']?></td>
					</tr>
					<tr>
						<th>주민번호</th>
						<td><?=$row['PREGNUM']?></td>
						<th>직업</th>
						<td><?=$row['PCAREER']?></td>
					</tr>
					<tr>
						<th>연락처</th>
						<td colspan="3"><?=$row['PNUM']?></td>
					</tr>
					<tr>
						<th>이메일</th>
						<td colspan="3"><?=$row['PEMAIL']?></td>
					</tr>
					<tr>
						<th>주소</th>
						<td colspan="3"><?=$row['PADD']?></td>
				</tr>
				</table>
				<?php } ?>
				<?php
					if (mysqli_fetch_array($result3)) {
						echo '<div id="tableTitle">진료 차트</div>';
					} else {
						echo '<div id="noneTitle">진료 정보가 없습니다</div>';
					}
					?>
				<?php
                	while($row = mysqli_fetch_array($result4)) {
                ?>
				<table  id="diganoseTable">
					<tr>
						<th>진료 ID</th>
						<td><?=$row['DIAGID']?></td>
						<th>진료 날짜</th>
						<td><?=$row['DIAGDATE']?></td>
					</tr>
					<tr>
                        <th>담당 의사 / ID</th>
                        <td><?=$row['DNAME']?> / <?=$row['DID']?></td>
                        <th>담당 간호사</th>
                        <td><?=$row['NNAME']?> /<?=$row['NID']?></td>
                    </tr>
					<tr>
						<th colspan="4">진료 내용</th>
						<tr>
							<td colspan="4"  id='ltd'><?=$row['DIAGCONTENT']?></td>
						</tr>
					</tr>
					<tr>
						<th colspan="4">의사 소견</th>
					</tr>
					<tr>
						<td colspan="4"  id='ltd'><?=$row['DOCOPINION']?></td>
					</tr>
				</table>
				<?php } ?>
			</section>
		</div>
	</div>
</body>
</html>