<?php
$dbConn = mysqli_connect("127.0.0.1", "sbsst", "sbs123414", "php_blog_2021") or die("DB connection error");

$sql = "
SELECT *
FROM article AS A
ORDER BY A.id DESC
";
$rs = mysqli_query($dbConn, $sql);

$articles = [];

while(true){
  $article = mysqli_fetch_assoc($rs);

  if($article == null){
    break;
  }

  $articles[] = $article;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>게시물 리스트</title>
</head>
<body>
  <h1>게시물 리스트</h1>
  <hr>

  <div>
    <?php foreach ($articles as $article) {?>
      번호 : <?=$article['id']?><br>
      등록일 : <?=$article['regDate']?><br>
      수정일 : <?=$article['updatedate']?><br>
      제목 : <?=$article['title']?><br>
      <hr>
    <?php }?>
  </div>

</body>
</html>