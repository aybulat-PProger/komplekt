<?php
	if(isset($_POST['submit'])){
		$space = $_POST['space'];
		$price = $_POST['price'];
		$short_description = $_POST['short_description'];
		$description = $_POST['description'];

		$object = empty_str();

		if(isset($_FILES['images']))
		{
			$path = "../images/".$object['id'];
			mkdir($path, 0777);
			$uploaddir = "../images/".$object['id']."/";
			for ($i=0; $i<count($_FILES['images']['name']); $i++)
			{
				if($i == 0) 
				{
					$main_img = $object['id']."/".$_FILES['images']['name'][$i];
					$img = $main_img;

					$uploadfile = $uploaddir.basename($_FILES['images']['name'][$i]);
					move_uploaded_file($_FILES['images']['tmp_name'][$i], $uploadfile);
				}
				else 
				{
					$img .= ",".$object['id']."/".$_FILES['images']['name'][$i];

					$uploadfile = $uploaddir.basename($_FILES['images']['name'][$i]);
					move_uploaded_file($_FILES['images']['tmp_name'][$i], $uploadfile);
				}
			}
		}
		
		edit($link, $object['id'], $space, $price, $short_description, $description, $main_img, $img);
		header ('Location: ../admin/index.php');  // перенаправление на нужную страницу
    	exit();
	}


?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style_admin.css">
    </head>
    <body>

        <div class="container">
            <div class="row object">
            	<form action="" method="post" enctype="multipart/form-data">
		                <div class="space">
		                    <b>Площадь:</b> <p><input type="text" name="space" value=""></p>
		                </div>
		                <div class="price">
		                    <b>Цена: </b> <p><input type="text" name="price" value=""></p>
		                </div>
		                <div class="short_description">
		                    <b>Короткое описание: </b> <p><textarea name="short_description" cols=80" rows="4"></textarea></p>
		                </div>
		                <div class="description">
		                    <b>Полное описание: </b> <p><textarea name="description" cols="80" rows="15"></textarea></p>
		                </div>
		                <div class="images">
		                    <b>Фотографии объекта: </b>
							
		                </div>
		                <input type="file" name="images[]"  multiple>
		                <input type="submit" name="submit">
            	</form>
            </div>
        </div>  



        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>

