<!doctype html>
<html>
<head>
  <title>Easy Memo</title>
  <meta charset="utf-8">
</head>
<!--
주석은 이렇게 다는 것이다.
 -->
<body>
  <h1><a href="index.php">Easy Memo</a></h1>
  <ol>
    <?php
      $list = scandir("./data");
      $i=0;
      while($i<count($list)){
        if($list[$i]!="."){
          if($list[$i]!=".."){
            $list_view[$i] = trim($list[$i], "\.html");
            echo "<li><a href='index.php?id=$list[$i]'>$list_view[$i]</a></li>";
          }
        }
        $i=$i+1;
      }
    ?>
  </ol>

  <?php
    if(isset($_GET['id'])){
      echo file_get_contents("data/".$_GET['id']);
    } else {
      echo '
        <h2>이 메모의 장점</h2>
        <ul>
          <li><a href="merits.html">쉬운 접근</a></li>
          <li><a href="merits.html">쉬운 공유</a></li>
        </ul>

        <h2>왜 이 메모를 사용해요?</h2>
        <p>페이스북, 네이버 뉴스, 각종 학교 관련 사이트나 마음에 드는 문서, 동영상들을 찾았을 때 카카오톡 나에게 보내기나 페이스북 공유, 즐겨찾기 등으로 여기 저기에 저장하는데 여러 곳으로 분산되어 있고, 카테고리별로 분류하는 것이 불편하다고 생각했다. 또한 링크를 하나씩 복사하기보다는 간편하게 공유하는 버튼이 있으면 좋을 것 같다고 생각하여 이 프로젝트를 시작했다.
        </p>
        ';
    }
  ?>

</body>
</html>
