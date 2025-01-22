<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>PHP基礎編</title>
    </head>

<!--======== 前略 ========-->

    <body>
        <?php
        // 各点数を変数に代入
        $score1 = 80;
        $score2 = 60;
        $score3 = 55;
        $score4 = 40;
        $score5 = 100;
        $score6 = 25;
        $score7 = 80;
        $score8 = 95;
        $score9 = 30;
        $score10 = 60;

        // 合計を計算
        $sum = $score1 + $score2 + $score3 + $score4 + $score5 
            + $score6 + $score7 + $score8 + $score9 + $score10;

        // 平均を計算
        $average = $sum / 10;

        // 結果を出力
        echo "合計点: " . $sum . "点\n";
        echo '<br>';
        echo "平均点: " . $average . "点\n";
        echo '<br>';
        ?>
        
        
        
    </body>

</html>
