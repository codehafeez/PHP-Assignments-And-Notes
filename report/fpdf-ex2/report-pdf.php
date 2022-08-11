<?php
require('html_table.php');
$pdf = new PDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','',10);



$html='
<table border="1">
	<tr>
		<td bgcolor="#D0D0FF">Serial No</td>
		<td bgcolor="#D0D0FF">Date & Time</td>
		<td bgcolor="#D0D0FF">Zone</td>
		<td bgcolor="#D0D0FF">Tag ID</td>
		<td bgcolor="#D0D0FF">Temperature</td>
	</tr>
	<tr>
		<td>2545765</td>
		<td>2021-07-12 14:29:14</td>
		<td>ac:23:3f:58:e2:4d</td>
		<td>zone4</td>
		<td>23</td>
	</tr>
	<tr>
		<td>2545765</td>
		<td>2021-07-12 14:29:14</td>
		<td>ac:23:3f:58:e2:4d</td>
		<td>zone4</td>
		<td>23</td>
	</tr>
	<tr>
		<td>2545765</td>
		<td>2021-07-12 14:29:14</td>
		<td>ac:23:3f:58:e2:4d</td>
		<td>zone4</td>
		<td>23</td>
	</tr>
	<tr>
		<td>2545765</td>
		<td>2021-07-12 14:29:14</td>
		<td>ac:23:3f:58:e2:4d</td>
		<td>zone4</td>
		<td>23</td>
	</tr>
	<tr>
		<td>2545765</td>
		<td>2021-07-12 14:29:14</td>
		<td>ac:23:3f:58:e2:4d</td>
		<td>zone4</td>
		<td>23</td>
	</tr>
	<tr>
		<td>2545765</td>
		<td>2021-07-12 14:29:14</td>
		<td>ac:23:3f:58:e2:4d</td>
		<td>zone4</td>
		<td>23</td>
	</tr>
	<tr>
		<td>2545765</td>
		<td>2021-07-12 14:29:14</td>
		<td>ac:23:3f:58:e2:4d</td>
		<td>zone4</td>
		<td>23</td>
	</tr>
	<tr>
		<td>2545765</td>
		<td>2021-07-12 14:29:14</td>
		<td>ac:23:3f:58:e2:4d</td>
		<td>zone4</td>
		<td>23</td>
	</tr>
	<tr>
		<td>2545765</td>
		<td>2021-07-12 14:29:14</td>
		<td>ac:23:3f:58:e2:4d</td>
		<td>zone4</td>
		<td>23</td>
	</tr>
</table>';



$pdf->SetLeftMargin(10);
$pdf->Image('logo.jpg',45,15,-400);
$pdf->WriteHTML("<br><br><br><br><br><br>$html",45,15);
$pdf->Output();

