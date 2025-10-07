<?php
// 独自のソート関数を定義
function sort_2way($array, $order) {
    if ($order) {
        // 昇順ソート
        sort($array);
        echo "昇順にソートします。<br>";
    } else {
        // 降順ソート
        rsort($array);
        echo "降順にソートします。<br>";
    }

    // ソートされた配列を1行ずつ表示
    foreach ($array as $value) {
        echo $value . "<br>";
    }
}

// ソートする配列を宣言
$nums = [15, 4, 18, 23, 10];

// 昇順ソート
sort_2way($nums, true);

// 改行を追加
echo "<br>";

// 降順ソート
sort_2way($nums, false);
?>