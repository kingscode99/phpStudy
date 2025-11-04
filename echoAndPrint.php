<?php
//echo와 print는 동일
echo "";
print "";

print "<h2>PHP 는 재밌다.</h2>";
echo "Hello world! <br>";
echo "I'm about to learn PHP";

$text1 = "Learn PHP";
$x = 5;
$y = 5;
//""사이에 변수를 붙일때 '+'가 아니라 '.'을 사용한다.
echo "<h2>".$text1."</h2>";
print $x + $y;
?>