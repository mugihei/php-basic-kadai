<?php

// Step 2. 連想配列を作成する
$items = array(
    "名前" => "玉ねぎ",
    "値段" => 200,
    "産地" => "北海道"
);

// Step 3. 値を出力する
foreach ($items as $key => $value) {
    echo $key . "：" . $value . "<br>";
}

?>