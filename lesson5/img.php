
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
    <div class="conteiner">
        <main>
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
            <img src="<?=$dirBig."/".$img["name"]?>" alt="img">
            <p>Количество просмотров <?=++$img["count"] ?></p>
        </main>
    </div>
</body>
</html>



    