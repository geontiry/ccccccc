<?php

require database_path('data/catalogue/s-electrical.php');

$categories = [
  "Electrical" => $electrical,
];

$iterator = new RecursiveIteratorIterator(
  new RecursiveArrayIterator($categories, RecursiveArrayIterator::CHILD_ARRAYS_ONLY )
); 