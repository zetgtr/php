<?php
$dirImg = "../img";
$auth = auth($connect, session_id());
$sql = "SELECT * FROM goods ORDER BY count DESC";
$table = mysqli_query($connect, $sql);
?>
<main>
    <div class="conteiner">
        <div class="main_box">
            <div class="main_img">
                <? while ($data = mysqli_fetch_assoc($table)) :
                if($data["photo1"]){
                ?>
                <div class="list">
                    <div class="imgconteiner">
                        <a href="product.php?id=<?= $data["id"] ?>" name="modal">
                            <div class="img-conteiner">
                                <img 
                                class="listimg" 
                                src="<?= "img/" . $data["photo1"] . "" ?>" 
                                alt="<?=$data[" photo1"] ?>">
                                <h2 class=" hlist">
                                   <?= $data["title"] ?>
                                </h2>
                                <p class="textlist">
                                  <?= $data["description"] ?>
                                </p>
                                <p class="slogan">
                                   <?= $data["price"] ?> руб.
                                </p>
                        </a>
                        <div class="list-buttom">
                            <?if($auth[0]["admin"]==="true"){?>
                            <div class="listbuttom"
                            id="<?= $data['id'] ?>">
                                <img class="formaimg" src="img/basket.svg" alt=""> 
                                Добавить в корзину
                            </div>
                                <?}else{?>
                                    <a 
                                    href="auth.php?sign=in"
                                    class="goods_no_auth">Необходимо войти!</a>
                                <?}?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
               } endwhile; ?>
        </div>
    </div>
</main>