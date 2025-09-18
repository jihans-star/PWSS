<?php
date_default_timezone_set('Asia/Jakarta');
$bulan = ['October' => 'Oktober'];
echo date('d-F-Y');
echo "<br>";

$tgl = "01-10-2008";
echo date('Y-F-d', strtotime($tgl));
echo "<br>";
echo date('Y-F-d', strtotime('+6 days', strtotime($tgl)));
echo date(',l',strtotime($tgl));
echo "<br>";
$date = date('d F Y', strtotime($tgl));
$array_tgl = explode(' ', $date);
echo $array_tgl[0]." ".$bulan[$array_tgl[1]]." ".$array_tgl[2];
?>