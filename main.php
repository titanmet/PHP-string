<?php


function ShowText()
{
	if (empty($_POST["firstname"])) 
	{
		print "Нет строки<br>";    
	}
	else
	{  
		ShowStr();
	}	
}

function ShowStr()
{
	$s = $_POST["firstname"];
	print "Введена строка<br>".$s."<br>";
	print "Длина строки: ".strlen($s)."<br>";
	$s = trim($s);
	print "Строка без пробелов: ".$s."<br>";
	print "Длина строки без пробелов: ".strlen($s)."<br>";
	print "Первые два символа: ".mb_substr($s, 0, 2)."<br>";
	print "Последние два символа: ".mb_substr($s, -2)."<br>";
	print "Первая позиция единицы: ".mb_strpos($s, "1")."<br>";
	print "Последняя позиция единицы: ".mb_strrpos($s, "1")."<br>";
	print "Фрагмент строки с единицей: ".mb_strstr($s, "1")."<br>";
	print "Число единиц: ".mb_substr_count($s, "1")."<br>";
	print "Строка в верхнем регистре: ".mb_strtoupper($s)."<br>";
	print "Строка в нижнем регистре: ".mb_strtolower($s)."<br>";
}
?>
