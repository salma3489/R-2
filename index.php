<?php

#Q1
$names = ['Ahmed', 'Hassan', 'Khaled', 'Mohammed', 'Mahmoud', 'Kareem'];
echo max( $names)."<br>";
echo max(array_map('strlen', $names))."<br>";


#Q2
$arr = [5, 8, 10, 4, 7, 3, 9];
unset($arr[1]);
$iZero = array_values($arr);
echo"<pre>";
print_r($iZero);
echo"<pre>"."<br>";


#Q3
$salaries = [3500, 10000, 8000.40, 6800, 4200.90];
foreach($salaries as $value)
{
    $formatNum = round($value)."  ";
    echo number_format($formatNum, 2)."<br>";
} 
echo "<br>";


#Q4
$length = 12;
$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$charactersLength = strlen($characters);
$randomString = '';
for ($i = 0; $i < $length; $i++) 
{
    $randomString .= $characters[rand(0, $charactersLength - 1)];
}
echo "<br>" . $randomString . "<br>";


#Q5
$names = ['Ahmed', 'Hassan', 'Khaled', 'Mohammed', 'Mahmoud', 'Kareem'];
for($i = 0; $i < count($names); $i+=2)
{
    $temp;
    $temp=$names[$i];
    $names[$i] = $names[$i+1];
    $names[$i+1] = $temp;
}
echo "<br>" ."<pre>";
print_r($names);
echo"<pre>"."<br>";


#Q6
$num = 21458;
echo strlen($num);


?>
