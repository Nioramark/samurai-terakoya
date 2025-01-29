<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // 配列を定義
        $num = array(15, 4, 18, 23, 10);
        
        // ソート関数の定義
        function sortNumbers($numbers, $order) {
            if ($order === TRUE) {
                sort($numbers);
                echo "昇順にソートします"."<br>";
            } else {
                rsort($numbers);
                echo "降順にソートします"."<br>";
            }
            
            // 1行ずつ表示
            foreach ($numbers as $value) {
                echo $value . "<br>";
            }
        }
        
        // 昇順ソート（TRUE）
        sortNumbers($num, TRUE);
        echo "<br>";
        
        // 降順ソート（FALSE）
        sortNumbers($num, FALSE);
        ?>
    </p>
</body>

</html>