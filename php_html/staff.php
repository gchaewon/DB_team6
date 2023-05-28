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

        $query1 = "SELECT DNAME, COUNT(DNAME) AS CNT FROM hospital.chart as a, hospital.doctor as b WHERE a.DID = b.DID GROUP BY DNAME;";
        $result1 = mysqli_query($conn, $query1);
        $result2 = mysqli_query($conn, $query1);

        $query2 = "SELECT NNAME, COUNT(NNAME) AS CNT FROM hospital.chart as a, hospital.nurse as b WHERE a.NID = b.NID GROUP BY NNAME;";
        $result3 = mysqli_query($conn, $query2);
        $result4 = mysqli_query($conn, $query2);

        $query3 = "SELECT NWORK, COUNT(NWORK) AS CNT FROM hospital.nurse GROUP BY NWORK;";
        $result5 = mysqli_query($conn, $query3);
        $result6 = mysqli_query($conn, $query3);

        $query4 = "SELECT NSUBJECT, COUNT(NSUBJECT) AS CNT FROM hospital.nurse GROUP BY NSUBJECT;";
        $result7 = mysqli_query($conn, $query4);
        $result8 = mysqli_query($conn, $query4);
    ?>

	<div class="wrapper">
		<div class="container">
			<section class="title">
			<p>데이터베이스 (2분반) 6조</p>
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
                        <?php
                        while($row = mysqli_fetch_array($result1))
                        {
                        ?>
                                <th colspan="3"><?=$row['DNAME']?></th>
                        <?php } ?>
                    </tr>
                    <tr>
                        <?php
                        while($row = mysqli_fetch_array($result2))
                        {
                        ?>
                                <td colspan="3"><?=$row['CNT']?>명</td>
                        <?php } ?>
                    </tr>
                    <tr>
                        <th colspan="12">간호사 1인당 환자 수</th>
                    </tr> 
                    <tr>
                        <?php
                        while($row = mysqli_fetch_array($result3))
                        {
                        ?>
                                <th colspan="4"><?=$row['NNAME']?></th>
                        <?php } ?>
                    </tr>
                    <tr>
                        <?php
                        while($row = mysqli_fetch_array($result4))
                        {
                        ?>
                                <td colspan="4"><?=$row['CNT']?>명</td>
                        <?php } ?>
                    </tr>

                    <tr>
                        <th colspan="12">담당업무별 간호사 수</th>
                    </tr> 
                    <tr>
                        <?php
                        while($row = mysqli_fetch_array($result5))
                        {
                        ?>
                                <th colspan="4"><?=$row['NWORK']?></th>
                        <?php } ?>
                    </tr>
                    <tr>
                        <?php
                        while($row = mysqli_fetch_array($result6))
                        {
                        ?>
                                <td colspan="4"><?=$row['CNT']?>명</td>
                        <?php } ?>
                    </tr>
                    <tr>
                        <th colspan="12">진료과목별 간호사 수</th>
                    </tr> 
                    <tr>
                        <?php
                        while($row = mysqli_fetch_array($result7))
                        {
                        ?>
                                <th colspan="4"><?=$row['NSUBJECT']?></th>
                        <?php } ?>
                    </tr>
                    <tr>
                        <?php
                        while($row = mysqli_fetch_array($result8))
                        {
                        ?>
                                <td colspan="4"><?=$row['CNT']?>명</td>
                        <?php } ?>
                    </tr>
				</table>
			</section>
		</div>
	</div>
</body>
</html>