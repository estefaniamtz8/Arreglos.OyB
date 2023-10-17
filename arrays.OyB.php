<?php

function busqueda_binaria($array, $valor) {
 

  $izquierdo = 0;
  $derecho = count($array) - 1;

  while ($izquierdo <= $derecho) {
    $medio = ($izquierdo + $derecho) / 2;

    if ($array[$medio] == $valor) {
      return $medio;
    } else if ($array[$medio] < $valor) {
      $izquierdo = $medio + 1;
    } else {
      $derecho = $medio - 1;
    }
  }
  return -1;
}

function ordenamiento_burbuja($array) {
  

  for ($i = 0; $i < count($array) - 1; $i++) {
    for ($j = 0; $j < count($array) - $i - 1; $j++) {
      if ($array[$j] > $array[$j + 1]) {
        $aux = $array[$j];
        $array[$j] = $array[$j + 1];
        $array[$j + 1] = $aux;
      }
    }
  }

  return $array;
}

function ordenamiento_insercion($array) {


  for ($i = 1; $i < count($array); $i++) {
    $valor = $array[$i];
    $j = $i - 1;

    while ($j >= 0 && $array[$j] > $valor) {
      $array[$j + 1] = $array[$j];
      $j--;
    }

    $array[$j + 1] = $valor;
  }

  return $array;
}

function ordenamiento_seleccion($array) {
  
  for ($i = 0; $i < count($array) - 1; $i++) {
    $min = $i;

    for ($j = $i + 1; $j < count($array); $j++) {
      if ($array[$j] < $array[$min]) {
        $min = $j;
      }
    }

    $aux = $array[$i];
    $array[$i] = $array[$min];
    $array[$min] = $aux;
  }

  return $array;
}

// Ejemplo 

$array = [10, 5, 3, 2, 8, 4, 9, 7, 6];

// Búsqueda binaria

$posicion = busqueda_binaria($array, 5);

if ($posicion >= 0) {
  echo "El valor 5 se encuentra en la posición $posicion.";
} else {
  echo "El valor 5 no se encuentra en el array.";
}

// Ordenamiento de burbuja

$array_ordenado = ordenamiento_burbuja($array);


echo "El array ordenado por burbuja es: " . implode(", ", $array_ordenado) . "\n";

// Ordenamiento de inserción

$array_ordenado = ordenamiento_insercion($array);

echo "El array ordenado por inserción es: " . implode(", ", $array_ordenado) . "\n";

// Ordenamiento de selección

$array_ordenado = ordenamiento_seleccion($array);

echo "El array ordenado por selección es: " . implode(", ", $array_ordenado) . "\n";
