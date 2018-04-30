        <?php 
            foreach ($objects as $obj) {
        ?>
                        <div class="object">
                            <div class="img" style="background-image: url(images/<?=$obj['main_img']?>);"></div>
                                <h4>
                                    <b>
                                        <?=$obj['space']?> кв.м.
                                    </b>
                                </h4>
                                <h5>
                                    <?=$obj['price']?> р./мес.
                                </h5>
                                <p>
                                    <?=$obj['short_description']?>
                                </p>
                                <a href="object.php?action=getobj&id=<?=$obj['id']?>">Подробнее</a>
                        </div>
        <?php
            }
        ?>




    
