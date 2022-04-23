<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Калькулятор</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <div class="conteiner">
        <form action="operation.php" method="POST">
            <div class="calk_box">
               <input type="number" name="x">
            <input type="number" name="y">
            <p>=</p>
            <?php
                if($_GET["res"]){?>
                    <p><?=$_GET["res"]?></p>
                <?}?> 
            </div> 
            <h2>Что сделать?</h2>
            <?php
            $operation = ["+","-","*","/"];
            foreach($operation as $key){?>
                <label for="<?=$key?>"></label>
                <input type="submit" value="<?=$key?>" id="<?=$key?>" name="operation">
            <?}?>
        </form>
    </div>
</body>
</html>