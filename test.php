
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Выберите правильный ответ на поставленный вопрос</h1>
<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

//echo "<pre>";
//var_dump($_GET);
var_dump($_POST);
//echo "</pre>";

$test_number;
$test1_array=[];
$test2_array=[];
$test3_array=[];

//Шаг 1. Проверка номера теста

if (isset($_GET["mytest"]) && !empty($_GET["mytest"])) 
	{
		$test_number=$_GET["mytest"];
		//echo "<pre>";
		//var_dump($test_number);
		//echo "</pre>";
	}
	else 
	{
		echo "Вы не выбрали тест.";
	}


//Шаг 2. Загрузка соответствующего номеру json в массив
$test_number;

if ($test_number==="1") 
	{
		//echo "Первый тест";
		$test1_content=file_get_contents("./uploaded/test1.json");
		$test1_array=json_decode($test1_content, true);
		//echo "<pre>";
		//print_r($test1_array);
		//echo "</pre>"; ?>
		<form action="test.php?mytest=1" enctype="multipart/form-data" method="POST">
		<label><?php echo $test1_array["TEST1_QUESTION"]?></label><Br><Br>
		<input type="radio" name="answer" value="a1"><?php echo $test1_array["TEST1_ANSWER_1"]?><Br>
		<input type="radio" name="answer" value="a2"><?php echo $test1_array["TEST1_ANSWER_2"]?><Br>
		<input type="radio" name="answer" value="a3"><?php echo $test1_array["TEST1_ANSWER_3"]?><Br><Br>
  		<input type="submit" name="CheckTest" value="Проверить" title="Проверить">
		</form>
	<?php 
	} 
	elseif ($test_number==="2") 
		{
			//echo "Второй тест";
			$test2_content=file_get_contents("./uploaded/test2.json");
			$test2_array=json_decode($test2_content, true);
			//echo "<pre>";
			//print_r($test2_array);
			//echo "</pre>"; ?>
			<form action="test.php?mytest=2" enctype="multipart/form-data" method="POST">
			<label><?php echo $test2_array["TEST2_QUESTION"]?></label><Br><Br>
			<input type="radio" name="answer" value="a1"><?php echo $test2_array["TEST2_ANSWER_1"]?><Br>
			<input type="radio" name="answer" value="a2"><?php echo $test2_array["TEST2_ANSWER_2"]?><Br>
			<input type="radio" name="answer" value="a3"><?php echo $test2_array["TEST2_ANSWER_3"]?><Br><Br>
  			<input type="submit" name="CheckTest" value="Проверить" title="Проверить">
			</form>
		<?php
			} 
			elseif ($test_number==="3")
			{
				//echo "Третий тест";
				$test3_content=file_get_contents("./uploaded/test3.json");
				$test3_array=json_decode($test3_content, true);
				//echo "<pre>";
				//print_r($test3_array);
				//echo "</pre>"; ?>
				<form action="test.php?mytest=3" enctype="multipart/form-data" method="POST">
				<label><?php echo $test3_array["TEST3_QUESTION"]?></label><Br><Br>
				<input type="radio" name="answer" value="a1"><?php echo $test3_array["TEST3_ANSWER_1"]?><Br>
				<input type="radio" name="answer" value="a2"><?php echo $test3_array["TEST3_ANSWER_2"]?><Br>
				<input type="radio" name="answer" value="a3"><?php echo $test3_array["TEST3_ANSWER_3"]?><Br><Br>
  				<input type="submit" name="CheckTest" value="Проверить" title="Проверить">
				</form>
			<?php
			} 
		else
			{
				echo "Выберите тест!";
			}

		


//Шаг 4. Формы с заполнением из массива



//GET['answer_1'] === 'значение 1 варианта ответа'
?>

<form>
	<input type="submit" formaction="list.php" name="ShowTestList" value="Мне понравилось! Следующий тест" title="Мне понравилось! Следующий тест">
</form>
 
</body>
</html>
