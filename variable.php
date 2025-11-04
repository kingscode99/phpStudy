<?php
//변수선언 : $변수
$txt = "php";
//echo 출력 $를 이용 변수사용 
echo "I love $txt!";
echo "<br>";
$hello = "안녕하세요";
$x = 1;
$y = 10.5;
$z = 10;

//전역변수
//지역변수
function myTest() {
    //전역변수 사용시 global 붙이기
    global $x;
    echo "변수 x의 출력값 $x";
    echo "<br>";
};

myTest();

echo "변수 x의 출력값 $x";
echo "<br>";
?>
