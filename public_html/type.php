<?php
$tuoi_diep = 33;
$tuoi_quang = 31;
$tuoi_total = $tuoi_diep + $tuoi_quang;

echo $tuoi_total;
echo '<br>';
echo $tuoi_diep + $tuoi_quang;
echo '<br>';
echo "Tuoi Diep va Quang bang $tuoi_total";
echo '<br>';
echo "Tuoi Diep va Quang bang ".$tuoi_total;
echo '<br>';
$name_list = array("Diep", "Quang");
var_dump($name_list);
echo '<br>';
echo $name_list[1];
echo '<br>';
echo $name_list[0]." và ".$name_list[1]." học code.";
echo '<br>';
$info = array ("ten_lot" => "Ngoc", "ten" => "Diep");
echo $info["ten_lot" ].' '.$info["ten"];
?>