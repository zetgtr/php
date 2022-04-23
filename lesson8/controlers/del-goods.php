<?php
session_start();
$_SESSION['cartId'] = array_filter($_SESSION['cartId'],  function ($k) {
    if ($_SESSION['cartId'][0] == $_POST['id']) {
        $_SESSION['cartId'][0] = null;
    } else {
        return $k !== $_POST['id'];
    }
},);
foreach ($_SESSION['cartId'] as $id) {
    $item = getCart($connect, $id); ?>
    <div class="carts_box">
        <a href="product.php?id=<?=$id?>"><img src="img/<?= $item[0]["photo1"] ?>"
                alt="<?= $item[0]["photo1"] ?>"></a>
                <p><?= $item[0]["title"] ?></p>
        <button id="<?=$id?>" class="remove-basket">Удалить</button>
    </div>
<? } ?>