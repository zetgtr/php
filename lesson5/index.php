<?php
    require_once "config.php";
    require_once "const.php";
    $sql = "SELECT * FROM images ORDER BY count DESC";
    $table = mysqli_query($connect, $sql);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Фото</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
        <header>
            <div class="conteiner">
                <p>Галерея фото</p>
            </div>
        </header>
        <main>
            <div class="conteiner">
                <? while($data = mysqli_fetch_assoc($table)) : ?>
                    <a href="img.php?id=<?= $data["id"]?>" name="modal"><img src="<?=$dirSmail."/".$data["name"] ?>" alt=""></a>
                <?php endwhile; ?>
                <form action="" method="post">
                    <input type="file" />
                </form>
            </div>
        </main>
        <footer>
        	<div class="conteiner">
                <p></p>
            </div>
        </footer>
</div>
</body>
</html>
