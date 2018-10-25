<html>
<body>

<?php
session_start();
if($_SESSION['uname']==NULL)
		header('Location:a.php');

$m=$_POST['mcq'];
$m2=$_POST['2_marks'];
$m3=$_POST['3_marks'];
$m6=$_POST['6_marks'];
$d=$_POST['Difficulty_mcq'];
$d2=$_POST['Difficulty_2'];
$d3=$_POST['Difficulty_3'];
$d6=$_POST['Difficulty_6'];
$sub=$_POST['sub'];
$type=$_POST['typ'];	
$total=$_POST['t'];

function abc($t,$m,$id,$d,$type,$dbhandler,$x)
{
	try{
		if ($t=="mcq")
			$j="MCQ";
		else if ($t=="2_marks")
			$j="2_Marks";
		else if ($t=="3_marks")
			$j="3_Marks";
		else if ($t=="6_marks")
			$j="6_Marks";
	
		if ($type=="External")
		{
			$sql="select DISTINCT * from $t where Sub_Id='$id' and Difficulty='$d' and Priority='$x' ORDER BY RAND()";			
		}
		else 
		{
			$sql="select DISTINCT * from $t where Exam_Type='$type' and Sub_Id='$id' and Difficulty='$d' and Priority='$x' ORDER BY RAND()";
		}
		$query=$dbhandler->query($sql);	
		
		$i=1;
		while($r=$query->fetch())
		{
			if ($i>$m)
				break;
			$a=$r[$j];
			$z=$x-1;
			$q2="UPDATE $t SET Priority=$z WHERE $j='$a'";
			$q=$dbhandler->prepare($q2);
			$q->execute();
						echo "<tr><td>" . $i . "." .$a."</td></tr>";
			$i++;
		}
		
		if ($i<=$m)
			$c=0;
		else
			$c=1;
		
		$m=$m-$i-1;
		
		return $c;

	}
	catch(PDOException $e){
		echo $e->getMessage();
		die();
	}	
		
}


$total=$total-$m-($m2*2)-($m3*3)-($m6*6);

if ($total>0)
	header("location:sel21d.php?sub=".$sub."&type=".$type."&msg=invalid input&total=".$total);
else if ($total<0)
	header("location:sel21d.php?sub=".$sub."&type=".$type."&msg=invalid input&total=".$total);

echo "<center><h1>DHARMSINH DESAI UNIVERSITY,NADIAD</h1>";
echo "<h1>FACULTY OF TECHNOLOGY</h1>";
echo"<h1>".$type." EXAMINATION</h1>";
echo"<h1>SUBJECT:".$sub."</h1>";
echo"<h1>B.Tech(4th Sem)</h1></center>";

	echo "<br><table border='3' align='right'>";
	
	if ($type=="External")
	{
		echo "<tr><td>60</td></tr>";
	}
	else
	{
		echo "<tr><td>36</td></tr>";
	}
	echo "</table>";

	echo "<br><table border='0'>";

