<?
 // Подключаем библиотеку
require_once 'PHPExcel/Classes/PHPExcel.php';

// Записываем все данные из Excel
$ecxel = PHPExcel_IOFactory::load('ExcelDataFile.xlsx');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>PHPExcel</title>
</head>
<body>

    <? $i = 2; ?>
    <? while ($ecxel->getActiveSheet()->getCell('A'.$i) != '') { ?>
        <div class="col-4 float-left mt-4" style="height: 150px;">
            <h4><? echo $ecxel->getActiveSheet()->getCell('A'.$i); ?></h4>
            <a href="project_detail.php?id=<?echo $i-1;?>">Узнать подробнее и записаться</a>
        </div>
        <? $i++; ?>
    <? } ?> 

</body>
</html>

