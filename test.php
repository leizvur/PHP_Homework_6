<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

echo "<pre>";
var_dump($_GET);
echo "</pre>";

//Шаг 1. убеждаемся, что тесты есть и выносим их в массивы для последующего обращения из форм

$dir="uploaded";
$test_array=[];

if (is_dir($dir)) 
{
	opendir($dir);
	//echo "Нашлась такая папка!", PHP_EOL;
	foreach (glob("$dir/*.json") as $filetype) 
	{
		$test_content=file_get_contents($filetype);
		$test_array=json_decode($test_content, true);
		echo "<pre>";
		print_r($test_array);
		echo "</pre>";
	}
} 
else 
{
	echo "Тесты не найдены!";
}

//Шаг 2. ПРоверка номера теста
//Шаг 3. Загрузка соответствующего номеру json в массив
//Шаг 4. Формы с заполнением из массива



//GET['answer_1'] === 'значение 1 варианта ответа'

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Выберите правильный ответ на поставленный вопрос</h1>
<form action="test.php?mytest=0" enctype="multipart/form-data" method="GET">
	<label><?php echo $value["TEST1_QUESTION"]?></label>
	<input type="radio" name="answer" value="a1"><?php echo $value["TEST1_ANSWER1"]?><Br>
	<input type="radio" name="answer" value="a1"><?php echo $value["TEST1_ANSWER2"]?><Br>
	<input type="radio" name="answer" value="a1"><?php echo $value["TEST1_ANSWER3"]?><Br>
  	<input type="submit">Проверить</p>
</form>
<form action="test.php?mytest=1" enctype="multipart/form-data" method="GET">
	<label><?php echo $value["TEST2_QUESTION"]?></label>
	<input type="radio" name="answer" value="a1"><?php echo $value["TEST2_ANSWER1"]?><Br>
	<input type="radio" name="answer" value="a1"><?php echo $value["TEST2_ANSWER2"]?><Br>
	<input type="radio" name="answer" value="a1"><?php echo $value["TEST2_ANSWER3"]?><Br>
  	<input type="submit">Проверить</p>
</form>
<form action="test.php?mytest=2" enctype="multipart/form-data" method="GET">
	<label><?php echo $value["TEST3_QUESTION"]?></label>
	<input type="radio" name="answer" value="a1"><?php echo $value["TEST3_ANSWER1"]?><Br>
	<input type="radio" name="answer" value="a1"><?php echo $value["TEST3_ANSWER2"]?><Br>
	<input type="radio" name="answer" value="a1"><?php echo $value["TEST3_ANSWER3"]?><Br>
  	<input type="submit">Проверить</p>
</form>
<form>
	<input type="submit" formaction="list.php" name="ShowTestList" value="Мне понравилось! Следующий тест" title="Мне понравилось! Следующий тест">
</form>
 
</body>
</html>
