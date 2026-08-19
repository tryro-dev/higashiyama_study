<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>おみくじ結果</title>
    </head>

    <body>
        <div class="main">
            <h1>おみくじ結果</h1>
            <div class="result">
                <p>こんにちは、<?php ?>さん</p>
                <div  class="result text">
                    <p>あなたの運勢は「<?php ?>」です</p>
                    <p><?php ?></p><!--大吉or凶の時のみ-->
                </div>
                <a href="">もう一度占う</a>
            </div>


            <div class="error"><!--名前未入力時-->
                <p>名前を入力してください。</p>
                <a href="">戻る</a>
            </div>


        </div>
        
    </body>

</html>
