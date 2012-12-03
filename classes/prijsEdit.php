<?php
require 'connect.php';

$prijsrow = mysql_query("SELECT * FROM prijzen ORDER BY prijs_id ASC LIMIT 10") or die (mysql_error());
	$prijs = '';
	
	$num_rows = mysql_num_rows($prijsrow);
	
while ($row = mysql_fetch_assoc($prijsrow))
{
	$id = $row['prijs_id'];
	$les = $row['prijs_les'];
	$soort = $row['prijs_soort'];
	$eur = $row['prijs_eur'];
	$totaal = $row['prijs_totaal'];			
		
	$prijs.= '<table>
				<tr>
					<td>'.$les.'</td>
					<td>'.$soort.'</td>
					<td>'.$eur.'</td>
					<td>'.$totaal.'</td>
				</tr>
			</table>';
}
?>