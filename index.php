<!DOCTYPE html>
<html>
<body>

<h1>My first PHP</h1>
<h2>Linking to GIT<h2>

<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Tiger');
$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo "<br>";
echo $banana->get_name();
?>




</body>
</html>
