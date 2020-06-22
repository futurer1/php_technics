<?php
// Использование array_column для массового анализа по ключу значения в массиве

// создаём исходный массив
$arr = [
  [
    'name' => 'Aaa',
    'available_flag' => true, // анализировать будем значение этого ключа у всех элементов массива
  ],
  [
    'name' => 'Bbb',
    'available_flag' => true,
  ],
  [
    'name' => 'Ccc',
    'available_flag' => true,
  ]
];

$allTrue = !in_array(false, array_column($arr, 'available_flag'), true);

// $allTrue - все значения элементов с ключем available_flag имеют строгое bool значение true
// если хотя бы один элемент имеет значение false, то $allTrue будет равно false
