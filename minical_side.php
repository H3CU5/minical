
<style type="text/css">

.col  {
		width:1em;
		height:1em;
		float:none;
		text-align: center;
		margin-left:0px;
		margin-bottom: 0.7em; 
	    border-radius: 0.20em ;
	    color: black; 
}
.col p{
		line-height:1.0em;
}
.box_first {
	float: left;
	padding-left:34px;
	
}

.box {
	float: left;
	margin-left: 1em;
}

.box_last {
	float: left;
	margin-left: 1em;
	padding-right: 1em;
}

</style>



<?php

// PHP Datum

$mydate = array(
			"tag" => date('d'),
			"monat" => date('m'),
			"jahr" => date('Y'),
			);
		

$d1 = substr($mydate['tag'], 0, 1);
$d2 = substr($mydate['tag'], 1, 1);

$m1 = substr($mydate['monat'], 0, 1);
$m2 = substr($mydate['monat'], 1, 1);

$j1 = substr($mydate['jahr'], 0, 1);
$j2 = substr($mydate['jahr'], 1, 1);
$j3 = substr($mydate['jahr'], 2, 1);
$j4 = substr($mydate['jahr'], 3, 1);


$i2_1 = 0;	// Zaehler _ Tag erste Stelle 
$i2_2 = 0;	// Zaehler _ Tag zweite Stelle

$i3_1 = 0; 	// Zaehler _ Monat erste Stelle
$i3_2 = 0; //  Zaehler _ Monat zweite Stelle

$i4_1 = 0; // Zaehler _ Jahr erste Stelle
$i4_2 = 0; // Zaehler _ Jahr zweite Stelle
$i4_3 = 0; // Zaehler _ Jahr dritte Stelle
$i4_4 = 0; // Zaehler _ Jahr vierte Stelle

//echo "<pre>";			
//print_r($mydate);
//echo "</pre>";
?>


<h3>minical</h3>
<!--div id="wrapper"-->
<!-- --------------------------------------- -->
<div class="sidepanel">
<div class="box_first">

<?php // Tag 1.Reihe

	while ($i2_1 <= 9) {
		if ($i2_1 == $d1) {
			echo "<div class=\"col\" style=\"background-color: hsl(0, 100%, 0%); color: #fff;border-radius: 2em;\">"."<p>". $i2_1 ."</p>"."</div>";
		}
		
		else {
			echo "<div class=\"col\"  >"."<p>". $i2_1 ."</p>"."</div>";
			}
		$i2_1++;
}
?>
</div>

<div class="box_last">
<?php // Tag 2. Reihe

	while ($i2_2 <= 9) {
		if ($i2_2 == $d2) {
			echo "<div class=\"col\" style=\"background-color: hsl(0, 100%, 0%); color: #fff;border-radius: 2em;\">"."<p>". $i2_2 ."</p>"."</div>";
		}
		
		else {
			echo "<div class=\"col\"  >"."<p>". $i2_2 ."</p>"."</div>";
			}
		$i2_2++;
}
?>
</div>


<div class="box"> 


<?php // Monat 1. Reihe

	while ($i3_1 <= 9) {
		if ($i3_1 == $m1) {
			echo "<div class=\"col\" style=\"background-color: hsl(0, 100%, 0%); color: #fff;border-radius: 2em;\">"."<p>". $i3_1 ."</p>"."</div>";
		}
		
		else {
			echo "<div class=\"col\"  >"."<p>". $i3_1 ."</p>"."</div>";
			}
		$i3_1++;
}
?>
</div>

<div class="box_last">
<?php // Monat 2. Reihe

	while ($i3_2 <= 9) {
		if ($i3_2 == $m2) {
			echo "<div class=\"col\" style=\"background-color: hsl(0, 100%, 0%); color: white; border-radius: 2em;\">"."<p>". $i3_2 ."</p>"."</div>";
		}
		
		else {
			echo "<div class=\"col\"  >"."<p>". $i3_2 ."</p>"."</div>";
			}
		$i3_2++;
}
?>
</div>


<div class="box">

<?php // Jahr 1. Reihe

	while ($i4_1 <= 9) {
		if ($i4_1 == $j1) {
			echo "<div class=\"col\" style=\"background-color: hsl(0, 100%, 0%); color: #fff;border-radius: 2em;\">"."<p>". $i4_1 ."</p>"."</div>";
		}
		
		else {
			echo "<div class=\"col\"  >"."<p>". $i4_1 ."</p>"."</div>";
			}
		$i4_1++;
}
?>
</div>

<div class="box">

<?php // Jahr 2. Reihe

	while ($i4_2 <= 9) {
		if ($i4_2 == $j2) {
			echo "<div class=\"col\" style=\"background-color: hsl(0, 100%, 0%); color: #fff;border-radius: 2em;\">"."<p>". $i4_2 ."</p>"."</div>";
		}
		
		else {
			echo "<div class=\"col\"  >"."<p>". $i4_2 ."</p>"."</div>";
			}
		$i4_2++;
}
?>
</div>

<div class="box">

<?php // Jahr 2. Reihe

	while ($i4_3 <= 9) {
		if ($i4_3 == $j3) {
			echo "<div class=\"col\" style=\"background-color: hsl(0, 100%, 0%); color: #fff;border-radius: 2em;\">"."<p>". $i4_3 ."</p>"."</div>";
		}
		
		else {
			echo "<div class=\"col\"  >"."<p>". $i4_3 ."</p>"."</div>";
			}
		$i4_3++;
}
?>
</div>

<div class="box">
<?php // Jahr 2. Reihe

	while ($i4_4 <= 9) {
		if ($i4_4 == $j4) {
			echo "<div class=\"col\" style=\"background-color: hsl(0, 100%, 0%); color: #fff;border-radius: 2em;\">"."<p>". $i4_4 ."</p>"."</div>";
		}
		
		else {
			echo "<div class=\"col\"  >"."<p>". $i4_4 ."</p>"."</div>";
			}
		$i4_4++;
}
?>
 </div>