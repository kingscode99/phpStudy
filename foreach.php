<?php
//java의 향상된 for문과 비슷

$arr = array('사과', '바나나', '딸기', '오렌지');

//foreach(arr As 변수) 로 사용 순서가 다름.
foreach($arr As $frit){
    echo("$frit <br>");
}

$keyValueArray = array(
    1 => "사과",
    2 => "배",
    3 => "딸기"
);

foreach($keyValueArray As $key => $value) {
    print("$key");
    print("$value<br>");
}
?>
