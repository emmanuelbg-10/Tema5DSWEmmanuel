<?php
$name;
if (isset($_GET['delete'])) {
  setcookie('name', 'a', time()-1);
}else{

  if(!empty($_GET['name'])){
  setcookie('name', $_GET['name']);
  $name = $_GET['name'];
} else {
  if(isset($_COOKIE['name'])){
    $name = $_COOKIE['name'];
  }
}
}

//Crea una cookie hecha por un formulario




if(isset($name)){
  printf("<p>Tu nombre es %s</p>", $name);

  ?>

  <form action="name.php">
    <button type="submit" name="delete">Eliminar la cookie</button>
  </form>

<?php
}else {
  print("<p>No se tu nombre</p>");


?>
<form action="name.php">
  <input type="text" name="name">
  <input type="submit" value="Enviar">
</form>
<?php
}
?>
<p><a href="name.php">Actualizar</a></p>