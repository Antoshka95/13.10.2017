<?php
$person=[
'lastName'=>'Иванов',
'firstName'=>'Иван',
'pytronicName'=>'Иванович',
'avgOrderlost'=>15000,
];

$fields=[
'lastName'=>'Фамилия',
'firstName'=>'Имя',
'pytronicName'=>'Отчество',
'avgOrderlost'=>'Средняя сумма покупки',
];

foreach ($person as $field => $value){
	echo "<p>".$fields[$field].":".$value."</p>";
}

?>