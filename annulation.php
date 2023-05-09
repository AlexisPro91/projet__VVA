<?php
				$conn=mysqli_connect("localhost", "root", "", "gacti");
				$code=$_GET['CODEANIM'];
				$date=$_GET['DATEACT'];
				$dateannule= date('y-m-d h:i:s');
				$sql = "UPDATE activite
				SET CODEETATACT='C', DATEANNULEACT='$dateannule'
				WHERE CODEANIM = '$code' AND DATEACT='$date'";
				mysqli_query($conn,$sql);
				header('location:affiche_act.php');
				exit;
					
				mysqli_close($conn);
			?>