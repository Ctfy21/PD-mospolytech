<?
 // Подключаем библиотеку
require_once 'PHPExcel/Classes/PHPExcel.php';

// Записываем все данные из Excel
$ecxel = PHPExcel_IOFactory::load('ExcelDataFile.xlsx');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Detail page</title>
</head>
<body>

<?if($_GET["id"]){ 
	$id = $_GET["id"]+1;
	?>
	<div>
		<h1><? echo $ecxel->getActiveSheet()->getCell('A'.$id);?></h1>
		<p><? echo $ecxel->getActiveSheet()->getCell('B'.$id);?></p>
		<br>
		<h5>Описание</h5>
		<p><? echo $ecxel->getActiveSheet()->getCell('C'.$id);?></p>
		<a href="<? echo $ecxel->getActiveSheet()->getCell('D'.$id);?>">Видеовизитка проекта</a>
		<a href="<? echo $ecxel->getActiveSheet()->getCell('E'.$id);?>">Записаться на проект</a>
	</div>	
<?}?>

</body>
</html>