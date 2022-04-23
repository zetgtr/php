<?php
session_start();
include_once 'config.php';
include_once 'function.php';
?>
<main>
    <div class="conteiner">
        <? foreach($_SESSION['cartId'] as $id){
            $item = getCart($connect, $id);?>
            <form action="/controlers/del-goods.php?id=<?=$item[0]["id"]?>" class="carts_box" method="POST">
                <a href="img.php?id=<?=$item[0]["id"]?>"><img src="uploads/<?=$item[0]["name"]?>" alt="<?=$item[0]["name"]?>"></a>
                <button>Удалить</button>
            </form>
        <?}?>
    </div>
</main>