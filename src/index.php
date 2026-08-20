<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>おみくじアプリ</title>
        <link rel="stylesheet" href="stylesheet.css">
    </head>

    <body>
        <div class="main1">
            <h1>おみくじアプリ</h1>
            <div class="form">
                <form action="result.php" method="post">
                  <label>
                    名前を入力してください。
                    <input type="text" name="username" placeholder="太郎" maxlength="20" minlength="1">
                  </label>
                  <button type="submit" >占う</button>
                </form>
            </div>
        </div>
    </body>

</html>
