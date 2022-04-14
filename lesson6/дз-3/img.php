<?php
require_once "const.php";
require_once "config.php";
$id = $_GET["id"];
$sql = "SELECT * FROM images WHERE id=$id ";
$res = mysqli_query($connect, $sql);
if(mysqli_num_rows($res) > 0){
    $img = mysqli_fetch_assoc($res);
    $update = "UPDATE images SET count = count+1 WHERE id='$id'";
    mysqli_query($connect, $update);
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
    <header>
        <div class="conteiner header_box">
            <p>фото <?=$img["name"] ?></p>
        </div>
    </header>
    <main>
        <div class="conteiner main_img_box">
            <div>
                <a href="/дз-3/index.php">
                    <p>Вернутся назад</p>
                </a>
            </div>
            <img src="<?=$dirBig."/".$img["name"]?>" alt="img">
            <div>
                <p>Количество просмотров <?=++$img["count"] ?></p>
            </div>
        </div>
    </main>
    <footer>
    	<div class="conteiner footer_box">
            <p>Copyright &copy; 2022. Образовательная работа на Geekbrains | PHP часть 6</p>
        </div>
    </footer>
</body>
</html>



    