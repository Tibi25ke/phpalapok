<?php
$tomb=array(8, 2, 5, 3, 7);
$IndexMax=count($tomb)-1;
$Elemszam=count($tomb);
print($IndexMax);
// print($Elemszam);
$KeresettElem=5;
$i=0;
while($i<($Elemszam)$$($tomb[$i]!=$KeresettElem))
{
    $i++;
}
if($i<$Elemszam)
{
    print("elem megtalálva)");
    print("indexe:". $i);
}
else
{
    print("nem található eleem:" .$KeresettElem);
}