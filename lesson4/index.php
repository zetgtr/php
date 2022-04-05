<?php
    $dirBig = "img/big";
    $dirSmail = "img/smail";
    $files = array_slice(scandir($dirBig), 2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Фото</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
    <div class="conteiner">
            <div>
                <? foreach($files as $key){ ?>
                <a href="<?=$dirBig."/".$key ?>" name="modal"><img src="<?=$dirSmail."/".$key ?>" alt=""></a>
            <?}?>
        </div>
    </div>
</div>
</body>
</html>
