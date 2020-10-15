<?php
function testValueToNull($a, $nbTimes = 1000000000000000000) {
    $i = 0;
    $startTime = microtime(1);
    while ($i < $nbTimes) {
        if ($a === null) {
            // Some checks
        }
        $i++;
    }
    $endTime = microtime(1);
    return $endTime - $startTime;
}
function testNullToValue($a, $nbTimes = 1000000000000000000) {
    $i = 0;
    $startTime = microtime(1);
    while ($i < $nbTimes) {
        if (null === $a) {
            // Some checks
        }
        $i++;
    }
    $endTime = microtime(1);
    return $endTime - $startTime;
}
function testIsNullValue($a, $nbTimes = 1000000000000000000) {
    $i = 0;
    $startTime = microtime(1);
    while ($i < $nbTimes) {
        if (is_null($a)) {
            // Some checks
        }
        $i++;
    }
    $endTime = microtime(1);
    return $endTime - $startTime;
}
function testIsEmptyValue($a, $nbTimes = 1000000000000000000) {
    $i = 0;
    $startTime = microtime(1);
    while ($i < $nbTimes) {
        if (empty($a)) {
            // Some checks
        }
        $i++;
    }
    $endTime = microtime(1);
    return $endTime - $startTime;
}

$nullValue = null;
$nbTimes = 3000000000;
$i = 0;
$j = 3;
echo "Checking ${nbTimes} times x ${j}\n\n";
while ($i < $j) {
    echo 'Testing $value === null: ';
    echo testValueToNull($nullValue, $nbTimes) . "s\n";
    $i++;
}
$i = 0;
echo "\n";
while ($i < $j) {
    echo 'Testing null === $value: ';
    echo testNullToValue($nullValue, $nbTimes) . "s\n";
    $i++;
}
$i = 0;
echo "\n";
while ($i < $j) {
    echo 'Testing is_null($value): ';
    echo testIsNullValue($nullValue, $nbTimes) . "s\n";
    $i++;
}
$i = 0;
echo "\n";
while ($i < $j) {
    echo 'Testing empty($value): ';
    echo testIsEmptyValue($nullValue, $nbTimes) . "s\n";
    $i++;
}


