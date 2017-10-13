<?php
$groups=[
'101'=>4.2,
'102'=>4.0,
'103'=>4.8,
'104'=>4.6,
'105'=>3.8,
];

$sum=0;

foreach ($groups as $group => $value){
	$sum+=$value;
}
$avg=$sum/count($groups);


foreach ($groups as $group => $value){
	if($avg<=$value){
	echo "<p>".$group.":".$value."</p>";
	}

}

?>
