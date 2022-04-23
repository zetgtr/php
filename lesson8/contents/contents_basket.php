<?php
session_start();
?>
<main>
    <div class="conteiner basket">
        <? foreach ($_SESSION['cartId'] as $id) {
            $item = getCart($connect, $id); ?>
        <div class="carts_box">
            <a href="product.php?id=<?=$id?>"><img src="img/<?= $item[0]["photo1"] ?>"
                    alt="<?= $item[0]["photo1"] ?>"></a>
                    <p><?= $item[0]["title"] ?></p>
            <button id="<?=$id?>" class="remove-basket">Удалить</button>
        </div>
        <? } ?>
    </div>
</main>