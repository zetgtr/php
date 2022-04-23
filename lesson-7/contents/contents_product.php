<?php
session_start();
require_once "config.php";
require_once 'function.php';
function imgCount($str){
    $str;
    preg_match_all("/\d+/", $str, $matches);
    return $matches[0][0];
}
$id = $_GET["id"];
$sql = "SELECT * FROM goods WHERE id=$id ";
$res = mysqli_query($connect, $sql);
if(mysqli_num_rows($res) > 0){
    $img = mysqli_fetch_assoc($res);
    $update = "UPDATE goods SET count = count+1 WHERE id='$id'";
    mysqli_query($connect, $update);
}
imgCount($img["name"]);
$auth = auth($connect, session_id());
?>


<main>
    <div class="conteiner main_img_box">
        <div class="back_box">
            <a href="/index.php">
                <p>Вернутся назад</p>
            </a>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../uploads/photo<?=imgCount($img["name"])?>.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="../uploads/photo<?=imgCount($img["name"])+1?>.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="../uploads/photo<?=imgCount($img["name"])+2?>.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon control-icone" aria-hidden="true"><</span>
      <span class="visually-hidden">Назад</span>
    </button>
    <button class="carousel-control-next next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon control-icone" aria-hidden="true">></span>
      <span class="visually-hidden">Дальше</span>
    </button>
    <div class="count_box">
      <div>
          <p>Количество просмотров <?=++$img["count"] ?></p>
      </div>
      <?if(count($auth)>0){?>
        <form action="controlers/add-goods.php?id=<?=$img['id']?>" method="POST">
          <button>Добавить в корзину</button>
        </form>
      <?}else{?>
        <p>Что бы купить необходимо зарегестрироватся!</p>
      <?}?>
    </div>
</main>