try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=test','root','');
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	$sql2="select Sub_Id from sub where Subject='$sub'";
	$query=$dbhandler->query($sql2);
	$r=$query->fetch();
	$id=$r['Sub_Id'];
	$x=$_GET['x'];
	
		if ($m>0)
		{
		echo "<tr><td align=\"center\"><h3>Write the answer for given mcq type questions .</h3></td><td align='right'>".$m."</td></tr><br>";
			$c=abc('mcq',$m,$id,$d,$type,$dbhandler,$x);
			if ($c==0)
			{
				if ($d=="Easy")
				{
					$d="Medium";
					$cc=abc('mcq',$m,$id,$d,$type,$dbhandler,$x);
					if ($cc==0)
					{
						$d="Hard";
						$ccc=abc('mcq',$m,$id,$d,$type,$dbhandler,$x);
						if ($ccc==0)
						{
							$d="Easy";
							$cccc=abc('mcq',$m,$id,$d,$type,$dbhandler,$x=$x-1);
							if ($cccc==0)
//								echo "<h3>Sorry !!! You donot have enough question in your database</h3>";							
								header("location:sel21d.php?sub=".$sub."&type=".$type."&msg=Sorry !!! You donot have enough question in your database&x=".$x);
						}
					}
				}
				else if ($d=="Medium")
				{
					$d="Hard";
					$cc=abc('mcq',$m,$id,$d,$type,$dbhandler,$x);
					if ($cc==0)
					{
						$d="Easy";
						$ccc=abc('mcq',$m,$id,$d,$type,$dbhandler,$x);
						if ($ccc==0)
						{
							$d="Medium";
							$cccc=abc('mcq',$m,$id,$d,$type,$dbhandler,$x=$x-1);
							if ($cccc==0)
//								echo "<h3>Sorry !!! You donot have enough question in your database</h3>";							
								header("location:sel21d.php?sub=".$sub."&type=".$type."&msg=Sorry !!! You donot have enough question in your database&x=".$x);
						}
					}
				}
				else if ($d=="Hard")
				{
					$d="Easy";
					$cc=abc('mcq',$m,$id,$d,$type,$dbhandler,$x);
					if ($cc==0)
					{
						$d="Medium";
						$ccc=abc('mcq',$m,$id,$d,$type,$dbhandler,$x);
						if ($ccc==0)
						{
							$d="Hard";
							$cccc=abc('mcq',$m,$id,$d,$type,$dbhandler,$x=$x-1);
							if ($cccc==0)
//								echo "<h3>Sorry !!! You donot have enough question in your database</h3>";							
								header("location:sel21d.php?sub=".$sub."&type=".$type."&msg=Sorry !!! You donot have enough question in your database&x=".$x);
						}
					}
				}
			}
		}
		else 
		{
			header("location:sel21d.php?sub=".$sub."&type=".$type."&total=".$total."&msg=invalid input");
		}

		if ($m2>0)
		{
			echo "<tr><td align=\"center\"><h3>Write the answer for given short questions .</h3></td><td align='right'>".($m2*2)."</td></tr><br>";
			$c=abc('2_marks',$m2,$id,$d,$type,$dbhandler,$x);
			if ($c==0)
			{
				if ($d=="Easy")
				{
					$d="Medium";
					$cc=abc('2_marks',$m2,$id,$d,$type,$dbhandler,$x);
					if ($cc==0)
					{
						$d="Hard";
						$ccc=abc('2_marks',$m2,$id,$d,$type,$dbhandler,$x);
						if ($ccc==0)
						{
							$d="Easy";
							$cccc=abc('2_marks',$m2,$id,$d,$type,$dbhandler,$x=$x-1);
							if ($cccc==0)
								//echo "<h3>Sorry !!! You donot have enough question in your database</h3>";
								header("location:sel21d.php?sub=".$sub."&type=".$type."&msg=Sorry !!! You donot have enough question in your database&x=".$x);
						}
					}
				}
				else if ($d=="Medium")
				{
					$d="Hard";
					$cc=abc('2_marks',$m2,$id,$d,$type,$dbhandler,$x);
					if ($cc==0)
					{
						$d="Easy";
						$ccc=abc('2_marks',$m2,$id,$d,$type,$dbhandler,$x);
						if ($ccc==0)
						{
							$d="Medium";
							$cccc=abc('2_marks',$m2,$id,$d,$type,$dbhandler,$x=$x-1);
							if ($cccc==0)
							//	echo "<h3>Sorry !!! You donot have enough question in your database</h3>";
								header("location:sel21d.php?sub=".$sub."&type=".$type."&msg=Sorry !!! You donot have enough question in your database&x=".$x);
						}
					}
				}
				else if ($d=="Hard")
				{
					$d="Easy";
					$cc=abc('2_marks',$m2,$id,$d,$type,$dbhandler,$x);
					if ($cc==0)
					{
						$d="Medium";
						$ccc=abc('2_marks',$m2,$id,$d,$type,$dbhandler,$x);
						if ($ccc==0)
						{
							$d="Hard";
							$cccc=abc('2_marks',$m2,$id,$d,$type,$dbhandler,$x=$x-1);
							if ($cccc==0)
							//	echo "<h3>Sorry !!! You donot have enough question in your database</h3>";							
								header("location:sel21d.php?sub=".$sub."&type=".$type."&msg=Sorry !!! You donot have enough question in your database&x=".$x);
						}
					}
				}
				}
		}
		else 
		{
			header("location:sel21d.php?sub=".$sub."&type=".$type."&total=".$total."&msg=invalid input");
		}
		
		if ($m3>0)
		{
			echo "<tr><td align=\"center\"><h3>Explain in brief.</h3></td><td align='right'>".($m3*3)."</td></tr><br>";
			$c=abc('3_marks',$m3,$id,$d,$type,$dbhandler,$x);
			if ($c==0)
			{
				if ($d=="Easy")
				{
					$d="Medium";
					$cc=abc('3_marks',$m3,$id,$d,$type,$dbhandler,$x);
					if ($cc==0)
					{
						$d="Hard";
						$ccc=abc('3_marks',$m3,$id,$d,$type,$dbhandler,$x);
						if ($ccc==0)
						{
							$d="Easy";
							$cccc=abc('3_marks',$m3,$id,$d,$type,$dbhandler,$x=$x-1);
							if ($cccc==0)
							//	echo "<h3>Sorry !!! You donot have enough question in your database</h3>";							
								header("location:sel21d.php?sub=".$sub."&type=".$type."&msg=Sorry !!! You donot have enough question in your database&x=".$x);
						}
					}
				}
				else if ($d=="Medium")
				{
					$d="Hard";
					$cc=abc('3_marks',$m3,$id,$d,$type,$dbhandler,$x);
					if ($cc==0)
					{
						$d="Easy";
						$ccc=abc('3_marks',$m3,$id,$d,$type,$dbhandler,$x);
						if ($ccc==0)
						{
							
							$d="Medium";
							$cccc=abc('3_marks',$m3,$id,$d,$type,$dbhandler,$x=$x-1);
							if ($cccc==0)
							//	echo "<h3>Sorry !!! You donot have enough question in your database</h3>";							
								header("location:sel21d.php?sub=".$sub."&type=".$type."&msg=Sorry !!! You donot have enough question in your database&x=".$x);
						}
					}
				}
				else if ($d=="Hard")
				{
					$d="Easy";
					$cc=abc('3_marks',$m3,$id,$d,$type,$dbhandler,$x);
					if ($cc==0)
					{
						$d="Medium";
						$ccc=abc('3_marks',$m3,$id,$d,$type,$dbhandler,$x);
						if ($ccc==0)
						{
							$d="Hard";
							$cccc=abc('3_marks',$m3,$id,$d,$type,$dbhandler,$x=$x-1);
							if ($cccc==0)
								header("location:sel21d.php?sub=".$sub."&type=".$type."&msg=Sorry !!! You donot have enough question in your database&x=".$x);	
						//	echo "<h3>Sorry !!! You donot have enough question in your database</h3>";							
						}
					}
				}
			}
		}
		else 
		{
			header("location:sel21d.php?sub=".$sub."&type=".$type."&total=".$total."&msg=invalid input");
		}
		
		if ($m6>0)
		{
			echo "<tr><td align=\"center\"><h3>Answer in detail .</h3></td><td align='right'>".($m6*6)."</td></tr><br>";
			$c=abc('6_marks',$m6,$id,$d,$type,$dbhandler,$x);
			if ($c==0)
			{
				if ($d=="Easy")
				{
					$d="Medium";
					$cc=abc('6_marks',$m6,$id,$d,$type,$dbhandler,$x);
					if ($cc==0)
					{
						$d="Hard";
						$ccc=abc('6_marks',$m6,$id,$d,$type,$dbhandler,$x);
						if ($ccc==0)
						{
							$d="Easy";
							$cccc=abc('6_marks',$m6,$id,$d,$type,$dbhandler,$x=$x-1);
							if ($cccc==0)
								header("location:sel21d.php?sub=".$sub."&type=".$type."&msg=Sorry !!! You donot have enough question in your database&x=".$x);	
					//		echo "<h3>Sorry !!! You donot have enough question in your database</h3>";							
						}
					}
				}
				else if ($d=="Medium")
				{
					$d="Hard";
					$cc=abc('6_marks',$m6,$id,$d,$type,$dbhandler,$x);
					if ($cc==0)
					{
						$d="Easy";
						$ccc=abc('6_marks',$m6,$id,$d,$type,$dbhandler,$x);
						if ($ccc==0)
						{
							$d="Medium";
							$cccc=abc('6_marks',$m6,$id,$d,$type,$dbhandler,$x=$x-1);
							if ($cccc==0)
						//		echo "<h3>Sorry !!! You donot have enough question in your database</h3>";
								header("location:sel21d.php?sub=".$sub."&type=".$type."&msg=Sorry !!! You donot have enough question in your database&x=".$x);
						}
					}
				}
				else if ($d=="Hard")
				{
					$d="Easy";
					$cc=abc('6_marks',$m6,$id,$d,$type,$dbhandler,$x);
					if ($cc==0)
					{
						$d="Medium";
						$ccc=abc('6_marks',$m6,$id,$d,$type,$dbhandler,$x);
						if ($ccc==0)
						{
							$d="Hard";
							$cccc=abc('6_marks',$m6,$id,$d,$type,$dbhandler,$x=$x-1);
							if ($cccc==0)
							//	echo "<h3>Sorry !!! You donot have enough question in your database</h3>";
								header("location:sel21d.php?sub=".$sub."&type=".$type."&msg=Sorry !!! You donot have enough question in your database&x=".$x);
						}
					}
				}
			}
		}
		else 
		{
			header("location:sel21d.php?sub=".$sub."&type=".$type."&total=".$total."&msg=invalid input");
		}

				echo "</table>";

	
	}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}	

?>

</table>
</body>
</html>