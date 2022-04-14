<?php
require_once "config.php";
$name = $_POST["reviews-name"];
$text = $_POST["reviews-text"];

$sqlUpdate = "INSERT INTO reviews (name, text) VALUES ('$name', '$text')";
mysqli_query($connect, $sqlUpdate);

$sql = "SELECT * FROM `reviews`";
$reviews = mysqli_query($connect, $sql);
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
            <p>Отзывы</p>
        </div>
    </header>
    <main>
    <div class="conteiner">
        <a href="/дз-3/index.php">
            <p>Вернутся назад</p>
        </a>
        <div class="reviews_box">
        <? while($data = mysqli_fetch_assoc($reviews)) :?>
            <h4>Имя: <?=$data["name"]?></h4>
            <div>
                <h4>Отзыв:</h4>
                <p><?=$data["text"]?></p>
            </div>
            <hr />
        <?php endwhile; ?>
             <div class="reviews_icon" onclick="reviewsClickOn()"><img src="/дз-3/img/chat.png" alt=""></div>
             <form action="reviews.php" method="POST" class="reviews">
                 <input type="text" name="reviews-name" placeholder="Ваше имя">
                 <textarea placeholder="Ваш отзыв" name="reviews-text" id="reviews-text" cols="30" rows="10"></textarea>
                 <input type="submit" value="Отправить">
             </form>
         </div>
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