<?php

	

?>
	
<html> 
	
	<head>
	
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Expires" content="-1">
	<meta http-equiv="CACHE-CONTROL" content="NO-CACHE">
	<meta charset="UTF-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	</head>
	
	<body>
		<form method="post">
			<table width="75%" align="center" style="background-color:#F8F8F8" cellpadding="7" cellspacing="3">
			<?php

				echo "<tr style='background-color:#999999'>";
					echo "<th align='left'>name</th>";
					echo "<th align='left'>value</th>";
				echo "</tr>";

				if(isset($_POST['ProfessionSelect'])){
					echo "<tr>";
						echo "<td>Profession</td>";
						echo "<td>".$_POST['ProfessionSelect']."</td>";
					echo "</tr>";
				}

				if(isset($_POST['ProfessionalsName']))
				{
					echo "<tr>";
						echo "<td>Company name</td>";
						echo "<td>".$_POST['ProfessionalsName']."</td>";
					echo "</tr>";
				}
						
			?>
			</table>

		</form>
	</body>

</html>