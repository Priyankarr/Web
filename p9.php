<?php
$allTheStates="Mississippi Alabama Texas Massachusetts Kansas";
$states1=explode(' ',$allTheStates);
$i=0;
foreach($states1 as $state){
if(preg_match('/xas$/',($state)))
{
$statesArray[$i]=($state);
$i=$i+1;
echo "</br> the states that ends in xas:",$state;
}
}
foreach($states1 as $state){
if(preg_match('/^k.*s$/',($state)))
{
$statesArray[$i]=($state);
$i=$i+1;
echo "</br> the states that begins with k and ends in s:",$state;
}
}
foreach($states1 as $state){
if(preg_match('/^M.*s$/',($state)))
{
$statesArray[$i]=($state);
$i=$i+1;
echo "</br> the states that begins with M and ends in xas:",$state;
}
}
foreach($states1 as $state){
if(preg_match('/a$/',($state)))
{
$statesArray[$i]=($state);
$i=$i+1;
echo "</br> the states that ends in a:",$state;
}
}
foreach($statesArray as $element=>$value){
echo "</br>".$value."is the element".$element;
}
?>
