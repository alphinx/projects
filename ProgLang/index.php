<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Programming Languages</title>
	<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
	<?php include 'includes/proglang.php'; ?>
	<style type="text/css">
		body {
		    font-family: 'Ubuntu'; background-image: linear-gradient(#87CEEB, white, violet); background-repeat: no-repeat;
		}
		h1{
			background-color:'white'; font-family:'Ubuntu'; font-size:25px; color:black;
		}
	</style>
</head>
<body>
<?php

class ProgLang{
	
	const x = '<br>';
	var $name;
	var $auth;
	var $relDate;
	var $des;
	var $photo;
	var $dir = 'imgs/';

	public function print_PL(){
		
	echo "<div style='float: left; margin-right: 40px; margin-bottom: 20px;'>";
	//echo "<div style='padding-left:50px; padding-bottom: 40px padding-right: 50px'>";
	echo "<img src='{$this->dir}{$this->photo}' height='250' width='250' border='1'>".self::x;
	echo "<font size='6px' font color='black'><b>{$this->name}</b></font>".self::x;
	echo "<font size='4px' font color='black' margin-right: 5px;><b>{$this->auth}</b></font>".self::x;
	echo "<font size='4px' font color='black' margin-right= '40px'>Since: {$this->relDate}</font>".self::x;
	echo "<font size='4px' font color='black'>{$this->des}</font>".self::x;
	echo "</div>";

	}

	public function set_PL($photo,$name,$auth,$relDate,$des){
		
		$this->photo =$photo;
		$this->name =$name;
		$this->auth =$auth;
		$this->relDate = $relDate;
		$this->des=$des;

	}
}

?>
</body>
</html>
