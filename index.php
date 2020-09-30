<!DOCTYPE html>
<html lang="ru">
<?php
include 'phpscripts/script.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <title>ДМ 4</title>
</head>

<body>
    <form method="post">
        <h1>Нахождение кратчайшего пути</h1>
        <h1>Примеры</h1>
        <p>Первый пример:<br>
        Начальная вершина: 1<br>
        Конечная вершина: 3<br>
        0 30 6 5<br>
        3 0 1 4<br>
        5 1 0 1<br>
        1 1 7 0</p>

        <p>Второй пример:<br>
        Начальная вершина: 3<br>
        Конечная вершина: 2<br>
            0 0 8 1<br>
            1 0 3 2<br>
            5 5 0 1<br>
            7 4 1 0</p>
            
        <p>Начальная вершина <input  type="text" class="" name="A"/></p>
        <p>Конечная вершина <input  type="text" class="" name="B"/></p>
        <p><input  type="text" class="" name="00" />
            <input  type="text" class="" name="01" />
            <input  type="text" class="" name="02" />
            <input  type="text" class="" name="03" /></p>

        <p><input  type="text" class="" name="10" />
            <input  type="text" class="" name="11" />
            <input  type="text" class="" name="12" />
            <input  type="text" class="" name="13" /></p>

        <p><input  type="text" class="" name="20" />
            <input  type="text" class="" name="21" />
            <input  type="text" class="" name="22" />
            <input  type="text" class="" name="23" /></p>

        <p><input  type="text" class="" name="30" />
            <input type="text" class="" name="31" />
            <input  type="text" class="" name="32" />
            <input  type="text" class="" name="33" /></p><br />

        <input type="submit" value="Проверка" onClick="getDataUser()" />
    </form>

    <?php
    $arr;
    $array;
    
    if ($_POST['00'] != "") {
        $A = (int)$_POST["A"];
        $B = (int)$_POST["B"];
        $arr = getdata();
        validate($arr);
        $arr = minl($arr);
        printl($arr, $A, $B);
        return;
    }

    ?>



</body>

</html>