
<html>
<body>
<?php
if(isset($_POST['NumA']) && isset($_POST['NumB'])&& isset($_POST['NumC'])&& isset($_POST['NumP'])){
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
}

?>
<form action="example2.php" method="post">
NumA : <input type="number" name="NumA"><br>
NumB :<input type="number" name="NumB"><br>
NumC :<input type="number" name="NumC"><br>
NumP <input type="number" name="NumP"><br>
<input type="submit">
</form>	
<?php

?>
</body>
</html>