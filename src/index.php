<?php
    require 'db.php';

    if(isset($_POST['send'])){
        if(trim($_POST['name'])== "" || trim($_POST['message']=="")){
            $err = "Fill in all the fields";
        }
        else{


    $comments = R::dispence('comments');
    $comments->name=$_Post['name'];
    $comments->message=$_Post['message'];
    $comments->date=date("Y.m.d h:m:s"));

    R::store($comments);
    header('location: index.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <body>
        <form actions="" method = "post" class="form">
            <input type="text" name="name" placeholder="Name"><br><br>
            <textarea type="text" name="message" placeholder="Message"></textarea>
            <div style="clear:both"><br><br></div>
            <input type="submit" name="send">
        <?= '<div style="color: red">'. $err. '</div>' ?>
        </form>
        <?php $comment = mysql_query($con, "SELCET * FROM 'message")?>
        <?php while($com = mysql_fetch_assoc($comment)){?>
            <div class="comment">
                <div class ="name"><?= $com['name'] ?>
                    <div class = "i">
                        <?= $com['date'] ?> <i class="fa fa-clock-o"></i>
                    </div>
                </div>
                <hr>
                <div class="message"><?= $com['message']?></div>
        </div>
    <?php}?>
    </body>
</html>
