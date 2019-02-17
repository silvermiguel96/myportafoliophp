<?php 
$arreglo = [
	'keyStr' => 'lado',
	0 => 'ledo',
	'keyStr2' => 'lido',
	1 => 'lodo',
	2 => 'ludo'
];
// foreach ($arreglo as $complicated )
// {
//   echo "<span>$complicated ,</span> ";
// }
// echo "<h2>decirlo al revés lo dudo.</h2>";
echo "<h3>Ejercicio 1</h3>";
echo "$arreglo[keyStr] , $arreglo[0], $arreglo[keyStr2], $arreglo[1], $arreglo[2], <br>";
echo "decirlo al revés lo dudo. <br>";
echo "$arreglo[2], $arreglo[1], $arreglo[keyStr2], $arreglo[0], $arreglo[keyStr], <br>";
echo "¡Qué trabajo me ha costado!<br> ";

// Ejercicio 2

$paises = [
  
  'Mexico' => [
    'Monterrey','Querétaro','Guadalajara'
  ],
  'Colombia' => [
    'Bogota', 'Cartagena','Medellin'
  ]
];

foreach ($paises as $showPais => $ciudades){
  echo "<br> Estes es el pais de : $showPais <br>";
  foreach($ciudades as $nombre){ 
    echo "$nombre ";
  }
};

// Ejercicio 3

$valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];
echo "<br>";
sort($valores);
echo "<br> Los tres numeros menores : ";
  for( $numMenor = 0; $numMenor < 3; $numMenor++){
    echo "$valores[$numMenor] ";
  }
rsort($valores);
echo "<br> Los tres numeros mayores : ";
  for( $numMayor = 0; $numMayor < 3; $numMayor++){
    echo "$valores[$numMayor] ";
  }
?>