<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div>
		<head>
			<h1>
				TOP 5 PROGRAMMING LANGUAGES
			</h1>
		</head>
	</div>
<?php
// obj = new ClassName;
// set_PL($photo,$name,$auth,$relDate,$des);
// print_PL();

$pyt = new ProgLang;
$pyt-> set_PL('pyt.png','Python','by Guido van Rossum','20 February 1991; 31 years ago','Python is a high-level, interpreted, general-purpose programming language. Its design philosophy emphasizes code readability with the use of significant indentation. Python is dynamically-typed and garbage-collected.');
$pyt->print_PL();

$js = new ProgLang;
$js-> set_PL('js.png','JavaScript','Brendan Eich of Netscape initially; others have also contributed to the ECMAScript standard','December 4, 1995; 26 years ago','JavaScript, often abbreviated JS, is a programming language that is one of the core technologies of the World Wide Web, alongside HTML and CSS. Over 97% of websites use JavaScript on the client side for web page behavior, often incorporating third-party libraries.');
$js->print_PL();

$jav = new ProgLang;
$jav-> set_PL('jav.png','Java','James Gosling','May 23, 1995; 26 years ago','Java is a high-level, class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible.');
$jav->print_PL();

$cc = new ProgLang;
$cc->set_PL('cc.svg','C++',' Bjarne Stroustrup','1985; 37 years ago','C++ is a general-purpose programming language created by Bjarne Stroustrup as an extension of the C programming language, or "C with Classes".');
$cc->print_PL();

$html = new ProgLang;
$html->set_PL('html.png','HTML','WHATWG','1993; 29 years ago','The HyperText Markup Language or HTML is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets and scripting languages such as JavaScript.');
$html->print_PL();



?>
</body>
</html>