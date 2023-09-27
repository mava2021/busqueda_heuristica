<?php
// Función heurística 1
function h1($state, $goal)
{
    // Implementa tu función heurística aquí
}

// Función heurística 2
function h2($state, $goal)
{
    // Implementa tu función heurística aquí
}

// Algoritmo A*
function aStar($start, $goal, $heuristic)
{
    // Implementa el algoritmo A* aquí
}

// Obtener los datos del formulario
$start = $_POST['start'];
$goal = $_POST['goal'];
$heuristic = $_POST['heuristic'];

// Realizar la búsqueda heurística
$result = aStar($start, $goal, $heuristic);

// Mostrar el resultado
echo "Resultado: " . $result;
?>