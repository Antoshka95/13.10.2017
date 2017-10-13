<?php
$person=[
'lastName'=>'Иванов',
'firstName'=>'Иван',
'pytronicName'=>'Иванович',
];

$fields=[
'lastName'=>'Фамилия',
'firstName'=>'Имя',
'pytronicName'=>'Отчество',
'avgOrderlost'=>'Средняя сумма покупки',
];

foreach ($person as $field => $value){
	if(isset($person['avgOrderlost'])){
		echo $person['avgOrderlost'];
	}
		echo "<p>".$fields[$field].":".$value."</p>";

}

?>
