<?php
 //　名前の受け取り
 $name = $_POST['username'];

 // おみくじの結果をランダムに1つ抽出
 function omikuji() {
    $results = ["大吉", "中吉", "小吉", "凶"];
    return $results[array_rand($results)];
 }
 $fortune = omikuji();

 // 結果に応じたコメント
 function getComment($fortune) {
    if ($fortune === "大吉") return "おめでとう!";
    if ($fortune === "凶") return "残念!";
    return "";
 }
 $comment = getComment($fortune);

?>


<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>おみくじ結果</title>
        <link rel="stylesheet" href="stylesheet.css">
    </head>

    <body>
        <div class="main2">
            <h1>おみくじ結果</h1>
            <div class="result">
              <?php if(isset($_POST['username'])&& $_POST['username']!==""):?><!--名前入力時-->
                <div class="success">
                  <p>こんにちは、<?php echo $name ?>さん</p>
                    <div  class="fortunetxt">
                      <p>あなたの運勢は「<?php echo $fortune ?>」です</p>
                      <p><?php echo $comment ?></p><!--大吉or凶の時のみ-->
                    </div>
                  <a href="index.php">もう一度占う</a>
                </div>
              <?php else:?><!--未入力時-->
                <div class="error">
                  <p>名前を入力してください。</p>
                  <a href="index.php">戻る</a>
                </div>
              <?php endif;?>
            </div>
        </div>
    </body>

</html>
