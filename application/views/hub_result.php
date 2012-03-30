<html>
<head>
<title>PeopleHub Search Portal</title>
<script type="text/javascript" src="library/jquery.js"></script>
<script type="text/javascript">
function printpage()
{
 window.print();
}


</script>
</head>
<body>
	<?php 
	
		 $x=0; 
		 echo "<table width=1100 border=0 align=center cellspacing=2 cellpadding=2 bgcolor=#7897D8 style='font-size:12px'>";
		 echo"<td>"."<b>"."#"."</b>"."</td>";
		 echo"<td>"."<b>"."Name"."</b>"."</td>";
		 echo"<td>"."<b>"."Gender"."</b>"."</td>";
		 echo"<td>"."<b>"."Contact#"."</b>"."</td>";
		 echo"<td>"."<b>"."Address"."</b>"."</td>";
		 echo"<td>"."<b>"."Birthday" ."</b>"."</td>";
		 echo"<td>"."<b>"."Guardian" ."</b>"."</td>";
		foreach ($data->result() as $row)
		   {
	
		   	if($x%2==0)
			{
				$color = " bgcolor = '#BFEF64' ";
			}else
			{
				$color=" bgcolor='#FFF5EE'";
			}
				
		   	 $x++;
			 echo '<tr'.$color.'>';
			 echo"<td>".$x."</td>";
			 echo"<td>".$row->name."</td>";
			 echo"<td>".$row->gender."</td>";
			 echo"<td>".$row->phone_no."</td>";
			 echo"<td>".$row->address."</td>";
			 echo"<td>".$row->b_day."</td>";
			 echo"<td>".$row->guardian."</td>";
			 echo"</tr>";
				
			}
		  echo "</table>";
		  echo "<div class = but_prnt ><input type=button value=Print Page! onclick=window.print() /></div>";
	?>
</body>
</html>
