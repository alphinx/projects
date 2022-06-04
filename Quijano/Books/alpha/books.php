<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wakPad</title>
</head>
<body style="background-image: linear-gradient(to bottom right, white, #ff4f00); background-repeat: no-repeat; font-family:arial;">
<div>   
 <h1 style="height: 30px; margin-left: auto; margin-bottom: 30; margin-top: auto; font-family:arial; font-size:25px; color:#ff4f00;">wakPad<img src="logo/Wattpad-logo.png" width="30" height="25"></h1>
</div>

    <?php

class Books{

    const x = '<br/>';
    var $reads;
    var $name;
    var $photo;
    var $dir = 'photos/';
    var $description;

   

    public function print_books(){
        echo "<div style='float: left; margin-right: 40px; margin-bottom: 20px;'>";
    	//echo "<div style='padding-left:50px; padding-bottom: 40px padding-right: 50px'>";
        echo "<img src='{$this->dir}{$this->photo}' height='250' width='200' border='5'>".self::x;
        echo "<font size='5px' font color='black'>{$this->name}</font>".self::x;
        echo "<font size='4px' font color='black' margin-right: 5px;>Reads:  {$this->reads}</font>".self::x.self::x;
        echo "<font size='4px' font color='black' margin-right= '40px'>{$this->description}</font>".self::x.self::x;
		echo "</div>";
    }

    public function set_books($name,$reads,$photo,$description){
    	$this->name =$name;
    	$this->reads =$reads;
    	$this->photo =$photo;
    	$this->description =$description;
    }

}

?>

</body>
</html>