<?php
$animales = [
  'fish' => ['nemo', 'dorada', 'vieja', 'abade', 'cherne', 'medregal'],
  'insecto' => ['beatle', 'ant', 'butterfly', 'fly', 'mosquito'],
  'reptil' => ['snake']
];

$listOfAnimals = [];
if (empty($_GET['species']) || isset($_GET['all'])) {
  $listOfAnimals = empty($_COOKIE['species']) ? array_merge(...array_values($animales)) : $animales[$_COOKIE['species']];
} else {
  if ($_GET['species'] == 'all') {
    $listOfAnimals = array_merge(...array_values($animales));
    setcookie('species', '', time() - 1);
  } else {
    $listOfAnimals = $animales[$_GET['species']];
    setcookie('species', $_GET['species'], time() + 120);
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <ul>
    <?php
    foreach ($animales as $name => $species) {
      printf('<li><a href="preferencias.php?species=%s">%s</a></li>', $name, $name);
    }
    ?>
    <li><a href="preferencias.php?species=all">Todos</a></li>  
    <?php
    foreach ($listOfAnimals as $animals) {
      printf("<li>%s</li>", $animals);
    }
    ?>
  </ul>
</body>
</html>
