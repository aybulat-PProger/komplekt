<?php

    function objects_all($link)
    {
        $query = "SELECT * FROM objects ORDER BY id DESC";
        $result = mysqli_query($link, $query);
        if (!$result) 
        {
            die(mysqli_error($link));
        }

        $n = mysqli_num_rows($result);
        $objects = array();
        
        for($i = 1; $i <= $n; $i++)
        {
            $row = mysqli_fetch_assoc($result);
            $objects[] = $row;
        }
        
        return $objects;
    }
    
    function object_get($link, $id)
    {
        $query = sprintf("SELECT * FROM objects WHERE id=%d",(int)$id);
        $result = mysqli_query($link, $query);
        
        if(!$result)
        {
            die(mysqli_error($link));
        }
        
        $object = mysqli_fetch_assoc($result);
        
        return $object;
    }

    function remove($link, $id)
    {
        $query = sprintf("DELETE FROM objects WHERE id=%d",(int)$id);
        $result = mysqli_query($link, $query);

        if(!$result)
        {
            die(mysqli_error($link));
        }
    }

    function edit($link, $id, $space, $price, $short_description, $description, $main_img, $img)
    {
        $query = sprintf("UPDATE objects SET space=$space, price=$price, short_description='$short_description', description='$description', main_img='$main_img', img='$img' WHERE id=%d",(int)$id);
        $result = mysqli_query($link, $query);

        if(!$result)
        {
            die(mysqli_error($link));
        }
    }
    
    function remove_img($link, $id, $img){
        $object = object_get($link, $id);
        $images = explode(",",$object['img']);
        $key = array_search($img, $images);
        unset($images[$key]);
        $count = count($images);
        $result = "";
        foreach ($images as $img) {
            if($img != ""){
                $result .= $img.",";
            }
        }
        $result = substr($result,0,-1);

        $main_img = explode(",", $result)[0];
        $query = sprintf("UPDATE objects SET main_img='$main_img', img='$result' WHERE id=%d",(int)$id);
        $res = mysqli_query($link, $query);

        if(!$res)
        {
            die(mysqli_error($link));
        }
    }

    function empty_str()
    {
        require_once("../database.php");
        require_once("../models/objects.php");

        $link = db_connect();
        $query = sprintf("INSERT INTO objects (`id`, `space`, `price`, `short_description`, `description`, `img`, `state`) VALUES (NULL, '', '', '', '', '', '1')");
        $result = mysqli_query($link, $query);

        if(!$result)
        {
            die(mysqli_error($link));
        }

        $object = object_get($link, mysqli_insert_id($link));
        return $object;
    }