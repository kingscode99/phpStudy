<?php
//사용자 정의 함수
function functionExample() {
    print("구문");
    return 3;
}

$a = functionExample();
print($a);

function functionExample2($a, $b) {
    return $a + $b;
}

print(functionExample2(1,3));
?>
