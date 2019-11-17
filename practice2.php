<?php

// 課題 1.

$name = "bun";

if($name == "bun"){
  echo "私はbunです";
  echo "\n";
} else {
  echo "あなたの名前ではありません";
  echo "\n";
}


// 課題 2.

$total = 0;

for ($i = 0; $i <= 1000; $i ++) {
  $total += $i ;
}

echo $total;
echo "\n";


// 課題 3.

$fruits = ["apple","strawberry","pine","peach","grape"];

foreach ($fruits as $fruit) {
  echo $fruit;
  echo "\n";
}


// 課題 4.

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}

?>