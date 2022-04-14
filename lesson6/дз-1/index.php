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
            <input type="number" name="x">
            <select name="operation" id="operation">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="number" name="y">
            <label for="submit">=</label>
            <input type="submit" id="submit">
            <?php
                if($_GET["res"]){?>
                    <p><?=$_GET["res"]?></p>
                <?}?>
        </form>
    </div>
</body>
</html>