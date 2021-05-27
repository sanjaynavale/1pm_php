<?php
$a=5;
$b=1;
$c=25;
$d=55;
$e=45;


if($a>=$b && $a>=$c && $a>=$d && $a>=$e)
{
echo"$a is gretest number</br>";
}
else if($b>=$c && $b>=$d && $b>=$e && $b>=$a)
{
echo"$b is gretest number</br>";
}
else if($c>=$d && $c>=$e && $c>=$a && $c>=$b)
{
echo"$c is gretest number</br>";
}
else if($d>=$e && $d>=$a && $d>=$b && $d>=$c)
{
echo"$d is gretest number</br>";
}
else if($e>=$a && $e>=$b && $e>=$c && $e>=$d)
{
echo"$e is gretest number</br>";
}

if($a<=$b && $a<=$c && $a<=$d && $a<=$e)
   {
   echo"$a is smallest number";
   }
   else if($b<=$c && $b<=$d && $b<=$e && $b<=$a)
   {
   echo"$b is smallest number";
   }
   else if($c<=$d && $c<=$e && $c<=$a && $c<=$b)
   {
   echo"$c is smallest number";
   }
   else if($d<=$e && $d<=$a && $d<=$b && $d<=$c)
   {
   echo"$d is smallest number";
   }
   else if($e<=$a && $e<=$b && $e<=$c && $e<=$d)
   {
   echo"$e is smallest number";
   }
?>