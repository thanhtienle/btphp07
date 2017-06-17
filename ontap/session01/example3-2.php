<?php
$NumA = $_POST['NumA'];
$NumB = $_POST['NumB'];
echo ('A =').$NumA.('<br>');
echo ('B=').$NumB.('<br>');
if ($NumA==0) {
	# code...
	echo "Phương trình vô nghiệm";
}
elseif ($NumB==0) {
	# code...
	echo "Phương trình có vô số nghiệm";
}
else{
	echo ('Ket Qua X ='). $NumX = -$NumB/$NumA;
}
?>