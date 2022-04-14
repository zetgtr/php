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
    <script>
        const reviewsClickOn = () => {
            document.querySelector(".reviews").classList.add("reviews-on")
        }
        const reviewsClickOff = () => {
            document.querySelector(".reviews").classList.remove("reviews-on")
        }
    </script>
</head>
<body>
    <header>
        <div class="conteiner header_box">
            <p>Галерея фото</p>
        </div>
    </header>
    <main>
    <div class="conteiner">
        <div class="main_box">
            <div class="main_img">
                <? while($data = mysqli_fetch_assoc($table)) : ?>
                <a href="img.php?id=<?= $data["id"]?>" name="modal"><img src="<?=$dirSmail."/".$data["name"] ?>" alt=""></a>
            <?php endwhile; ?>
            </div>
        </div>
         <div class="reviews_icon" onclick="reviewsClickOn()"><img src="/дз-3/img/chat.png" alt=""></div>
         <form action="reviews.php" method="POST" class="reviews">
            <div class="exit" onclick="reviewsClickOff()">&#10006;</div>
             <input type="text" name="reviews-name" placeholder="Ваше имя">
             <textarea placeholder="Ваш отзыв" name="reviews-text" id="reviews-text" cols="30" rows="10"></textarea>
             <input type="submit" value="Отправить">
         </form>
     </div>
    </main>
    <footer>
    	<div class="conteiner footer_box">
            <p>Copyright &copy; 2022. Образовательная работа на Geekbrains | PHP часть 6</p>
        </div>
    </footer>
</div>
</body>
</html>
