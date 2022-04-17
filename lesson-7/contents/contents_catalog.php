<?php
    require_once "config.php";
    $dirImg = "../uploads";
    $sql = "SELECT * FROM goods ORDER BY count DESC";
    $table = mysqli_query($connect, $sql);
    function imgCount($str){
        $str;
        preg_match_all("/\d+/", $str, $matches);
        return $matches[0][0];
    }
    ?>
    <script>
        const reviewsClickOn = () => {
            document.querySelector(".reviews").classList.add("reviews-on")
        }
        const reviewsClickOff = () => {
            document.querySelector(".reviews").classList.remove("reviews-on")
        }
    </script>
    <main>
        <div class="conteiner">
           <div class="main_box">
               <div class="main_img">
               <? while($data = mysqli_fetch_assoc($table)) : 
                   if(imgCount($data['name'])%3===1){
                       ?>
                   <a href="img.php?id=<?= $data["id"]?>" name="modal"><img src="<?=$dirImg."/".$data["name"] ?>" alt=""></a>
               <?php } endwhile; ?>
               </div>
           </div>
            <div class="reviews_icon" onclick="reviewsClickOn()"><img src="../uploads/chat.png" alt=""></div>
            <form action="reviews.php" method="POST" class="reviews">
               <div class="exit" onclick="reviewsClickOff()">&#10006;</div>
                <input type="text" name="reviews-name" placeholder="Ваше имя">
                <textarea placeholder="Ваш отзыв" name="reviews-text" id="reviews-text" cols="30" rows="10"></textarea>
                <input type="submit" value="Отправить">
            </form>
        </div>
    </main>