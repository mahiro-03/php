<!-- <?php
function outputNumber($a)
{
    echo 5;
}

outputNumber(5);
?>//自分のコード -->


<!-- <?php
function addNumber($a, $b)
{
    $add = $a + $b;
    return $add;
}

$total = addNumber(2, 3);
print $total;
?>//答えのコード -->



<!-- <?php
function scores($score1, $score2, $score3)
{
    if ($score1 + $score2 + $score3 <= 210){
        echo "\合格点は210なので合格です";
    }else{
        echo "\合格点は210なので不合格です";
    }
    $add = $score1 + $score2 + $score3;
    return $add;
}

$total = scores(100, 100, 20);
print $total;
?>//自分のコード -->

<!-- <?php

function exam($score1, $score2, $score3)
{
    $total = $score1 + $score2 + $score3;
    if ($total > 210) {
        echo $total . "点なので合格です";
    } else {
        echo $total . "点なので不合格です";
    }
}
return (exam(80, 60, 90));
?>//答えのコード -->



<!-- <?php
//三角形の面積は底辺*高さ%2
//四角形の面積は縦*横または対角線*対角線%2
//台形の面積は(上底+下底)*高さ%2

function line($top, $bottom, $tall, $diagonal)
{
    $sankaku = ($bottom * $tall) %2;
    $shikaku = ($diagonal * $diagonal) %2;
    $daikei = ($top + $bottom) * $tall %2;
}
return line(2, 4, 4, 3);
echo (line($sankaku $shikaku $daikei));
?>//自分のコード -->


<!-- <?php

function getSquareArea($base, $height)
{
  return $base * $height;
}
function getTriangleArea($base, $height)
{
  return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);
?>//答えのコード -->
