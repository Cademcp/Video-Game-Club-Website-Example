<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
<style type="text/css">
.auto-style1 {
	margin-bottom: 19px;
}
.auto-style2 {
	margin-top: 0px;
}
</style>
</head>

<body>
<div style="position: absolute; width: 830px; height: 448px; z-index: 1; left: 15px; top: 480px;" id="layer1">
	<form action="query.php" method="post" style="border: medium #000000 solid; height: 440px; background-color: #3366FF;" class="auto-style1">
		Wine Name:
		<?php
				include "config.php";
			
				$sql = "SELECT DISTINCT wine_name FROM wine ORDER BY wine_name";
				$result = mysql_query($sql);
				
				echo "<select name='wineName'>";
				echo "<option value='All'> </option>";
				while ($row = mysql_fetch_array($result)) {
					echo "<option value='" . $row['wine_name'] . "'>" . $row['wine_name'] . "</option>";
				}
				echo "</select>";
			?>
		
		
		
		<br />
		<br />
		Wine Type:&nbsp; <input checked="checked" name="wineType" type="radio" value="All"/>All<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input  name="wineType" type="radio" value="Sparkling" />Sparkling<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input name="wineType" type="radio" value="Fortified" />Fortified<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input name="wineType" type="radio" value="Sweet" />Sweet<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input name="wineType" type="radio" value="White" />White<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input name="wineType" type="radio" value="Red" />Red<br />
		<br />
		Region:
		<?php
				include "config.php";
			
				$sql = "SELECT * FROM region";
				$result = mysql_query($sql);
				
				echo "<select name='region'>";
				while ($row = mysql_fetch_array($result)) {
					echo "<option value='" . $row['region_name'] . "'>" . $row['region_name'] . "</option>";
				}
				echo "</select>";
			?>
			<br/>
			<br/>
			<br/>
		Year: 
		<?php
				include "config.php";
			
				$sql = "SELECT DISTINCT year FROM wine ORDER BY year";
				$result = mysql_query($sql);
				
				echo "<select name='year'>";
				echo "<option value='All'> </option>";
				while ($row = mysql_fetch_array($result)) {
					echo "<option value='" . $row['year'] . "'>" . $row['year'] . "</option>";
				}
				echo "</select>";
			?>

		<br />
		<br />
		Budget: <input type="text" name="price" id="price" />
		
		<br />
		
		<br />
		<input name="Submit1" type="submit" value="submit" />&nbsp;
		<input name="Reset1" type="reset" value="reset" /></form>
</div>
<div id="layer2" style="position: absolute; width: 1414px; height: 375px; z-index: 2; left: 10px; top: 2px; background-image: url('wine1.jpg')">
</div>
</body>

</html>
