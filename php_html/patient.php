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
    <?php 
        // $conn = mysqli_connect("localhost:3306", "web", "web_admin", "hospital"); 
        $conn = mysqli_connect("localhost", "root", "", "hospital"); 

        if(mysqli_connect_errno()){
            echo "Could not connect: ".mysqli_connect_error();
            exit();
        }

        mysqli_query($conn, "set session character_set_connection=utf8;");
        mysqli_query($conn, "set session character_set_results=utf8;");
        mysqli_query($conn, "set session character_set_client=utf8;");

        $query1 = "SELECT DSUBJECT, COUNT(DSUBJECT) AS CNT FROM hospital.chart as a, hospital.doctor as b WHERE a.DID = b.DID GROUP BY DSUBJECT;";
        $result1 = mysqli_query($conn, $query1);
        $result2 = mysqli_query($conn, $query1);

        $query2 = "SELECT (100-CAST(SUBSTRING(PREGNUM, 1, 2) AS UNSIGNED)+24) AS YEAR, COUNT(SUBSTRING(PREGNUM, 1, 2)) AS CNT FROM hospital.chart as a, hospital.patient as b WHERE a.PID = b.PID GROUP BY SUBSTRING(PREGNUM, 1, 2);";
        $result3 = mysqli_query($conn, $query2);
        $result4 = mysqli_query($conn, $query2);

        $query3 = "SELECT DOCOPINION, COUNT(DOCOPINION) AS CNT FROM hospital.chart GROUP BY DOCOPINION;";
        $result5 = mysqli_query($conn, $query3);
        $result6 = mysqli_query($conn, $query3);

        $query4 = "SELECT PADD, COUNT(PADD) AS CNT FROM hospital.patient GROUP BY PADD ORDER BY PADD ASC LIMIT 5;";
        $result7 = mysqli_query($conn, $query4);
        $result8 = mysqli_query($conn, $query4);

        $query5 = "SELECT PADD, COUNT(PADD) AS CNT FROM hospital.patient GROUP BY PADD ORDER BY PADD ASC LIMIT 5, 5;";
        $result9 = mysqli_query($conn, $query5);
        $result10 = mysqli_query($conn, $query5);

        $query6 = "SELECT PADD, COUNT(PADD) AS CNT FROM hospital.patient GROUP BY PADD ORDER BY PADD ASC LIMIT 10, 5;";
        $result11 = mysqli_query($conn, $query6);
        $result12 = mysqli_query($conn, $query6);
    ?>  
    
	<div class="wrapper">
		<div class="container">
			<section class="title">
			<p>데이터베이스 (2분반) 6조</p>
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
                        <?php
                        while($row = mysqli_fetch_array($result1))
                        {
                        ?>
                                <th colspan="5"><?=$row['DSUBJECT']?></th>
                        <?php } ?>
                    </tr>
                    <tr>
                        <?php
                        while($row = mysqli_fetch_array($result2))
                        {
                        ?>
                                <td colspan="5"><?=$row['CNT']?>명</td>
                        <?php } ?>
                    </tr>
                    <tr>
                        <th colspan="15">연령대별 환자 수</th>
                    </tr>
                    <tr>
                        <?php
                        while($row = mysqli_fetch_array($result3))
                        {
                        ?>
                                <th colspan="3"><?=$row['YEAR']?>세</th>
                        <?php } ?>
                    </tr>
                    <tr>
                        <?php
                        while($row = mysqli_fetch_array($result4))
                        {
                        ?>
                                <td colspan="3"><?=$row['CNT']?>명</td>
                        <?php } ?>
                    </tr>
                    <tr>
                        <th colspan="15">의사소견별 환자 수</th>
                    </tr>
                    <tr>
                        <?php
                        while($row = mysqli_fetch_array($result5))
                        {
                        ?>
                                <th colspan="3"><?=$row['DOCOPINION']?></th>
                        <?php } ?>
                    </tr>
                    <tr>
                        <?php
                        while($row = mysqli_fetch_array($result6))
                        {
                        ?>
                                <td colspan="3"><?=$row['CNT']?>명</td>
                        <?php } ?>
                    </tr>
                    <tr>
                        <th colspan="15">거주지별 환자 수</th>
                    </tr>
                    <tr>
                        <?php
                        while($row = mysqli_fetch_array($result7))
                        {
                        ?>
                                <th colspan="3"><?=$row['PADD']?></th>
                        <?php } ?>
                    </tr>
                    <tr>
                        <?php
                        while($row = mysqli_fetch_array($result8))
                        {
                        ?>
                                <td colspan="3"><?=$row['CNT']?>명</td>
                        <?php } ?>
                    </tr>
                    <tr>
                        <?php
                        while($row = mysqli_fetch_array($result9))
                        {
                        ?>
                                <th colspan="3"><?=$row['PADD']?></th>
                        <?php } ?>
                    </tr>
                    <tr>
                        <?php
                        while($row = mysqli_fetch_array($result10))
                        {
                        ?>
                                <td colspan="3"><?=$row['CNT']?>명</td>
                        <?php } ?>
                    </tr>
                    <tr>
                        <?php
                        while($row = mysqli_fetch_array($result11))
                        {
                        ?>
                                <th colspan="3"><?=$row['PADD']?></th>
                        <?php } ?>
                        <th colspan="3"></th>
                        <th colspan="3"></th>
                        <th colspan="3"></th>
                    </tr>
                    <tr>
                        <?php
                        while($row = mysqli_fetch_array($result12))
                        {
                        ?>
                                <td colspan="3"><?=$row['CNT']?>명</td>
                        <?php } ?>
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