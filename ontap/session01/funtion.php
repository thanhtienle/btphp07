<?php
//
$NumA = $_POST['NumA'];
$NumB = $_POST['NumB'];
$NumC = $_POST['NumC'];
function ax2bx($NumA,$NumB,$NumC)
{

	if ($NumA==0)
	 {
		# code...
		if ($NumB==0)
		{
			echo "Phương trình vô nghiệm1";
		}
		elseif ($NumB==0) 
		{
			echo "Phương trình có vô số nghiệm";
		}
		else
		{
			echo ('Ket Qua X ='). $NumX = -$NumB/$NumA;
		}

	}
	
	else if ($NumA!=0) 
	{
		if($NumC==0)
		{
		echo 'Phương trình có 2 nghiệm :';
		echo "x1= 0";
		echo "x2 =".$temp=((-$NumB)/$NumA);
		}
		else if ($NumB ==0) 
		{
		echo 'Phương trình có 2 nghiệm :';
		echo "x1 =".$temp1=(-sqrt((-$NumC)/$NumA));
		echo "x2 =".$temp2=(sqrt((-$NumC)/$NumA));
		}
		else
		{
			$delta=($NumB*$NumB)-4*($NumA*$NumC);
			if ($delta==0) 
			{
				echo ('Phương Trình Có Nghiệm Kép <br>');
				echo ('x =').((-$NumB)/2*$NumA*$NumC);
			}
			elseif ($delta==0)
			{
				echo('Phương Trình Vô Nghiệm2');
			}
			else
			{
				echo('Phương Trình Có 2 Nghiệm Phân Biệt<br>');
				echo('x1=').((-$NumB)+sqrt($delta))/(2*$NumA).('<br>');
				echo('x2=').((-$NumB)-sqrt($delta))/(2*$NumA).('<br>');
			}	
		}
		
	}
}
ax2bx ($NumA,$NumB,$NumC);
?>