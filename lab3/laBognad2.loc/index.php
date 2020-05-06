<!DOCTYPE html>
<?php
include 'php/connect.php';
require_once 'php/select_name.php';
require_once 'php/select_league.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="style/table.css" >
        <script src="js/main.js"></script>
    </head>
    <body>
         <h2>Выбор лиги</h2>
            <select name="league" onchange="text()" id="league">
            <?php foreach($_SESSION['leagues'] as $row):?>
                <option value="<?=$row[0]?>"><?=$row[0]?></option>
            <?php endforeach; ?>
            </select>
        <h2>Выбор даты</h2>
        <input id="date" onchange="xhr()" type="date" name="date" min="2020-03-28" value="<?php echo date("Y-m-d")?>">  
         <h2>Выбор имени</h2>
         <!--<form  method="POST" action="php/select_game_name.php">-->
             <select name="name" onchange="xmlhr()" id="name">
            <?php foreach($_SESSION['name'] as $row):?>
                <option value="<?=$row?>"><?=$row?></option>
            <?php endforeach; ?>
            </select>
            <!--<input type="submit" value="OK">-->
        <!--</form>-->
         <table border="1" class="table_blur">
        <thead>
            <tr>
                <th>Дата</th>
                <th>Место</th>
                <th>Лига</th>
                <th>Команда 1</th>
                <th>Команда 2</th>
                <th>СЧЁТ</th>
            </tr>
        </thead>
        <tbody id="res" >           
        </tbody>
        </table>
         <table border="1" class="table_blur" >
        <thead>
            <tr>
                <th>ТРЕНЕР</th>
                <th>КОМАНДА</th>
                <th>ЛИГА</th>
            </tr>
        </thead>
        <tbody id="league_table" > 
   
        </tbody>
        </table>
    </body>
</html>