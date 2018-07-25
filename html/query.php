<?php
include "config.php";

// Change "persons" to match the name of the 
// 		table from your database

//if (!($connection = @ mysql_connect($hostName, $username, $password)))
   //  die("Could not connect");
$wineName =$_POST['wineName'];
$wineType =$_POST['wineType'];
$region =$_POST['region'];
$year =$_POST['year'];
$price =$_POST['price'];


$showTable="SELECT DISTINCT wine.wine_name, wine_type.wine_type, region.region_name, wine.year, items.price FROM wine 
			INNER JOIN winery INNER JOIN wine_type INNER JOIN region INNER JOIN items ON wine.wine_id=items.wine_id AND winery.region_id=region.region_id 
			WHERE wine_name='$wineName' AND wine_type.wine_type='$wineType' AND region.region_name='$region' AND year<='$year' AND items.price<='$price'";
				
//$result=mysql_query($showTable) or die("query error");

$result = @ mysql_query ($showTable);

//echo $showTable;
/*
echo "<table border cellpadding=3>";
echo"<tr>";
// These are the column lables that will be displayed
echo"<th>Wine Name</th>";
echo"<th>Wine Type</th>";
echo"<th>Region</th>";
echo"<th>Year</th>";
echo"<th>Price</th>";
echo"</tr>";

// Change 'FirstName', 'LastName', and 'Age' to 
// 		match columns of your table.
while($info = @ mysql_fetch_array($result))
	{
		echo"<td>".{$info["wine_name']} . "</td>";
	echo"<td>".{$info["wine_type']} . "</td><";
		echo"<td>".{$info["region_name']} . "</td><";
	echo"<td>".{$info["year']} . "</td><";
		echo"<td>".{$info["price']} . "</td></tr>";
	}
echo "</table>"
*/

$print_temp = "\n<table border cellpadding=3 class='data-table'>\n<tr>" .
				   "\n\t<th>Wine Name</th>" .
				   "\n\t<th>Wine Type</th>" .
				   "\n\t<th>Region</th>" .
				   "\n\t<th>Year</th>" .
				   "\n\t<th>Price</th>\n</tr>";
	
			 // Fetch each of the query rows
			 while ($info = @ mysql_fetch_array($result))
			 {
				// Print one info of results
				$print_temp .= "\n<tr>\n\t<td>{$info["wine_name"]}</td>" .
					  "\n\t<td>{$info["wine_type"]}</td>" .
					  "\n\t<td>{$info["region_name"]}</td>" .
					  "\n\t<td>{$info["year"]}</td>" .
					  "\n\t<td>{$info["price"]}</td>\n</tr>";
			 } // end while loop body
	
			 // Finish the <table>
			 $print_temp .= "\n</table>";
			 
			 print $print_temp;
			 
?>