
<?php
$NumA = $_POST['NumA'];
$NumB = $_POST['NumB'];
$NumC = $_POST['NumC'];
$NumP = $_POST['NumP'];
echo $NumA .("<br>");
echo $NumB .("<br>");
echo $NumC.("<br>");
echo $NumP .("<br>");
$NumS = sqrt($NumP*($NumP-$NumA)*($NumP-$NumB)*($NumP-$NumC));
echo "Ket Qua S = ".$NumS;
?>  
