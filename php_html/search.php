<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../css/style.css" rel="stylesheet" />
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
        <form method="get" class="inputForm" action="result.php">
          <p id="inputTitle">환자의 이름을 입력해주세요</p>
            <input class="input" type="text" name="name" placeholder="예) 김이화"/>
            <input class="button" type="submit" value="환자 정보 조회"/>
        </form>
      </div>
    </div>
  </body>
</html>
