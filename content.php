<?php

$d = date('M');

if($d == "Nov") {
	echo "Hello November";
}

echo '<br/>';

if($d == "Nov") {
	echo "Hello November";
}else {
	echo "Hello other Month";
}

echo '<br/>';

if($d == "Jan") {
	echo "It's a January";
}elseif($d == "Feb") {
	echo "It's a February";
}elseif($d == "Mar") {
	echo "It's a March";
}elseif($d == "Apr") {
	echo "It's an April";
}elseif($d == "May") {
	echo "It's a May";
}elseif($d == "Jun") {
	echo "It's a June";
}elseif($d == "Jul") {
	echo "It's a July";
}elseif($d == "Aug") {
	echo "It's an August";
}elseif($d == "Sep") {
	echo "It's a September";
}elseif($d == "Oct") {
	echo "It's an October";
}elseif($d == "Nov") {
	echo "It's a November";
}elseif($d == "Dec") {
	echo "It's a December";
}else {
	echo "No Record Found";
}

echo '<br/>';

$y = date('Y');

switch ($y) {
	case "2010":
			echo "It's a 2010";
		break;
	case "2011":
			echo "It's a 2011";
		break;
	case "2012":
			echo "It's a 2012";
		break;
	case "2013":
			echo "It's a 2013";
		break;
	case "2014":
			echo "It's a 2014";
		break;
	case "2015":
			echo "It's a 2015";
		break;
	case "2016":
			echo "It's a 2016";
		break;
	default:
		echo "No Record Found";					
											
}

echo '<br/>';

$w = 4;
$x = 75; 
$y = 25;
$z = 0;

echo $z = $x + $y; 
echo '<br/>';
echo $z = $x - $y;
echo '<br/>';
echo $z = $x * $y;
echo '<br/>';
echo $z = $x / $y;
echo '<br/>';
echo $z = $w % $y;
echo '<br/>';

echo $x += $y;
echo '<br/>';
echo $x -= $y;
echo '<br/>';
echo $x *= $y;
echo '<br/>';
echo $x /= $y;
echo '<br/>';
echo $x %= $y;
echo '<br/>';

if($w == $x) {
	echo "It's a same value";
}else {
	echo "Not the same value";
}

echo '<br/>';

if($w <> $y) {
	echo "Not the same value";
}else {
	echo "It's the same value";
}

echo '<br/>';

if($w > $y) {
	echo "Greater than to";
}else {
	echo "Less Than to";
}

echo '<br/>';

if($y < $x) {
	echo "Less Than to";
}else {
	echo "Greater Than to";
}

echo '<br/>';

if($w >= $y) {
	echo "Is Greater Than Equals to";
}else {
	echo "Is Less Than Equals to";
}

echo '<br/>';

if($w <= $y) {
	echo "Is Less Than Equals to";
}else {
	echo "Is Greater Than Equals to";
}

echo '<br/>';

if($w === $x) {
	echo "Same value and datatype";
}

echo '<br/>';

if($w !== $x) {
	echo "Not same value and datatype";
}

echo '<br/>';

$arr = array('a','b','c','d','e');
$arrlength = count($arr);
$arr1 = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
$arrlength1 = count($arr1);
$arr2 = array(
		array('a', 'b', 'c', 'd', 'e'),
		array(6, 7, 8, 9, 10),
	);
$arrlength2 = count($arr2);
$i = 0;
$j = 0;

while($i <= 10) {
	echo "The number is " . $i++ . '<br/>';
}

echo '<br/>';

do {
	echo "Number is " . $j++ . '<br/>';
}while($j <= 5);

echo '<br/>';

for($k = 0; $k <= $arrlength; $k++) {
	echo $arr[$k] . '<br/>';
}

echo '<br/>';

foreach($arr as $row) {
	echo $row . '<br/>';
}

echo '<br/>';

foreach($arr1 as $q => $q_value) {
	echo $q . ' ' . $q_value . '<br/>';
}

echo '<br/>';

for($m = 0; $m <= $arrlength2; $m++) {
	for($n = 0; $n <= $arrlength2 - 1; $n++) {
		echo $arr2[$m][$n] . '<br/>';
	}
}

echo '<br/>';

$var1 = 5;
$var2 = 10;

function addition() { 
    $GLOBALS['var3'] = $GLOBALS['var1'] + $GLOBALS['var2']; 
}

addition(); 
echo $var3; 

echo "<br>";

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];

echo "<br>";

session_start();

$_SESSION['name'] = "Jose Czar L. Yanga";

class MyClass {
	
}

$arr = array();
$arr[] = 1;
$arr[] = 22;
unset($arr[1]);
$arr[] = 34;
$arr[] = 89;

print_r($arr);


$arr1 = array(1,3,5,8,9,11);
foreach($arr1 AS $k => $v){
    $v++;
}
echo $b = $arr1[2];

class a {
  private $b = 'nice';
 function b()
 {
    return $this->b;
 }
}

class b extends a {
  
}

$a = new b;
echo $a->b();


// $aa = array(4,7,8);
// $bb = array(2,4,8,19,1);
// $cc = $aa-$bb;
// print_r($cc);

// echo implode("",$cc);

echo '<br/>';
// echo -5%4;


// $aw = array(1,8,7,5);
// $bw = array(3,7,11,6);
// $strw = '879';
// echo $cw = str_replace($aw, $bw , $strw, $d);

$val = "level";
$split_var = str_split($val);
$cnt_var = count($split_var);
$string = "";

for($p = $cnt_var-1; $p >= 0; $p--) {
	$string .= $split_var[$p];
}

if($val == $string) {
		echo "It's a Palindrome";
}else {
		echo "It's not a Palindrome";
}

echo '<br/>';

$array = array(1,1,2,3,4,4,5,5,6,7,8,9,9);
$len = count($array);

for($q = 0; $q < $len; $q++) {
	$temp = $array[$q];
		for($r = 0; $r < $len; $r++) {
			if($r != $q) {
				if($temp == $array[$r]) {
					echo $temp . '<br/>';
					$array[$r]="";
				}
			}
		}
}


echo '<br/>';

$number = 5;
$number1 = 20;

for($t = $number; $t <= $number1; $t++) {
	for($u = 2; $u < $t; $u++) {
		if($t % $u == 0) {
			break;
		}
	}

	if($u == $t) {
		echo "Prime number is " . $t . '<br/>';
	}

}

echo '<br/>';

$array1 = array(5,4,1,2,3,6,7,9,8,10);
$ctr = count($array1);

for($v = 0; $v < $ctr; $v++) {
	for($w = $v+1; $w < $ctr; $w++) {
		if($array1[$v] > $array1[$w]) {
			$temp1 = $array1[$w];
			$array1[$v] = $array1[$w];
			$array1[$w] = $temp1;
		}
	}
}

print_r($array1);

echo '<br/>';

?>