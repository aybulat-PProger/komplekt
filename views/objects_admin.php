<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style_admin.css">
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="add">
                    <a href="../admin/index.php?action=add">Добавить</a>
                </div>
            </div>
            <?php foreach($objects as $obj): ?>
            <div class="row object">
                <div class="id">
                    <b>Объект номер:</b> <?=$obj['id']?>
                </div>
                <div class="space">
                    <b>Площадь:</b> <?=$obj['space']?>
                </div>
                <div class="price">
                    <b>Цена: </b> <?=$obj['price']?>
                </div>
                <div class="short_description">
                    <b>Короткое описание: </b> <p><?=$obj['short_description']?></p>
                </div>
                <div class="description">
                    <b>Полное описание: </b> <p><?=$obj['description']?></p>
                </div>
                <div class="images">
                    <b>Фотографии объекта: </b> 
                    <br><br>
                    <?php
                     if($obj['img'] != ""){
                        $images = explode(",",$obj['img']);
                        foreach ($images as $img) {
                            ?>
                            <img src="../images/<?=$img?>">
                            <?php
                        }
                    }
                    ?>
                </div>
                <br>
                <div class="editor">
                    <a href="../admin/index.php?action=edit&id=<?=$obj['id']?>">Изменить</a>
                    <a href="../admin/index.php?action=remove&id=<?=$obj['id']?>">Удалить</a>
                </div>
            </div>
            <?php endforeach; ?>  
        </div>  


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>

