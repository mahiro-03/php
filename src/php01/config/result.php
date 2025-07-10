<?php
$company = htmlspecialchars($_POST["company"], ENT_QUOTES);
$set = htmlspecialchars($_POST["set"], ENT_QUOTES);
$number = htmlspecialchars($_POST["number"], ENT_QUOTES);

print "私の名前は、" . $company . "<br>";
print "ご希望の商品は、" . $set . "<br/>";
print "注文数は、" . $number;
?>
