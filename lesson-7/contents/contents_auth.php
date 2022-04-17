<main>
    <div class="conteiner">
        <form method="POST" 
            <?if($_GET['sign']==="in"){ ?> 
                action="/controlers/sign-in.php" 
            <?}elseif($_GET['sign']==="up"){?>
                action="/controlers/sign-up.php" 
            <?}?>
            class="auth_box">
            <p>Логин</p>
            <input type="text" name="login" >
            <p>Пароль</p>
            <input type="password" name="password1" >
            <? if($_GET['sign']==="up"){ ?> 
                <p>Повторите пароль</p>
                <input type="password" name="password2" >
                <input type="submit" value="Зарегестрироватся">
            <?}elseif($_GET['sign']==="in"){?>
                <input type="submit" name="submit" value="Войти">
            <?}?>
        </form>
    </div>
</main>