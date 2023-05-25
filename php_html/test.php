<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../css/style.css" rel="stylesheet" />
     <!-- http://localhost/homework2/hw2.php -->
    <title>데이터베이스 6조</title>
  </head>
  <body>
  <div class="wrapper">
    <div class="container">
      <section class="title">
        <p>데이터베이스 (2분반) 6조</p>
        <p>이화 병원 관리 DB</p>
      </section>
      <div id="line"></div>
      <section class="input">
        <p id="inputTitle">환자의 이름을 입력해주세요</p>
        <input placeHolder="예) 김이화" >
      </section>
      <button>환자 정보 조회</button>
    </div>
    <?php
    // mysqli_connect("localhost", "사용자 이름","접근 비번", "db 이름")
      $conn = mysqli_connect("localhost", "root", "", "company");
      if (!$conn) {
        echo "DATA BASE CONNECTION ERROR!";
      } else {
        echo "DATA BASE CONNECTION SUCCESS!";
        if (mysqli_connect_errno()) {
          echo "Could not connect: " . mysqli_connect_error();
          exit();
        }
        $query = "SELECT deptno, deptname, floor FROM department";
        $result = mysqli_query($conn, $query);
      }
      ?>
   
      <table>
        <tr>
          <td>부서 번호</td>
          <td>부서 이름</td>
          <td>층</td>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($result)) {
          echo "<tr>";
          echo "<td>" . $row['deptno'] . "</td>";
          echo "<td>" . $row['deptname'] . "</td>";
          echo "<td>" . $row['floor'] . "</td>";
          echo "</tr>";
        }
        ?>
      </table>
    </div>
    <?php
    mysqli_free_result($result);
    mysqli_close($conn);
    ?>
  </body>
  <script>  
   
    </script>
</html>





