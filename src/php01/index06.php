<!-- <?php
$count = 0;

while ($count <= 100) {
    if ($count === 3) {
        $count++;
        continue;
        // $countが3の倍数になった時、$countに1を足す処理をし、スキップをする。
    }
    echo $count;
    $count++;
    if ($count <= 20) {
        break;
        // $countが20かそれ以上になった時、ループから抜ける。
    }
}//while文、自分用
?> -->

<!-- <?php
$count = 0;

while ($count <= 100) {
    if ($count === 20) {
        break;
    }
    if ($count % 3 === 0) {
        $count++;
        continue;
    }
    echo $count . "<br />";
    $count++;
}//while文、答え
?> -->

<!-- <?php
$num = 0;

do {
    echo "num = " . $num . "<br />";
    $num++;
} while ($num < 3);//do...while文、自分用
?> -->



<!-- <?php
$Fizz = ($Fizz % 3 === 0);
//3で割り切れる数
$Buzz = ($Buzz % 5 === 0);
//5で割り切れる数
$FizzBuzz = ($Fizz % 15 === 0);
//3でも5でも割り切れる数、つまり15の倍数のこと

//数字
$Fizz = 0;

while ($Fizz <= 100) {
    if ($Fizz === 50) {
        break;
    }
    if ($Fizz % 3 === 0) {
        echo $Fizz , "<br />";
    }
    $Fizz += 3;
}//FizzBuzzゲーム、自分用
?> -->


<!-- <?php
$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($i = 1; $i <= 50; $i++) {
  if ($i % 15 == 0) {
    echo $FizzBuzz;
  } else if ($i % 3 == 0) {
    echo $Fizz;
  } else if ($i % 5 == 0) {
    echo $Buzz;
  } else {
    echo $i;
  }
}//FizzBuzzゲーム、答え
?> -->

<?php
$