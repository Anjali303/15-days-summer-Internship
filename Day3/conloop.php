<?php
	
	echo'<table>';
	
		
			for($i=1;$i<1000;$i++)
			{
				echo '<tr>';
				if($i%2==0)
				{
				echo "<td bgcolor='yellow'>"; 
					echo $i; 
				echo'</td>';	
			}
			else
			{
				echo"<td bgcolor='plum'>";
				echo '*';
				echo'</td>';
			}
			echo'</tr>';
			}
	echo'</table>';