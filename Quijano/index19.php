<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cars</title>
</head>
<body>
<?php
class Cars {
 
  public $name;
  public $color;
  public $engine;
  

  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }
  function set_engine($engine){
  	$this->engine =  $engine;
  }
  function get_engine() {
    return $this->engine;
  }
}

echo "Cars List: ";
echo "<br>";

$Mustang = new Cars();
$Mustang->set_name('Ford Mustang');
$Mustang->set_color('Matte Black');
$Mustang->set_engine('V8 5.0 Liter');

echo "<br>";
echo "Name: " . $Mustang->get_name();
echo "<br>";
echo "Color: " . $Mustang->get_color();
echo "<br>";
echo "Engine: ". $Mustang->get_engine();

$science = new Books();
$science->setTitle('Earth and Life Science');
$science->setPrice(1500);
$science->getTitle();
$science->getPrice();


?>

</body>
</html>